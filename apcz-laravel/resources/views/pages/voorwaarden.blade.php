@extends('layouts.app')

@section('title','Voorwaarden — APCZ')

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">APC • Voorwaarden • Duidelijke afspraken</div>
      <h1 class="page-hero__title">Voorwaarden</h1>
      <p class="page-hero__lead">
        Duidelijke afspraken zorgen voor een strak resultaat. Hieronder vind je de belangrijkste voorwaarden
        rondom onze diensten, prijzen, oplevering en aandachtspunten bij behandeling van voertuigen.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--dark" href="#prijzen">Prijzen</a>
        <a class="btn btn--dark" href="#toeslagen">Toeslagen</a>
        <a class="btn btn--dark" href="#afspraak">Inleveren & opleveren</a>
        <a class="btn btn--dark" href="#risico">Risico & schades</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="card reveal" style="max-width:1100px; margin:0 auto 22px;">
      <div class="card__body" style="padding:30px 28px;">
        <div class="center stack">
          <span class="badge">Auto Poets Centrale Zaanstad</span>
          <p class="p section-intro">
            Wij werken zorgvuldig, transparant en met aandacht voor detail. Omdat iedere auto, laksoort
            en vervuilingsgraad anders is, vinden wij het belangrijk om vooraf helder te zijn over prijzen,
            risico’s, planning en verwachtingen.
          </p>
        </div>
      </div>
    </div>

    <div class="card reveal" style="margin-top:22px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Transparantie staat voorop</h2>
          <p class="p section-intro">
            Wij geloven dat goed werk begint met duidelijke communicatie. Daarom leggen wij vooraf uit wat je mag verwachten,
            wat binnen een behandeling valt, welke risico’s er kunnen zijn en wanneer extra werk nodig is. Zo voorkomen we
            misverstanden en weet je vooraf waar je aan toe bent.
          </p>
        </div>
      </div>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px; align-items:start;">

      <div class="card" id="prijzen" style="grid-column:span 2;">
        <div class="card__body">
          <div class="card__title">Prijzen</div>
          <ul class="card__text" style="margin-top:10px; padding-left:18px;">
            <li><b>Alle genoemde prijzen zijn exclusief btw</b>, tenzij uitdrukkelijk anders vermeld.</li>
            <li>Onze tarieven zijn in veel gevallen <b>vanaf-prijzen</b>. De uiteindelijke prijs hangt af van de staat van het voertuig, het formaat, de vervuiling, de gewenste behandeling en de benodigde tijd.</li>
            <li>Bij twijfel geven wij vooraf een <b>indicatie</b> of maken wij een passende <b>offerte</b>, zodat duidelijk is waar je aan toe bent.</li>
            <li>Extra werkzaamheden die buiten het gekozen pakket vallen, worden waar mogelijk vooraf besproken.</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Kort samengevat</div>
          <p class="card__text">
            Geen standaard auto betekent ook geen standaard aanpak.
          </p>
          <p class="card__text" style="margin-bottom:0;">
            Daarom werken wij met duidelijke vanaf-prijzen en stemmen we bijzonderheden vooraf met je af.
          </p>
        </div>
      </div>

      <div class="card" id="toeslagen">
        <div class="card__body">
          <div class="card__title">Toeslagen</div>
          <p class="card__text" style="margin-top:8px;">
            Wij werken met toeslagen wanneer een behandeling aantoonbaar meer tijd, aandacht of correctiewerk vraagt dan gebruikelijk.
          </p>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Donkere kleuren</b> (extra werk in afwerking en finish): <b>+ € 50,-</b></li>
            <li>Bij extreme vervuiling, zoals rook, dierenharen, zware vlekken, zand, modder of langdurig achterstallig onderhoud, kan een toeslag gelden.</li>
            <li>Bij veel hars, teer, ijzerdeeltjes of zwaar lakwerk kan extra behandeltijd nodig zijn.</li>
            <li>Toeslagen worden altijd zo eerlijk en duidelijk mogelijk beoordeeld op basis van de werkelijke situatie.</li>
          </ul>
        </div>
      </div>

      <div class="card" id="afspraak">
        <div class="card__body">
          <div class="card__title">Inleveren & opleveren</div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>In veel gevallen geldt: <b>auto ingeleverd om 08:00 = dezelfde dag klaar</b>.</li>
            <li>Wij zijn geopend tot <b>17:00</b>. Oplevering en ophalen gebeurt in overleg binnen openingstijden.</li>
            <li>Sommige behandelingen, zoals polijsten, coatings, fotografie of voertuigen met zware vervuiling, kunnen meer tijd vragen dan standaard.</li>
            <li>Wij adviseren om vooraf een korte toelichting of foto’s te sturen, zodat wij de juiste tijd en behandeling kunnen inplannen.</li>
            <li>Een genoemde doorlooptijd is altijd een indicatie en kan afhankelijk zijn van de staat van het voertuig.</li>
          </ul>
        </div>
      </div>

      <div class="card" id="risico" style="grid-column:span 2;">
        <div class="card__body">
          <div class="card__title">Risico, schades & belangrijke informatie</div>
          <p class="card__text" style="margin-top:8px;">
            Voor een veilige en nette behandeling is het belangrijk dat je ons vooraf informeert over bijzonderheden aan het voertuig.
          </p>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Motorruimte reinigen gebeurt altijd op eigen risico.</b> Wij werken zorgvuldig, maar elektronica, sensoren, stekkers en andere onderdelen blijven gevoelig.</li>
            <li><b>Gerepareerde schade, spuitwerk, wrap, coating of andere eerdere behandelingen</b> dienen vooraf gemeld te worden. Dit is niet altijd direct zichtbaar.</li>
            <li>Bij verborgen herstelwerk of kwetsbare lak kan een behandeling anders reageren dan verwacht. Daarom is duidelijke informatie vooraf belangrijk.</li>
            <li>Diepe krassen, beschadigingen, verkleuringen en slijtage kunnen niet altijd volledig worden verwijderd zonder risico. Wij werken altijd binnen veilige marges.</li>
            <li>Wij behouden ons het recht voor om af te wijken van een behandeling als dit nodig is om schade of onveilige correctie te voorkomen.</li>
          </ul>
        </div>
      </div>

      <div class="card" id="betaling">
        <div class="card__body">
          <div class="card__title">Betaling</div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Betaling gebeurt volgens afspraak, bijvoorbeeld per pin of overboeking.</li>
            <li>Zakelijke klanten kunnen, indien afgesproken, een factuur ontvangen op bedrijfsnaam.</li>
            <li>Bij zakelijke facturatie wordt btw apart en correct vermeld.</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Tot slot</div>
          <p class="card__text">
            Ons doel is altijd hetzelfde: een nette, veilige en professionele behandeling van jouw voertuig.
          </p>
          <p class="card__text" style="margin-bottom:0;">
            Heb je vooraf vragen over lak, planning, risico’s of de juiste behandeling, neem dan gerust contact met ons op.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Wat wij van de klant verwachten</div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Wij vragen klanten om vooraf zo volledig mogelijk te zijn over de staat van het voertuig en eventuele bijzonderheden.</li>
            <li>Denk hierbij aan eerdere schade, spuitwerk, wraps, coatings, technische storingen, vochtproblemen, rookschade of andere zaken die invloed kunnen hebben op de behandeling.</li>
            <li>Wanneer belangrijke informatie niet vooraf wordt gedeeld, kan dit invloed hebben op het resultaat of op de veiligheid van de behandeling.</li>
            <li>Wij behouden ons het recht voor om werkzaamheden aan te passen of te beperken wanneer wij risico zien op schade of onveilige uitvoering.</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Resultaat en verwachtingen</div>
          <p class="card__text" style="margin-top:8px;">
            De auto poets centrale streeft altijd naar een zo strak en verzorgd mogelijk eindresultaat. Toch is iedere auto anders en zijn
            resultaten afhankelijk van onder andere leeftijd, onderhoudshistorie, lakdikte, gebruikssporen en materiaalconditie.
          </p>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Niet iedere kras, vlek, geur of verkleuring kan volledig worden verwijderd.</li>
            <li>Bij diepere beschadigingen of hardnekkige vervuiling geldt dat verbetering vaak wel mogelijk is, maar volledige correctie niet altijd haalbaar of veilig is.</li>
            <li>Wij werken daarom resultaatgericht, maar altijd binnen een verantwoorde en veilige marge.</li>
          </ul>
        </div>
      </div>

      <div class="card" style="grid-column:span 2;">
        <div class="card__body">
          <div class="card__title">Aansprakelijkheid en bestaande gebreken</div>
          <p class="card__text" style="margin-top:8px;">
            Auto Poets Centrale Zaanstad is niet aansprakelijk voor gevolgen die ontstaan door reeds aanwezige gebreken,
            verborgen schade, verouderde materialen, zwakke laklagen, slechte herstelreparaties of eerder uitgevoerde behandelingen door derden.
          </p>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Hieronder vallen onder andere: loslatende lak, zwakke blanke lak, verkleefde hemelbekleding, kwetsbare interieurdelen, elektronische storingen of slecht herstelde schade.</li>
            <li>Wanneer tijdens de behandeling blijkt dat een onderdeel of oppervlak gevoeliger reageert dan normaal, kan Auto poets centrale zaanstad besluiten de behandeling aan te passen of te stoppen.</li>
            <li>Dit gebeurt altijd met het doel om verdere schade of onveilige situaties te voorkomen.</li>
          </ul>
        </div>
      </div>

    </div>

    <div class="center" style="margin-top:24px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
      <a class="btn btn--primary" href="{{ route('contact') }}">Neem contact op</a>
    </div>

  </div>
</section>

@endsection