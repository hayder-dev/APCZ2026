@extends('layouts.app')

@section('title', 'Over Auto Poets Centrale Zaanstad | Specialist sinds 2003')
@section('meta_description', 'Lees meer over Auto Poets Centrale Zaanstad, specialist in auto laten poetsen, auto detailing, showroomklaar maken en zakelijke autoverzorging in Zaandam, Zaanstad en omgeving sinds 2003.')
@section('meta_keywords', 'over autopoetsbedrijf zaandam, auto detailing zaanstad, auto laten poetsen zaandam, showroomklaar maken, autodetailing specialist, autoverzorging sinds 2003')
@section('canonical', url('/over-ons'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Over ons</div>
      <h1 class="page-hero__title">Auto Poets Centrale Zaanstad</h1>
      <p class="page-hero__lead">
        Sinds <b>2003</b> verzorgen wij voertuigen met aandacht, rust en vakmanschap.
        Geen snelle schoonmaak, maar een nette afwerking die past bij de uitstraling van de auto.
        Wij helpen klanten uit Zaandam, Zaanstad en omgeving met professionele autoverzorging.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--outline" href="#werkwijze">Werkwijze bekijken</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="container">

    <div class="card reveal" style="max-width:1100px; margin:0 auto;">
      <div class="card__body" style="padding:32px 28px;">
        <div class="center stack">
          <div style="width:120px; height:4px; margin:0 auto 6px; border-radius:999px; background:linear-gradient(90deg,#f4c400,#ffe27a,#fff4cb);"></div>

          <p class="p section-intro">
            <b>Auto Poets Centrale Zaanstad bestaat sinds 2003.</b> In die jaren hebben wij voertuigen verzorgd
            voor particulieren, zakelijke rijders, dealers en wagenparken in <b>Zaandam</b>, <b>Zaanstad</b> en de rest van de Randstad.
            Die ervaring zie je terug in onze werkwijze: rustig, zorgvuldig en met oog voor het totaalplaatje.
          </p>

          <p class="p section-intro">
            Voor ons is een auto pas echt klaar wanneer hij niet alleen schoon is, maar ook <b>verzorgd aanvoelt</b>.
            Dat zit in de details: strak glas, nette randen, een fris interieur, een verzorgd lakbeeld en een uitstraling
            die direct vertrouwen geeft.
          </p>

          <p class="p section-intro">
            Of het nu gaat om onderhoud, showroom-afwerking, verkoopvoorbereiding of een complete opfrisbeurt:
            wij werken met duidelijke afspraken, veilige methodes en een nette oplevering — elke auto opnieuw.
          </p>
        </div>
      </div>
    </div>

    <div class="card reveal" style="margin-top:22px;">
      <div class="card__media">
        <img
          src="{{ asset('assets/projects/zakelijk/11.JPEG') }}"
          alt="Auto Poets Centrale Zaanstad studio en detailing werkzaamheden"
        >
      </div>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px; align-items:start;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Onze aanpak</div>
          <p class="card__text">
            Wij werken rustig, gecontroleerd en met aandacht voor detail. Juist daarin zit het verschil:
            een auto die niet alleen schoon oogt, maar echt verzorgd voor de dag komt.
          </p>

          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Veilige technieken en professionele middelen</li>
            <li>Detail-afwerking van randen, kieren en instappen</li>
            <li>Duidelijke planning en heldere communicatie</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor wie wij werken</div>
          <p class="card__text">
            Wij werken voor zowel particuliere als zakelijke klanten — van één auto tot grotere aantallen.
          </p>

          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Particulieren die hun auto netjes willen houden</li>
            <li>Dealers en handelaren met showroom- en voorraadauto’s</li>
            <li>Wagenparken, leaseauto’s en bedrijfswagens</li>
          </ul>

          <p class="card__text" style="margin-top:10px;">
            Voor zakelijke klanten denken wij ook mee over vaste slots en periodiek onderhoud.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Kwaliteit & duidelijkheid</div>
          <p class="card__text">
            Wij doen geen loze beloftes. We zijn eerlijk over wat haalbaar is en kiezen altijd voor een veilige,
            verantwoorde aanpak die past bij de staat van het voertuig.
          </p>

          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Motorruimte reinigen:</b> altijd op eigen risico</li>
            <li><b>Schade of gespoten delen:</b> graag vooraf melden</li>
            <li>Extra werk bespreken we altijd vooraf</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="card reveal" style="margin-top:22px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Autopoetsbedrijf voor Zaandam en omgeving</h2>
          <p class="p section-intro">
            Auto Poets Centrale Zaanstad helpt klanten uit <b>Zaandam</b>, <b>Zaanstad</b>,
            <b>Wormerveer</b>, <b>Assendelft</b>, <b>Koog aan de Zaan</b>, <b>Krommenie</b>,
            <b>Westzaan</b>, <b>Oostzaan</b>, <b>Purmerend</b> en <b>Amsterdam</b> met auto laten poetsen,
            auto detailing, showroomklaar maken en zakelijke autoverzorging.
          </p>
          <p class="p section-intro">
            Door die brede ervaring weten wij goed wat er nodig is voor dagelijks gebruik,
            verkoopvoorbereiding, dealerpresentatie en periodiek onderhoud van voertuigen.
          </p>
        </div>
      </div>
    </div>

    <div class="card reveal" style="margin-top:22px;" id="werkwijze">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2">Zo verloopt een afspraak</h2>
          <p class="p section-intro">
            We stemmen samen het doel af, bekijken de staat van de auto en voeren daarna de behandeling zorgvuldig uit.
            In veel gevallen geldt: voertuig om <b>08:00</b> brengen = <b>dezelfde dag</b> weer ophalen.
          </p>
        </div>

        <div class="grid-3" style="margin-top:18px; align-items:start;">
          <div class="card">
            <div class="card__body">
              <div class="card__title">1) Intake</div>
              <p class="card__text">
                We bespreken jouw wensen en kijken welke behandeling het beste past bij het voertuig.
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
      </div>
    </div>

    <div class="card reveal" style="margin-top:22px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Nieuwsgierig? Neem gerust contact op.</h2>
          <p class="p section-intro">
            Wil je overleggen over jouw auto, weten wat het beste past of gewoon even kennismaken?
            Neem gerust contact met ons op. Dan denken we met je mee en geven we je eerlijk advies.
          </p>

          <div class="action-row action-row--center" style="margin-top:8px;">
            <a class="btn btn--primary" href="{{ route('contact') }}?route=over">Contact opnemen</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection