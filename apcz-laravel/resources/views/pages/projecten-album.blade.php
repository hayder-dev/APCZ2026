@extends('layouts.app')

@section('title', 'Projecten — ' . $albumTitle . ' — APCZ')

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Projecten • Album • Resultaten</div>
      <h1 class="page-hero__title">Album: {{ $albumTitle }}</h1>
      <p class="page-hero__lead">
        {{ $albumDescription }}
        Nieuwe foto’s voegen wij doorlopend toe. Staat jouw type klus er nog niet tussen,
        neem dan gerust contact met ons op.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--dark" href="{{ route('projecten') }}">Terug naar projecten</a>
        <a class="btn btn--primary" href="{{ route('contact') }}">Neem contact op</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="card reveal" style="max-width:1100px; margin:0 auto 22px;">
      <div class="card__body" style="padding:30px 28px;">
        <div class="center stack">
          <span class="badge">Projectalbum • {{ $albumTitle }}</span>
          <p class="p section-intro">
            Deze pagina laat voorbeelden zien van eerder uitgevoerde werkzaamheden binnen het album <b>{{ $albumTitle }}</b>.
            Zo krijg je een beter beeld van het type behandeling, de afwerking en het resultaat dat wij nastreven.
          </p>
        </div>
      </div>
    </div>

    @if(!empty($images) && count($images) > 0)
      <div class="grid-3 reveal" style="margin-top:22px;">
        @foreach($images as $src)
          <div class="card">
            <div class="card__media">
              <img src="{{ $src }}" alt="Projectfoto {{ $albumTitle }}" loading="lazy">
            </div>
          </div>
        @endforeach
      </div>

      <div class="card reveal" style="margin-top:24px;">
        <div class="card__body">
          <div class="center stack">
            <h2 class="h2" style="margin-bottom:0;">Ook een vergelijkbaar project?</h2>
            <p class="p section-intro">
              Wil je jouw voertuig op vergelijkbare wijze laten behandelen, opfrissen of verkoopklaar laten maken?
              Neem gerust contact met ons op, dan kijken we samen naar de juiste aanpak.
            </p>
            <div class="action-row action-row--center" style="margin-top:8px;">
              <a class="btn btn--primary" href="{{ route('contact') }}">Neem contact op</a>
              <a class="btn" href="https://wa.me/31649777080" target="_blank" rel="noopener" style="background:#25D366; color:#07140c; border-color:#25D366;">WhatsApp</a>
            </div>
          </div>
        </div>
      </div>
    @else
      <div class="grid-3 reveal" style="margin-top:22px;">
        @for($i = 1; $i <= 12; $i++)
          <div class="card">
            <div class="card__media">
              <img src="{{ $albumCover }}" alt="Placeholder {{ $i }} voor {{ $albumTitle }}" loading="lazy">
            </div>
            <div class="card__body">
              <div class="card__title">{{ $albumTitle }} — voorbeeld {{ $i }}</div>
              <p class="card__text" style="opacity:.85;">
                Tijdelijke placeholder. Voeg later je eigen projectfoto’s toe om dit album automatisch te vullen.
              </p>
            </div>
          </div>
        @endfor
      </div>

      <div class="card reveal" style="margin-top:24px;">
        <div class="card__body">
          <div class="card__title">Foto’s toevoegen</div>
          <p class="card__text" style="margin-bottom:10px;">
            Dit album bevat op dit moment nog geen eigen foto’s. Zodra je afbeeldingen toevoegt,
            wordt deze pagina automatisch gevuld.
          </p>
          <p class="card__text" style="margin-bottom:0;">
            Plaats je bestanden in:
            <b>public/assets/projects/{{ $album }}/</b><br>
            Ondersteunde formaten: <b>jpg, jpeg, png, webp</b>.
          </p>
        </div>
      </div>

      <div class="card reveal" style="margin-top:24px;">
        <div class="card__body">
          <div class="center stack">
            <h2 class="h2" style="margin-bottom:0;">Nog geen foto’s zichtbaar?</h2>
            <p class="p section-intro">
              Geen probleem. Dit album is alvast klaar in de juiste stijl en vult zichzelf zodra de eerste beelden zijn toegevoegd.
            </p>
            <div class="action-row action-row--center" style="margin-top:8px;">
              <a class="btn btn--dark" href="{{ route('projecten') }}">Terug naar projecten</a>
              <a class="btn btn--primary" href="{{ route('contact') }}">Neem contact op</a>
            </div>
          </div>
        </div>
      </div>
    @endif

  </div>
</section>

@endsection