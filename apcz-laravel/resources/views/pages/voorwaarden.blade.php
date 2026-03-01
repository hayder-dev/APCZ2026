@extends('layouts.app')

@section('title','Voorwaarden — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="center stack">
      <h1 class="h1">Voorwaarden</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Duidelijke afspraken zorgen voor een strak resultaat. Hieronder vind je de belangrijkste voorwaarden
        rondom onze diensten, prijzen en oplevering.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
        <a class="btn btn--dark" href="#prijzen">Prijzen</a>
        <a class="btn btn--dark" href="#toeslagen">Toeslagen</a>
        <a class="btn btn--dark" href="#afspraak">Inleveren & opleveren</a>
        <a class="btn btn--dark" href="#risico">Risico & schades</a>
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak / offerte</a>
      </div>
    </div>

    <div class="card" style="margin-top:18px;" id="prijzen">
      <div class="card__body">
        <div class="card__title">Prijzen</div>
        <ul class="card__text" style="margin-top:8px; padding-left:18px;">
          <li><b>Alle genoemde prijzen zijn exclusief btw</b>, tenzij anders vermeld.</li>
          <li>Onze tarieven zijn vaak <b>vanaf-prijzen</b>. De uiteindelijke prijs hangt af van staat, formaat en wensen.</li>
          <li>Bij twijfel geven we vooraf een <b>indicatie</b> of maken we een <b>offerte</b>.</li>
        </ul>
      </div>
    </div>

    <div class="card" style="margin-top:18px;" id="toeslagen">
      <div class="card__body">
        <div class="card__title">Toeslagen</div>
        <p class="card__text" style="margin-top:8px;">
          Wij werken met toeslagen als de klus meer tijd/werk vraagt dan standaard (bijv. extreme vervuiling of extra correctiewerk).
        </p>
        <ul class="card__text" style="margin-top:8px; padding-left:18px;">
          <li><b>Donkere kleuren</b> (extra werk/finish): <b>+ € 50,-</b></li>
          <li>Bij extreme vervuiling (rook, dieren, vlekken, zand/grond) kan een toeslag gelden.</li>
          <li>Bij veel hars/teer/ijzerdeeltjes of zwaar lakwerk kan extra werk noodzakelijk zijn.</li>
        </ul>
      </div>
    </div>

    <div class="card" style="margin-top:18px;" id="afspraak">
      <div class="card__body">
        <div class="card__title">Inleveren & opleveren</div>
        <ul class="card__text" style="margin-top:8px; padding-left:18px;">
          <li>In de meeste gevallen geldt: <b>auto ingeleverd om 08:00 = dezelfde dag klaar</b>.</li>
          <li>Wij zijn geopend tot <b>17:00</b>. Ophalen gebeurt in overleg binnen openingstijden.</li>
          <li>Sommige behandelingen (zoals polijsten/coatings/fotografie of zware vervuiling) kunnen <b>meer tijd</b> vragen.</li>
          <li>Wij adviseren vooraf een korte check (foto’s/bericht) zodat we de juiste tijd kunnen reserveren.</li>
        </ul>
      </div>
    </div>

    <div class="card" style="margin-top:18px;" id="risico">
      <div class="card__body">
        <div class="card__title">Risico, schades & belangrijke informatie</div>
        <p class="card__text" style="margin-top:8px;">
          Voor het beste resultaat is het belangrijk dat je vooraf relevante informatie met ons deelt.
        </p>
        <ul class="card__text" style="margin-top:8px; padding-left:18px;">
          <li><b>Motorruimte reinigen is altijd op eigen risico.</b> We werken zorgvuldig, maar elektronica/onderdelen blijven gevoelig.</li>
          <li><b>Gerepareerde schade / spuitwerk / wrap / coating:</b> graag vooraf melden.
              Wij kunnen niet altijd zien wat er eerder is hersteld of behandeld.</li>
          <li>Bij (verborgen) gerepareerde schades kan polijsten of reinigen anders reageren dan verwacht.
              Daarom is <b>melding vooraf</b> belangrijk.</li>
          <li>Diepe krassen en beschadigingen kunnen niet altijd volledig weg zonder risico; we werken binnen veilige marges.</li>
        </ul>
      </div>
    </div>

    <div class="card" style="margin-top:18px;" id="betaling">
      <div class="card__body">
        <div class="card__title">Betaling</div>
        <ul class="card__text" style="margin-top:8px; padding-left:18px;">
          <li>Betaling gebeurt volgens afspraak (bijv. pin/overboeking). Online betaling (iDEAL) kan later worden toegevoegd.</li>
          <li>Zakelijk: factuur mogelijk op bedrijfsnaam (excl. btw / btw apart vermeld).</li>
        </ul>
      </div>
    </div>

    <div class="center" style="margin-top:22px;">
      <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak / offerte</a>
      <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
    </div>

  </div>
</section>
@endsection