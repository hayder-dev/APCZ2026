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
