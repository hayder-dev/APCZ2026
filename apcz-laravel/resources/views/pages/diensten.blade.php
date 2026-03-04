@extends('layouts.app')

@section('title','Pakketten & Extra’s — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="center stack">
      <h1 class="h1">Pakketten</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Kies een pakket dat past bij jouw doel: opfrissen, interieur reinigingen of volledig showroom-ready (eventueel met foto’s).
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
        <a class="btn btn--dark" href="#pakketten">6 pakketten</a>
        <a class="btn btn--dark" href="#extras">Optionele extra’s</a>

        {{-- Deze knop neemt extras mee door JS (class=contact-cta) --}}
        <a class="btn btn--primary contact-cta" href="{{ route('contact') }}">Afspraak / offerte</a>
      </div>
    </div>
  </div>
</section>

{{-- =========================
     PAKKETTEN
========================== --}}
<section class="section section--white" id="pakketten">
  <div class="container">
    <div class="grid-3" style="margin-top:6px;">

      <!-- 1) BRONZE -->
      <div class="card" id="bronze">
        <div class="card__body">
          <div class="card__title">Brons pakket</div>
          <p class="card__text"><b>Vanaf € 70,-</b></p>
          <p class="card__text">
            Voor een snelle frisse uitstraling. Perfect voor onderhoud of als je auto “netjes” moet zijn.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li><b>Interieur stofzuigen</b> (vloer, matten en zichtbare delen)</li>
            <li><b>Ramen</b> binnen én buiten voor een heldere, strakke uitstraling</li>
            <li><b>Buitenkant handwas</b> met veilige methode (voorwas + contactwas)</li>
            <li><b>Velgen & banden</b> licht reinigen (standaard vervuiling)</li>
            <li><b>Snelle detail-finish</b> rondom (randen/spiegels/instap licht)</li>
          </ul>

          <p class="card__text" style="opacity:.85; margin-top:10px;">
            Doel: fris, netjes en representatief — zonder dieptereiniging of lakcorrectie.
          </p>

          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark contact-cta" href="{{ route('contact') }}?pakket=bronze">Plan Brons</a>
          </div>
        </div>
      </div>

      <!-- 2) BRONZE + WAX -->
      <div class="card" id="bronze-wax">
        <div class="card__body">
          <div class="card__title">Brons+ pakket</div>
          <p class="card__text"><b>Vanaf € 125,-</b></p>
          <p class="card__text">
            Alles van Brons, plus een waxlaag voor extra glans en bescherming.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li><b>Alles van Brons</b> (stofzuigen, ramen, handwas)</li>
            <li><b>Waxbehandeling</b> voor extra glans en bescherming</li>
            <li><b>Waxoyl</b> voor intensieve bescherming van de lak</li>
            <li><b>Afwerking buitenkant</b> met nette “shine” look</li>
            <li><b>Snelle finishing details</b> (randen/spiegels/instap licht)</li>
          </ul>

          <p class="card__text" style="opacity:.85; margin-top:10px;">
            Doel: zichtbaar meer glans en bescherming — perfecte upgrade op Brons.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Niet inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li>Motorruimte (alleen bij Goud en Goud+ pakket)</li>
          </ul>

          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark contact-cta" href="{{ route('contact') }}?pakket=bronze-wax">Plan Brons+</a>
          </div>
        </div>
      </div>

      <!-- 3) SILVER (interieur) -->
      <div class="card" id="silver">
        <div class="card__body">
          <div class="card__title">Zilver pakket</div>
          <p class="card__text"><b>Vanaf € 150,-</b></p>
          <p class="card__text">
            Voor wie het interieur écht fris en hygiënisch wil. Focus op dieptereiniging en detailwerk binnen.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li><b>Interieur dieptereiniging</b> (naar staat: bekleding/kunststof contactpunten)</li>
            <li><b>Stofzuigen + detailwerk</b> (kieren, randen, moeilijk bereikbare plekken)</li>
            <li><b>Ramen binnen</b> voor helder zicht en frisse uitstraling</li>
            <li><b>Afwerking interieur</b> zodat het weer strak en representatief aanvoelt</li>
            <li><b>Gecontroleerde oplevering</b> (we checken het eindresultaat)</li>
          </ul>

          <p class="card__text" style="opacity:.85; margin-top:10px;">
            Doel: een schoon, fris en representatief interieur — ideaal bij rook/gebruik/vlekken.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Niet inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li>Motorruimte (alleen bij Goud en Goud+ pakket)</li>
          </ul>

          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--primary contact-cta" href="{{ route('contact') }}?pakket=silver">Plan Zilver</a>
          </div>
        </div>
      </div>

      <!-- 4) SILVER+ (exterieur) -->
      <div class="card" id="exterieur">
        <div class="card__body">
          <div class="card__title">Zilver+ pakket</div>
          <p class="card__text"><b>Vanaf € 150,-</b></p>
          <p class="card__text">
            Alleen de buitenkant: veilig wassen, 3-staps polijsten en afwerken met een waxlaag voor diepe glans.
            Perfect als je lak weer strak en verkoopklaar moet ogen.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li><b>Buitenkant handwas</b> (voorwas + contactwas)</li>
            <li><b>3-staps polijsten</b> voor glans en lakcorrectie</li>
            <li><b>Waxlaag / bescherming</b> (glans + bescherming)</li>
            <li><b>Krassen</b>: swirls/wasstraatkrassen verminderen waar veilig mogelijk*</li>
            <li><b>Afwerking details buiten</b> voor een strak totaalbeeld</li>
          </ul>

          <p class="card__text" style="opacity:.85; margin-top:10px;">
            *Diepe krassen kunnen niet altijd volledig weg zonder risico; veiligheid van de lak gaat voor.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Niet inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li>Motorruimte (alleen bij Goud en Goud+ pakket)</li>
          </ul>

          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--primary contact-cta" href="{{ route('contact') }}?pakket=silver-plus">Plan Zilver+</a>
          </div>
        </div>
      </div>

      <!-- 5) GOLD -->
      <div class="card" id="gold">
        <div class="card__body">
          <div class="card__title">Goud pakket</div>
          <p class="card__text"><b>Vanaf € 175,-</b></p>
          <p class="card__text">
            Voor wie het écht strak wil: complete showroom-afwerking met focus op het totaalbeeld.
            Ideaal voor verkoop, presentatie of als je auto weer “als nieuw” wilt ogen.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li><b>Brons</b> — handwas, ramen, basis afwerking</li>
            <li><b>Zilver</b> — interieur fris, hygiënisch en representatief</li>
            <li><b>3-staps polijsten</b> — glans + lakcorrectie waar veilig mogelijk*</li>
            <li><b>Waxlaag / bescherming</b> — diepe glans + bescherming</li>
            <li><b>Motorruimte reinigen</b> inbegrepen (zorgvuldig uitgevoerd)</li>
          </ul>

          <p class="card__text" style="opacity:.85; margin-top:10px;">
            *Diepe krassen kunnen niet altijd volledig weg zonder risico; veiligheid van de lak gaat voor.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Niet inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li>Professionele foto's voor verkoop</li>
          </ul>

          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--primary contact-cta" href="{{ route('contact') }}?pakket=gold">Plan Goud</a>
          </div>
        </div>
      </div>

      <!-- 6) PLATINUM (Goud+) -->
      <div class="card" id="platinum">
        <div class="card__body">
          <div class="card__title">Goud+ pakket</div>
          <p class="card__text"><b>Vanaf € 225,-</b></p>
          <p class="card__text">
            Alles van Goud, plus professionele foto’s in een rustige setting.
            Ideaal voor verkoop: beelden die direct “advertentie-klaar” ogen of voor je eigen collectie.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li><b>Goud</b> — interieur + 3-staps polijsten + wax + motorruimte</li>
            <li><b>Professionele foto’s</b> (interieur & exterieur + detailshots)</li>
            <li><b>Verkoop-ready set</b> — kilometerstand/navigatie/details netjes in beeld</li>
            <li><b>Geschikt voor advertenties</b> (Marktplaats/AutoTrack/website)</li>
            <li><b>Oplevering</b> met strak totaalbeeld: klaar om te plaatsen</li>
          </ul>

          <p class="card__text" style="opacity:.85; margin-top:10px;">
            Aantal foto’s en stijl stemmen we af op het doel (verkoop of persoonlijk album).
          </p>

          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--primary contact-cta" href="{{ route('contact') }}?pakket=platinum">Plan Goud+</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


