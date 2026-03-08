@extends('layouts.app')

@section('title', 'Vacatures | Werken bij Auto Poets Centrale Zaanstad')
@section('meta_description', 'Bekijk vacatures bij Auto Poets Centrale Zaanstad in Zaandam. Werken in autoverzorging, interieurreiniging, polijsten, auto wassen en open sollicitaties voor gemotiveerde kandidaten met oog voor detail.')
@section('meta_keywords', 'vacatures zaandam autopoetsbedrijf, werken bij autopoetsbedrijf, vacature interieurreiniger auto, vacature polijster zaandam, auto detailer vacature, open sollicitatie autoverzorging')
@section('canonical', url('/vacatures'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Werken bij APCZ</div>
      <h1 class="page-hero__title">Vacatures bij Auto Poets Centrale Zaanstad</h1>
      <p class="page-hero__lead">
        Bij Auto Poets Centrale Zaanstad werken we dagelijks aan het verzorgen,
        reinigen en showroomklaar maken van voertuigen. Wij zoeken mensen
        die nauwkeurig werken, oog hebben voor detail en trots zijn op netjes afgeleverd werk.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--dark" href="#open">Bekijk vacatures</a>
        <a class="btn btn--primary" href="{{ route('contact') }}">Direct contact</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white" id="open">
  <div class="container reveal">

    <div class="card reveal" style="max-width:1100px; margin:0 auto 22px;">
      <div class="card__body" style="padding:30px 28px;">
        <div class="center stack">
          <p class="p section-intro">
            Wil je werken in de autoverzorging in <b>Zaandam</b> of <b>Zaanstad</b>? Bij Auto Poets Centrale Zaanstad
            zoeken we collega’s die netjes werken, verantwoordelijkheid nemen en gevoel hebben voor kwaliteit.
            Of je nu ervaring hebt met interieurreiniging, polijsten of auto wassen: we staan open voor mensen
            die zorgvuldig en gemotiveerd zijn.
          </p>
        </div>
      </div>
    </div>

    <div class="grid-3">

      {{-- Vacature 1 --}}
      <div class="card">
        <div class="card__body">

          <div class="card__title">Ervaren interieurreiniger (auto’s)</div>

          <p class="card__text">
            Voor het reinigen en verzorgen van auto-interieurs zoeken wij iemand
            die nauwkeurig werkt en oog heeft voor detail. Je zorgt ervoor dat
            voertuigen fris, schoon en representatief worden opgeleverd.
          </p>

          <p class="card__text">
            Je begrijpt dat juist het interieur vaak het verschil maakt in beleving:
            een nette cabine, schone bekleding, frisse ramen en een verzorgde afwerking
            zorgen direct voor een sterkere indruk bij de klant.
          </p>

          <div style="margin-top:16px; display:flex; gap:10px; flex-wrap:wrap;">
            <a class="btn btn--dark" href="{{ route('vacature.interieur') }}">Bekijk vacature</a>
            <a class="btn btn--primary" href="{{ route('contact') }}?pakket=Vacature%20interieur">Solliciteer</a>
          </div>

        </div>
      </div>

      {{-- Vacature 2 --}}
      <div class="card">
        <div class="card__body">

          <div class="card__title">Polijster & autowasser (oproep)</div>

          <p class="card__text">
            Voor het wassen en polijsten van voertuigen zoeken wij iemand die
            zorgvuldig werkt en gevoel heeft voor lakverzorging. Je helpt bij
            het voorbereiden, polijsten en netjes afwerken van auto's.
          </p>

          <p class="card__text">
            Daarbij is het belangrijk dat je rustig werkt, veilig met lak omgaat
            en begrijpt dat een nette afwerking niet alleen zichtbaar moet zijn,
            maar ook technisch goed uitgevoerd moet worden.
          </p>

          <div style="margin-top:16px; display:flex; gap:10px; flex-wrap:wrap;">
            <a class="btn btn--dark" href="{{ route('vacature.polijsten') }}">Bekijk vacature</a>
            <a class="btn btn--primary" href="{{ route('contact') }}?pakket=Vacature%20polijsten">Solliciteer</a>
          </div>

        </div>
      </div>

      {{-- Open sollicitatie --}}
      <div class="card">
        <div class="card__body">

          <div class="card__title">Open sollicitatie</div>

          <p class="card__text">
            Staat jouw functie er niet tussen, maar denk je dat je goed past binnen
            Auto Poets Centrale Zaanstad? Dan kun je altijd een open sollicitatie sturen.
          </p>

          <p class="card__text">
            Wij staan open voor gemotiveerde mensen met gevoel voor autoverzorging,
            netheid, discipline en oog voor detail.
          </p>

          <ul class="card__text" style="margin-top:10px; padding-left:18px;">
            <li>Autowassers en voorbereiders</li>
            <li>Interieurreinigers</li>
            <li>Polijsters en detailers</li>
            <li>Gemotiveerde aanpakkers met leervermogen</li>
          </ul>

          <div style="margin-top:16px; display:flex; gap:10px; flex-wrap:wrap;">
            <a class="btn btn--primary" href="{{ route('contact') }}?pakket=Open%20sollicitatie">Open sollicitatie</a>
            <a class="btn btn--dark" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
          </div>

          <p class="card__text" style="opacity:.75; margin-top:12px;">
            Vermeld in je bericht kort wie je bent, waar je ervaring ligt en hoeveel uur je beschikbaar bent.
          </p>

        </div>
      </div>

    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Werken in autoverzorging in Zaandam en omgeving</h2>
          <p class="p section-intro">
            Auto Poets Centrale Zaanstad werkt voor klanten uit <b>Zaandam</b>, <b>Zaanstad</b>,
            <b>Wormerveer</b>, <b>Assendelft</b>, <b>Koog aan de Zaan</b>, <b>Krommenie</b>,
            <b>Purmerend</b> en <b>Amsterdam</b>. Daarom zoeken we mensen die willen meewerken aan
            nette oplevering, representatieve auto’s en kwaliteit in detail.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection