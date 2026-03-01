@extends('layouts.app')

@section('title', 'Projecten — ' . ucfirst($album) . ' — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="stack center">
      <h1 class="h1">Album: {{ ucfirst($album) }}</h1>

      <p class="p" style="max-width:980px; margin:0 auto;">
        Hieronder zie je voorbeelden uit ons album <b>{{ ucfirst($album) }}</b>.
        Nieuwe foto’s voegen we continu toe. Staat jouw type klus er nog niet bij? Vraag gerust een offerte aan.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
        <a class="btn btn--dark" href="{{ route('projecten') }}">Terug naar projecten</a>
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak / offerte</a>
      </div>
    </div>

    <div style="margin-top:22px;">
      {{-- Als er images zijn: toon ze. Anders: 12 placeholders --}}
      @if(!empty($images) && count($images) > 0)
        <div class="grid-3" style="margin-top:18px;">
          @foreach($images as $src)
            <div class="card">
              <div class="card__media">
                <img src="{{ $src }}" alt="Project foto {{ ucfirst($album) }}" loading="lazy">
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="grid-3" style="margin-top:18px;">
          @for($i=1; $i<=12; $i++)
            <div class="card">
              <div class="card__media">
                <img src="{{ asset('assets/img/hero-1.jfif') }}" alt="Placeholder {{ $i }}" loading="lazy">
              </div>
              <div class="card__body">
                <div class="card__title">{{ ucfirst($album) }} — voorbeeld {{ $i }}</div>
                <p class="card__text" style="opacity:.85;">
                  Placeholder. Voeg later jouw eigen foto’s toe in de map:
                  <b>/public/assets/projects/{{ $album }}/</b>
                </p>
              </div>
            </div>
          @endfor
        </div>

        <div class="card" style="margin-top:18px;">
          <div class="card__body">
            <div class="card__title">Foto’s toevoegen (later)</div>
            <p class="card__text" style="opacity:.85;">
              Zet straks je foto’s in:
              <b>public/assets/projects/{{ $album }}/</b>
              (jpg, jpeg, png of webp). Dan vult dit album automatisch.
            </p>
          </div>
        </div>
      @endif
    </div>

  </div>
</section>
@endsection
