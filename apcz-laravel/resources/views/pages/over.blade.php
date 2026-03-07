@extends('layouts.app')
@section('title','Over ons — APCZ')

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Sinds 2003 • Zaanstad • Randstad</div>
      <h1 class="page-hero__title">Over Auto Poets Centrale Zaanstad</h1>
      <p class="page-hero__lead">
        Al sinds <b>2003</b> draait het bij ons om één ding: auto’s afleveren zoals ze horen te ogen —
        strak, fris en representatief. Geen snelle schoonmaak, maar verzorging met aandacht, ervaring en gevoel voor detail.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
        <a class="btn btn--dark" href="{{ route('diensten') }}">Bekijk pakketten</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="card reveal" style="max-width:1100px; margin:0 auto;">
      <div class="card__body" style="padding:32px 28px;">
        <div class="center stack">
          <span class="badge">Sinds 2003 • +20 jaar ervaring • Vakmanschap • Vertrouwen</span>

          <p class="p section-intro">
            <b>Auto Poets Centrale Zaanstad bestaat sinds 2003.</b> In die jaren hebben wij talloze voertuigen verzorgd
            voor particulieren, zakelijke rijders, dealers en wagenparken in Zaandam, Zaanstad en de rest van de Randstad.
            Die ervaring zie je terug in onze werkwijze: rustig, zorgvuldig en met oog voor het totaalplaatje.
          </p>

          <p class="p section-intro">
            Voor ons is een auto pas echt klaar wanneer hij niet alleen schoon is, maar ook <b>verzorgd aanvoelt</b>.
            Dat zit in de details: strak glas, nette randen, een fris interieur, een verzorgd lakbeeld en een uitstraling
            die direct vertrouwen geeft. Geen half werk, maar een resultaat dat klopt.
          </p>

          <p class="p section-intro">
            Wij werken met duidelijke afspraken, veilige methodes en professionele producten. Of het nu gaat om periodiek onderhoud,
            showroom-afwerking, verkoopvoorbereiding of een complete opfrisbeurt: bij Auto Poets Centrale Zaanstad
            draait het om <b>consistentie, kwaliteit en nette oplevering</b> — elke auto opnieuw.
          </p>
        </div>
      </div>
    </div>

    <div class="card reveal" style="margin-top:22px;">
      <div class="card__media">
        <img
          src="{{ asset('assets/projects/zakelijk/11.JPEG') }}"
          alt="APCZ studio / detailing"
        >
      </div>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px; align-items:start;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Onze aanpak</div>
          <p class="card__text">
            Wij werken rustig, gecontroleerd en met aandacht voor detail. Juist daarin zit het verschil:
            een auto die niet alleen schoon lijkt, maar echt verzorgd voor de dag komt.
          </p>

          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Veilige technieken en professionele middelen</li>
            <li>Detail-afwerking van kieren, randen en instappen</li>
            <li>Heldere planning en duidelijke communicatie</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor wie we werken</div>
          <p class="card__text">
            Wij werken voor zowel particuliere als zakelijke klanten — van één auto tot grotere aantallen.
          </p>

          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Particulieren die hun auto netjes willen houden</li>
            <li>Dealers en handelaren met showroom- en voorraadauto’s</li>
            <li>Wagenparken, leaseauto’s en bedrijfswagens</li>
          </ul>

          <p class="card__text" style="margin-top:10px;">
            Voor zakelijke klanten kunnen wij ook werken met vaste slots en periodiek onderhoud.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Kwaliteit & transparantie</div>
          <p class="card__text">
            Wij doen geen loze beloftes. We zijn eerlijk over wat haalbaar is en kiezen altijd voor een veilige,
            verantwoorde aanpak die past bij de staat van het voertuig.
          </p>

          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Motorruimte reinigen:</b> altijd op eigen risico</li>
            <li><b>Schade of gespoten delen:</b> graag vooraf melden</li>
            <li>Bij extreme vervuiling bespreken we extra werk vooraf</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="card reveal" style="margin-top:22px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2">Zo verloopt een afspraak</h2>
          <p class="p section-intro">
            Je plant een afspraak, we stemmen samen het doel af en daarna voeren wij de behandeling zorgvuldig uit.
            In veel gevallen geldt: voertuig om <b>08:00</b> brengen = <b>dezelfde dag</b> ophalen
            (wij zijn geopend tot <b>17:00</b>).
          </p>
        </div>

        <div class="grid-3" style="margin-top:18px; align-items:start;">
          <div class="card">
            <div class="card__body">
              <div class="card__title">1) Intake</div>
              <p class="card__text">
                We bespreken jouw wensen, kijken naar de staat van de auto en bepalen welke behandeling het beste past.
              </p>
            </div>
          </div>

          <div class="card">
            <div class="card__body">
              <div class="card__title">2) Uitvoering</div>
              <p class="card__text">
                Daarna volgt de behandeling: veilig reinigen, detailwerk en nette finishing — zonder haastwerk.
              </p>
            </div>
          </div>

          <div class="card">
            <div class="card__body">
              <div class="card__title">3) Oplevering</div>
              <p class="card__text">
                Na controle leveren we de auto netjes op, met een uitstraling die weer past bij het voertuig.
              </p>
            </div>
          </div>
        </div>

        <div class="action-row action-row--center" style="margin-top:18px;">
          <a class="btn btn--primary" href="{{ route('contact') }}?route=over">Plan je afspraak</a>
        </div>
      </div>
    </div>

    <div class="card reveal" style="margin-top:22px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Nieuwsgierig? Kom gerust langs.</h2>
          <p class="p section-intro">
            Wil je eerst sfeer proeven, overleggen over jouw auto of gewoon even kijken wat we doen?
            Je bent van harte welkom om contact op te nemen of langs te komen. Dan laten we je graag zien
            hoe wij werken en wat het beste past bij jouw voertuig.
          </p>

          <div class="action-row action-row--center" style="margin-top:8px;">
          
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection