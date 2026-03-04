@extends('layouts.app')
@section('title','Info — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">

    {{-- Intro --}}
    <div class="center stack">
      <h1 class="h1">Info & werkwijze</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Hieronder vind je extra uitleg over onze werkwijze en wat je precies kunt verwachten.
        Kies het onderwerp dat bij jouw situatie past — van “gewoon strak” tot showroom- en wagenparkbehandeling.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
      </div>
    </div>

    {{-- 3 onderwerpen als cards --}}
    <div class="grid-3" style="margin-top:18px; align-items:start;">

      {{-- 1) Auto --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/info-auto.jpg') }}" alt="Auto laten poetsen" style="width:100%; height:auto; display:block;">
        </div>
        <div class="card__body">
          <div class="card__title">Auto laten poetsen</div>
          <p class="card__text">
            Voor dagelijks gebruik én liefhebbers. Veilige reiniging, nette details en een verzorgde afwerking —
            ideaal voor werk, weekend of verkoopvoorbereiding.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('info.auto') }}">Meer info</a>
          </div>
        </div>
      </div>

      {{-- 2) Dealers --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/info-dealers.jpg') }}" alt="Dealers & showroom" style="width:100%; height:auto; display:block;">
        </div>
        <div class="card__body">
          <div class="card__title">Dealers & showroom</div>
          <p class="card__text">
            Verkoopklare presentatie voor voorraad en showroom. Consistente kwaliteit, duidelijke planning en optioneel
            professionele foto’s voor advertentie-ready materiaal.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('info.dealers') }}">Meer info</a>
          </div>
        </div>
      </div>

      {{-- 3) Zakelijk --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/info-zakelijk.jpg') }}" alt="Wagenpark & zakelijk" style="width:100%; height:auto; display:block;">
        </div>
        <div class="card__body">
          <div class="card__title">Wagenpark & zakelijk</div>
          <p class="card__text">
            Houd je wagenpark representatief met periodiek onderhoud en vaste afspraken.
            Geschikt voor bedrijfsauto’s, lease, servicebussen en directie-voertuigen.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('info.zakelijk') }}">Meer info</a>
          </div>
        </div>
      </div>

    </div>

    {{-- Extra blok onderaan --}}
    <div class="card" style="margin-top:18px;">
      <div class="card__body center">
        <div class="card__title">Vragen? Neem contact met ons.</div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection