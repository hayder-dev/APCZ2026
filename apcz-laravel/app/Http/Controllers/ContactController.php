<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1) Validatie (honeypot checken we apart)
        $data = Validator::make($request->all(), [
            'naam'          => ['required', 'string', 'max:120'],
            'email'         => ['required', 'email', 'max:180'],
            'telefoon'      => ['nullable', 'string', 'max:40'],
            'kenteken'      => ['nullable', 'string', 'max:20'],
            'pakket'        => ['nullable', 'string', 'max:60'],
            'extras'        => ['nullable', 'string', 'max:250'], // bv: "koplampen,motorruimte"
            'bericht'       => ['required', 'string', 'max:3000'],

            // RDW velden (optioneel)
            'merk'          => ['nullable', 'string', 'max:80'],
            'model'         => ['nullable', 'string', 'max:120'],
            'voertuigsoort' => ['nullable', 'string', 'max:80'],
            'rdw_label'     => ['nullable', 'string', 'max:220'],

            // honeypot veld bestaat, maar is optioneel
            'honeypot'      => ['nullable', 'string', 'max:200'],
        ])->validate();

        // 2) Anti-spam: als honeypot gevuld is -> stilletjes ok terug
        if (!empty($request->input('honeypot'))) {
            return back()->with('success', 'Bedankt! Je aanvraag is ontvangen.');
        }

        // 3) Normaliseren
        // Kenteken: alleen A-Z0-9 + uppercase
        if (!empty($data['kenteken'])) {
            $data['kenteken'] = strtoupper(preg_replace('/[^A-Z0-9]/', '', (string) $data['kenteken']));
        }

        // Extras: spaties eruit + lowercase keys in mail formatting
        if (!empty($data['extras'])) {
            // "koplampen, motorruimte" -> "koplampen,motorruimte"
            $data['extras'] = implode(',', array_filter(array_map('trim', explode(',', (string) $data['extras']))));
        }

        // 4) Mail opbouwen
        $to = 'boekingen@apczaanstad.nl';

        $subject = 'Nieuwe aanvraag via APCZ website'
            . (!empty($data['pakket']) ? ' — ' . $data['pakket'] : '')
            . (!empty($data['kenteken']) ? ' — ' . $data['kenteken'] : '');

        Mail::raw(
            $this->buildPlainText($data),
            function ($message) use ($to, $subject, $data) {
                $message->to($to)
                    ->subject($subject)
                    ->replyTo($data['email'], $data['naam']);
            }
        );

        // 5) Succes (formulier leeg)
        return back()->with('success', 'Top! We hebben je bericht ontvangen. We reageren zo snel mogelijk.');
    }

    private function buildPlainText(array $d): string
    {
        $extras = trim((string)($d['extras'] ?? ''));
        $extrasLine = $extras !== '' ? $this->formatExtras($extras) : '-';

        $kenteken = !empty($d['kenteken']) ? (string) $d['kenteken'] : '-';
        $rdwLabel = !empty($d['rdw_label']) ? (string) $d['rdw_label'] : '-';
        $merk     = !empty($d['merk']) ? (string) $d['merk'] : '-';
        $model    = !empty($d['model']) ? (string) $d['model'] : '-';
        $soort    = !empty($d['voertuigsoort']) ? (string) $d['voertuigsoort'] : '-';
        $telefoon = !empty($d['telefoon']) ? (string) $d['telefoon'] : '-';
        $pakket   = !empty($d['pakket']) ? (string) $d['pakket'] : '-';

        return
"Nieuwe aanvraag via APCZ website

Naam: {$d['naam']}
E-mail: {$d['email']}
Telefoon: {$telefoon}
Kenteken: {$kenteken}

RDW:
- Label: {$rdwLabel}
- Merk: {$merk}
- Model: {$model}
- Voertuigsoort: {$soort}

Pakket: {$pakket}
Extra's: {$extrasLine}

Bericht:
{$d['bericht']}

— einde —";
    }

    private function formatExtras(string $extras): string
    {
        // Verwacht bv: "koplampen,motorruimte" (maar met trim() werkt "koplampen, motorruimte" ook)
        $items = array_filter(array_map('trim', explode(',', $extras)));

        $map = [
            'koplampen'       => 'Koplampen polijsten',
            'geurbehandeling' => 'Geurbehandeling',
            'hondenharen'     => 'Hondenharen verwijderen',
            'hemel'           => 'Hemel reinigen',
            'motorruimte'     => 'Motorruimte reinigen (op eigen risico)',
            'coating'         => 'Speciale coatings (prijs op aanvraag)',
        ];

        $pretty = [];
        foreach ($items as $key) {
            $k = strtolower($key);
            $pretty[] = $map[$k] ?? $key;
        }

        return implode(', ', $pretty);
    }
}