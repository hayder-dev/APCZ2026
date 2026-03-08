@extends('layouts.app')

@section('title', 'Auto laten poetsen in Zaandam | Autopoetsbedrijf APCZ')
@section('meta_description', 'Auto laten poetsen in Zaandam? Auto Poets Centrale Zaanstad is specialist in auto detailing, interieurreiniging, showroomklaar maken en professionele autoverzorging in Zaandam en omgeving.')
@section('meta_keywords', 'auto laten poetsen zaandam, autopoetsbedrijf zaandam, auto detailing zaandam, auto reinigen zaandam, showroomklaar maken zaandam')
@section('canonical', url('/auto-laten-poetsen-zaandam'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Zaandam • Auto poetsen • Detailing</div>
      <h1 class="page-hero__title">Auto laten poetsen in Zaandam</h1>
      <p class="page-hero__lead">
        Wil je jouw auto professioneel laten poetsen in Zaandam? Auto Poets Centrale Zaanstad helpt
        particulieren, zakelijke rijders en dealers met auto detailing, interieurreiniging,
        exterieurverzorging en showroomklaar maken.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
        <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="zaandam-intro">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Professioneel autopoetsbedrijf in Zaandam</h2>
      <p class="p section-intro">
        Een auto laten poetsen is meer dan alleen wassen. Het gaat om uitstraling, onderhoud,
        frisheid en een verzorgde indruk. Bij Auto Poets Centrale Zaanstad werken wij met aandacht,
        veilige technieken en een nette afwerking die past bij de waarde van het voertuig.
      </p>
      <p class="p">
        Wij werken voor klanten uit <strong>Zaandam</strong>, <strong>Zaanstad</strong>,
        <strong>Wormerveer</strong>, <strong>Assendelft</strong>, <strong>Koog aan de Zaan</strong>,
        <strong>Krommenie</strong>, <strong>Purmerend</strong> en <strong>Amsterdam</strong>.
      </p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">
    <div class="grid-3 reveal">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Auto poetsen voor dagelijks gebruik</div>
          <p class="card__text">
            Voor auto’s die netjes, fris en representatief moeten blijven. Ideaal voor periodiek onderhoud
            en een verzorgde uitstraling.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Auto detailing in Zaandam</div>
          <p class="card__text">
            Voor klanten die meer willen dan standaard reinigen. Met aandacht voor lak, interieur,
            details, afwerking en totaalbeleving.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Showroomklaar maken</div>
          <p class="card__text">
            Ideaal voor verkoop, inruil, aflevering of presentatie. Een nette auto geeft direct een sterkere eerste indruk.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section section--yellow">
  <div class="container">
    <div class="split reveal">
      <div class="stack">
        <span class="badge">Waarom APCZ?</span>
        <h2 class="h2">Rustig gewerkt. Strak opgeleverd.</h2>
        <p class="p">
          Wij geloven niet in haastwerk. Een nette auto vraagt om aandacht voor detail:
          glas, instappen, kieren, bekleding, lakbeeld en algemene afwerking.
        </p>
        <p class="p">
          Daarom kiezen klanten uit Zaandam voor een aanpak die gericht is op kwaliteit,
          duidelijke afspraken en een professioneel eindresultaat.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Professionele middelen</div>
          <div class="usp usp--light"><b>✓</b>Veilige aanpak per voertuig</div>
          <div class="usp usp--light"><b>✓</b>Voor particulier, dealer en zakelijk</div>
        </div>
      </div>

      <div>
        <img
          src="{{ asset('assets/img/info-auto.jpg') }}"
          alt="Auto laten poetsen in Zaandam door Auto Poets Centrale Zaanstad"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block" id="wat-doen-wij">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Wat wij doen</h2>
      <p class="p section-intro">
        Afhankelijk van de staat van de auto en jouw doel kunnen wij helpen met interieurreiniging,
        exterieurreiniging, polijsten, lakverbetering, showroomafwerking en verkooppresentatie.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Interieur reinigen</div>
          <p class="card__text">
            Stofzuigen, detailwerk, ramen, bekleding en verzorgde afwerking van de cabine.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Exterieur verzorgen</div>
          <p class="card__text">
            Handwas, velgenreiniging, finishing en een frisse, nette uitstraling van buiten.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Verkoopklaar maken</div>
          <p class="card__text">
            Ideaal voor klanten die hun auto beter willen presenteren voor verkoop of inruil.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">
    <div class="card reveal">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Afspraak maken in Zaandam?</h2>
          <p class="p section-intro">
            Wil je jouw auto laten poetsen in Zaandam of eerst overleggen wat het beste past?
            Neem contact met ons op of bekijk direct onze pakketten.
          </p>

          <div class="action-row action-row--center" style="margin-top:8px;">
            <a class="btn btn--primary" href="{{ route('contact') }}">Neem contact op</a>
            <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection