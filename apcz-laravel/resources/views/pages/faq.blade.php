@extends('layouts.app')

@section('title','Veelgestelde vragen — APCZ')

@section('content')
<section class="page-hero">
  <div class="container page-hero__inner reveal">
    <div class="page-hero__kicker">FAQ</div>
    <h1 class="page-hero__title">Veelgestelde vragen</h1>
    <p class="page-hero__lead">
      Staat je vraag er niet tussen? Stuur ons een bericht — we reageren zo snel mogelijk.
    </p>
    <div class="page-hero__cta">
      <a class="btn btn--primary" href="{{ route('contact') }}">Contact</a>
      <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container reveal" style="max-width:980px;">
    <div class="faq">
      <details class="faq__item" open>
        <summary class="faq__q">Wat kost een poetsbeurt?</summary>
        <div class="faq__a">
          De prijs hangt af van pakket + staat van de auto + eventuele extra’s. Kies een pakket en stuur je aanvraag in —
          dan bevestigen we de prijs of overleggen we als er meerwerk is.
        </div>
      </details>

      <details class="faq__item">
        <summary class="faq__q">Hoe lang duurt het?</summary>
        <div class="faq__a">
          Vaak geldt: <b>brengen om 08:00</b> = <b>zelfde dag</b> ophalen (open tot 17:00). Bij zware vervuiling stemmen we af.
        </div>
      </details>

      <details class="faq__item">
        <summary class="faq__q">Kan ik op zaterdag langskomen?</summary>
        <div class="faq__a">
          Zaterdag is <b>op afspraak</b>. Stuur even een bericht (WhatsApp of contactformulier) voor een tijdslot.
        </div>
      </details>

      <details class="faq__item">
        <summary class="faq__q">Doen jullie ook motorruimte?</summary>
        <div class="faq__a">
          Ja, dat kan. Let op: motorruimte reinigen is <b>op eigen risico</b> (we werken zorgvuldig, maar elektronica blijft gevoelig).
        </div>
      </details>

      <details class="faq__item">
        <summary class="faq__q">Kan ik extra’s combineren met elk pakket?</summary>
        <div class="faq__a">
          Ja. Extra’s zoals koplampen, geurbehandeling, hondenharen, hemel reinigen of coating kun je per aanvraag toevoegen.
        </div>
      </details>
    </div>
  </div>
</section>
@endsection