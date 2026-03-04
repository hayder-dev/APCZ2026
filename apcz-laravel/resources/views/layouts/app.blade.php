<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>@yield('title', 'Auto Poets Centrale Zaanstad')</title>
  <meta name="description" content="@yield('meta_description', 'Luxe autodetailing in Zaanstad: wassen, interieur, showroomklaar, coatings en fotostudio.')"/>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
</head>
<body>

  {{-- ✅ TOPBAR (bovenste balk) --}}
  <div class="topbar">
    <div class="container">
      <div class="topbar__left">
        <span class="topbar__item">
          <span class="topbar__icon" aria-hidden="true">☎</span>
          <a href="tel:+31649777080">06 - 49777080</a>
        </span>

        <span class="topbar__item">
          <span class="topbar__icon" aria-hidden="true">✉</span>
          <a href="mailto:boekingen@apczaanstad.nl">boekingen@apczaanstad.nl</a>
        </span>

        {{-- Contact extra zichtbaar bovenin (zoals je wilde) --}}
        <span class="topbar__item">
          <span class="topbar__icon" aria-hidden="true">➜</span>
          <a href="{{ route('contact') }}"><b>Contact</b></a>
        </span>
      </div>

      <div class="topbar__right">
        <div class="topbar__social" aria-label="Social media">
          <a href="https://instagram.com/" target="_blank" rel="noopener" aria-label="Instagram">
            IG
          </a>
          <a href="https://facebook.com/" target="_blank" rel="noopener" aria-label="Facebook">
            FB
          </a>
        </div>
      </div>
    </div>
  </div>

  <header class="header">
    <div class="container">
      <a class="brand" href="{{ route('home') }}">
        <div class="brand__logo">
          <img src="{{ asset('assets/img/logo.png') }}" alt="APCZ" />
        </div>
        <div>
          <div class="brand__name">Auto Poets Centrale Zaanstad</div>
          <div class="brand__tagline">Detailing • Coatings • Showroom</div>
        </div>
      </a>

      <nav class="nav" aria-label="Hoofdmenu">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('over') }}">Over</a>
        <a href="{{ route('diensten') }}">Diensten</a>
        <a href="{{ route('projecten') }}">Projecten</a>
        <a href="{{ route('zakelijk') }}">Zakelijk</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('faq') }}">faq</a>
        <a href="{{ route('vacatures') }}">Vacatures</a>
      </nav>

      <div class="header__actions">
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <footer class="footer">
    <div class="container footer__bottom">
      <div>© 2026 Auto Poets Centrale Zaanstad — Alle rechten voorbehouden.</div>
      <div><a href="{{ route('privacy') }}">Privacy</a> • <a href="{{ route('voorwaarden') }}">Voorwaarden</a></div>
    </div>
  </footer>

  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>