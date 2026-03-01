@extends('layouts.app')

@section('title','Privacy — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="center stack">
      <h1 class="h1">Privacy</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Wij gaan zorgvuldig om met jouw gegevens. Op deze pagina leggen we uit welke informatie we verzamelen,
        waarom we dat doen en hoe lang we het bewaren.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
        <a class="btn btn--dark" href="#gegevens">Welke gegevens</a>
        <a class="btn btn--dark" href="#doel">Waarom</a>
        <a class="btn btn--dark" href="#bewaartermijn">Bewaartermijn</a>
        <a class="btn btn--primary" href="{{ route('contact') }}">Contact</a>
      </div>
    </div>

    <div class="card" style="margin-top:18px;" id="gegevens">
      <div class="card__body">
        <div class="card__title">Welke gegevens verwerken wij?</div>
        <p class="card__text" style="margin-top:8px;">
          Wanneer je contact met ons opneemt of een afspraak aanvraagt, kunnen we de volgende gegevens verwerken:
        </p>
        <ul class="card__text" style="margin-top:8px; padding-left:18px;">
          <li>Naam</li>
          <li>Telefoonnummer en/of e-mailadres</li>
          <li>Gegevens over het voertuig (bijv. merk/model/kenteken) die je zelf aanlevert</li>
          <li>Berichtinhoud (zoals wensen, staat van de auto, planning)</li>
        </ul>
      </div>
    </div>

    <div class="card" style="margin-top:18px;" id="doel">
      <div class="card__body">
        <div class="card__title">Waarom verzamelen we deze gegevens?</div>
        <ul class="card__text" style="margin-top:8px; padding-left:18px;">
          <li>Om contact met je op te nemen en vragen te beantwoorden</li>
          <li>Om een afspraak/offerte te maken en onze planning te regelen</li>
          <li>Voor administratieve afhandeling (bijv. factuur op naam)</li>
          <li>Voor service en nazorg rondom een uitgevoerde behandeling</li>
        </ul>
      </div>
    </div>

    <div class="card" style="margin-top:18px;" id="bewaartermijn">
      <div class="card__body">
        <div class="card__title">Bewaartermijn</div>
        <p class="card__text" style="margin-top:8px;">
          We bewaren gegevens niet langer dan nodig. In de praktijk houden we contact-/afspraakgegevens maximaal
          <b>24 maanden</b> aan voor service en opvolging, tenzij we wettelijk verplicht zijn gegevens langer te bewaren
          (bijv. factuurgegevens).
        </p>
      </div>
    </div>

    <div class="card" style="margin-top:18px;" id="delen">
      <div class="card__body">
        <div class="card__title">Delen met derden</div>
        <p class="card__text" style="margin-top:8px;">
          We delen jouw gegevens niet met derden, behalve wanneer dat nodig is voor onze dienstverlening
          (bijvoorbeeld hosting of e-mail) of wanneer we daartoe wettelijk verplicht zijn.
        </p>
      </div>
    </div>

    <div class="card" style="margin-top:18px;" id="cookies">
      <div class="card__body">
        <div class="card__title">Cookies</div>
        <p class="card__text" style="margin-top:8px;">
          Onze website kan functionele cookies gebruiken om de site goed te laten werken.
          Als we later analytics of marketing cookies toevoegen, passen we deze pagina daarop aan.
        </p>
      </div>
    </div>

    <div class="card" style="margin-top:18px;" id="rechten">
      <div class="card__body">
        <div class="card__title">Jouw rechten</div>
        <ul class="card__text" style="margin-top:8px; padding-left:18px;">
          <li>Je mag jouw gegevens inzien, laten corrigeren of laten verwijderen (waar mogelijk).</li>
          <li>Stuur hiervoor een bericht via onze contactpagina of WhatsApp.</li>
        </ul>
      </div>
    </div>

    <div class="center" style="margin-top:22px;">
      <a class="btn btn--primary" href="{{ route('contact') }}">Contact opnemen</a>
      <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
    </div>

  </div>
</section>
@endsection