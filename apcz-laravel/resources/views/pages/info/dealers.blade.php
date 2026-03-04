@extends('layouts.app')

@section('title','Dealers & showroom — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="center stack">
      <h1 class="h1">Dealers & showroom</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Verkoopklare presentatie voor <b>dealers</b>, <b>handelaren</b> en partijen met voorraad. Wij leveren een consistente
        showroom-afwerking die vertrouwen uitstraalt — klaar voor showroomvloer én online advertenties.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
 
      </div>
    </div>

    {{-- HERO FOTO (1 foto) --}}
    <div class="card" style="margin-top:18px;">
      <div class="card__media">
        <img
          src="{{ asset('assets/img/info-dealers.jpg') }}"
          alt="Dealers & showroom"
          style="width:100%; height:auto; display:block;"
        >
      </div>
    </div>

    <div class="grid-3" style="margin-top:18px; align-items:start;">
      {{-- LINKERKANT: aanbod + proces --}}
      <div class="card" style="grid-column: span 2;">
        <div class="card__body">
          <div class="card__title">Wat wij leveren</div>
          <p class="card__text" style="opacity:.88;">
            Een nette, strakke presentatie die aansluit op verkoop. We werken met een vaste aanpak en checklist,
            zodat elke auto dezelfde standaard haalt. Ideaal bij inkoopmomenten, voorraadwissels en wanneer je
            voertuigen snel online wilt zetten.
          </p>

          <div class="card__text" style="margin-top:12px;"><b>Showroom-afwerking (mogelijkheden)</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Interieur</b> — dieptereiniging waar nodig, detailwerk, kieren/randen, frisse uitstraling en nette afwerking.</li>
            <li><b>Exterieur</b> — handwas, decontaminatie, finishing en een strak totaalbeeld.</li>
            <li><b>Lakcorrectie</b> — 1–3 staps polijsten om swirls/wasstraatkrassen te verminderen (veilig waar mogelijk).</li>
            <li><b>Bescherming</b> — wax/sealant of (op aanvraag) speciale coatings.</li>
            <li><b>Motorruimte</b> — mogelijk, maar <b>op eigen risico</b> i.v.m. gevoelige elektronica/onderdelen.</li>
            <li><b>Foto’s (optioneel)</b> — professionele beelden voor advertentie/album (binnen + buiten + detailshots).</li>
          </ul>

          <div class="card__text" style="margin-top:12px;"><b>Werkwijze voor dealers</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>1) Intake & planning</b> — aantallen, gewenste oplevermomenten, prioriteiten (verkoop first).</li>
            <li><b>2) Checklist</b> — vaste standaard per auto (consistentie).</li>
            <li><b>3) Uitvoering</b> — strak in detail, zonder tijdrovende onnodige stappen.</li>
            <li><b>4) Oplevering</b> — verkoopklaar + advies wat eventueel extra winst oplevert.</li>
          </ul>

          <div class="card__text" style="margin-top:12px;"><b>Geschikt voor grotere aantallen</b></div>
          <p class="card__text" style="opacity:.88;">
            Heb je meerdere voertuigen? Geen probleem. We kunnen werken met <b>vaste slots</b>, een <b>structurele planning</b>
            en een voorspelbare doorlooptijd. Zo blijft je voorraad continu representatief.
          </p>

          <div class="card__text" style="margin-top:12px;"><b>Belangrijke voorwaarden</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>(Gerepareerde) schade / gespoten delen</b> graag vooraf melden.</li>
            <li>Diepe krassen zijn niet altijd volledig te verwijderen zonder risico; we kiezen altijd voor <b>veilig lakbehoud</b>.</li>
            <li>Bij zware vervuiling (rook, dieren, vlekken, bouwstof) kan een toeslag gelden — <b>altijd vooraf besproken</b>.</li>
          </ul>

          <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
            <a class="btn btn--dark" href="{{ route('info.index') }}">Terug</a>
                        <a class="btn btn--dark" href="{{ route('diensten') }}#pakketten">Bekijk showroompakketten</a>
            <a class="btn btn--primary" href="{{ route('contact') }}?route=dealers-showroom">Aanvraag</a>
           </div>
        </div>
      </div>

      {{-- RECHTERKANT: advies + snelle keuze --}}
      <div class="card">
        <div class="card__body">
          <div class="card__title">Advies (verkoop)</div>
          <p class="card__text" style="opacity:.88;">
            Meest gekozen voor verkoop en presentatie:
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Showroom</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Goud</b> — showroom totaal (interieur + exterieur + finishing)</li>
          </ul>

          <div class="card__text" style="margin-top:10px;"><b>Showroom + foto's</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Goud+</b> — showroom + professionele foto’s (advertentie-ready)</li>
          </ul>

          <div class="card__text" style="margin-top:10px;"><b>Snelle doorloop</b></div>
          <p class="card__text" style="opacity:.88;">
            Lever je voertuigen aan met planning? Dan kunnen we in veel gevallen dezelfde dag opleveren (afhankelijk van aantallen).
          </p>

          <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">

          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection