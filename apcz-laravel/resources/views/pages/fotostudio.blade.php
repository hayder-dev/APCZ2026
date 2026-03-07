@extends('layouts.app')

@section('title','Fotostudio & verkooppresentatie — APCZ')

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Fotostudio • Verkooppresentatie • Advertentie-klaar</div>
      <h1 class="page-hero__title">Fotostudio & verkooppresentatie</h1>
      <p class="page-hero__lead">
        Een nette auto verkoopt beter, maar goede presentatie maakt het verschil. Na het reinigen en showroomklaar maken
        verzorgen wij ook professionele foto’s met een rustige uitstraling, strakke belichting en een presentatie die direct vertrouwen geeft.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--dark" href="#wat-we-doen">Meer informatie</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white" id="wat-we-doen">
  <div class="container">

    <div class="card reveal" style="max-width:1100px; margin:0 auto 22px;">
      <div class="card__body" style="padding:30px 28px;">
        <div class="center stack">
          <span class="badge">Fotostudio • Showroom • Verkoopklaar</span>
          <p class="p section-intro">
            Bij Auto Poets Centrale Zaanstad kijken we niet alleen naar hoe een auto wordt gereinigd,
            maar ook naar hoe hij wordt gepresenteerd. Want een verzorgde uitstraling verdient beelden die datzelfde niveau uitstralen.
          </p>
        </div>
      </div>
    </div>

    <div class="split reveal" style="margin-top:22px;">
      <div class="stack">
        <span class="badge">Meer dan alleen foto’s</span>
        <h2 class="h2">Beelden die verkoop en presentatie versterken</h2>
        <p class="p">
          Een voertuig dat netjes gefotografeerd is, komt professioneler over en trekt sneller de aandacht.
          Zeker bij verkoop is de eerste indruk vaak al online. Daarom zorgen wij voor foto’s die rustig, strak
          en overtuigend ogen.
        </p>
        <p class="p">
          De combinatie van reiniging, afwerking en fotografie maakt het totaalplaatje compleet. Daardoor oogt
          de auto niet alleen schoon, maar ook echt klaar voor advertentie, showroom of presentatie aan klanten.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Rustige en nette presentatie</div>
          <div class="usp usp--light"><b>✓</b>Geschikt voor verkoop en advertenties</div>
          <div class="usp usp--light"><b>✓</b>Combinatie met showroomafwerking mogelijk</div>
        </div>
      </div>

      <div>
        <img
          src="{{ asset('assets/img/studio.svg') }}"
          alt="Fotostudio en verkooppresentatie"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>
    </div>

    <div class="grid-3 reveal" style="margin-top:28px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor verkoop</div>
          <p class="card__text">
            Ideaal voor Marktplaats, AutoTrack, eigen website of social media. Een nette beeldset helpt om een auto
            professioneler en overtuigender te presenteren.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor dealers</div>
          <p class="card__text">
            Geschikt voor voorraad, showroomauto’s en voertuigen die snel advertentie-klaar moeten zijn met een vaste,
            consistente uitstraling.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor liefhebbers</div>
          <p class="card__text">
            Ook wanneer je jouw auto gewoon mooi wilt vastleggen. Denk aan een nette fotoserie van een verzorgde auto
            in een rustige setting.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="center stack reveal">
      <h2 class="h2">Wat we kunnen vastleggen</h2>
      <p class="p section-intro">
        Afhankelijk van het doel van de fotoserie stemmen wij de opnames af op presentatie, verkoop of documentatie.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Exterieur</div>
          <p class="card__text">
            Overzichtsfoto’s van de buitenzijde, hoeken, lijnen, velgen, voorkant, achterkant en de algemene uitstraling
            van het voertuig.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Interieur</div>
          <p class="card__text">
            Stoelen, dashboard, middenconsole, stuur, achterbank en het totaalbeeld van de cabine, netjes en rustig gefotografeerd.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Detailshots</div>
          <p class="card__text">
            Denk aan kilometerstand, navigatie, velgen, bekleding, afwerking en andere details die belangrijk zijn voor verkoop of presentatie.
          </p>
        </div>
      </div>
    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="card__title">Veelgekozen combinatie</div>
        <p class="card__text" style="margin-top:10px;">
          Fotostudio wordt vaak gecombineerd met showroomafwerking of het <b>Goud+</b> pakket.
          Dat is logisch: eerst zorgen wij dat het voertuig er strak bij staat, daarna leggen we het professioneel vast.
        </p>
        <p class="card__text" style="margin-bottom:0;">
          Zo krijg je niet alleen een schone auto, maar een compleet verkoopklaar resultaat.
        </p>
      </div>
    </div>

  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="split reveal">
      <div>
        <img
          src="{{ asset('assets/img/hero-4.jfif') }}"
          alt="Showroom en verkoopfotografie"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>

      <div class="stack">
        <span class="badge">Duidelijke aanpak</span>
        <h2 class="h2">Rustige beelden, duidelijke uitstraling</h2>
        <p class="p">
          Wij houden de presentatie overzichtelijk en strak. Geen drukke achtergrond of rommelige indruk,
          maar beelden die de auto centraal zetten en de sterke punten goed laten uitkomen.
        </p>
        <p class="p">
          Daarmee is de fotostudio geschikt voor klanten die hun auto professioneel willen presenteren,
          maar ook voor dealers en handelaren die snelheid en nette uitstraling willen combineren.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>1</b>Auto eerst netjes en schoon opleveren</div>
          <div class="usp usp--light"><b>2</b>Daarna professioneel vastleggen</div>
          <div class="usp usp--light"><b>3</b>Direct klaar voor advertentie of presentatie</div>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="center stack reveal">
      <h2 class="h2">Voor wie is dit interessant?</h2>
      <p class="p section-intro">
        Fotostudio en verkooppresentatie zijn vooral interessant als uitstraling en eerste indruk belangrijk zijn.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Particulieren</div>
          <p class="card__text">
            Voor verkoop, inruil of wanneer je jouw auto simpelweg netjes wilt laten vastleggen na een verzorgingsbehandeling.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Handel & dealers</div>
          <p class="card__text">
            Voor voertuigen die snel en professioneel online moeten worden gezet, met een consistente uitstraling per auto.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Premium presentatie</div>
          <p class="card__text">
            Voor voertuigen waarbij uitstraling, detailniveau en nette presentatie extra belangrijk zijn.
          </p>
        </div>
      </div>
    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Interesse? Laat jouw auto professioneel presenteren.</h2>
          <p class="p section-intro">
            Wil je meer weten over de fotostudio of direct een combinatie maken met showroomafwerking?
            Neem contact met ons op en we kijken samen wat het beste past bij jouw voertuig en doel.
          </p>

          <div class="action-row action-row--center" style="margin-top:8px;">
            <a class="btn btn--primary" href="{{ route('contact') }}?route=fotostudio">Neem contact op</a>
            <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
            <a class="btn" href="https://wa.me/31649777080" target="_blank" rel="noopener" style="background:#25D366; color:#07140c; border-color:#25D366;">WhatsApp</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection