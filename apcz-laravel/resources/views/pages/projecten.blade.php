@extends('layouts.app')

@section('title','Projecten — APCZ')

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Projecten • Resultaten • Portfolio</div>
      <h1 class="page-hero__title">Projecten</h1>
      <p class="page-hero__lead">
        Bekijk een selectie van ons werk, geordend op type behandeling. Zo zie je in één oogopslag
        wat wij doen op het gebied van interieur, exterieur, lakcorrectie, showroomafwerking en bescherming.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--dark" href="#albums">Bekijk albums</a>
        <a class="btn btn--primary" href="{{ route('contact') }}">Neem contact op</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white" id="albums">
  <div class="container">

 

    <div class="grid-3 reveal" style="margin-top:22px;">

      {{-- 1 INTERIEUR --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/hero-1.jfif') }}" alt="Interieur detail">
        </div>
        <div class="card__body">
          <div class="card__title">Interieur detail</div>
          <p class="card__text">
            Projecten gericht op dieptereiniging, kierenwerk, bekleding, contactpunten en nette afwerking
            voor een fris, hygiënisch en representatief interieur.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('projecten.album', ['album' => 'interieur']) }}">Bekijk album</a>
          </div>
        </div>
      </div>

      {{-- 2 EXTERIEUR --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/hero-2.jfif') }}" alt="Exterieur detail">
        </div>
        <div class="card__body">
          <div class="card__title">Exterieur detail</div>
          <p class="card__text">
            Resultaten van handwas, decontaminatie, velgenreiniging en finishing waarbij de buitenkant
            weer strak, fris en verzorgd oogt.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('projecten.album', ['album' => 'exterieur']) }}">Bekijk album</a>
          </div>
        </div>
      </div>

      {{-- 3 POLIJSTEN --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/hero-3.jfif') }}" alt="Polijsten en lakcorrectie">
        </div>
        <div class="card__body">
          <div class="card__title">Polijsten & lakcorrectie</div>
          <p class="card__text">
            Voorbeelden van 1-staps tot 3-staps polijsten waarbij swirls, wasstraatkrassen en dof lakbeeld
            waar veilig mogelijk worden verminderd.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('projecten.album', ['album' => 'polijsten']) }}">Bekijk album</a>
          </div>
        </div>
      </div>

      {{-- 4 VERKOOPKLAAR --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/hero-4.jfif') }}" alt="Verkoopklaar en showroomstaat">
        </div>
        <div class="card__body">
          <div class="card__title">Verkoopklaar / showroomstaat</div>
          <p class="card__text">
            Complete projecten waarbij het totaalplaatje centraal staat: interieur, exterieur, finishing
            en een uitstraling die direct geschikt is voor presentatie of verkoop.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('projecten.album', ['album' => 'showroom']) }}">Bekijk album</a>
          </div>
        </div>
      </div>

      {{-- 5 ZAKELIJK --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/hero-5.jfif') }}" alt="Zakelijk en wagenpark">
        </div>
        <div class="card__body">
          <div class="card__title">Zakelijk & wagenpark</div>
          <p class="card__text">
            Projecten voor bedrijfswagens, leaseauto’s en wagenparken waarbij representativiteit,
            planning en consistente uitstraling centraal staan.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('projecten.album', ['album' => 'zakelijk']) }}">Bekijk album</a>
          </div>
        </div>
      </div>

      {{-- 6 COATINGS --}}
      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/img/hero-1.jfif') }}" alt="Coatings en bescherming">
        </div>
        <div class="card__body">
          <div class="card__title">Coatings & bescherming</div>
          <p class="card__text">
            Beelden van beschermlagen, glascoatings, keramische coatings en andere behandelingen
            die gericht zijn op behoud, glans en makkelijker onderhoud.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('projecten.album', ['album' => 'coatings']) }}">Bekijk album</a>
          </div>
        </div>
      </div>

    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Ook benieuwd wat mogelijk is voor jouw auto?</h2>
          <p class="p section-intro">
            Ieder voertuig vraagt om een andere aanpak. Staat jouw type klus of gewenste behandeling
            nog niet tussen de voorbeelden, neem dan gerust contact met ons op.
          </p>

          <div class="action-row action-row--center" style="margin-top:8px;">
           
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection