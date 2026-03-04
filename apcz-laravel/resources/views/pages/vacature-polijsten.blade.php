@extends('layouts.app')

@section('title','Vacature — Polijster & Autowasser (oproep) — APCZ')

@section('content')
<section class="page-hero">
  <div class="container page-hero__inner reveal">
    <div class="page-hero__kicker">VACATURE</div>
    <h1 class="page-hero__title">Polijster & autowasser (oproep)</h1>
    <p class="page-hero__lead">
      Jij kan veilig wassen en je snapt polijsten. Je werkt netjes, gecontroleerd en laat de auto strak achter.
      <b>Rijbewijs is verplicht.</b>
    </p>
    <div class="page-hero__cta">
      <a class="btn btn--primary" href="{{ route('contact') }}?pakket=Vacature%20polijsten">Solliciteer</a>
      <a class="btn btn--outline" href="{{ route('vacatures') }}">Terug naar vacatures</a>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container reveal">
    <div class="grid-3" style="grid-template-columns: 1.2fr .8fr; gap:18px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Wat ga je doen?</div>
          <ul class="card__text" style="margin:0; padding-left:18px;">
            <li>Veilig wassen (voorwas + contactwas, juiste doeken)</li>
            <li>Kleien/voorbereiden waar nodig</li>
            <li>Polijsten (basis tot 3-staps — afhankelijk van jouw niveau)</li>
            <li>Afplakken, finishing, bescherming/wax (waar afgesproken)</li>
            <li>Eindcontrole: glans, swirls, randen en details</li>
          </ul>

          <div class="card__title" style="margin-top:18px;">Wat vragen we?</div>
          <ul class="card__text" style="margin:0; padding-left:18px;">
            <li><b>Rijbewijs verplicht</b></li>
            <li>Ervaring met wassen/polijsten is een pré</li>
            <li>Netjes werken, geen haastwerk</li>
            <li>Beschikbaar op oproepbasis (dagen in overleg)</li>
            <li>Nederlands of goed verstaanbaar communiceren op locatie</li>
          </ul>

          <div class="card__title" style="margin-top:18px;">Wat bieden we?</div>
          <ul class="card__text" style="margin:0; padding-left:18px;">
            <li>Oproep / flexibel (meer uren mogelijk bij drukte)</li>
            <li>Werken met goede spullen en duidelijke stappen</li>
            <li>Doorgroeien naar full detailing</li>
          </ul>

          <div style="margin-top:16px; display:flex; gap:10px; flex-wrap:wrap;">
            <a class="btn btn--primary" href="{{ route('contact') }}?pakket=Vacature%20polijsten">Solliciteer</a>
            <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Snel solliciteren</div>
          <ul class="card__text" style="margin:0; padding-left:18px;">
            <li>Naam + telefoon</li>
            <li>Woonplaats</li>
            <li>Ervaring (wassen/polijsten)</li>
            <li>Rijbewijs: ja/nee</li>
            <li>Beschikbaarheid</li>
          </ul>
          <p class="card__text" style="opacity:.75; margin-top:12px;">
            Zet in je bericht: “Vacature Polijsten”.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection