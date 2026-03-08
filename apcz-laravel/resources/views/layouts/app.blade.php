<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>@yield('title', 'Auto Poets Centrale Zaanstad')</title>
  <meta
    name="description"
    content="@yield('meta_description', 'Auto Poets Centrale Zaanstad is specialist in auto laten poetsen, auto detailing, showroomklaar maken en interieurreiniging in Zaandam, Zaanstad, Wormerveer, Assendelft, Koog aan de Zaan, Krommenie, Purmerend en Amsterdam.')"
  />
  <meta
    name="keywords"
    content="@yield('meta_keywords', 'auto laten poetsen zaandam, autopoetsbedrijf zaanstad, auto detailing zaandam, showroomklaar maken, auto poetsen wormerveer, auto poetsen assendelft, autodetailing purmerend, auto reinigen amsterdam')"
  />
  <link rel="canonical" href="@yield('canonical', url()->current())"/>
  <meta name="robots" content="index,follow"/>

  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
</head>
<body>

  @include('partials.header')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')
  @include('partials.cookie-banner')

  <script src="{{ asset('assets/js/app.js') }}" defer></script>
  <script src="{{ asset('assets/js/cookies.js') }}" defer></script>
</body>
</html>