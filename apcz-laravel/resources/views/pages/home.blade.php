@extends('layouts.app')

@section('title','Auto Poets Centrale Zaanstad — Detailing • Coatings • Showroom')

@section('content')

<section class="hero">
  {{-- Slideshow --}}
  <div id="heroSlider"
       class="hero__slider"
       data-slides="{{ asset('assets/img/hero-1.jfif') }},{{ asset('assets/img/hero-2.jfif') }},{{ asset('assets/img/hero-3.jfif') }},{{ asset('assets/img/hero-4.jfif') }},{{ asset('assets/img/hero-5.jfif') }}"
       data-interval="4600"
       data-alt="Auto Poets Centrale Zaanstad">
  </div>

  <div class="hero__content">
    <div class="container reveal">
      <div class="hero__card">
        <div class="kicker">Sinds 2003 • Zaanstad & Randstad</div>

        <h1 class="h1">
          Detailing met uitstraling.<br/>
          Afwerking op showroomniveau.
        </h1>

        <p class="lead">
          Bij Auto Poets Centrale Zaanstad draait het niet om “even snel schoon”.
          Wij werken nauwkeurig en met vaste stappen, zodat jouw auto er strak uitziet én verzorgd aanvoelt —
          van lak tot interieur, met aandacht voor elk detail.
        </p>

        <div class="usps">
          <div class="usp"><b>✓</b>Veilige technieken & premium producten</div>
          <div class="usp"><b>✓</b>Rustig, precies en consequent resultaat</div>
          <div class="usp"><b>✓</b>Voor particulier, zakelijk én dealers</div>
        </div>

        <div class="hero__cta">
          <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
          <a class="btn btn--outline" href="{{ route('diensten') }}">Bekijk pakketten</a>
        </div>

        <div class="card__text home-tip">
          Tip: lever je auto om <b>08:00</b> in — in de meeste gevallen kun je ‘m <b>dezelfde dag</b> weer ophalen (open tot <b>17:00</b>).
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Reviews --}}
<section class="section section--yellow" id="reviews">
  <div class="container center reveal">
    <div class="stars">★★★★★</div>
    <h2 class="h2">5-sterren ervaring. Elke keer opnieuw.</h2>

    <p class="p reviews-intro">
      Klanten kiezen ons om één reden: <b>consistentie</b>. Geen half werk — maar een afwerking die klopt.
      Wij leveren een nette uitstraling, frisse cabine en een lakbeeld dat je met vertrouwen kunt laten zien.
    </p>

    <div class="review-card review-card--home">
      <div class="review-card__top"></div>

      <div class="review-stage" id="reviewSlider">
        <div class="review-slide is-active">
          <p class="review-quote">
            “Auto was echt <b>showroom</b> teruggekomen. Interieur super netjes en lak strak. Duidelijke afspraken en snel klaar.”
          </p>
          <div class="review-meta"><b>— Johan</b> • Google review</div>
        </div>

        <div class="review-slide">
          <p class="review-quote">
            “Je ziet dat ze het met aandacht doen. Details kloppen, randen schoon, en geen ‘haastwerk’ vibe.”
          </p>
          <div class="review-meta"><b>— Klaas</b> • Google review</div>
        </div>

        <div class="review-slide">
          <p class="review-quote">
            “Perfect voor verkoop. Foto’s en presentatie top, auto was advertentie-klaar. Aanrader.”
          </p>
          <div class="review-meta"><b>— Willem</b> • Google review</div>
        </div>

        <button type="button" id="revPrev" class="review-nav review-nav--prev" aria-label="Vorige review">‹</button>
        <button type="button" id="revNext" class="review-nav review-nav--next" aria-label="Volgende review">›</button>
      </div>

      <div class="review-dots">
        <button type="button" class="review-dot is-active revDot" data-i="0" aria-label="Review 1"></button>
        <button type="button" class="review-dot revDot" data-i="1" aria-label="Review 2"></button>
        <button type="button" class="review-dot revDot" data-i="2" aria-label="Review 3"></button>
      </div>

      <div class="review-actions">
        <a class="btn btn--dark" href="https://www.google.com/search?q=auto+poets+centrale+zaanstad" target="_blank" rel="noopener">
          Bekijk Google reviews
        </a>
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
      </div>
    </div>
  </div>
</section>