{{-- =========================
     EXTRAS
========================== --}}
<section class="section section--white" id="extras">
  <div class="container">
    <div class="stack">
      <h2 class="h2">Optionele extra’s</h2>
      <p class="p" style="max-width:980px;">
        Extra behandelingen die je kunt toevoegen aan elk pakket.
      </p>
    </div>

    <div class="grid-3" style="margin-top:18px;">

      {{-- 1) Koplampen --}}
      <div class="card">
        <div class="card__body" style="display:flex; flex-direction:column; height:100%;">
          <div style="flex:1;">
            <div class="card__title">Koplampen polijsten</div>
            <p class="card__text"><b>Vanaf € 35,- per koplamp</b></p>
            <p class="card__text">
              Doffe koplampen en lichte krasjes verminderen we door de lens te polijsten en netjes af te werken.
              Dit zorgt voor een frissere “als nieuw” uitstraling én beter lichtbeeld in het donker.
            </p>
            <p class="card__text" style="opacity:.85;">
              Doel: helderder zicht, strakkere look en een representatieve voorkant.
            </p>
          </div>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark extra-pick" href="#" data-extra="koplampen" data-label="Koplampen polijsten">Selecteer</a>
          </div>
        </div>
      </div>

      {{-- 2) Geurbehandeling --}}
      <div class="card">
        <div class="card__body" style="display:flex; flex-direction:column; height:100%;">
          <div style="flex:1;">
            <div class="card__title">Geurbehandeling</div>
            <p class="card__text"><b>Vanaf € 60,- per 3 uur</b></p>
            <p class="card__text">
              Voor rook, huisdieren of andere hardnekkige geuren. We behandelen de cabine gericht en werken met
              professionele middelen per situatie. Denk aan bacteriën, gemorste melk, vocht/rook en meer.
            </p>
            <p class="card__text" style="opacity:.85;">
              Doel: een frisse, neutrale geur en een interieur dat weer prettig aanvoelt.
              Prijs hangt af van de intensiteit (bijv. hoeveelheid rook/duur).
            </p>
          </div>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark extra-pick" href="#" data-extra="geurbehandeling" data-label="Geurbehandeling">Selecteer</a>
          </div>
        </div>
      </div>

      {{-- 3) Hondenharen --}}
      <div class="card">
        <div class="card__body" style="display:flex; flex-direction:column; height:100%;">
          <div style="flex:1;">
            <div class="card__title">Hondenharen verwijderen</div>
            <p class="card__text"><b>Vanaf € 25,-</b></p>
            <p class="card__text">
              Intensieve behandeling voor bekleding, kieren en vloerbedekking. We verwijderen haren zo diep mogelijk,
              inclusief lastig bereikbare plekken zoals naden, stoelsledes en randen.
            </p>
            <p class="card__text" style="opacity:.85;">
              Doel: een strak interieur zonder “plakkerige” haren en zichtbare resten.
            </p>
          </div>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark extra-pick" href="#" data-extra="hondenharen" data-label="Hondenharen verwijderen">Selecteer</a>
          </div>
        </div>
      </div>

      {{-- 4) Hemel --}}
      <div class="card">
        <div class="card__body" style="display:flex; flex-direction:column; height:100%;">
          <div style="flex:1;">
            <div class="card__title">Hemel reinigen</div>
            <p class="card__text"><b>Vanaf € 50,-</b></p>
            <p class="card__text">
              Voor vlekken en vervuiling in de hemelbekleding. We reinigen zorgvuldig en altijd in overleg,
              omdat het materiaal en de lijmlaag gevoelig kunnen zijn.
            </p>
            <p class="card__text" style="opacity:.85;">
              Doel: vlekken verminderen en het interieur weer rustiger en verzorgder laten ogen.
            </p>
          </div>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark extra-pick" href="#" data-extra="hemel" data-label="Hemel reinigen">Selecteer</a>
          </div>
        </div>
      </div>

      {{-- 5) Motorruimte --}}
      <div class="card">
        <div class="card__body" style="display:flex; flex-direction:column; height:100%;">
          <div style="flex:1;">
            <div class="card__title">Motorruimte reinigen</div>
            <p class="card__text"><b>Vanaf € 60,-</b></p>
            <p class="card__text">
              Voor een nette presentatie bij verkoop, showroom-afwerking of onderhoud. We reinigen zichtbaar vuil, stof
              en aanslag en werken het geheel strak af zodat de motorruimte er verzorgd uitziet.
            </p>
            <p class="card__text" style="opacity:.85;">
              Doel: een frisse, professionele indruk onder de motorkap.
              <b>Op eigen risico:</b> we werken zorgvuldig, maar elektronica/onderdelen blijven gevoelig.
            </p>
          </div>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark extra-pick" href="#" data-extra="motorruimte" data-label="Motorruimte reinigen">Selecteer</a>
          </div>
        </div>
      </div>

      {{-- 6) Coatings --}}
      <div class="card">
        <div class="card__body" style="display:flex; flex-direction:column; height:100%;">
          <div style="flex:1;">
            <div class="card__title">Speciale coatings</div>
            <p class="card__text"><b>Prijs op aanvraag</b></p>
            <p class="card__text">
              Glascoating, keramische coating of velgen-coating voor langdurige bescherming en makkelijker onderhoud.
              We adviseren op basis van gebruik, lakconditie en budget.
            </p>
            <p class="card__text" style="opacity:.85;">
              Doel: maximale bescherming, diepere glans en langere “easy clean” werking.
            </p>
          </div>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark extra-pick" href="#" data-extra="coating" data-label="Speciale coatings">Selecteer</a>
          </div>
        </div>
      </div>

    </div>

    {{-- Samenvatting selectie + knop contact --}}
    <div class="card" style="margin-top:18px;">
      <div class="card__body">
        <div class="card__title">Geselecteerde extra’s</div>

        <p class="card__text" style="opacity:.85; margin-top:6px;">
          Klik op “Selecteer” om extra’s toe te voegen. Je selectie wordt automatisch meegenomen naar het contactformulier.
        </p>

        <div class="card__text" style="margin-top:10px;">
          <b>Jouw selectie:</b>
          <span id="extrasSelectedText" style="opacity:.9;">Geen extra’s geselecteerd</span>
        </div>

        <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
          <a id="extrasToContactBtn" class="btn btn--primary" href="{{ route('contact') }}">Ga naar contact met selectie</a>
          <button id="extrasClearBtn" class="btn btn--outline" type="button">Wis selectie</button>
        </div>
      </div>
    </div>

    {{-- Toeslagen & voorwaarden --}}
    <div class="card" style="margin-top:18px;">
      <div class="card__body">
        <div class="card__title">Toeslagen & voorwaarden</div>

        <ul class="card__text" style="margin-top:8px; padding-left:18px;">
          <li><b>Alle prijzen zijn exclusief btw.</b></li>
          <li>
            Onze tarieven zijn <b>vanaf-prijzen</b>. De definitieve prijs is afhankelijk van <b>staat, omvang en tijdsduur</b> van de behandeling.
            Bij afwijkingen stemmen we dit altijd vooraf met je af.
          </li>
          <li>
            Wij werken met <b>toeslagen</b> op basis van vervuiling/omvang (bijv. rook, dierenharen, zware vlekken, zand/modder, extra werk aan velgen).
            Zo blijft de prijs eerlijk: je betaalt voor het werk dat nodig is.
          </li>
          <li><b>Donkere kleuren</b> (extra werk/finish en hogere zichtbaarheid van swirls): <b>+ € 50,-</b>.</li>
          <li>
            <b>Motorruimte reinigen is op eigen risico.</b> We werken zorgvuldig, maar elektronica, sensoren en kwetsbare onderdelen kunnen gevoelig zijn.
            Geef vooraf aan als er storingen, lekkages of recente werkzaamheden zijn geweest.
          </li>
          <li>
            <b>Gerepareerde schades / (deel)overspuitingen of kwetsbare lakdelen</b> zijn niet altijd zichtbaar van buitenaf.
            Het is daarom belangrijk dat je <b>vooraf meldt</b> als er schade is hersteld, delen zijn gespoten of als de lak kwetsbaar is.
            Dit voorkomt risico bij polijsten en beschermbehandelingen.
          </li>
          <li>
            Bij twijfel over lakconditie/afwerking kiezen we altijd voor de <b>veiligste werkwijze</b>.
            Diepe krassen kunnen niet altijd volledig worden verwijderd zonder risico; veiligheid van de lak gaat voor.
          </li>
          <li>
            <b>Doorlooptijd & ophalen:</b> in de meeste gevallen geldt: lever je de auto om <b>08:00</b> in, dan kan hij <b>dezelfde dag</b> weer opgehaald worden.
            Wij zijn geopend tot <b>17:00</b>. Bij zwaardere vervuiling of grotere behandelingen stemmen we de planning vooraf met je af.
          </li>
        </ul>

        <div class="center" style="margin-top:16px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
          <a class="btn btn--primary contact-cta" href="{{ route('contact') }}">Afspraak / offerte</a>
          <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
        </div>
      </div>
    </div>

  </div>
