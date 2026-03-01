@extends('layouts.app')

@section('title','Contact — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="center stack">
      <h1 class="h1">Contact</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Vraag een offerte aan of plan je afspraak. Meestal kun je de auto (bij inleveren om 08:00) dezelfde dag weer ophalen — we zijn open tot 17:00.
      </p>
    </div>

    @if(session('success'))
      <div class="card" style="margin-top:18px;">
        <div class="card__body">
          <b>{{ session('success') }}</b>
        </div>
      </div>
    @endif

    @if($errors->any())
      <div class="card" style="margin-top:18px;">
        <div class="card__body">
          <b>Check even je invoer:</b>
          <ul style="margin:10px 0 0; padding-left:18px;">
            @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    @endif

    <div class="grid-3" style="margin-top:18px; align-items:start;">
      <div class="card" style="grid-column: span 2;">
        <div class="card__body">
          <div class="card__title">Offerte / afspraak aanvragen</div>
          <p class="card__text" style="opacity:.85;">
            Vul het formulier in. Als je via een pakket-knop komt, nemen we dat automatisch mee.
          </p>

          <form method="POST" action="{{ route('contact.send') }}" style="margin-top:12px;">
            @csrf

            <input type="text" name="honeypot" value="" style="display:none" tabindex="-1" autocomplete="off">

            <div style="display:grid; gap:12px; grid-template-columns:1fr 1fr;">
              <div>
                <label class="card__text"><b>Naam*</b></label>
                <input name="naam" value="{{ old('naam') }}" required style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12);">
              </div>
              <div>
                <label class="card__text"><b>E-mail*</b></label>
                <input name="email" type="email" value="{{ old('email') }}" required style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12);">
              </div>

              <div>
                <label class="card__text"><b>Telefoon</b></label>
                <input name="telefoon" value="{{ old('telefoon') }}" placeholder="06..." style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12);">
              </div>
              <div>
                <label class="card__text"><b>Kenteken</b></label>
                <input name="kenteken" value="{{ old('kenteken', request('kenteken')) }}" placeholder="12ABCD" style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12); text-transform:uppercase;">
              </div>

              <div style="grid-column: span 2;">
                <label class="card__text"><b>Pakket (optioneel)</b></label>
                <input name="pakket" value="{{ old('pakket', request('pakket')) }}" placeholder="bijv. Brons, Zilver+, Goud..." style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12);">
              </div>

              <div style="grid-column: span 2;">
                <label class="card__text"><b>Bericht*</b></label>
                <textarea name="bericht" required rows="6" style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12);">{{ old('bericht') }}</textarea>
              </div>
            </div>

            <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:14px; justify-content:center;">
              <button class="btn btn--primary" type="submit">Verstuur aanvraag</button>
              <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
            </div>

            <p class="card__text" style="opacity:.75; margin-top:14px;">
              <b>Let op:</b> Motorruimte reinigen gebeurt <b>op eigen risico</b>. Heb je (gerepareerde) schade of gespoten delen? Geef dit vooraf aan.
              Zonder melding kunnen we het niet altijd herkennen en kan dat invloed hebben op het resultaat.
            </p>
          </form>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Direct contact</div>
          <p class="card__text">
            <b>Telefoon:</b> <a href="tel:+31649777080">06 - 49777080</a><br>
            <b>E-mail:</b> <a href="mailto:boekingen@apczaanstad.nl">boekingen@apczaanstad.nl</a>
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Openingstijden</b></div>
          <p class="card__text" style="opacity:.85;">
            Ma t/m vr: 08:00 – 17:00<br>
            Zaterdag: op afspraak
          </p>

       <div class="card__text" style="margin-top:10px;"><b>Locatie</b></div>

<p class="card__text" style="opacity:.85; margin-top:6px;">
  Zijtocht 1<br>
  1507 CD Zaandam
</p>

<div style="margin-top:12px; display:flex; gap:10px; flex-wrap:wrap; justify-content:center;">
  <a class="btn btn--primary"
     href="https://maps.app.goo.gl/bHN1YVBX2cVYKtmQ9"
     target="_blank" rel="noopener">
    Open in Google Maps
  </a>

</div>

<div style="margin-top:14px; border-radius:18px; overflow:hidden; border:1px solid rgba(0,0,0,.12);">
  <iframe
    title="APCZ locatie - Zijtocht 1, Zaandam"
    src="https://www.google.com/maps?q=Zijtocht%201%2C%201507%20CD%20Zaandam&output=embed"
    width="100%"
    height="320"
    style="border:0;"
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
    allowfullscreen>
  </iframe>
</div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection