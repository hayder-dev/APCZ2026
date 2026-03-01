@extends('layouts.app')
@section('title','Wagenpark & zakelijk — Info | APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="center stack">
      <h1 class="h1">Wagenpark & zakelijk</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Voor bedrijven die hun voertuigen representatief willen houden. Duidelijke afspraken, snelle doorlooptijd en periodiek onderhoud — afgestemd op jouw planning.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
        <a class="btn btn--dark" href="{{ route('contact') }}">Zakelijk aanvragen</a>
        <a class="btn btn--primary" href="{{ route('diensten') }}#pakketten">Bekijk pakketten</a>
      </div>
    </div>

    <div class="card" style="margin-top:18px;">
      <div class="card__media">
        <img src="{{ asset('assets/img/info-zakelijk.jpg') }}" alt="Wagenpark & zakelijk">
      </div>
      <div class="card__body">
        <div class="grid-3" style="align-items:start;">
          <div>
            <div class="card__title">Voor wie?</div>
            <ul class="card__text" style="margin-top:10px; padding-left:18px;">
              <li>Bedrijfsauto’s, lease, servicebussen en directie-auto’s.</li>
              <li>Bedrijven met terugkerende poetsbehoefte.</li>
              <li>Organisaties die voertuigen “klant-klaar” willen houden.</li>
            </ul>
          </div>

          <div>
            <div class="card__title">Hoe werken we?</div>
            <ul class="card__text" style="margin-top:10px; padding-left:18px;">
              <li>Vaste planning: wekelijks / tweewekelijks / maandelijks.</li>
              <li>Afspraak = afspraak: duidelijke oplevermomenten.</li>
              <li>Constante uitstraling door dezelfde werkwijze.</li>
              <li>Mogelijkheid tot combinatie met extra’s (koplampen, geur, etc.).</li>
            </ul>
          </div>

          <div>
            <div class="card__title">Zakelijk voordeel</div>
            <ul class="card__text" style="margin-top:10px; padding-left:18px;">
              <li>Snelle doorlooptijd en duidelijke communicatie.</li>
              <li>Periodiek onderhoud: minder “grote” klussen achteraf.</li>
              <li>Representatief naar klanten: eerste indruk telt.</li>
            </ul>
          </div>
        </div>

        <p class="card__text" style="opacity:.85; margin-top:14px;">
          Wil je meerdere voertuigen plannen? Stuur je aantallen, type voertuigen en gewenste frequentie — dan maken we een passend voorstel.
        </p>
      </div>
    </div>

    <div class="center" style="margin-top:18px;">
      <a class="btn btn--dark" href="{{ route('contact') }}">Zakelijk contact</a>
    </div>
  </div>
</section>
@endsection