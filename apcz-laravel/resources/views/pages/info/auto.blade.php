@extends('layouts.app')

@section('title','Auto laten poetsen — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">

    {{-- INTRO --}}
    <div class="center stack">
      <h1 class="h1">Auto laten poetsen</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Wil je een auto die er weer <b>verzorgd</b>, <b>strak</b> en <b>representatief</b> bij staat?
        Auto poets centrale Zaanstad levert geen “even snel schoon”, maar een nette afwerking met aandacht voor details — perfect voor
        dagelijks gebruik, zakelijke uitstraling of verkoopvoorbereiding.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
      </div>
    </div>

    {{-- HERO FOTO --}}
    <div class="card" style="margin-top:18px;">
      <div class="card__media">
        <img
          src="{{ asset('assets/img/info-auto.jpg') }}"
          alt="Auto laten poetsen"
          style="width:100%; height:auto; display:block;"
        >
      </div>
    </div>

    <div class="grid-3" style="margin-top:18px; align-items:start;">

      {{-- LINKS (breed): wat, hoe, resultaat --}}
      <div class="card" style="grid-column: span 2;">
        <div class="card__body">
          <div class="card__title">Wat houden wij onder “poetsen”?</div>
          <p class="card__text" style="opacity:.88;">
            “Poetsen” is bij ons een combinatie van veilig reinigen, detailwerk en finishing.
            Het doel is een auto die er niet alleen schoon uitziet, maar ook <b>strak afgewerkt</b> aanvoelt.
            Denk aan glas, randen, instap, zichtvlakken en interieurdetails — juist daar zie je het verschil.
          </p>

          <div class="card__text" style="margin-top:12px;"><b>Zo werken wij (duidelijk in stappen)</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>1) Intake & verwachting</b> — we bespreken doel en staat van de auto (opfrissen, interieur, verkoop, etc.).</li>
            <li><b>2) Behandeling</b> — we voeren het gekozen pakket uit met veilige methodes en professioneel materiaal.</li>
            <li><b>3) Detail-afwerking</b> — randen, kieren, glas en zichtbare delen worden netjes afgewerkt.</li>
            <li><b>4) Controle & oplevering</b> — we lopen de auto na en leveren ‘m strak en representatief op.</li>
          </ul>

          <div class="card__text" style="margin-top:12px;"><b>Resultaat dat je kunt verwachten</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Frisse uitstraling</b> binnen en/of buiten (afhankelijk van pakket)</li>
            <li><b>Nette details</b> die het verschil maken in presentatie</li>
            <li><b>Strakker totaalbeeld</b> (glans, glas, randen en zichtvlakken)</li>
            <li><b>Geen loze beloftes</b> — we zijn eerlijk over wat haalbaar is (zeker bij diepe krassen/vlekken)</li>
          </ul>

          <div class="card__text" style="margin-top:12px;"><b>Doorlooptijd</b></div>
          <p class="card__text" style="opacity:.88;">
            In veel gevallen geldt: lever je de auto om <b>08:00</b> in, dan kun je ‘m <b>dezelfde dag</b> weer ophalen.
            We zijn geopend tot <b>17:00</b>. Bij zware vervuiling of extra werk stemmen we de planning vooraf met je af.
          </p>

          <div class="card__text" style="margin-top:12px;"><b>Belangrijk (risico’s & melding)</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Motorruimte reinigen</b> kan, maar gebeurt <b>op eigen risico</b> (elektronica/onderdelen blijven gevoelig).</li>
            <li>Heb je <b>(gerepareerde) schade</b>, gespoten delen, matte lak of speciale folie? <b>Meld dit vooraf</b>.</li>
            <li>Wanneer herstelwerk niet is aangegeven, kunnen we dit niet altijd herkennen en kan dit invloed hebben op aanpak/resultaat.</li>
          </ul>

          <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
            <a class="btn btn--dark" href="{{ route('info.index') }}">Terug</a>
                   <a class="btn btn--dark" href="{{ route('diensten') }}#pakketten">Bekijk pakketten</a>
            <a class="btn btn--primary" href="{{ route('contact') }}?route=auto-laten-poetsen">Aanvraag starten</a>
         
          </div>
        </div>
      </div>

      {{-- RECHTS: snelle keuze + advies --}}
      <div class="card">
        <div class="card__body">
          <div class="card__title">Welke route past bij jou?</div>
          <p class="card__text" style="opacity:.88;">
            Kies op basis van je doel. Je kunt altijd upgraden met extra’s.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Onderhoud / fris</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Brons</b> — snel netjes en representatief</li>
            <li><b>Brons+</b> — extra glans en bescherming (wax)</li>
          </ul>

          <div class="card__text" style="margin-top:10px;"><b>Interieur focus</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Zilver</b> — dieptereiniging, kierenwerk en hygiëne</li>
          </ul>

          <div class="card__text" style="margin-top:10px;"><b>Verkoop / presentatie</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Goud</b> — showroom totaal</li>
            <li><b>Goud+</b> — showroom + professionele foto’s</li>
          </ul>

          <p class="card__text" style="opacity:.85; margin-top:12px;">
            Twijfel je? Stuur een foto via WhatsApp en we adviseren je direct welke aanpak het best past.
          </p>

          <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
            <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection