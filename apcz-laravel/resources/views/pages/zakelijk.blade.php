@extends('layouts.app')

@section('title', 'Zakelijke autopoetsservice in Zaandam | Wagenpark reinigen APCZ')
@section('meta_description', 'Zakelijke autopoetsservice in Zaandam en Zaanstad voor bedrijfsauto’s, leaseauto’s, servicebussen en directievoertuigen. Auto Poets Centrale Zaanstad helpt bedrijven uit Zaandam, Wormerveer, Assendelft, Koog aan de Zaan, Krommenie, Purmerend en Amsterdam met wagenpark reiniging, periodiek onderhoud en representatieve oplevering.')
@section('meta_keywords', 'zakelijke autopoetsservice zaandam, wagenpark reinigen zaanstad, bedrijfsauto poetsen zaandam, leaseauto reinigen, servicebus poetsen, wagenpark onderhoud purmerend, zakelijke autodetailing amsterdam')
@section('canonical', url('/zakelijk'))

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">

    {{-- Intro --}}
    <div class="center stack">
      <h1 class="h1">Zakelijke autopoetsservice & wagenpark reiniging</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Houd je voertuigen representatief richting klanten en medewerkers. Auto Poets Centrale Zaanstad werkt met
        <b>vaste afspraken</b>, <b>snelle doorlooptijd</b> en <b>periodiek onderhoud</b>. Ideaal voor
        bedrijfsauto’s, leaseauto’s, servicebussen en directievoertuigen in Zaandam, Zaanstad en omgeving.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
      </div>
    </div>

    {{-- Hero foto --}}
    <div class="card" style="margin-top:18px;">
      <div class="card__media">
        <img src="{{ asset('assets/img/info-zakelijk.jpg') }}" alt="Zakelijke autopoetsservice en wagenpark reiniging in Zaandam" style="width:100%; height:auto; display:block;">
      </div>
    </div>

    <div class="grid-3" style="margin-top:18px; align-items:start;">

      {{-- Zakelijk klant worden --}}
      <div class="card" style="grid-column: span 2;">
        <div class="card__body">
          <div class="card__title">Zakelijk klant worden</div>
          <p class="card__text" style="opacity:.88;">
            Wil je dat jouw wagenpark er altijd netjes bij staat zonder losse afspraken en ad-hoc gedoe?
            Wij kunnen werken met vaste dagen of slots, periodieke onderhoudsmomenten en een consistente checklist per voertuig.
          </p>

          <div class="card__text" style="margin-top:12px;"><b>Hoe werkt het?</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>1) Inventarisatie</b> — aantal voertuigen, type gebruik (lease, bussen, directie), gewenste frequentie.</li>
            <li><b>2) Planning</b> — vaste dag(en) of flexibele slots per week of maand.</li>
            <li><b>3) Uitvoering</b> — vaste checklist + optionele extra’s per voertuig.</li>
            <li><b>4) Facturatie</b> — zakelijk per maand of per bezoek, helder en overzichtelijk.</li>
          </ul>

          <div class="card__text" style="margin-top:12px;"><b>Wat we van jou nodig hebben</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Bedrijfsnaam + contactpersoon</li>
            <li>Kentekens of schatting aantallen</li>
            <li>Doel: representatief, intensief gebruik of verkoopvoorbereiding</li>
            <li>Locatie: brengen/halen op afspraak en gewenste tijdsloten</li>
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
            Wil je vaste afspraken? Dan plannen we structureel in, zodat je nooit achterstallig raakt met je wagenpark.
          </p>
        </div>
      </div>
    </div>

    {{-- Lokale SEO sectie --}}
    <div class="card" style="margin-top:18px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Wagenpark reinigen in Zaandam en omgeving</h2>
          <p class="p section-intro" style="max-width:980px; margin:0 auto;">
            Zoek je een betrouwbare partner voor <b>wagenpark reinigen in Zaandam</b> of een vaste
            <b>zakelijke autopoetsservice in Zaanstad</b>? Wij helpen bedrijven met representatieve voertuigen,
            periodieke reiniging en duidelijke planning.
          </p>
        </div>

        <div class="stack" style="max-width:980px; margin:18px auto 0;">
          <p class="card__text" style="opacity:.88;">
            Auto Poets Centrale Zaanstad werkt voor bedrijven uit <b>Zaandam</b>, <b>Zaanstad</b>, <b>Wormerveer</b>,
            <b>Assendelft</b>, <b>Koog aan de Zaan</b>, <b>Krommenie</b>, <b>Westzaan</b>, <b>Oostzaan</b>,
            <b>Purmerend</b> en <b>Amsterdam</b>. Onze aanpak is geschikt voor ondernemingen die hun
            bedrijfsauto’s, leaseauto’s, servicewagens of directievoertuigen netjes en verzorgd willen houden.
          </p>

          <p class="card__text" style="opacity:.88;">
            Of het nu gaat om een klein zakelijk wagenpark of een grotere maandelijkse planning:
            wij denken mee over frequentie, uitvoering en oplevering. Zo blijven je voertuigen
            representatief voor klanten, medewerkers en zakelijke relaties.
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