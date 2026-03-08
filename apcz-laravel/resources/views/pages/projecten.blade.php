@extends('layouts.app')

@section('title', 'Auto detailing projecten in Zaandam | Portfolio APCZ')
@section('meta_description', 'Bekijk auto detailing projecten in Zaandam en Zaanstad van Auto Poets Centrale Zaanstad. Echte resultaten op het gebied van interieurreiniging, exterieur detail, lakcorrectie, showroomklaar maken, zakelijke voertuigen en coatings voor klanten uit Zaandam, Wormerveer, Assendelft, Koog aan de Zaan, Krommenie, Purmerend en Amsterdam.')
@section('meta_keywords', 'auto detailing projecten zaandam, autopoetsbedrijf zaanstad, lakcorrectie projecten, showroomklaar maken auto, interieurreiniging auto, exterieur detail, coatings auto, autodetailing purmerend')
@section('canonical', url('/projecten'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Projecten • Resultaten • Portfolio</div>
      <h1 class="page-hero__title">Auto detailing projecten in Zaandam</h1>
      <p class="page-hero__lead">
        Bekijk een selectie van ons werk, geordend op type behandeling. Zo krijg je een duidelijk beeld van
        wat wij in de praktijk doen op het gebied van interieur, exterieur, lakcorrectie, showroomafwerking
        en bescherming. Geen stockfoto’s of losse impressies, maar echte resultaten van voertuigen die wij
        hebben verzorgd en afgewerkt in Zaandam, Zaanstad en omgeving.
      </p>
    </div>
  </div>
</section>

<section class="section section--white" id="albums">
  <div class="container">

    <div class="card reveal" style="max-width:1100px; margin:0 auto 22px;">
      <div class="card__body" style="padding:30px 28px;">
        <div class="center stack">
          <div style="width:120px; height:4px; margin:0 auto 6px; border-radius:999px; background:linear-gradient(90deg,#f4c400,#ffe27a,#fff4cb);"></div>

          <p class="p section-intro">
            In deze projecten zie je hoe wij werken, waar wij op letten en welk type afwerking past bij
            verschillende voertuigen en situaties. Van frisse interieurreiniging tot verkoopklare presentatie
            en van lakverbetering tot langdurige bescherming.
          </p>

          <p class="p section-intro">
            Elk album laat een ander onderdeel van ons werk zien. Zo kun je snel bekijken welke aanpak,
            uitstraling en afwerking het beste aansluit bij jouw auto of jouw doel.
          </p>
        </div>
      </div>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">

      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/projects/interieur/01.JPEG') }}" alt="Interieur detailing project in Zaandam">
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

      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/projects/exterieur/01.JPEG') }}" alt="Exterieur detailing project">
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

      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/projects/polijsten/01.JPEG') }}" alt="Polijsten en lakcorrectie project">
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

      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/projects/showroom/01.JPEG') }}" alt="Showroomklaar gemaakte auto">
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

      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/projects/zakelijk/01.JPEG') }}" alt="Zakelijk wagenpark project">
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

      <div class="card">
        <div class="card__media">
          <img src="{{ asset('assets/projects/coatings/01.JPEG') }}" alt="Coatings en bescherming project">
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
          <h2 class="h2" style="margin-bottom:0;">Projecten van autopoetsen en detailing in Zaandam</h2>
          <p class="p section-intro">
            Zoek je voorbeelden van echt uitgevoerd werk? In onze projecten zie je resultaten van auto’s
            die wij hebben gereinigd, gepolijst, showroomklaar gemaakt en beschermd voor klanten uit
            Zaandam, Zaanstad, Wormerveer, Assendelft, Koog aan de Zaan, Krommenie, Purmerend en Amsterdam.
          </p>
          <p class="p section-intro">
            Zo krijg je een beter beeld van wat mogelijk is op het gebied van interieurreiniging,
            exterieur detail, lakcorrectie, coatings en verkoopklare presentatie.
          </p>
        </div>
      </div>
    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Ook benieuwd wat mogelijk is voor jouw auto?</h2>
          <p class="p section-intro">
            Ieder voertuig vraagt om een andere aanpak. Staat jouw type klus of gewenste behandeling
            nog niet tussen de voorbeelden, neem dan gerust contact met ons op. Dan kijken wij samen
            welke behandeling het beste past bij jouw auto en het gewenste resultaat.
          </p>

          <div class="action-row action-row--center" style="margin-top:8px;">
            <a class="btn btn--primary" href="{{ route('contact') }}?route=projecten">Neem contact op</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection