@extends('layouts.app')
@section('title','Dealers & showroom — Info | APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="center stack">
      <h1 class="h1">Dealers & showroom</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Verkoopklare presentatie met constante kwaliteit. Ideaal voor dealers, handelaren en partijen die auto’s strak willen afleveren of adverteren.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
        <a class="btn btn--dark" href="{{ route('diensten') }}#pakketten">Bekijk pakketten</a>
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak / offerte</a>
      </div>
    </div>

    <div class="card" style="margin-top:18px;">
      <div class="card__media">
        <img src="{{ asset('assets/img/info-dealers.jpg') }}" alt="Dealers & showroom">
      </div>
      <div class="card__body">
        <div class="grid-3" style="align-items:start;">
          <div>
            <div class="card__title">Wat leveren we?</div>
            <ul class="card__text" style="margin-top:10px; padding-left:18px;">
              <li>Showroomwaardige uitstraling (interieur + exterieur + finishing).</li>
              <li>Detail-afwerking voor foto’s en bezichtigingen.</li>
              <li>Consistente kwaliteit over meerdere voertuigen.</li>
              <li>Optioneel: <b>professionele foto’s</b> (Goud+).</li>
            </ul>
          </div>

          <div>
            <div class="card__title">Voor grotere partijen</div>
            <ul class="card__text" style="margin-top:10px; padding-left:18px;">
              <li>Planning per batch (bijv. 3–10 auto’s per dag, afhankelijk van staat).</li>
              <li>Vaste afspraken en duidelijke oplevermomenten.</li>
              <li>Heldere communicatie: wat wel/niet haalbaar is per auto.</li>
              <li>Mogelijkheid tot periodieke samenwerking.</li>
            </ul>
          </div>

          <div>
            <div class="card__title">Aanrader</div>
            <ul class="card__text" style="margin-top:10px; padding-left:18px;">
              <li><b>Goud</b>: showroom totaalpakket (incl. motorruimte).</li>
              <li><b>Goud+</b>: showroom + foto’s voor advertenties.</li>
              <li>Ook mogelijk: alleen exterieur (Zilver+) voor snelle “shine”.</li>
            </ul>
          </div>
        </div>

        <p class="card__text" style="opacity:.85; margin-top:14px;">
          We werken graag met een korte intake per voertuig. Heb je (gerepareerde) schade of gespoten delen? Meld dit vooraf voor het beste resultaat.
        </p>
      </div>
    </div>

    <div class="center" style="margin-top:18px;">
      <a class="btn btn--dark" href="{{ route('diensten') }}">Terug naar diensten</a>
    </div>
  </div>
</section>
@endsection