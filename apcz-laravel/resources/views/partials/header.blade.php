<header class="header" id="siteHeader">
  {{-- Topbar --}}
  <div class="topbar">
    <div class="container">
      <div class="topbar__left">
        <span class="topbar__item">
          <span class="topbar__icon" aria-hidden="true">📍</span>
          Zijtocht 1, 1507 CD Zaandam
        </span>

        <a class="topbar__item" href="tel:+31649777080">
          <span class="topbar__icon" aria-hidden="true">📞</span>
          06 - 49777080
        </a>

        <a class="topbar__item" href="mailto:info@apczaanstad.nl">
          <span class="topbar__icon" aria-hidden="true">✉️</span>
          info@apczaanstad.nl
        </a>
      </div>

      <div class="topbar__right">
        <a href="{{ route('faq') }}">FAQ</a>
        <a href="{{ route('vacatures') }}">Vacatures</a>

        <div class="topbar__social" aria-label="Social media">
          <a href="https://facebook.com/" target="_blank" rel="noopener" aria-label="Facebook">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M13.5 22v-8h2.7l.4-3h-3.1V9.1c0-.9.3-1.6 1.6-1.6H17V4.8c-.3 0-.9-.1-1.8-.1-2.9 0-4.7 1.7-4.7 4.9V11H7.5v3h3.1v8h2.9Z"/>
            </svg>
          </a>

          <a href="https://instagram.com/" target="_blank" rel="noopener" aria-label="Instagram">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9a5.5 5.5 0 0 1-5.5 5.5h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9Zm9.75 1.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"/>
            </svg>
          </a>

          <a href="https://snapchat.com/" target="_blank" rel="noopener" aria-label="Snapchat">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M12 2.2c2.9 0 5.1 2.3 5.1 5.2 0 .6 0 1.4-.1 2.1.2.3.7.8 1.7 1.1.3.1.5.4.4.7-.1.4-.4.6-.8.8-.5.2-1 .4-1.5.5-.2.8-.7 1.4-1.4 1.9-.8.6-1.8 1-2.8 1.1l-.2.9c-.1.3-.3.5-.6.5s-.5-.2-.6-.5l-.2-.9c-1-.1-2-.5-2.8-1.1-.7-.5-1.2-1.1-1.4-1.9-.5-.1-1-.3-1.5-.5-.4-.2-.7-.4-.8-.8-.1-.3.1-.6.4-.7 1-.3 1.5-.8 1.7-1.1-.1-.7-.1-1.5-.1-2.1C6.9 4.5 9.1 2.2 12 2.2Zm0 1.8c-2 0-3.5 1.6-3.5 3.6 0 .8.1 1.7.2 2.3.1.4-.1.8-.4 1.1-.2.2-.5.4-.8.6.3.1.6.1 1 .2.4 0 .7.3.8.7.1.5.4.9.9 1.2.7.5 1.6.8 2.5.8s1.8-.3 2.5-.8c.5-.3.8-.7.9-1.2.1-.4.4-.7.8-.7.4 0 .7-.1 1-.2-.3-.2-.6-.4-.8-.6-.3-.3-.5-.7-.4-1.1.1-.6.2-1.5.2-2.3 0-2-1.5-3.6-3.5-3.6Z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Main header --}}
  <div class="container">
    <a class="brand" href="{{ route('home') }}" aria-label="Ga naar homepage">
      <div class="brand__logo">
        <img src="{{ asset('assets/img/logo.png') }}" alt="APCZ logo">
      </div>

      <div class="brand__text">
        <div class="brand__name">Auto Poets Centrale Zaanstad</div>
        <div class="brand__tagline">Detailing • Coatings • Showroom</div>
      </div>
    </a>

    <nav class="nav" aria-label="Hoofdnavigatie">
      <a href="{{ route('diensten') }}" class="{{ request()->routeIs('diensten') ? 'active' : '' }}">Pakketten</a>
      <a href="{{ route('projecten') }}" class="{{ request()->routeIs('projecten') ? 'active' : '' }}">Projecten</a>
      <a href="{{ route('over') }}" class="{{ request()->routeIs('over') ? 'active' : '' }}">Over ons</a>
      <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <div class="header__actions">
      <a class="btn btn--whatsapp" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
      <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>

      <button
  class="hamburger"
  id="hamburger"
  type="button"
  aria-label="Menu openen"
  aria-expanded="false"
  aria-controls="mobileMenu"
>
  <span class="hamburger__lines" aria-hidden="true">
    <span></span>
    <span></span>
    <span></span>
  </span>
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
      <a href="{{ route('contact') }}">Contact</a>
      <a href="{{ route('contact') }}" class="cta">Afspraak plannen</a>
      <a href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
    </div>
  </div>
</header>