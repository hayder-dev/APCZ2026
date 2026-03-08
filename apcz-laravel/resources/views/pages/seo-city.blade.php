@extends('layouts.app')

@section('title', 'Auto laten poetsen in ' . $city . ' | Auto Poets Centrale Zaanstad')
@section('meta_description', 'Auto laten poetsen in ' . $city . '? Auto Poets Centrale Zaanstad helpt particulieren, dealers en zakelijke klanten met auto detailing, interieurreiniging, showroomklaar maken en professionele autoverzorging in ' . $city . ' en omgeving.')
@section('meta_keywords', 'auto laten poetsen {{ strtolower($city) }}, autopoetsbedrijf {{ strtolower($city) }}, auto detailing {{ strtolower($city) }}, showroomklaar maken {{ strtolower($city) }}, auto reinigen {{ strtolower($city) }}')
@section('canonical', url()->current())

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">{{ $city }} • Auto poetsen • Detailing</div>
      <h1 class="page-hero__title">Auto laten poetsen in {{ $city }}</h1>
      <p class="page-hero__lead">
        Wil je jouw auto professioneel laten poetsen in {{ $city }}? Auto Poets Centrale Zaanstad is specialist in
        auto detailing, interieurreiniging, exterieurverzorging en showroomklaar maken voor klanten uit {{ $city }} en omgeving.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
        <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Professioneel autopoetsbedrijf voor {{ $city }}</h2>
      <p class="p section-intro">
        Een auto laten poetsen is meer dan alleen wassen. Het gaat om uitstraling, onderhoud,
        frisheid en een verzorgde indruk. Wij helpen klanten met professionele autoverzorging,
        auto detailing en nette afwerking die past bij de waarde van het voertuig.
      </p>
      <p class="p">
        Veel klanten uit <strong>{{ $city }}</strong> kiezen voor Auto Poets Centrale Zaanstad
        voor onderhoud, verkoopvoorbereiding, showroomafwerking en representatieve oplevering.
      </p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">
    <div class="grid-3 reveal">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Interieur reinigen</div>
          <p class="card__text">
            Grondige reiniging van bekleding, kunststofdelen, ramen en detailwerk voor een fris en verzorgd interieur.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Exterieur verzorgen</div>
          <p class="card__text">
            Handwas, velgenreiniging, finishing en nette afwerking voor een frisse en representatieve uitstraling.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Showroomklaar maken</div>
          <p class="card__text">
            Ideaal voor verkoop, inruil of presentatie. Een netjes afgewerkte auto maakt direct een betere indruk.
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
          Wij werken voor particulieren, dealers en zakelijke klanten die waarde hechten aan kwaliteit,
          duidelijke afspraken en een verzorgde oplevering.
        </p>
        <p class="p">
          Vanuit Zaandam zijn wij goed bereikbaar voor klanten uit <strong>{{ $city }}</strong>.
          In veel gevallen geldt: voertuig om <b>08:00</b> brengen = <b>dezelfde dag</b> weer ophalen.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Veilige technieken</div>
          <div class="usp usp--light"><b>✓</b>Professionele producten</div>
          <div class="usp usp--light"><b>✓</b>Voor particulier en zakelijk</div>
        </div>
      </div>

      <div>
        <img
          src="{{ asset('assets/img/info-auto.jpg') }}"
          alt="Auto laten poetsen voor klanten uit {{ $city }}"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>
    </div>
  </div>
</section>

<section class="section section--white seo-block">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Klanten uit {{ $city }} kiezen voor detailing in Zaanstad</h2>
      <p class="p section-intro">
        Auto Poets Centrale Zaanstad helpt klanten uit {{ $city }} met auto laten poetsen,
        auto detailing, interieurreiniging, lakverzorging en showroomklaar maken.
      </p>
      <p class="p">
        Wil je jouw auto laten opfrissen, beter presenteren voor verkoop of gewoon netjes onderhouden?
        Dan denken wij graag mee over de juiste behandeling en planning.
      </p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">
    <div class="card reveal">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Afspraak maken vanuit {{ $city }}?</h2>
          <p class="p section-intro">
            Neem contact met ons op of bekijk direct onze pakketten. Dan kijken wij samen wat het beste past bij jouw voertuig.
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