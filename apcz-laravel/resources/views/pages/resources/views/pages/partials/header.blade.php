<header class="header" id="siteHeader">
  {{-- Topbar --}}
  <div class="topbar">
    <div class="container">
      <div class="topbar__left">
        <span class="topbar__item">
          <span class="topbar__icon">📍</span>
          Zijtocht 1, 1507 CD Zaandam
        </span>
        <a class="topbar__item" href="tel:+31649777080">
          <span class="topbar__icon">📞</span>
          06 - 49777080
        </a>
        <a class="topbar__item" href="mailto:boekingen@apczaanstad.nl">
          <span class="topbar__icon">✉️</span>
          boekingen@apczaanstad.nl
        </a>
      </div>

      <div class="topbar__right topbar__social">
        <a href="https://wa.me/31649777080" target="_blank" rel="noopener" aria-label="WhatsApp">WA</a>
        <a href="https://www.google.com/search?q=auto+poets+centrale+zaanstad" target="_blank" rel="noopener" aria-label="Google reviews">G</a>
      </div>
    </div>
  </div>

  {{-- Main header --}}
  <div class="container">
    <a class="brand" href="{{ route('home') }}">
      <div class="brand__logo">
        {{-- Zet hier je logo bestand --}}
        <img src="{{ asset('assets/img/logo.png') }}" alt="APCZ logo">
      </div>
      <div>
        <div class="brand__name">Auto Poets Centrale Zaanstad</div>
        <div class="brand__tagline">Detailing • Coatings • Showroom</div>
      </div>
    </a>

    <nav class="nav" aria-label="Hoofdnavigatie">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      <a href="{{ route('diensten') }}" class="{{ request()->routeIs('diensten') ? 'active' : '' }}">Pakketten</a>
      <a href="{{ route('projecten') }}" class="{{ request()->routeIs('projecten') ? 'active' : '' }}">Projecten</a>
      <a href="{{ route('over') }}" class="{{ request()->routeIs('over') ? 'active' : '' }}">Over ons</a>
      <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <div class="header__actions">
      <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
      <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>

      <button class="hamburger" id="hamburger" type="button" aria-label="Menu openen">
        ☰
      </button>
    </div>
  </div>

  {{-- Mobile menu --}}
  <div class="mobile-menu" id="mobileMenu">
    <div class="container">
      <a href="{{ route('home') }}">Home</a>
      <a href="{{ route('diensten') }}">Pakketten</a>
      <a href="{{ route('projecten') }}">Projecten</a>
      <a href="{{ route('over') }}">Over ons</a>
      <a href="{{ route('contact') }}" class="cta">Afspraak plannen</a>
      <a href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
    </div>
  </div>
</header>

<script>
(function(){
  const btn = document.getElementById('hamburger');
  const menu = document.getElementById('mobileMenu');
  const header = document.getElementById('siteHeader');

  if(btn && menu){
    btn.addEventListener('click', () => {
      const open = menu.style.display === 'block';
      menu.style.display = open ? 'none' : 'block';
    });
  }

  // kleine scroll state (optioneel)
  window.addEventListener('scroll', () => {
    if(!header) return;
    if(window.scrollY > 10) header.classList.add('is-scrolled');
    else header.classList.remove('is-scrolled');
  });
})();
</script>