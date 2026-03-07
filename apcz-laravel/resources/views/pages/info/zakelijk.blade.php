@extends('layouts.app')

@section('title','Wagenpark & zakelijk — APCZ')

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Zakelijk • Wagenpark • Periodiek onderhoud</div>
      <h1 class="page-hero__title">Wagenpark & zakelijk</h1>
      <p class="page-hero__lead">
        Een representatief wagenpark is een visitekaartje. Auto Poets Centrale Zaanstad helpt bedrijven met
        periodiek onderhoud, vaste afspraken en een snelle doorlooptijd — zodat voertuigen altijd strak voor de dag komen,
        zonder dat het jouw planning in de weg zit.
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
          <p class="p section-intro">
            Voor zakelijke voertuigen draait het om representativiteit, continuïteit en betrouwbaarheid.
            Of het nu gaat om servicebussen, leaseauto’s, poolauto’s of directiewagens:
            een nette en verzorgde uitstraling draagt bij aan vertrouwen, professionaliteit en een sterke eerste indruk.
          </p>
        </div>
      </div>
    </div>

    <div class="split reveal" style="margin-top:22px;">
      <div class="stack">
        <span class="badge">Zakelijk klant worden</span>
        <h2 class="h2">Vaste structuur in plaats van losse poetsbeurten</h2>
        <p class="p">
          Heb je meerdere voertuigen of wil je structureel onderhoud? Dan is een vaste werkwijze veel efficiënter
          dan steeds losse afspraken plannen. Wij werken met duidelijke communicatie, vaste momenten en een consistente standaard.
        </p>
        <p class="p">
          Zo houd je jouw wagenpark representatief zonder onnodige ruis in je planning. Wij denken mee in tempo,
          prioriteit en een aanpak die past bij jouw bedrijfsvoering.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Vaste planning en duidelijke afspraken</div>
          <div class="usp usp--light"><b>✓</b>Consistente kwaliteit per voertuig</div>
          <div class="usp usp--light"><b>✓</b>Geschikt voor kleine én grotere wagenparken</div>
        </div>
      </div>

      <div>
        <img
          src="{{ asset('assets/img/info-zakelijk.jpg') }}"
          alt="Wagenpark en zakelijke voertuigen"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>
    </div>

    <div class="grid-3 reveal" style="margin-top:28px;">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Bedrijfsauto’s & lease</div>
          <p class="card__text">
            Voor voertuigen die dagelijks zichtbaar zijn bij klanten, leveranciers of medewerkers.
            Een nette auto versterkt de professionele uitstraling van je bedrijf.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Servicebussen</div>
          <p class="card__text">
            Intensief gebruikte voertuigen met veel instap, werkstof en vervuiling vragen om een praktische
            en regelmatige aanpak die gericht is op frisheid en representativiteit.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Directie & premium</div>
          <p class="card__text">
            Voor voertuigen waar uitstraling en detailniveau extra belangrijk zijn.
            Hierbij kijken wij scherper naar afwerking, lakbeeld en verzorgde presentatie.
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
        Afhankelijk van gebruik, vervuiling en inzetbaarheid kunnen wij een werkwijze opzetten
        die aansluit op jouw wagenpark en gewenste frequentie.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Periodiek onderhoud</div>
          <p class="card__text">
            Wekelijks, tweewekelijks of maandelijks onderhoud zodat voertuigen niet pas worden aangepakt
            als ze al te ver achteruit zijn gegaan.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Consistente standaard</div>
          <p class="card__text">
            Geen wisselende kwaliteit per keer, maar een vaste standaard en duidelijke checklist
            per voertuig of type inzet.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Maatwerk per auto</div>
          <p class="card__text">
            Bijvoorbeeld een snellere onderhoudsbeurt voor dagelijkse voertuigen en periodiek een uitgebreidere
            deep clean voor interieurs of presentatie-auto’s.
          </p>
        </div>
      </div>

    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="card__title">Planning & oplevering</div>
        <p class="card__text" style="margin-top:10px;">
          In veel gevallen geldt: lever je een voertuig om <b>08:00</b> in, dan kan het <b>dezelfde dag</b> weer mee terug.
          Wij zijn geopend tot <b>17:00</b>. Bij meerdere voertuigen stemmen wij de planning af op jouw bedrijfsproces,
          zodat de inzetbaarheid van je wagenpark zoveel mogelijk behouden blijft.
        </p>
        <p class="card__text" style="margin-bottom:0;">
          Waar nodig kunnen we werken met vaste dagen, vaste slots en duidelijke prioriteiten voor voertuigen
          die direct inzetbaar moeten blijven.
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
          src="{{ asset('assets/img/hero-5.jfif') }}"
          alt="Zakelijke samenwerking en planning"
          style="border-radius:24px; border:1px solid rgba(0,0,0,.10); box-shadow:0 26px 90px rgba(0,0,0,.14);"
        >
      </div>

      <div class="stack">
        <span class="badge">Samenwerking</span>
        <h2 class="h2">Praktisch samenwerken met vaste structuur</h2>
        <p class="p">
          Wil je overzicht en voorspelbaarheid? Dan kunnen we een samenwerking opzetten die aansluit op jouw planning.
          Daarmee voorkom je ad-hoc werk en blijft de kwaliteit van je voertuigen op niveau.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>1</b>Vaste dagen of slots per week</div>
          <div class="usp usp--light"><b>2</b>Periodieke deep clean per kwartaal of cyclus</div>
          <div class="usp usp--light"><b>3</b>Prioriteit op voertuigen die direct nodig zijn</div>
        </div>

        <p class="p">
          Stuur ons eenvoudig de grootte van jouw wagenpark, het type voertuigen en de gewenste frequentie,
          dan maken wij een voorstel dat praktisch en werkbaar is.
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
        Voor een veilige en goede behandeling is het belangrijk dat bijzonderheden aan voertuigen vooraf worden gemeld.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">

      <div class="card">
        <div class="card__body">
          <div class="card__title">Motorruimte</div>
          <p class="card__text">
            Motorruimte reinigen is mogelijk, maar gebeurt altijd op eigen risico in verband met gevoelige
            elektronica, sensoren en onderdelen.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Schade / spuitwerk</div>
          <p class="card__text">
            Gerepareerde schade, gespoten delen of andere eerdere behandelingen graag vooraf melden,
            zodat wij de juiste en veiligste aanpak kunnen bepalen.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Zware vervuiling</div>
          <p class="card__text">
            Bij rook, dierenharen, vlekken, bouwstof of intensief gebruik kan extra behandeltijd nodig zijn.
            Eventuele toeslagen worden altijd vooraf afgestemd.
          </p>
        </div>
      </div>

    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Benieuwd naar een zakelijke samenwerking?</h2>
          <p class="p section-intro">
            Neem contact met ons op en stuur kort je wensen, type voertuigen en gewenste frequentie door.
            Dan kijken wij welke structuur het beste past bij jouw wagenpark.
          </p>
          <div class="action-row action-row--center" style="margin-top:8px;">
            <a class="btn btn--dark" href="{{ route('info.index') }}">Terug</a>
            <a class="btn btn--dark" href="{{ route('diensten') }}#pakketten">Bekijk pakketten</a>
            <a class="btn btn--primary" href="{{ route('contact') }}?route=wagenpark-zakelijk">Neem contact op</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection