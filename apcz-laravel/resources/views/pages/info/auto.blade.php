@extends('layouts.app')

@section('title','Auto laten poetsen — APCZ')

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Auto laten poetsen • Detailing • Verzorging</div>
      <h1 class="page-hero__title">Auto laten poetsen</h1>
      <p class="page-hero__lead">
        Wil je jouw auto weer fris, strak en representatief laten maken? Bij Auto Poets Centrale Zaanstad
        draait het niet om snel werk, maar om een verzorgde afwerking met aandacht voor detail.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--dark" href="#wat-we-doen">Meer informatie</a>
        <a class="btn btn--primary" href="{{ route('contact') }}">Neem contact op</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white" id="wat-we-doen">
  <div class="container">

    <div class="card reveal" style="max-width:1100px; margin:0 auto 22px;">
      <div class="card__body" style="padding:30px 28px;">
        <div class="center stack">
          <span class="badge">Auto Poets Centrale Zaanstad</span>
          <p class="p section-intro">
            Een auto laten poetsen is meer dan alleen wassen. Het gaat om uitstraling, onderhoud,
            frisheid en het gevoel dat jouw voertuig er weer verzorgd en representatief bij staat.
            Of het nu gaat om periodiek onderhoud, verkoopvoorbereiding of gewoon omdat je jouw auto netjes wilt houden:
            wij zorgen voor een aanpak die past bij de staat van het voertuig.
          </p>
        </div>
      </div>
    </div>

    <div class="split reveal" style="margin-top:22px;">
      <div class="stack">
        <span class="badge">Wat wij voor je kunnen betekenen</span>
        <h2 class="h2">Van opfrissen tot complete verzorging</h2>
        <p class="p">
          Wij behandelen auto’s met oog voor detail en met veilige methodes. Dat betekent een nette buitenkant,
          een fris interieur en een verzorgde totaalindruk. Geen onnodige haast, maar een afwerking die klopt.
        </p>
        <p class="p">
          Afhankelijk van jouw wensen en de staat van de auto kunnen wij werken aan interieur, exterieur,
          lakbeeld, presentatie en algemene netheid. Zo kies je niet zomaar “een poetsbeurt”, maar een resultaat
          dat past bij jouw doel.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Frisse en verzorgde uitstraling</div>
          <div class="usp usp--light"><b>✓</b>Veilige technieken en professionele middelen</div>
          <div class="usp usp--light"><b>✓</b>Geschikt voor dagelijks gebruik én verkoop</div>
        </div>
      </div>

      <div>
        <img
          src="{{ asset('assets/img/hero-1.jfif') }}"
          alt="Auto laten poetsen bij APCZ"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>
    </div>

    <div class="grid-3 reveal" style="margin-top:28px;">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor dagelijks gebruik</div>
          <p class="card__text">
            Rijd je veel en wil je dat jouw auto schoon, fris en representatief blijft? Dan is periodieke verzorging
            ideaal om de uitstraling van je voertuig op niveau te houden.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor verkoop</div>
          <p class="card__text">
            Een nette auto verkoopt beter. Een verzorgde binnen- en buitenzijde geeft direct een sterkere indruk
            bij foto’s, bezichtigingen en overdracht.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor liefhebbers</div>
          <p class="card__text">
            Sommige auto’s verdienen gewoon extra aandacht. Voor liefhebbers zorgen wij voor een afwerking die
            rustiger oogt, strakker aanvoelt en beter past bij de waarde van het voertuig.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="center stack reveal">
      <h2 class="h2">Wat kun je verwachten?</h2>
      <p class="p section-intro">
        Geen standaard auto betekent ook geen standaard aanpak. Daarom kijken wij altijd naar gebruik,
        vervuiling, lakconditie en jouw wensen voordat we bepalen wat het beste past.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Interieur</div>
          <p class="card__text">
            Denk aan stofzuigen, detailwerk, ramen, bekleding, kunststofdelen en het opfrissen van de cabine.
            Het doel is een interieur dat weer schoon, rustig en verzorgd aanvoelt.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Exterieur</div>
          <p class="card__text">
            Van handwas en velgenreiniging tot finishing en glansverbetering. De buitenkant van de auto
            krijgt weer een nette uitstraling die direct zichtbaar is.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Afwerking</div>
          <p class="card__text">
            Juist de details maken het verschil. Randen, contactpunten, glas, instappen en finishing bepalen
            uiteindelijk of een auto echt verzorgd oogt.
          </p>
        </div>
      </div>

    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Niet ieder resultaat is hetzelfde — en dat is logisch</h2>
          <p class="p section-intro">
            De uiteindelijke uitkomst hangt altijd af van de staat van de auto. Leeftijd, gebruik, lakconditie,
            eerdere schade, vervuiling en onderhoudsgeschiedenis spelen allemaal mee. Daarom werken wij
            altijd zo goed mogelijk, maar wel binnen veilige marges.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="split reveal">
      <div>
        <img
          src="{{ asset('assets/img/hero-2.jfif') }}"
          alt="Verzorgde auto bij APCZ"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>

      <div class="stack">
        <span class="badge">Duidelijkheid vooraf</span>
        <h2 class="h2">Eerlijk advies en heldere verwachtingen</h2>
        <p class="p">
          Wij vinden het belangrijk dat je vooraf weet waar je aan toe bent. Daarom kijken wij niet alleen
          naar wat mooi klinkt, maar vooral naar wat zinvol en haalbaar is voor jouw auto.
        </p>
        <p class="p">
          Soms is een opfrisbeurt precies genoeg. In andere gevallen is een uitgebreidere behandeling verstandiger.
          Ons doel is altijd een resultaat dat past bij de auto, jouw verwachtingen en het beschikbare budget.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Duidelijke afspraken vooraf</div>
          <div class="usp usp--light"><b>✓</b>Eerlijke inschatting van resultaat</div>
          <div class="usp usp--light"><b>✓</b>Geen onnodige behandelingen</div>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="center stack reveal">
      <h2 class="h2">Veelgekozen situaties</h2>
      <p class="p section-intro">
        Klanten laten hun auto onder andere poetsen in de volgende situaties.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Na intensief gebruik</div>
          <p class="card__text">
            Bijvoorbeeld na een drukke periode, vakantie, werkgebruik of wintervervuiling waarbij de auto
            zichtbaar meer aandacht nodig heeft.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor verkoop of inruil</div>
          <p class="card__text">
            Een schone en verzorgde auto zorgt voor een sterkere eerste indruk en helpt om de auto netter
            en overtuigender te presenteren.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor periodiek onderhoud</div>
          <p class="card__text">
            Veel klanten kiezen ervoor hun auto periodiek te laten verzorgen zodat vervuiling niet te ver oploopt
            en de uitstraling constant netjes blijft.
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
          <h2 class="h2" style="margin-bottom:0;">Benieuwd wat bij jouw auto past?</h2>
          <p class="p section-intro">
            Neem contact met ons op of bekijk direct onze pakketten. Dan kijken wij samen welke behandeling
            het beste aansluit op jouw voertuig en wensen.
          </p>

          <div class="action-row action-row--center" style="margin-top:8px;">
            <a class="btn btn--primary" href="{{ route('contact') }}">Neem contact op</a>
            <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
            <a class="btn" href="https://wa.me/31649777080" target="_blank" rel="noopener" style="background:#25D366; color:#07140c; border-color:#25D366;">WhatsApp</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection