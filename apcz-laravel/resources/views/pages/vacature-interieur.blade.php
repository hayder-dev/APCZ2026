@extends('layouts.app')

@section('title', 'Vacature interieurreiniger in Zaandam | APCZ')
@section('meta_description', 'Vacature interieurreiniger in Zaandam bij Auto Poets Centrale Zaanstad. Werk aan professionele interieurreiniging van auto’s voor particulieren, dealers en zakelijke klanten in een nette werkomgeving met focus op detail.')
@section('meta_keywords', 'vacature interieurreiniger zaandam, vacature auto interieur reinigen, werken bij autopoetsbedrijf, autoverzorging vacature zaanstad, detailing vacature, interieur auto reinigen werk')
@section('canonical', url('/vacature/interieur'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Vacature</div>
      <h1 class="page-hero__title">Ervaren interieurreiniger (auto’s)</h1>
      <p class="page-hero__lead">
        Werk jij graag nauwkeurig en zie jij details waar anderen overheen kijken?
        Voor het reinigen en verzorgen van auto-interieurs zijn wij op zoek naar iemand
        die kwaliteit belangrijk vindt en trots is op netjes afgeleverd werk.
      </p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container reveal">

    <div class="card" style="max-width:1100px; margin:0 auto 22px;">
      <div class="card__body" style="padding:30px 28px;">
        <div class="center stack">

          <div style="width:120px;height:4px;margin:0 auto 6px;border-radius:999px;background:linear-gradient(90deg,#f4c400,#ffe27a,#fff4cb);"></div>

          <p class="p section-intro">
            Auto Poets Centrale Zaanstad is gespecialiseerd in professionele voertuigverzorging.
            Wij werken dagelijks aan het reinigen, opfrissen en showroomklaar maken van auto's
            voor zowel particuliere als zakelijke klanten in <b>Zaandam</b>, <b>Zaanstad</b> en omgeving.
          </p>

          <p class="p section-intro">
            Voor het interieurwerk zoeken wij iemand die nauwkeurig werkt,
            oog heeft voor detail en begrijpt dat een nette afwerking het verschil maakt.
          </p>

        </div>
      </div>
    </div>

    <div class="grid-3" style="grid-template-columns:1.2fr .8fr; gap:20px;">

      <div class="card">
        <div class="card__body">

          <div class="card__title">Wat ga je doen?</div>

          <p class="card__text">
            Als interieurreiniger ben je verantwoordelijk voor het grondig reinigen en verzorgen
            van auto-interieurs. Je werkt zorgvuldig en zorgt ervoor dat voertuigen
            fris, schoon en representatief worden opgeleverd.
          </p>

          <ul class="card__text" style="margin-top:10px; padding-left:18px;">
            <li>Grondig reinigen van auto-interieurs</li>
            <li>Stofzuigen van vloeren, stoelen en kofferbak</li>
            <li>Detailwerk in kieren, randen en moeilijk bereikbare plekken</li>
            <li>Reinigen van bekleding, kunststofdelen en contactpunten</li>
            <li>Ramen aan de binnenzijde reinigen</li>
            <li>Eindcontrole en nette oplevering van het voertuig</li>
          </ul>

          <div class="card__title" style="margin-top:20px;">Wat vragen wij?</div>

          <ul class="card__text" style="margin-top:10px; padding-left:18px;">
            <li>Ervaring met interieurreiniging van auto's is een sterke pré</li>
            <li>Oog voor detail en gevoel voor kwaliteit</li>
            <li>Je werkt netjes, zelfstandig en zorgvuldig</li>
            <li>Goede beheersing van de Nederlandse taal</li>
            <li>Betrouwbare werkhouding en verantwoordelijkheidsgevoel</li>
          </ul>

          <div class="card__title" style="margin-top:20px;">Wat bieden wij?</div>

          <ul class="card__text" style="margin-top:10px; padding-left:18px;">
            <li>Werken binnen een professioneel detailingbedrijf</li>
            <li>Een team waarin kwaliteit centraal staat</li>
            <li>Mogelijkheid om vaardigheden verder te ontwikkelen</li>
            <li>Doorgroeimogelijkheden richting detailing of exterieurwerk</li>
            <li>Uren en planning in overleg</li>
          </ul>

          <div style="margin-top:18px; display:flex; gap:10px; flex-wrap:wrap;">
            <a class="btn btn--primary" href="{{ route('contact') }}?pakket=Vacature%20interieur">Solliciteer</a>
            <a class="btn btn--dark" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
          </div>

        </div>
      </div>

      <div class="card">
        <div class="card__body">

          <div class="card__title">Snel solliciteren</div>

          <p class="card__text">
            Wil je solliciteren? Stuur ons kort de volgende informatie:
          </p>

          <ul class="card__text" style="margin-top:10px; padding-left:18px;">
            <li>Naam en telefoonnummer</li>
            <li>Korte omschrijving van je ervaring</li>
            <li>Beschikbaarheid (dagen / uren)</li>
            <li>Woonplaats</li>
          </ul>

          <p class="card__text" style="opacity:.75; margin-top:12px;">
            Vermeld in je bericht: <b>“Vacature Interieurreiniger”</b>.
          </p>

          <p class="card__text" style="opacity:.75; margin-top:8px;">
            We nemen daarna zo snel mogelijk contact met je op.
          </p>

        </div>
      </div>

    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Werken in autoverzorging in Zaandam</h2>
          <p class="p section-intro">
            Deze vacature is interessant voor mensen uit <b>Zaandam</b>, <b>Zaanstad</b>,
            <b>Wormerveer</b>, <b>Assendelft</b>, <b>Koog aan de Zaan</b>, <b>Krommenie</b>,
            <b>Purmerend</b> en <b>Amsterdam</b> die willen werken in autoverzorging,
            interieurreiniging en professionele voertuigafwerking.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection