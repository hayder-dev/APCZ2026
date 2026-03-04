@extends('layouts.app')
@section('title','Zakelijk — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">

    {{-- Intro --}}
    <div class="center stack">
      <h1 class="h1">Zakelijk</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Houd je voertuigen representatief richting klanten en medewerkers. Auto poets centrale Zaanstad werkt met <b>vaste afspraken</b>,
        <b>snelle doorlooptijd</b> en <b>periodiek onderhoud</b>. Ideaal voor bedrijfsauto’s, lease, servicebussen en directie-voertuigen.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
      </div>
    </div>

    {{-- Hero foto (optioneel) --}}
    <div class="card" style="margin-top:18px;">
      <div class="card__media">
        <img src="{{ asset('assets/img/info-zakelijk.jpg') }}" alt="Zakelijk / wagenpark" style="width:100%; height:auto; display:block;">
      </div>
    </div>

    <div class="grid-3" style="margin-top:18px; align-items:start;">

      {{-- Zakelijk klant worden --}}
      <div class="card" style="grid-column: span 2;">
        <div class="card__body">
          <div class="card__title">Zakelijk klant worden</div>
          <p class="card__text" style="opacity:.88;">
            Wil je dat jouw wagenpark er altijd netjes bij staat zonder losse afspraken en ad-hoc gedoe?
            Wij kunnen werken met vaste dagen/slots, periodieke onderhoudsmomenten en een consistente checklist per voertuig.
          </p>

          <div class="card__text" style="margin-top:12px;"><b>Hoe werkt het?</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>1) Inventarisatie</b> — aantal voertuigen, type gebruik (lease, bussen, directie), gewenste frequentie.</li>
            <li><b>2) Planning</b> — vaste dag(en) of flexibele slots per week/maand.</li>
            <li><b>3) Uitvoering</b> — vaste checklist + optionele extra’s per voertuig.</li>
            <li><b>4) Facturatie</b> — zakelijk per maand (of per bezoek), helder en overzichtelijk.</li>
          </ul>

          <div class="card__text" style="margin-top:12px;"><b>Wat we van jou nodig hebben</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Bedrijfsnaam + contactpersoon</li>
            <li>Kentekens (of schatting aantallen)</li>
            <li>Doel: representatief / intensief gebruik / verkoopvoorbereiding</li>
            <li>Locatie: brengen/halen op afspraak (en gewenste tijdsloten)</li>
          </ul>

          <div class="card__text" style="margin-top:12px;"><b>Doorlooptijd</b></div>
          <p class="card__text" style="opacity:.88;">
            In veel gevallen: voertuig om <b>08:00</b> brengen = <b>dezelfde dag</b> ophalen (open tot <b>17:00</b>).
            Bij meerdere voertuigen maken we een planning die past bij jouw bedrijfsproces.
          </p>

          <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
            <a class="btn btn--primary" href="{{ route('contact') }}?route=zakelijk">Zakelijke aanvraag</a>
            <a class="btn btn--dark" href="{{ route('info.zakelijk') }}">Meer info (wagenpark)</a>
          </div>
        </div>
      </div>

      {{-- Voor wie / voorbeelden --}}
      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor wie?</div>
          <p class="card__text" style="opacity:.88;">
            Wij werken o.a. voor:
          </p>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Bedrijfsauto’s & lease</li>
            <li>Servicebussen / werkauto’s</li>
            <li>Poolauto’s</li>
            <li>Directie-/representatieve voertuigen</li>
            <li>Dealers/handel (op voorraad)</li>
          </ul>

          <p class="card__text" style="opacity:.85; margin-top:12px;">
            Wil je vaste afspraken? Dan plannen we structureel in, zodat je nooit “achterstallig” raakt met je wagenpark.
          </p>
        </div>
      </div>
    </div>

    {{-- Staffelprijzen --}}
    <div class="card" style="margin-top:18px;">
      <div class="card__body">
        <div class="card__title">Staffelprijzen (indicatie)</div>
        <p class="card__text" style="opacity:.88; max-width:980px;">
          Bij periodieke samenwerking kunnen we staffelprijzen toepassen op basis van het aantal voertuigen per maand.
          Exacte tarieven hangen af van voertuigtype, staat, gewenste kwaliteit en doorlooptijd.
        </p>

        <div class="grid-3" style="margin-top:14px; align-items:start;">
          <div class="card">
            <div class="card__body">
              <div class="card__title">1–4 voertuigen / maand</div>
              <p class="card__text" style="opacity:.88;">
                Standaard zakelijk tarief.<br>
                Ideaal voor kleine bedrijven of directie-auto’s.
              </p>
            </div>
          </div>

          <div class="card">
            <div class="card__body">
              <div class="card__title">5–12 voertuigen / maand</div>
              <p class="card__text" style="opacity:.88;">
                <b>Staffelkorting mogelijk</b>.<br>
                Vaste slots + voorspelbare planning.
              </p>
            </div>
          </div>

          <div class="card">
            <div class="card__body">
              <div class="card__title">12+ voertuigen / maand</div>
              <p class="card__text" style="opacity:.88;">
                <b>Maatwerk</b> (wagenparkplan).<br>
                Structurele samenwerking + prioriteit.
              </p>
            </div>
          </div>
        </div>

        <p class="card__text" style="opacity:.8; margin-top:12px;">
          Tip: stuur ons het aantal voertuigen + gewenste frequentie (bijv. 2-wekelijks/maandelijks), dan maken we een voorstel.
        </p>

        <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
          <a class="btn btn--primary" href="{{ route('contact') }}?route=zakelijk">Staffel voorstel aanvragen</a>
          <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
        </div>
      </div>
    </div>

    {{-- Voorwaarden / toeslagen --}}
    <div class="card" style="margin-top:18px;">
      <div class="card__body">
        <div class="card__title">Toeslagen & voorwaarden</div>
        <ul class="card__text" style="margin-top:8px; padding-left:18px;">
          <li><b>Alle prijzen zijn exclusief btw.</b></li>
          <li>Wij werken met toeslagen op basis van staat/omvang van de klus (altijd vooraf afgestemd).</li>
          <li><b>Donkere kleuren</b> (extra werk/finish): toeslag mogelijk.</li>
          <li><b>Motorruimte reinigen</b> gebeurt <b>op eigen risico</b> i.v.m. gevoelige elektronica/onderdelen.</li>
          <li><b>(Gerepareerde) schade / gespoten delen</b> graag vooraf melden. Zonder melding is dit niet altijd herkenbaar en kan dit invloed hebben op het resultaat.</li>
        </ul>
      </div>
    </div>

  </div>
</section>
@endsection