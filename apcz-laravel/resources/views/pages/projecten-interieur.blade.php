@extends('layouts.app')

@section('title','Album — Interieur detail — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="stack">
      <h1 class="h1">Album: Interieur detail</h1>
      <p class="p" style="max-width:980px;">
        Plaats hier later 12–24 foto’s. Voor nu staan er placeholders zodat de pagina gevuld is.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; flex-wrap:wrap;">
        <a class="btn btn--dark" href="{{ route('projecten') }}">← Terug naar projecten</a>
      </div>
    </div>

    <div class="gallery" style="margin-top:18px;">
      @for($i=1; $i<=12; $i++)
        <img src="{{ asset('assets/img/hero-1.jfif') }}" alt="Interieur foto {{ $i }}" style="border-radius:16px;">
      @endfor
    </div>
  </div>
</section>
@endsection