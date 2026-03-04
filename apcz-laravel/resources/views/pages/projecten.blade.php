@extends('layouts.app')

@section('title','Projecten — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="center stack">
      <h1 class="h1">Projecten</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Een selectie van ons werk. Kies een album om voorbeelden te bekijken. Foto’s worden later door ons aangevuld met jouw nieuwste projecten.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
        <a class="btn btn--dark" href="#albums">Bekijk albums</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white" id="albums">
  <div class="container">

    <div class="grid-3" style="margin-top:18px;">

      {{-- 1) Interieur --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/hero-1.jfif') }}" alt="Interieur detailing">
        </div>
        <div class="card__body">
          <div class="card__title">Interieur detail</div>
          <p class="card__text">
            Dieptereiniging, kierenwerk en afwerking voor een fris, hygiënisch en representatief interieur.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('projecten.album', ['album' => 'interieur']) }}">Bekijk album</a>
          </div>
        </div>
      </div>

      {{-- 2) Exterieur --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/hero-2.jfif') }}" alt="Exterieur detailing">
        </div>
        <div class="card__body">
          <div class="card__title">Exterieur</div>
          <p class="card__text">
            Handwas, decontaminatie en finishing voor een strakke glans en een nette, verzorgde uitstraling.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('projecten.album', ['album' => 'exterieur']) }}">Bekijk album</a>
          </div>
        </div>
      </div>

      {{-- 3) Polijsten --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/hero-3.jfif') }}" alt="Polijsten / lakcorrectie">
        </div>
        <div class="card__body">
          <div class="card__title">Polijsten & lakcorrectie</div>
          <p class="card__text">
            1–3 stap polijsten om swirls/wasstraatkrassen te verminderen en glans terug te brengen (veilig waar mogelijk).
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('projecten.album', ['album' => 'polijsten']) }}">Bekijk album</a>
          </div>
        </div>
      </div>

      {{-- 4) Showroom --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/hero-4.jfif') }}" alt="Showroom afwerking">
        </div>
        <div class="card__body">
          <div class="card__title">Showroom</div>
          <p class="card__text">
            Totaalplaatje: interieur + exterieur + finishing, klaar voor presentatie of verkoop.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('projecten.album', ['album' => 'showroom']) }}">Bekijk album</a>
          </div>
        </div>
      </div>

      {{-- 5) Zakelijk --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/hero-5.jfif') }}" alt="Zakelijk / wagenpark">
        </div>
        <div class="card__body">
          <div class="card__title">Zakelijk & wagenpark</div>
          <p class="card__text">
            Representatieve voertuigen, periodieke verzorging en een consistente uitstraling voor je bedrijf.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('projecten.album', ['album' => 'zakelijk']) }}">Bekijk album</a>
          </div>
        </div>
      </div>

      {{-- 6) Coatings --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/hero-1.jfif') }}" alt="Coatings">
        </div>
        <div class="card__body">
          <div class="card__title">Coatings</div>
          <p class="card__text">
            Glas/keramische coatings en beschermlagen. Advies op basis van gebruik, lakconditie en budget.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('projecten.album', ['album' => 'coatings']) }}">Bekijk album</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
@endsection