@extends('layouts.app')

@section('title', 'Privacyverklaring | Auto Poets Centrale Zaanstad')
@section('meta_description', 'Lees hoe Auto Poets Centrale Zaanstad omgaat met persoonsgegevens, contactgegevens, voertuiggegevens, bewaartermijnen, cookies en jouw privacyrechten.')
@section('canonical', url('/privacy'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Auto Poets Centrale Zaanstad • Privacy • Gegevensbescherming</div>
      <h1 class="page-hero__title">Privacyverklaring</h1>
      <p class="page-hero__lead">
        Auto Poets Centrale Zaanstad gaat zorgvuldig om met jouw persoonsgegevens. Op deze pagina leggen wij uit
        welke gegevens wij verwerken, waarom wij dat doen, hoe lang wij deze bewaren en welke rechten je hebt.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--dark" href="#gegevens">Welke gegevens</a>
        <a class="btn btn--dark" href="#doel">Waarom</a>
        <a class="btn btn--dark" href="#bewaartermijn">Bewaartermijn</a>
        <a class="btn btn--dark" href="#rechten">Jouw rechten</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="card reveal" style="max-width:1100px; margin:0 auto 22px;">
      <div class="card__body" style="padding:30px 28px;">
        <div class="center stack">
          <span class="badge">Auto Poets Centrale Zaanstad</span>
          <p class="p section-intro">
            Wij vinden het belangrijk dat jouw gegevens veilig en vertrouwelijk worden behandeld.
            Persoonsgegevens worden uitsluitend gebruikt voor onze dienstverlening, communicatie,
            planning en administratieve afhandeling.
          </p>
        </div>
      </div>
    </div>

    <div class="grid-3 reveal" style="margin-top:0; align-items:start;">

      <div class="card" id="gegevens" style="grid-column:span 2;">
        <div class="card__body">
          <div class="card__title">Welke gegevens verwerken wij?</div>
          <p class="card__text" style="margin-top:8px;">
            Wanneer je contact met ons opneemt, een afspraak aanvraagt of gebruik maakt van onze diensten,
            kunnen wij onder andere de volgende gegevens verwerken:
          </p>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Naam</li>
            <li>Telefoonnummer en/of e-mailadres</li>
            <li>Adresgegevens, indien relevant voor facturatie of contact</li>
            <li>Gegevens over het voertuig, zoals merk, model, kenteken en aanvullende informatie die je zelf verstrekt</li>
            <li>Berichtinhoud, wensen, planning en aanvullende toelichtingen over de behandeling</li>
            <li>Factuur- en betaalgegevens wanneer sprake is van een zakelijke of administratieve verwerking</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Uitgangspunt</div>
          <p class="card__text">
            Wij verwerken niet meer gegevens dan nodig is.
          </p>
          <p class="card__text" style="margin-bottom:0;">
            Alleen gegevens die relevant zijn voor contact, planning, uitvoering of administratie worden bewaard.
          </p>
        </div>
      </div>

      <div class="card" id="doel">
        <div class="card__body">
          <div class="card__title">Waarom verzamelen wij deze gegevens?</div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Om contact met je op te nemen en vragen te beantwoorden</li>
            <li>Om afspraken in te plannen en behandelingen correct uit te voeren</li>
            <li>Om offertes, bevestigingen of aanvullende informatie te verstrekken</li>
            <li>Voor administratieve verwerking, zoals facturatie en zakelijke afhandeling</li>
            <li>Voor service, opvolging en nazorg rondom een uitgevoerde behandeling</li>
          </ul>
        </div>
      </div>

      <div class="card" id="bewaartermijn">
        <div class="card__body">
          <div class="card__title">Bewaartermijn</div>
          <p class="card__text" style="margin-top:8px;">
            Auto Poets Centrale Zaanstad bewaart persoonsgegevens niet langer dan noodzakelijk is voor het doel waarvoor deze zijn verzameld.
          </p>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Contact- en afspraakgegevens bewaren wij in de praktijk maximaal <b>24 maanden</b> voor service, opvolging en terugkerend contact.</li>
            <li>Factuur- en administratieve gegevens bewaren wij zolang dit wettelijk verplicht is.</li>
            <li>Wanneer gegevens niet langer nodig zijn, worden deze verwijderd of niet langer actief gebruikt.</li>
          </ul>
        </div>
      </div>

      <div class="card" id="delen">
        <div class="card__body">
          <div class="card__title">Delen met derden</div>
          <p class="card__text" style="margin-top:8px;">
            Auto Poets Centrale Zaanstad verkoopt jouw gegevens niet aan derden en verstrekt deze uitsluitend wanneer dit nodig is voor de uitvoering van onze dienstverlening of wanneer wij daartoe wettelijk verplicht zijn.
          </p>
          <p class="card__text" style="margin-bottom:0;">
            Denk hierbij bijvoorbeeld aan hosting, e-mailverwerking of administratieve ondersteuning, voor zover dat nodig is voor een correcte uitvoering van onze werkzaamheden.
          </p>
        </div>
      </div>

      <div class="card" id="cookies">
        <div class="card__body">
          <div class="card__title">Cookies</div>
          <p class="card__text" style="margin-top:8px;">
            Onze website kan functionele cookies gebruiken om de website goed te laten werken.
          </p>
          <p class="card__text" style="margin-bottom:0;">
            Wanneer in de toekomst aanvullende cookies, zoals analytische of marketingcookies, worden toegepast,
            zal deze privacyverklaring daarop worden aangepast.
          </p>
        </div>
      </div>

      <div class="card" id="rechten" style="grid-column:span 2;">
        <div class="card__body">
          <div class="card__title">Jouw rechten</div>
          <p class="card__text" style="margin-top:8px;">
            Je hebt het recht om te weten welke persoonsgegevens wij van jou verwerken. Daarnaast kun je in veel gevallen verzoeken om:
          </p>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>inzage in jouw gegevens;</li>
            <li>correctie van onjuiste gegevens;</li>
            <li>verwijdering van gegevens, voor zover dit wettelijk mogelijk is;</li>
            <li>beperking van het gebruik van jouw gegevens.</li>
          </ul>
          <p class="card__text" style="margin-bottom:0;">
            Voor vragen of verzoeken hierover kun je contact opnemen via onze contactpagina of per WhatsApp.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Vertrouwelijkheid</div>
          <p class="card__text">
            Wij behandelen verstrekte gegevens vertrouwelijk en nemen passende maatregelen om misbruik,
            verlies of onbevoegde toegang zoveel mogelijk te voorkomen.
          </p>
          <p class="card__text" style="margin-bottom:0;">
            Hoewel geen enkel systeem volledige zekerheid kan garanderen, gaan wij zorgvuldig en verantwoordelijk om met alle informatie die je met ons deelt.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Vragen?</div>
          <p class="card__text">
            Heb je vragen over deze privacyverklaring of over de manier waarop Auto Poets Centrale Zaanstad met persoonsgegevens omgaat,
            neem dan gerust contact met ons op.
          </p>
          <p class="card__text" style="margin-bottom:0;">
            Wij helpen je graag verder.
          </p>
        </div>
      </div>

    </div>

    <div class="center" style="margin-top:24px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
      <a class="btn btn--primary" href="{{ route('contact') }}">Neem contact op</a>
    </div>

  </div>
</section>

@endsection