@extends('layouts.app')
@section('title','Auto laten poetsen — Info | APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="center stack">
      <h1 class="h1">Auto laten poetsen</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Een frisse, verzorgde auto — strak in details en prettig om in te rijden. Hieronder zie je hoe wij werken en wat je kunt verwachten.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
        <a class="btn btn--dark" href="{{ route('diensten') }}#pakketten">Bekijk pakketten</a>
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak / offerte</a>
      </div>
    </div>

    <div class="card" style="margin-top:18px;">
      <div class="card__media">
        {{-- Vervang later dit pad door jouw eigen foto --}}
        <img src="{{ asset('assets/img/info-auto.jpg') }}" alt="Auto laten poetsen">
      </div>
      <div class="card__body">
        <div class="grid-3" style="align-items:start;">
          <div>
            <div class="card__title">Werkwijze</div>
            <ul class="card__text" style="margin-top:10px; padding-left:18px;">
              <li>Intake: wensen, staat van de auto en doel (dagelijks / verkoop / opfrissen).</li>
              <li>Veilige reiniging: juiste middelen en technieken per onderdeel.</li>
              <li>Afwerking: details strak, interieur fris, buitenkant verzorgd.</li>
              <li>Oplevering: auto netjes klaar, met advies voor onderhoud.</li>
            </ul>
          </div>

          <div>
            <div class="card__title">Wanneer kiezen?</div>
            <ul class="card__text" style="margin-top:10px; padding-left:18px;">
              <li>Je wilt een nette auto voor werk of weekend.</li>
              <li>Je auto moet “fris” ogen zonder volledige lakcorrectie.</li>
              <li>Je wil periodiek onderhoud (bijv. elke 2–6 weken).</li>
              <li>Je wil richting verkoop alvast een verzorgde basis.</li>
            </ul>
          </div>

          <div>
            <div class="card__title">Praktisch</div>
            <ul class="card__text" style="margin-top:10px; padding-left:18px;">
              <li><b>Meestal klaar dezelfde dag</b> bij inleveren om 08:00.</li>
              <li>Openingstijden: <b>08:00 – 17:00</b> (za: op afspraak).</li>
              <li>Toeslagen mogelijk bij extra vervuiling / donkere kleuren.</li>
            </ul>
          </div>
        </div>

        <p class="card__text" style="opacity:.85; margin-top:14px;">
          Tip: wil je vooral glans en bescherming? Bekijk <b>Brons+</b> (opfrissen + wax) of <b>Zilver+</b> (exterieur behandeling).
        </p>
      </div>
    </div>

    <div class="center" style="margin-top:18px;">
      <a class="btn btn--dark" href="{{ route('diensten') }}">Terug naar diensten</a>
    </div>
  </div>
</section>
@endsection