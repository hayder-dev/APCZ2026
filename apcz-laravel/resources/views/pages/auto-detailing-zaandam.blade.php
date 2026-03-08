@extends('layouts.app')

@section('title', 'Auto detailing Zaandam | Professionele autoverzorging APCZ')
@section('meta_description', 'Auto detailing in Zaandam? Auto Poets Centrale Zaanstad verzorgt professionele lakverzorging, interieurreiniging, showroomklaar maken en detailing voor klanten in Zaanstad en omgeving.')
@section('canonical', url('/auto-detailing-zaandam'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">

      <div class="page-hero__kicker">Detailing • Lakverzorging • Zaanstad</div>

      <h1 class="page-hero__title">
        Auto detailing in Zaandam
      </h1>

      <p class="page-hero__lead">
        Op zoek naar professionele auto detailing in Zaandam?  
        Auto Poets Centrale Zaanstad is gespecialiseerd in het grondig reinigen,
        verzorgen en verbeteren van voertuigen. Van interieurreiniging tot
        lakverzorging en showroomklaar maken.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
        <a class="btn btn--outline" href="{{ route('diensten') }}">Bekijk pakketten</a>
      </div>

    </div>
  </div>
</section>


<section class="section section--white seo-block">
  <div class="container">

    <div class="center stack reveal">

      <h2 class="h2">Wat is auto detailing?</h2>

      <p class="p section-intro">
        Auto detailing gaat verder dan een normale wasbeurt. Het draait om het
        grondig reinigen, herstellen en beschermen van een voertuig zodat het
        weer een verzorgde en frisse uitstraling krijgt.
      </p>

      <p class="p">
        Bij Auto Poets Centrale Zaanstad werken wij met professionele producten
        en veilige technieken om voertuigen weer in nette staat te brengen.
        Daarbij letten we op details zoals lakbeeld, interieurafwerking,
        glas, velgen en moeilijk bereikbare delen.
      </p>

    </div>

  </div>
</section>


<section class="section section--white">
  <div class="container">

    <div class="grid-3 reveal">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Lakverzorging</div>
          <p class="card__text">
            Veilige reiniging van de lak, verwijderen van vervuiling en een nette
            afwerking voor een frisse uitstraling van de auto.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Interieur detailing</div>
          <p class="card__text">
            Grondige reiniging van bekleding, dashboard, ramen en kieren
            zodat het interieur weer fris en verzorgd aanvoelt.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Showroomafwerking</div>
          <p class="card__text">
            Ideaal voor verkoop, inruil of presentatie.
            Een nette auto maakt direct een sterkere eerste indruk.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>


<section class="section section--white seo-block">
  <div class="container">

    <div class="center stack reveal">

      <h2 class="h2">Auto detailing in Zaanstad en omgeving</h2>

      <p class="p section-intro">
        Wij helpen klanten uit Zaandam, Zaanstad, Wormerveer, Assendelft,
        Koog aan de Zaan, Krommenie, Purmerend en Amsterdam
        met professionele autoverzorging.
      </p>

      <p class="p">
        Of het nu gaat om dagelijks onderhoud, verkoopvoorbereiding
        of het netjes houden van je voertuig: wij zorgen voor een
        verzorgde en representatieve uitstraling.
      </p>

    </div>

  </div>
</section>


<section class="section section--white">
  <div class="container">

    <div class="card reveal">

      <div class="card__body">

        <div class="center stack">

          <h2 class="h2">Auto laten detailen?</h2>

          <p class="p section-intro">
            Neem contact op of bekijk onze pakketten om te zien
            welke behandeling het beste past bij jouw auto.
          </p>

          <div class="action-row action-row--center">
            <a class="btn btn--primary" href="{{ route('contact') }}">Contact</a>
            <a class="btn btn--dark" href="{{ route('diensten') }}">Pakketten</a>
          </div>

        </div>

      </div>

    </div>

  </div>
</section>

@endsection