<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>@yield('title', 'Auto Poets Centrale Zaanstad')</title>
  <meta
    name="description"
    content="@yield('meta_description', 'Luxe autodetailing in Zaanstad: wassen, interieur, showroomklaar, coatings en fotostudio.')"
  />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
</head>
<body>

  @include('partials.header')

  <main>
    @yield('content')
  </main>

  <footer class="footer">
    <div class="container footer__bottom">
      <div>© 2026 Auto Poets Centrale Zaanstad — Alle rechten voorbehouden.</div>
      <div>
        <a href="{{ route('privacy') }}">Privacy</a>
        •
        <a href="{{ route('voorwaarden') }}">Voorwaarden</a>
      </div>
    </div>
  </footer>

  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>