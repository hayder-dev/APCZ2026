<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = Validator::make($request->all(), [
            'naam'       => ['required','string','max:120'],
            'email'      => ['required','email','max:180'],
            'telefoon'   => ['nullable','string','max:40'],
            'kenteken'   => ['nullable','string','max:20'],
            'pakket'     => ['nullable','string','max:60'],
            'bericht'    => ['required','string','max:3000'],
            'honeypot'   => ['nullable','string','max:0'], // anti-spam (moet leeg blijven)
        ])->validate();

        // Als honeypot gevuld is: doen alsof het gelukt is (spam weggooien)
        if (!empty($request->input('honeypot'))) {
            return back()->with('success', 'Bedankt! Je aanvraag is ontvangen.')->withInput();
        }

        $to = 'boekingen@apczaanstad.nl';

        $subject = 'Nieuwe aanvraag via APCZ website'
            . (!empty($data['pakket']) ? ' — ' . $data['pakket'] : '')
            . (!empty($data['kenteken']) ? ' — ' . strtoupper($data['kenteken']) : '');

        Mail::raw(
            $this->buildPlainText($data),
            function ($message) use ($to, $subject, $data) {
                $message->to($to)
                    ->subject($subject)
                    ->replyTo($data['email'], $data['naam']);
            }
        );

        return back()->with('success', 'Top! We hebben je bericht ontvangen. We reageren zo snel mogelijk.')->withInput();
    }

    private function buildPlainText(array $d): string
    {
        return
"Nieuwe aanvraag via APCZ website

Naam: {$d['naam']}
E-mail: {$d['email']}
Telefoon: " . ($d['telefoon'] ?? '-') . "
Kenteken: " . ($d['kenteken'] ?? '-') . "
Pakket: " . ($d['pakket'] ?? '-') . "

Bericht:
{$d['bericht']}

— einde —";
    }
}