{{-- Route kiezen --}}
<section class="section section--white" id="start">
  <div class="container reveal">
    <div class="center stack">
      <h2 class="h2">Wat wil je laten doen?</h2>
      <p class="p section-intro">
        Kies de route die bij je past. Van een snelle opfrisbeurt tot complete showroom-afwerking (eventueel met foto’s).
      </p>
    </div>

    <div class="grid-3 route-grid">
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/service-1.svg') }}" alt="Auto laten poetsen"/>
        </div>
        <div class="card__body">
          <div class="card__title">Auto laten poetsen</div>
          <p class="card__text">
            Voor dagelijks gebruik én liefhebbers die hun auto netjes en verzorgd willen houden.
            Wij zorgen voor een frisse uitstraling, strakke details en een representatieve finish — zonder onnodige poespas.
            Ideaal als je auto “gewoon strak” moet zijn, voor werk, weekend of verkoopvoorbereiding.
          </p>
          <a class="btn btn--dark" href="{{ route('info.auto') }}">Meer info</a>
        </div>
      </div>

      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/service-3.svg') }}" alt="Dealers & showroom"/>
        </div>
        <div class="card__body">
          <div class="card__title">Dealers & showroom</div>
          <p class="card__text">
            Verkoopklare presentatie met focus op detail en consistentie.
            Van showroomstaat tot complete aflever-ready afwerking — inclusief strak interieur, diepe glans en nette finishing.
            Ook geschikt voor grotere aantallen voertuigen en dealerpartijen, met optioneel professionele foto’s voor advertenties.
          </p>
          <a class="btn btn--dark" href="{{ route('info.dealers') }}">Meer info</a>
        </div>
      </div>

      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/service-2.svg') }}" alt="Wagenpark & zakelijk"/>
        </div>
        <div class="card__body">
          <div class="card__title">Wagenpark & zakelijk</div>
          <p class="card__text">
            Houd je wagenpark representatief richting klanten en medewerkers.
            Wij werken met <b>vaste afspraken</b>, een <b>snelle doorlooptijd</b> en <b>periodiek onderhoud</b> zodat je voertuigen altijd strak voor de dag komen.
            Perfect voor <b>bedrijfsauto’s</b>, <b>lease</b>, servicebussen en directie-auto’s — met duidelijke planning en heldere afspraken.
          </p>
          <a class="btn btn--dark" href="{{ route('info.zakelijk') }}">Meer info</a>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Waarom APCZ --}}
<section class="section section--yellow" id="over-home">
  <div class="container reveal">
    <div class="split split--home">
      <div class="stack">
        <span class="badge">+20 jaar ervaring • Vakmanschap</span>
        <h2 class="h2">Meer dan schoon. Dit is detailing met impact.</h2>

        <p class="p">
          Een goede poetsbeurt zie je direct — maar echte detailing voel je ook.
          Wij pakken de zichtbare én “lastige” punten aan: randen, kieren, contactpunten, doffe delen en het lakbeeld.
          Het doel is altijd hetzelfde: een auto die er weer strak en verzorgd bij staat.
        </p>

        <div class="usps usps--light">
          <div class="usp usp--light"><b>✓</b>Strak lakbeeld (waar veilig mogelijk)</div>
          <div class="usp usp--light"><b>✓</b>Fris interieur met detailafwerking</div>
          <div class="usp usp--light"><b>✓</b>Duidelijke afspraken & oplevering</div>
        </div>

        <div class="action-row">
          <a class="btn btn--dark" href="{{ route('over') }}">Lees ons verhaal</a>
          <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
        </div>
      </div>

      <div class="media-card">
        <img src="{{ asset('assets/img/studio.svg') }}"
             alt="Fotostudio / detailing"/>
      </div>
    </div>
  </div>
</section>

{{-- Pakketten preview --}}
<section class="section section--white" id="pakketten-preview">
  <div class="container reveal">
    <div class="center stack">
      <h2 class="h2">Onze pakketten</h2>
      <p class="p section-intro">
        6 duidelijke opties — van opfrissen tot complete showroom met foto’s.
        Klik op “Meer info” voor de volledige inhoud per pakket.
      </p>
    </div>

    <div class="grid-3 package-grid">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Brons</div>
          <p class="card__text">Snel fris & representatief. Perfect voor onderhoud.</p>
          <a class="btn btn--dark" href="{{ route('diensten') }}#bronze">Meer info</a>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Brons+</div>
          <p class="card__text">Alles van Brons + wax voor extra glans en bescherming.</p>
          <a class="btn btn--dark" href="{{ route('diensten') }}#bronze-wax">Meer info</a>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Zilver</div>
          <p class="card__text">Interieur dieptereiniging + nette afwerking binnen.</p>
          <a class="btn btn--dark" href="{{ route('diensten') }}#silver">Meer info</a>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Zilver+</div>
          <p class="card__text">Exterieur: wassen + 3-staps polijsten + wax.</p>
          <a class="btn btn--dark" href="{{ route('diensten') }}#exterieur">Meer info</a>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Goud</div>
          <p class="card__text">Showroompakket: interieur + exterieur + motorruimte.</p>
          <a class="btn btn--dark" href="{{ route('diensten') }}#gold">Meer info</a>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Goud+</div>
          <p class="card__text">Alles van Goud + professionele foto’s.</p>
          <a class="btn btn--dark" href="{{ route('diensten') }}#platinum">Meer info</a>
        </div>
      </div>
    </div>

    <div class="center section-cta">
      <a class="btn btn--primary" href="{{ route('diensten') }}">Alle pakketten bekijken</a>
    </div>
  </div>
