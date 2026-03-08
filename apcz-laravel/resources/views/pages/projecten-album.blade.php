@extends('layouts.app')

@section('title', $albumTitle . ' projecten in Zaandam | APCZ')
@section('meta_description', $albumTitle . ' projecten in Zaandam en Zaanstad bekijken? Bekijk echte resultaten van Auto Poets Centrale Zaanstad op het gebied van ' . strtolower($albumTitle) . ', auto detailing, showroomklaar maken en professionele autoverzorging voor klanten uit Zaandam, Wormerveer, Assendelft, Koog aan de Zaan, Krommenie, Purmerend en Amsterdam.')
@section('meta_keywords', strtolower($albumTitle) . ' zaandam, ' . strtolower($albumTitle) . ' projecten, auto detailing zaandam, autopoetsbedrijf zaanstad, showroomklaar maken, autodetailing purmerend')
@section('canonical', url()->current())

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Projecten • Album • Resultaten</div>
      <h1 class="page-hero__title">{{ $albumTitle }} projecten in Zaandam</h1>
      <p class="page-hero__lead">
        {{ $albumDescription }}
        Nieuwe foto’s voegen wij doorlopend toe. Staat jouw type klus er nog niet tussen,
        neem dan gerust contact met ons op.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--dark" href="{{ route('projecten') }}">Terug naar projecten</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="card reveal" style="max-width:1100px; margin:0 auto 22px;">
      <div class="card__body" style="padding:30px 28px;">
        <div class="center stack">
          <div style="width:120px; height:4px; margin:0 auto 6px; border-radius:999px; background:linear-gradient(90deg,#f4c400,#ffe27a,#fff4cb);"></div>
          <p class="p section-intro">
            In dit album zie je voorbeelden van eerder uitgevoerde werkzaamheden binnen
            <b>{{ $albumTitle }}</b>. Zo krijg je een beter beeld van de behandeling,
            de afwerking en het resultaat dat wij nastreven.
          </p>
        </div>
      </div>
    </div>

    @if(!empty($images) && count($images) > 0)
      <div class="grid-3 reveal" style="margin-top:22px;">
        @foreach($images as $src)
          <div class="card">
            <div class="card__media">
              <img src="{{ $src }}" alt="{{ $albumTitle }} projectfoto van Auto Poets Centrale Zaanstad" loading="lazy">
            </div>
          </div>
        @endforeach
      </div>

      <div class="card reveal" style="margin-top:24px;">
        <div class="card__body">
          <div class="center stack">
            <h2 class="h2" style="margin-bottom:0;">{{ $albumTitle }} in Zaandam en omgeving</h2>
            <p class="p section-intro">
              Deze projectfoto’s laten zien hoe wij voertuigen behandelen voor klanten uit
              Zaandam, Zaanstad, Wormerveer, Assendelft, Koog aan de Zaan, Krommenie,
              Purmerend en Amsterdam. Zo krijg je een realistisch beeld van onze werkwijze,
              afwerking en het niveau dat wij nastreven.
            </p>
            <p class="p section-intro">
              Zoek je voorbeelden van <b>{{ strtolower($albumTitle) }}</b>, auto detailing,
              showroomklaar maken of professionele autoverzorging? Dan geeft dit album een goed beeld
              van wat er in de praktijk mogelijk is.
            </p>
          </div>
        </div>
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
              <img src="{{ $albumCover }}" alt="Placeholder {{ $i }} voor {{ $albumTitle }} album" loading="lazy">
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