@extends('layouts.app')

@section('title','Vacature — Interieurreiniger — APCZ')

@section('content')
<section class="page-hero">
  <div class="container page-hero__inner reveal">
    <div class="page-hero__kicker">VACATURE</div>
    <h1 class="page-hero__title">Ervaren interieurreiniger (auto’s)</h1>
    <p class="page-hero__lead">
      Jij houdt van strak werk: stofvrij, vlekvrij en netjes afgewerkt. Je ziet details waar anderen overheen kijken.
    </p>
    <div class="page-hero__cta">
      <a class="btn btn--primary" href="{{ route('contact') }}?pakket=Vacature%20interieur">Solliciteer</a>
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
            <li>Interieur dieptereiniging (naar staat van de auto)</li>
            <li>Stofzuigen + detailwerk (kieren/randen/moeilijke plekken)</li>
            <li>Bekleding/kunststof contactpunten zorgvuldig reinigen</li>
            <li>Ramen binnen, afwerking en eindcontrole</li>
            <li>Netjes opleveren: “showroom” gevoel</li>
          </ul>

          <div class="card__title" style="margin-top:18px;">Wat vragen we?</div>
          <ul class="card__text" style="margin:0; padding-left:18px;">
            <li><b>Ervaring</b> met interieurreiniging is een pré</li>
            <li><b>Oog voor detail</b> en begrip van het vak</li>
            <li>Als iets nog niet perfect is: je fixt het (geen half werk)</li>
            <li><b>Nederlands is vereist</b> (voor communicatie)</li>
            <li>Engels is een plus</li>
          </ul>

          <div class="card__title" style="margin-top:18px;">Wat bieden we?</div>
          <ul class="card__text" style="margin:0; padding-left:18px;">
            <li>Werken in een team waar kwaliteit de standaard is</li>
            <li>Uitleg/training waar nodig (als je gemotiveerd bent)</li>
            <li>Doorgroeimogelijkheden richting detailing</li>
            <li>Planning in overleg (parttime/meer uren mogelijk)</li>
          </ul>

          <div style="margin-top:16px; display:flex; gap:10px; flex-wrap:wrap;">
            <a class="btn btn--primary" href="{{ route('contact') }}?pakket=Vacature%20interieur">Solliciteer</a>
            <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Snel solliciteren</div>
          <p class="card__text" style="opacity:.9;">
            Stuur dit mee:
          </p>
          <ul class="card__text" style="margin:0; padding-left:18px;">
            <li>Naam + telefoon</li>
            <li>Ervaring (kort)</li>
            <li>Beschikbaarheid</li>
            <li>Woonplaats</li>
          </ul>

          <p class="card__text" style="opacity:.75; margin-top:12px;">
            Zet in je bericht: “Vacature Interieur”.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection