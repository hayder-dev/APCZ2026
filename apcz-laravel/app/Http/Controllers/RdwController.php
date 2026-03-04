<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RdwController extends Controller
{
    public function lookup(Request $request)
    {
        $kentekenRaw = (string) $request->query('kenteken', '');
        $kenteken = strtoupper(preg_replace('/[^A-Z0-9]/', '', $kentekenRaw));

        if (strlen($kenteken) < 5) {
            return response()->json([
                'ok' => false,
                'message' => 'Ongeldig kenteken.',
            ], 422);
        }

        // RDW Open Data (Socrata) - Gekentekende voertuigen: m9d7-ebf2
        $url = 'https://opendata.rdw.nl/resource/m9d7-ebf2.json';

        $res = Http::timeout(6)->get($url, [
            'kenteken' => $kenteken,
            '$limit'   => 1,
        ]);

        if (!$res->ok()) {
            return response()->json([
                'ok' => false,
                'message' => 'RDW is momenteel niet bereikbaar.',
            ], 502);
        }

        $rows = $res->json();
        if (empty($rows)) {
            return response()->json([
                'ok' => false,
                'message' => 'Geen voertuig gevonden voor dit kenteken.',
            ], 404);
        }

        $r = $rows[0];

        $merk = $r['merk'] ?? '';
        $model = $r['handelsbenaming'] ?? '';
        $voertuigsoort = $r['voertuigsoort'] ?? '';

        return response()->json([
            'ok' => true,
            'kenteken' => $kenteken,
            'merk' => $merk,
            'model' => $model,
            'voertuigsoort' => $voertuigsoort,
            'label' => trim($merk . ' ' . $model),
        ]);
    }
}