</section>


{{-- =========================
     SCRIPT (1x, alles geregeld)
========================== --}}
<script>
(function () {
  const params = new URLSearchParams(window.location.search);

  // Pak pakket uit URL als die er is (handig als je ooit pakketten -> extras via URL wil gebruiken)
  const pakketFromUrl = (params.get('pakket') || '').trim();

  // Start selectie uit URL: ?extras=koplampen,motorruimte
  const selected = new Set(
    (params.get('extras') || '')
      .split(',')
      .map(s => s.trim())
      .filter(Boolean)
  );

  const buttons = Array.from(document.querySelectorAll('.extra-pick'));
  const selectedText = document.getElementById('extrasSelectedText');
  const toContactBtn = document.getElementById('extrasToContactBtn');
  const clearBtn = document.getElementById('extrasClearBtn');

  function buildExtrasString() {
    return Array.from(selected).join(',');
  }

  function updateUrl() {
    const next = new URLSearchParams(window.location.search);
    const extrasStr = buildExtrasString();

    if (extrasStr) next.set('extras', extrasStr);
    else next.delete('extras');

    // pakket in URL behouden als die al bestaat
    if (pakketFromUrl) next.set('pakket', pakketFromUrl);

    const newUrl = window.location.pathname + (next.toString() ? '?' + next.toString() : '') + window.location.hash;
    window.history.replaceState({}, '', newUrl);
  }

  function updateButtons() {
    buttons.forEach(btn => {
      const key = (btn.dataset.extra || '').trim();
      const isOn = selected.has(key);

      btn.textContent = isOn ? 'Geselecteerd' : 'Selecteer';
      btn.setAttribute('aria-pressed', isOn ? 'true' : 'false');

      // Klein visueel verschil zonder CSS aanpassen:
      // wissel alleen class zodat hij opvalt als geselecteerd
      btn.classList.toggle('btn--primary', isOn);
      btn.classList.toggle('btn--dark', !isOn);
    });
  }

  function updateSummaryAndLinks() {
    const extrasStr = buildExtrasString();

    // Samenvatting
    if (selectedText) {
      if (!extrasStr) {
        selectedText.textContent = 'Geen extra’s geselecteerd';
      } else {
        // mooie labels tonen
        const labels = buttons
          .filter(b => selected.has((b.dataset.extra || '').trim()))
          .map(b => (b.dataset.label || b.dataset.extra || '').trim())
          .filter(Boolean);
        selectedText.textContent = labels.join(', ');
      }
    }

    // "Ga naar contact" knop (onder extras)
    if (toContactBtn) {
      const url = new URL(toContactBtn.getAttribute('href'), window.location.origin);
      if (pakketFromUrl) url.searchParams.set('pakket', pakketFromUrl);
      if (extrasStr) url.searchParams.set('extras', extrasStr);
      toContactBtn.setAttribute('href', url.pathname + url.search);
    }

    // Alle .contact-cta links op de pagina -> extras meegeven
    document.querySelectorAll('.contact-cta').forEach(a => {
      const url = new URL(a.getAttribute('href'), window.location.origin);

      if (pakketFromUrl) url.searchParams.set('pakket', pakketFromUrl);
      if (extrasStr) url.searchParams.set('extras', extrasStr);
      else url.searchParams.delete('extras');

      a.setAttribute('href', url.pathname + url.search);
    });
  }

  // click handlers op extra buttons
  buttons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const key = (btn.dataset.extra || '').trim();
      if (!key) return;

      if (selected.has(key)) selected.delete(key);
      else selected.add(key);

      updateButtons();
      updateUrl();
      updateSummaryAndLinks();
    });
  });

  // Wis selectie
  if (clearBtn) {
    clearBtn.addEventListener('click', () => {
      selected.clear();
      updateButtons();
      updateUrl();
      updateSummaryAndLinks();
    });
  }

  // init
  updateButtons();
  updateSummaryAndLinks();
})();
</script>
@endsection