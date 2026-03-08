@extends('layouts.app')

@section('title', 'Info over auto poetsen in Zaandam | APCZ')
@section('meta_description', 'Meer info over auto laten poetsen in Zaandam, dealerservice, showroomklaar maken en wagenpark reiniging. Auto Poets Centrale Zaanstad legt uit welke aanpak past bij particulieren, dealers en zakelijke klanten uit Zaandam, Zaanstad, Wormerveer, Assendelft, Koog aan de Zaan, Krommenie, Purmerend en Amsterdam.')
@section('meta_keywords', 'auto laten poetsen zaandam, autopoetsbedrijf zaanstad, dealerservice zaandam, showroomklaar maken, wagenpark reinigen, auto detailing zaandam, zakelijke autopoetsservice')
@section('canonical', url('/info'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Info • Werkwijze • Uitleg</div>
      <h1 class="page-hero__title">Info over auto poetsen, detailing en werkwijze</h1>
      <p class="page-hero__lead">
        Hieronder vind je extra uitleg over onze werkwijze en wat je precies kunt verwachten.
        Kies het onderwerp dat het beste past bij jouw situatie — van particuliere verzorging
        tot showroompresentatie en zakelijke samenwerking in Zaandam, Zaanstad en omgeving.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--dark" href="#onderwerpen">Bekijk onderwerpen</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white" id="onderwerpen">
  <div class="container">

    <div class="card reveal" style="max-width:1100px; margin:0 auto 22px;">
      <div class="card__body" style="padding:30px 28px;">
        <div class="center stack">
          <p class="p section-intro">
            Niet iedere auto en niet iedere klant heeft dezelfde behoefte. Daarom hebben we onze uitleg
            opgesplitst in duidelijke onderwerpen. Zo zie je sneller welke aanpak past bij jouw auto,
            jouw gebruik en het resultaat dat je wilt bereiken.
          </p>
        </div>
      </div>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px; align-items:start;">

      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/info-auto.jpg') }}" alt="Auto laten poetsen in Zaandam">
        </div>
        <div class="card__body">
          <div class="card__title">Auto laten poetsen</div>
          <p class="card__text">
            Voor dagelijks gebruik én liefhebbers. Veilige reiniging, nette details en een verzorgde afwerking —
            ideaal voor onderhoud, frisheid en verkoopvoorbereiding.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('info.auto') }}">Meer info</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/info-dealers.jpg') }}" alt="Dealers en showroom in Zaandam">
        </div>
        <div class="card__body">
          <div class="card__title">Dealers & showroom</div>
          <p class="card__text">
            Verkoopklare presentatie voor voorraad en showroom. Consistente kwaliteit, duidelijke planning
            en optioneel professionele foto’s voor een advertentie-klaar totaalbeeld.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('info.dealers') }}">Meer info</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/info-zakelijk.jpg') }}" alt="Wagenpark en zakelijke autopoetsservice">
        </div>
        <div class="card__body">
          <div class="card__title">Wagenpark & zakelijk</div>
          <p class="card__text">
            Houd je voertuigen representatief met periodiek onderhoud en vaste afspraken.
            Geschikt voor bedrijfsauto’s, lease, servicebussen en directievoertuigen.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('info.zakelijk') }}">Meer info</a>
          </div>
        </div>
      </div>

    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Autopoetsbedrijf voor Zaandam en omgeving</h2>
          <p class="p section-intro">
            Auto Poets Centrale Zaanstad helpt klanten uit <b>Zaandam</b>, <b>Zaanstad</b>,
            <b>Wormerveer</b>, <b>Assendelft</b>, <b>Koog aan de Zaan</b>, <b>Krommenie</b>,
            <b>Westzaan</b>, <b>Oostzaan</b>, <b>Purmerend</b> en <b>Amsterdam</b> met auto laten poetsen,
            showroomklaar maken, dealerservice en zakelijke autoverzorging.
          </p>
          <p class="p section-intro">
            Zo kun je snel doorklikken naar de uitleg die het beste past bij jouw situatie,
            of je nu particulier rijdt, voertuigen verkoopt of een zakelijk wagenpark wilt onderhouden.
          </p>
        </div>
      </div>
    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Nog niet zeker wat het beste past?</h2>
          <p class="p section-intro">
            Geen probleem. Neem gerust contact met ons op en vertel kort wat voor auto je hebt,
            wat je wilt bereiken en hoe de huidige staat is. Dan denken wij mee over de juiste aanpak.
          </p>
          <div class="action-row action-row--center" style="margin-top:8px;">
            <a class="btn btn--primary" href="{{ route('contact') }}">Neem contact op</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection