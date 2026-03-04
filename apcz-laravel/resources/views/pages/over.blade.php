@extends('layouts.app')
@section('title','Over ons — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">

    {{-- Intro --}}
   <div class="center stack">
  <h1 class="h1">Over Auto Poets Centrale Zaanstad</h1>

  <p class="p" style="max-width:980px; margin:0 auto;">
    Sinds <b>2003</b> verzorgen wij voertuigen in <b>Zaandam, Zaanstad en de Randstad</b> met één duidelijke missie:
    een resultaat dat écht klopt. Geen “even snel schoon”, maar een afwerking die je direct ziet en voelt — strak,
    verzorgd en representatief.
  </p>

  <p class="p" style="max-width:980px; margin:10px auto 0;">
    Wij werken met een <b>sterk en ervaren team</b> dat oog heeft voor detail. Van het eerste contact tot de oplevering
    houden we het proces helder: <b>duidelijke afspraken</b>, een <b>nette planning</b> en vooral <b>keurig werk</b>.
    We nemen de tijd waar het nodig is en werken met <b>veilige methodes</b> en <b>professionele middelen</b>,
    zodat jouw auto niet alleen mooi oogt, maar ook verantwoord behandeld wordt.
    Of het nu gaat om een onderhoudsbeurt, showroom-afwerking of periodieke verzorging van een wagenpark:
    bij de auto poets centrale draait het om <b>consistentie</b>, <b>kwaliteit</b> en <b>vertrouwen</b> — elke auto opnieuw.
  </p>

 

  <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
    <!-- laat je knoppen hier staan -->
  </div>
</div>

    {{-- Hero foto (optioneel) --}}
    <div class="card" style="margin-top:18px;">
      <div class="card__media">
        <img
          src="{{ asset('assets/img/hero-1.jfif') }}"
          alt="APCZ studio / detailing"
          style="width:100%; height:auto; display:block;"
        >
      </div>
    </div>

    {{-- 3 blokken --}}
    <div class="grid-3" style="margin-top:18px; align-items:start;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Onze aanpak</div>
          <p class="card__text" style="opacity:.88;">
            Wij werken rustig en gecontroleerd. Dat zie je terug in het eindresultaat:
            nette randen, schoon glas, strak interieur en een verzorgde buitenkant.
          </p>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Veilige technieken & juiste middelen</li>
            <li>Detail-afwerking (kieren, randen, instap)</li>
            <li>Heldere planning en duidelijke afspraken</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Voor wie we werken</div>
          <p class="card__text" style="opacity:.88;">
            Zowel particulier als zakelijk. Van één auto tot grotere aantallen.
          </p>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li>Particulieren (onderhoud, verkoop, liefhebbers)</li>
            <li>Dealers / handel (showroom & voorraad)</li>
            <li>Wagenparken / lease / bedrijfswagens</li>
          </ul>
          <p class="card__text" style="opacity:.85; margin-top:10px;">
            Zakelijk werken we desgewenst met vaste slots en periodiek onderhoud.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Kwaliteit & transparantie</div>
          <p class="card__text" style="opacity:.88;">
            We doen geen loze beloftes. We zijn eerlijk over wat haalbaar is — zeker bij lak, krassen en beschadigingen.
          </p>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Motorruimte reinigen:</b> op eigen risico</li>
            <li><b>(Gerepareerde) schade/gespoten delen:</b> vooraf melden</li>
            <li>Bij extreme vervuiling kan toeslag gelden (altijd vooraf besproken)</li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Werkwijze + doorlooptijd --}}
    <div class="card" style="margin-top:18px;">
      <div class="card__body">
        <div class="card__title">Zo verloopt een afspraak</div>
        <p class="card__text" style="opacity:.88; max-width:980px;">
          Je plant een afspraak, we stemmen het doel af en jij levert de auto aan. Daarna voeren wij de behandeling uit en leveren we netjes op.
          In veel gevallen geldt: voertuig om <b>08:00</b> brengen = <b>dezelfde dag</b> ophalen (open tot <b>17:00</b>).
        </p>

        <div class="grid-3" style="margin-top:14px; align-items:start;">
          <div class="card">
            <div class="card__body">
              <div class="card__title">1) Intake</div>
              <p class="card__text" style="opacity:.88;">
                Doel bepalen en de juiste behandeling kiezen (pakket + eventuele extra’s).
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card__body">
              <div class="card__title">2) Uitvoering</div>
              <p class="card__text" style="opacity:.88;">
                Veilig reinigen, detailwerk en finishing. Geen haastwerk, wel strak resultaat.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card__body">
              <div class="card__title">3) Oplevering</div>
              <p class="card__text" style="opacity:.88;">
                Controle en oplevering. Je auto staat er representatief en verzorgd bij.
              </p>
            </div>
          </div>
        </div>

        <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
             <a class="btn btn--primary" href="{{ route('contact') }}?route=over">Wilt u een afspraak maken?</a>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection