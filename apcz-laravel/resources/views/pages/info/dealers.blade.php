@extends('layouts.app')

@section('title', 'Auto showroomklaar maken in Zaandam | Dealerservice APCZ')
@section('meta_description', 'Auto showroomklaar maken in Zaandam en Zaanstad? Auto Poets Centrale Zaanstad helpt dealers, handelaren en autobedrijven met verkoopklaar maken, showroom-afwerking, dealer poetsservice en autofotografie voor voorraad uit Zaandam, Wormerveer, Assendelft, Koog aan de Zaan, Krommenie, Purmerend en Amsterdam.')
@section('meta_keywords', 'auto showroomklaar maken zaandam, dealer poetsservice zaanstad, verkoopklaar maken auto, auto poetsen voor dealers, showroom afwerking purmerend, autodetailing amsterdam dealer, autofotografie voor verkoop')
@section('canonical', url('/dealers-showroom'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Dealers • Showroom • Verkoopklaar</div>
      <h1 class="page-hero__title">Auto showroomklaar maken voor dealers & showroom</h1>
      <p class="page-hero__lead">
        Verkoopklare presentatie voor dealers, handelaren en partijen met voorraad.
        Wij zorgen voor een consistente showroom-afwerking die vertrouwen uitstraalt —
        klaar voor showroomvloer én online advertenties. Auto Poets Centrale Zaanstad werkt
        voor klanten uit Zaandam, Zaanstad en omgeving.
      </p>
    </div>
  </div>
</section>

<section class="section section--white" id="wat-we-doen">
  <div class="container">

    <div class="card reveal" style="max-width:1100px; margin:0 auto 22px;">
      <div class="card__body" style="padding:30px 28px;">
        <div class="center stack">
          <div style="width:120px; height:4px; margin:0 auto 6px; border-radius:999px; background:linear-gradient(90deg,#f4c400,#ffe27a,#fff4cb);"></div>

          <p class="p section-intro">
            Voor voorraad en verkoop draait het om snelheid, uitstraling en consistentie.
            Een auto moet er niet alleen schoon uitzien, maar ook direct verkoopbaar ogen.
          </p>

          <p class="p section-intro">
            Daarom werken wij met een vaste aanpak, duidelijke planning en een standaard
            die past bij presentatie, doorloop en vertrouwen bij bezichtiging.
          </p>
        </div>
      </div>
    </div>

    <div class="split reveal" style="margin-top:22px;">
      <div class="stack">
        <span class="badge">Voor dealers en handelaren</span>
        <h2 class="h2">Strakke presentatie met vaste standaard</h2>
        <p class="p">
          Bij verkoop telt de eerste indruk direct. Een nette cabine, verzorgd lakbeeld,
          strakke details en een representatieve totaaluitstraling zorgen voor meer vertrouwen
          bij bezichtiging én online presentatie.
        </p>
        <p class="p">
          Wij helpen bij het verkoopklaar maken van voertuigen met een werkwijze die praktisch,
          snel en duidelijk is. Daarbij kijken wij naar het doel van de auto: showroom,
          advertentie, aflevering of snelle doorloop.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Consistente oplevering</div>
          <div class="usp usp--light"><b>✓</b>Geschikt voor meerdere voertuigen</div>
          <div class="usp usp--light"><b>✓</b>Direct presentatie-klaar</div>
        </div>
      </div>

      <div>
        <img
          src="{{ asset('assets/img/info-dealers.jpg') }}"
          alt="Dealerservice en showroom presentatie in Zaandam"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>
    </div>

    <div class="grid-3 reveal" style="margin-top:28px;">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor voorraad</div>
          <p class="card__text">
            Ideaal voor handelsvoorraad, binnenkomende auto’s en voertuigen die snel representatief
            gemaakt moeten worden voor verkoop of plaatsing online.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor showroom</div>
          <p class="card__text">
            Gericht op een nette, verzorgde uitstraling waarbij het totaalbeeld klopt:
            interieur, exterieur, details en presentatie in lijn met de waarde van het voertuig.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor advertentie</div>
          <p class="card__text">
            Een verkoopklare auto oogt beter op foto’s, trekt meer vertrouwen en helpt om
            voertuigen sneller en overtuigender te presenteren aan potentiële kopers.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="center stack reveal">
      <h2 class="h2">Wat wij leveren</h2>
      <p class="p section-intro">
        Afhankelijk van de staat van de auto, de gewenste snelheid en het doel van de verkoop,
        stemmen wij de behandeling af op wat echt nodig is.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Interieur</div>
          <p class="card__text">
            Dieptereiniging waar nodig, detailwerk, kieren, contactpunten en een frisse cabine
            die direct verzorgd en professioneel overkomt.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Exterieur</div>
          <p class="card__text">
            Handwas, decontaminatie, velgen, finishing en nette afwerking zodat de auto er direct
            strakker en representatiever uitziet.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Lakbeeld & glans</div>
          <p class="card__text">
            Waar nodig kan het lakbeeld worden verbeterd door polijsten of correctiewerk,
            altijd binnen veilige marges en passend bij de staat van het voertuig.
          </p>
        </div>
      </div>

    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2">Showroom-afwerking in de praktijk</h2>
          <p class="p section-intro">
            Afhankelijk van het voertuig en het doel kunnen wij onder andere werken aan interieur,
            exterieur, lakbeeld, bescherming en optionele presentatie voor advertentiegebruik.
          </p>
        </div>

        <ul class="card__text" style="margin-top:10px; padding-left:18px;">
          <li><b>Interieur</b> — dieptereiniging waar nodig, detailwerk, kieren, randen en nette afwerking.</li>
          <li><b>Exterieur</b> — handwas, decontaminatie, finishing en een strak totaalbeeld.</li>
          <li><b>Lakcorrectie</b> — 1 tot 3 staps polijsten om swirls en wasstraatkrassen te verminderen, waar veilig mogelijk.</li>
          <li><b>Bescherming</b> — wax, sealant of op aanvraag speciale coatings.</li>
          <li><b>Motorruimte</b> — mogelijk, maar altijd op eigen risico vanwege gevoelige onderdelen en elektronica.</li>
          <li><b>Foto’s</b> — optioneel professionele beelden voor advertentie, album of verkoopdossier.</li>
        </ul>
      </div>
    </div>

  </div>
</section>

<section class="section section--white seo-block" id="lokale-seo-dealers">
  <div class="container">
    <div class="center stack reveal">
      <h2 class="h2">Dealer poetsservice in Zaandam en omgeving</h2>
      <p class="p section-intro">
        Zoek je een partner voor <b>auto showroomklaar maken in Zaandam</b> of een vaste
        <b>dealer poetsservice in Zaanstad</b>? Wij helpen autobedrijven, handelaren en showroomlocaties
        met een snelle en consistente verkoopklare presentatie.
      </p>
    </div>

    <div class="stack reveal" style="max-width:980px; margin:0 auto;">
      <p class="p">
        Auto Poets Centrale Zaanstad werkt voor dealers en handelaren uit <b>Zaandam</b>, <b>Zaanstad</b>,
        <b>Wormerveer</b>, <b>Assendelft</b>, <b>Koog aan de Zaan</b>, <b>Krommenie</b>,
        <b>Westzaan</b>, <b>Oostzaan</b>, <b>Purmerend</b> en <b>Amsterdam</b>. Wij verzorgen
        verkoopklare afwerking voor voorraad, showroomauto’s, afleverauto’s en voertuigen die direct online gepresenteerd moeten worden.
      </p>

      <p class="p">
        Daarmee is deze pagina relevant voor bedrijven die zoeken op termen als <b>verkoopklaar maken auto</b>,
        <b>showroom afwerking</b>, <b>auto poetsen voor dealers</b> en <b>autofotografie voor verkoop</b>
        in de regio Zaandam. Ons doel is een nette, betrouwbare en overtuigende presentatie die past bij de waarde van het voertuig.
      </p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="split reveal">
      <div>
        <img
          src="{{ asset('assets/img/home-7.jpg') }}"
          alt="Showroom afwerking en verkoopklare presentatie"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>

      <div class="stack">
        <span class="badge">Werkwijze</span>
        <h2 class="h2">Praktisch, snel en voorspelbaar</h2>
        <p class="p">
          Voor dealers en handelaren is het belangrijk dat afspraken duidelijk zijn en de doorlooptijd
          voorspelbaar blijft. Daarom werken wij met een heldere structuur en kunnen wij, waar nodig,
          met vaste slots en een terugkerende planning werken.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>1</b>Intake en planning per voertuig of batch</div>
          <div class="usp usp--light"><b>2</b>Vaste checklist voor consistente oplevering</div>
          <div class="usp usp--light"><b>3</b>Verkoopklare afwerking met focus op tempo en resultaat</div>
        </div>

        <p class="p">
          Heb je meerdere voertuigen of doorlopende voorraad? Dan kunnen wij meedenken in structuur,
          prioriteit en een vaste werkwijze die aansluit op jouw verkoopproces.
        </p>
      </div>
    </div>

  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="center stack reveal">
      <h2 class="h2">Belangrijke aandachtspunten</h2>
      <p class="p section-intro">
        Voor een goede en veilige behandeling is het belangrijk dat bijzonderheden vooraf worden gedeeld.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Gerepareerde schade</div>
          <p class="card__text">
            Gespoten delen, herstelwerk of eerdere schade graag vooraf melden. Dit is niet altijd direct zichtbaar
            maar kan wel invloed hebben op de behandeling.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Diepe krassen</div>
          <p class="card__text">
            Diepe beschadigingen zijn niet altijd volledig te verwijderen zonder risico.
            Wij kiezen altijd voor veilig lakbehoud boven onnodig agressief corrigeren.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Zware vervuiling</div>
          <p class="card__text">
            Bij rook, dierenharen, zware vlekken, bouwstof of achterstallig onderhoud kan extra behandeltijd nodig zijn.
            Eventuele toeslagen worden altijd vooraf besproken.
          </p>
        </div>
      </div>

    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Benieuwd wat het beste past bij jouw voorraad of showroom?</h2>
          <p class="p section-intro">
            Neem contact met ons op of bekijk direct onze pakketten. Dan denken wij mee in presentatie,
            doorlooptijd en een aanpak die past bij jouw voertuigen.
          </p>

          <div class="action-row action-row--center" style="margin-top:8px;">
            <a class="btn btn--primary" href="{{ route('contact') }}?route=dealers-showroom">Neem contact op</a>
            <a class="btn btn--dark" href="{{ route('diensten') }}#pakketten">Bekijk showroompakketten</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection