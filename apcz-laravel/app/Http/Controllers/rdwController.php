<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class RdwController extends Controller
{
    public function lookup(Request $request)
    {
        $plateRaw = (string) $request->query('kenteken', '');
        $kenteken = strtoupper(preg_replace('/[^A-Z0-9]/', '', $plateRaw)); // haalt streepjes/spaties weg

        if (strlen($kenteken) < 6) {
            return response()->json(['ok' => false, 'message' => 'Ongeldig kenteken.'], 422);
        }

        // Cache 7 dagen (scheelt calls en is snel)
        $cacheKey = "rdw_lookup_" . $kenteken;

        $data = Cache::remember($cacheKey, now()->addDays(7), function () use ($kenteken) {
            // RDW Open Data - Gekentekende voertuigen (m9d7-ebf2)
            $url = 'https://opendata.rdw.nl/resource/m9d7-ebf2.json';

            $res = Http::timeout(8)->get($url, [
                'kenteken' => $kenteken,
                '$limit' => 1,
            ]);

            if (!$res->ok()) {
                return ['found' => false, 'error' => 'RDW niet bereikbaar'];
            }

            $rows = $res->json();
            if (!is_array($rows) || count($rows) === 0) {
                return ['found' => false];
            }

            $row = $rows[0];

            // Velden kunnen per dataset/record verschillen; we pakken de bekende
            return [
                'found' => true,
                'kenteken' => $kenteken,
                'merk' => $row['merk'] ?? null,
                'handelsbenaming' => $row['handelsbenaming'] ?? null,
                'voertuigsoort' => $row['voertuigsoort'] ?? null,
                'inrichting' => $row['inrichting'] ?? null,
                'eerste_toelating' => $row['datum_eerste_toelating'] ?? null, // meestal YYYYMMDD
                'eerste_tenaamstelling' => $row['datum_eerste_tenaamstelling_in_nederland'] ?? null,
                'kleur' => $row['eerste_kleur'] ?? null,
                'massa_ledig' => $row['massa_ledig_voertuig'] ?? null,
            ];
        });

        if (($data['found'] ?? false) !== true) {
            return response()->json([
                'ok' => false,
                'message' => 'Kenteken niet gevonden. Controleer de invoer.',
            ], 404);
        }

        return response()->json(['ok' => true, 'data' => $data]);
    }
}