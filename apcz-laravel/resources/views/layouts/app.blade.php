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

  @include('partials.footer')
  @include('partials.cookie-banner')

  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('assets/js/cookies.js') }}?v=1"></script>
</body>
</html>