</section>

{{-- Fotostudio --}}
<section class="section section--yellow" id="fotostudio">
  <div class="container reveal">
    <div class="center stack">
      <h2 class="h2">Fotostudio & verkooppresentatie</h2>
      <p class="p section-intro">
        Na het reinigen en showroomklaar maken verzorgen we ook de presentatie.
        Strakke belichting, rustige compositie en detailshots die direct geschikt zijn voor verkoop,
        advertenties en professionele online plaatsing.
      </p>

      <div class="action-row action-row--center" style="margin-top:8px;">
        <a class="btn btn--dark" href="{{ route('fotostudio') }}">Meer over fotostudio</a>
      </div>
    </div>

    <div class="studio-preview">
      <img src="{{ asset('assets/img/studio.svg') }}"
           alt="Fotostudio en verkooppresentatie"/>
    </div>
  </div>
</section>

{{-- Projecten preview --}}
<section class="section section--white" id="projecten">
  <div class="container reveal">
    <div class="center stack">
      <h2 class="h2">Projecten</h2>
      <p class="p section-intro">
        Een greep uit ons werk. Later kun je de placeholder afbeeldingen vervangen door jouw eigen foto’s.
      </p>
    </div>

    <div class="gallery">
      <img src="{{ asset('assets/img/hero-1.jfif') }}" alt="Project 1"/>
      <img src="{{ asset('assets/img/hero-2.jfif') }}" alt="Project 2"/>
      <img src="{{ asset('assets/img/hero-3.jfif') }}" alt="Project 3"/>
    </div>

    <div class="center section-cta">
      <a class="btn btn--primary" href="{{ route('projecten') }}">Meer projecten</a>
    </div>
  </div>
</section>

{{-- Eind CTA --}}
<section class="section section--dark" id="cta">
  <div class="container reveal">
    <div class="center stack">
      <h2 class="h2 cta-title">Klaar voor een auto die weer écht klopt?</h2>
      <p class="p section-intro section-intro--dark">
        Plan je afspraak of stuur ons direct een bericht. We denken mee over het beste pakket en leveren
        een afwerking die past bij de waarde van jouw voertuig.
      </p>

      <div class="action-row action-row--center">
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
        <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
      </div>
    </div>
  </div>
</section>

<script>
(function(){
  const slider = document.getElementById('reviewSlider');
  if(!slider) return;

  const slides = Array.from(slider.querySelectorAll('.review-slide'));
  const prev = document.getElementById('revPrev');
  const next = document.getElementById('revNext');
  const dots = Array.from(document.querySelectorAll('.revDot'));

  if (!slides.length || !prev || !next || !dots.length) return;

  let i = 0;
  let t = null;

  function setDot(active){
    dots.forEach((d, idx) => {
      d.classList.toggle('is-active', idx === active);
    });
  }

  function go(idx){
    slides[i].classList.remove('is-active');
    i = (idx + slides.length) % slides.length;
    slides[i].classList.add('is-active');
    setDot(i);
  }

  function start(){
    stop();
    t = setInterval(() => go(i + 1), 5200);
  }

  function stop(){
    if (t) clearInterval(t);
    t = null;
  }

  prev.addEventListener('click', () => {
    go(i - 1);
    start();
  });

  next.addEventListener('click', () => {
    go(i + 1);
    start();
  });

  dots.forEach(d => {
    d.addEventListener('click', () => {
      go(parseInt(d.dataset.i || '0', 10));
      start();
    });
  });

  slider.addEventListener('mouseenter', stop);
  slider.addEventListener('mouseleave', start);

  slides.forEach((s, idx) => s.classList.toggle('is-active', idx === 0));
  setDot(0);
  start();
})();
</script>

@endsection