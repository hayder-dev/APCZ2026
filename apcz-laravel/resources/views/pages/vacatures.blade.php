@extends('layouts.app')

@section('title','Vacatures — APCZ')

@section('content')
<section class="page-hero">
  <div class="container page-hero__inner reveal">
    <div class="page-hero__kicker">WERKEN BIJ APCZ</div>
    <h1 class="page-hero__title">Vacatures</h1>
    <p class="page-hero__lead">
      Wij zoeken mensen met oog voor detail. Je werkt in een team dat kwaliteit belangrijk vindt — rustig, strak en netjes.
    </p>

    <div class="page-hero__cta">
      <a class="btn btn--primary" href="#open">Bekijk vacatures</a>
      <a class="btn btn--outline" href="{{ route('contact') }}">Direct contact</a>
    </div>
  </div>
</section>

<section class="section section--white" id="open">
  <div class="container reveal">
    <div class="grid-3" style="margin-top:0;">
      {{-- 1) Interieur --}}
      <div class="card">
        <div class="card__body">
          <div class="card__title">Ervaren interieurreiniger (auto’s)</div>
          <p class="card__text" style="opacity:.9;">
            Oog voor detail, netjes en zorgvuldig. Nederlands is vereist (communicatie op de werkvloer).
          </p>

          <ul class="card__text" style="margin:0; padding-left:18px;">
            <li>Interieur dieptereiniging</li>
            <li>Detailwerk (kieren/randen/contactpunten)</li>
            <li>Netjes en consequent opleveren</li>
          </ul>

          <div style="margin-top:14px; display:flex; gap:10px; flex-wrap:wrap;">
            <a class="btn btn--dark" href="{{ route('vacature.interieur') }}">Bekijk vacature</a>
            <a class="btn btn--outline" href="{{ route('contact') }}?pakket=Vacature%20interieur">Solliciteer</a>
          </div>
        </div>
      </div>

      {{-- 2) Polijsten + Wassen --}}
      <div class="card">
        <div class="card__body">
          <div class="card__title">Polijster & autowasser (oproep)</div>
          <p class="card__text" style="opacity:.9;">
            Iemand die kan wassen (veilig) én polijsten. Oproepbasis. Rijbewijs verplicht.
          </p>

          <ul class="card__text" style="margin:0; padding-left:18px;">
            <li>Veilig wassen (voorwas + contactwas)</li>
            <li>Polijsten (basis tot 3-staps)</li>
            <li>Afplakken/finishing/controle</li>
          </ul>

          <div style="margin-top:14px; display:flex; gap:10px; flex-wrap:wrap;">
            <a class="btn btn--dark" href="{{ route('vacature.polijsten') }}">Bekijk vacature</a>
            <a class="btn btn--outline" href="{{ route('contact') }}?pakket=Vacature%20polijsten">Solliciteer</a>
          </div>
        </div>
      </div>

      {{-- Extra card: algemene info --}}
      <div class="card">
        <div class="card__body">
          <div class="card__title">Hoe solliciteren?</div>
          <p class="card__text">
            Stuur je naam + telefoon + korte ervaring. Wij nemen snel contact op.
          </p>
          <div style="display:flex; gap:10px; flex-wrap:wrap;">
            <a class="btn btn--primary" href="{{ route('contact') }}">Solliciteer via contact</a>
            <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
          </div>
          <p class="card__text" style="opacity:.75; margin-top:12px;">
            Tip: voeg toe welke dagen je beschikbaar bent + of je al ervaring hebt met detailing.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection