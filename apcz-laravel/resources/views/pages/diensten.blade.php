@extends('layouts.app')

@section('title','Pakketten & Extra’s — Auto Poets Centrale Zaanstad')

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Pakketten • Extra’s • Showroom-ready</div>
      <h1 class="page-hero__title">Pakketten & extra’s</h1>
      <p class="page-hero__lead">
        Kies eerst het pakket dat past bij jouw auto en doel. Daarna kun je het uitbreiden met extra behandelingen
        zoals koplampen polijsten, geurbehandeling of coatings.
      </p>

      <div class="page-hero__cta">
        <a class="btn btn--dark" href="#pakketten">Bekijk pakketten</a>
        <a class="btn btn--dark" href="#extras">Bekijk extra’s</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--white" id="pakketten">
  <div class="container">

    <div class="center stack reveal">
      <h2 class="h2">Kies eerst je pakket</h2>
      <p class="p section-intro">
        Van een frisse opfrisbeurt tot complete showroom-afwerking met foto’s.
        Alle prijzen zijn <b>vanaf-prijzen exclusief btw</b>.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">

      <div class="card package-card" id="bronze">
        <div class="card__body">
          <div class="card__title">Brons pakket</div>
          <p class="card__text"><b>Vanaf € 70,-</b></p>
          <p class="card__text">
            Voor een snelle frisse uitstraling. Perfect voor onderhoud of als je auto gewoon weer netjes en representatief moet zijn.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li>Interieur stofzuigen</li>
            <li>Ramen binnen en buiten</li>
            <li>Buitenkant handwas</li>
            <li>Velgen en banden licht reinigen</li>
            <li>Snelle detail-finish rondom</li>
          </ul>

          <p class="card__text" style="margin-top:10px; opacity:.85;">
            <b>Beste voor:</b> onderhoud, opfrissen, representatief rijden
          </p>

          <div style="margin-top:14px;">
            <a class="btn btn--dark package-pick" href="#" data-package="Brons" data-package-label="Brons pakket">Kies dit pakket</a>
          </div>
        </div>
      </div>

      <div class="card package-card" id="bronze-wax">
        <div class="card__body">
          <div class="card__title">Brons+ pakket</div>
          <p class="card__text"><b>Vanaf € 125,-</b></p>
          <p class="card__text">
            Alles van Brons, plus extra glans en bescherming voor de lak.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li>Alles van Brons</li>
            <li>Waxbehandeling</li>
            <li>Waxoyl bescherming</li>
            <li>Afwerking buitenkant met extra shine</li>
            <li>Snelle finishing details</li>
          </ul>

          <p class="card__text" style="margin-top:10px; opacity:.85;">
            <b>Beste voor:</b> meer glans, extra bescherming, nettere verkooplook
          </p>

          <div style="margin-top:14px;">
            <a class="btn btn--dark package-pick" href="#" data-package="Brons plus" data-package-label="Brons plus pakket">Kies dit pakket</a>
          </div>
        </div>
      </div>

      <div class="card package-card" id="silver">
        <div class="card__body">
          <div class="card__title">Zilver pakket</div>
          <p class="card__text"><b>Vanaf € 150,-</b></p>
          <p class="card__text">
            Voor wie het interieur echt fris en hygiënisch wil. Focus op dieptereiniging en detailwerk binnen.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li>Interieur dieptereiniging</li>
            <li>Stofzuigen + detailwerk</li>
            <li>Ramen binnen</li>
            <li>Afwerking interieur</li>
            <li>Gecontroleerde oplevering</li>
          </ul>

          <p class="card__text" style="margin-top:10px; opacity:.85;">
            <b>Beste voor:</b> rook, vlekken, intensiever gebruikte interieurs
          </p>

          <div style="margin-top:14px;">
            <a class="btn btn--dark package-pick" href="#" data-package="Zilver" data-package-label="Zilver pakket">Kies dit pakket</a>
          </div>
        </div>
      </div>

      <div class="card package-card" id="exterieur">
        <span class="package-corner-mini package-corner-mini--dark">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path fill="currentColor" d="M12 2l2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 16.8 6.4 19.2l1.1-6.2L3 8.6l6.2-.9L12 2z"/>
          </svg>
          Beste voor verkoop
        </span>

        <div class="card__body">
          <div class="card__title">Zilver+ pakket</div>
          <p class="card__text"><b>Vanaf € 150,-</b></p>
          <p class="card__text">
            Alleen de buitenkant: veilig wassen, polijsten en afwerken met wax voor diepe glans.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li>Buitenkant handwas</li>
            <li>3-staps polijsten</li>
            <li>Waxlaag / bescherming</li>
            <li>Swirls en lichte krasjes verminderen waar veilig mogelijk</li>
            <li>Afwerking details buiten</li>
          </ul>

          <p class="card__text" style="margin-top:10px; opacity:.85;">
            <b>Beste voor:</b> lak opfrissen, verkoopvoorbereiding, showroomlook
          </p>

          <div style="margin-top:14px;">
            <a class="btn btn--dark package-pick" href="#" data-package="Zilver plus" data-package-label="Zilver plus pakket">Kies dit pakket</a>
          </div>
        </div>
      </div>

      <div class="card package-card package-card--featured" id="gold">
        <span class="package-corner-mini package-corner-mini--gold">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path fill="currentColor" d="M12 2l2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 16.8 6.4 19.2l1.1-6.2L3 8.6l6.2-.9L12 2z"/>
          </svg>
          Meest gekozen
        </span>

        <div class="card__body">
          <div class="card__title">Goud pakket</div>
          <p class="card__text"><b>Vanaf € 175,-</b></p>
          <p class="card__text">
            Complete showroom-afwerking met focus op het totaalbeeld. Ideaal voor verkoop of presentatie.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li>Brons + Zilver gecombineerd</li>
            <li>3-staps polijsten</li>
            <li>Waxlaag / bescherming</li>
            <li>Motorruimte reinigen inbegrepen</li>
            <li>Strakke totaalafwerking binnen en buiten</li>
          </ul>

          <p class="card__text" style="margin-top:10px; opacity:.85;">
            <b>Beste voor:</b> showroomstaat, verkoop, complete opfrisbeurt
          </p>

          <div style="margin-top:14px;">
            <a class="btn btn--dark package-pick" href="#" data-package="Goud" data-package-label="Goud pakket">Kies dit pakket</a>
          </div>
        </div>
      </div>

      <div class="card package-card" id="platinum">
        <div class="card__body">
          <div class="card__title">Goud+ pakket</div>
          <p class="card__text"><b>Vanaf € 225,-</b></p>
          <p class="card__text">
            Alles van Goud, plus professionele foto’s voor advertenties of presentatie.
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Inbegrepen</b></div>
          <ul class="card__text" style="margin-top:6px; padding-left:18px;">
            <li>Alles van Goud</li>
            <li>Professionele foto’s interieur & exterieur</li>
            <li>Detailshots voor advertentiegebruik</li>
            <li>Verkoop-ready beeldset</li>
            <li>Oplevering klaar om direct te plaatsen</li>
          </ul>

          <p class="card__text" style="margin-top:10px; opacity:.85;">
            <b>Beste voor:</b> verkoop, advertenties, premium presentatie
          </p>

          <div style="margin-top:14px;">
            <a class="btn btn--dark package-pick" href="#" data-package="Goud plus" data-package-label="Goud plus pakket">Kies dit pakket</a>
          </div>
        </div>
      </div>

    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Pakket gekozen?</h2>
          <p class="p section-intro">
            Kies daarna je optionele extra’s. Die worden automatisch meegenomen naar je aanvraag.
          </p>
          <div class="action-row action-row--center" style="margin-top:8px;">
            <a class="btn btn--primary" href="#extras">Bekijk optionele extra’s</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="section section--white" id="extras">
  <div class="container">

    <div class="center stack reveal">
      <h2 class="h2">Maak je pakket compleet met extra’s</h2>
      <p class="p section-intro">
        Deze behandelingen kun je toevoegen aan vrijwel elk pakket.
        Klik op <b>Selecteer</b> om je keuze mee te nemen naar het contactformulier.
      </p>
    </div>

    <div class="grid-3 reveal" style="margin-top:22px;">

      <div class="card">
        <div class="card__body" style="display:flex; flex-direction:column; height:100%;">
          <div style="flex:1;">
            <div class="card__title">Koplampen polijsten</div>
            <p class="card__text"><b>Vanaf € 35,- per koplamp</b></p>
            <p class="card__text">
              Doffe koplampen en lichte krasjes verminderen we door de lens te polijsten en netjes af te werken.
            </p>
          </div>
          <div style="margin-top:14px;">
            <a class="btn btn--dark extra-pick" href="#" data-extra="koplampen" data-label="Koplampen polijsten">Selecteer</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__body" style="display:flex; flex-direction:column; height:100%;">
          <div style="flex:1;">
            <div class="card__title">Geurbehandeling</div>
            <p class="card__text"><b>Vanaf € 60,- per 3 uur</b></p>
            <p class="card__text">
              Voor rook, huisdieren en andere hardnekkige geuren. Gericht behandeld met professionele middelen.
            </p>
          </div>
          <div style="margin-top:14px;">
            <a class="btn btn--dark extra-pick" href="#" data-extra="geurbehandeling" data-label="Geurbehandeling">Selecteer</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__body" style="display:flex; flex-direction:column; height:100%;">
          <div style="flex:1;">
            <div class="card__title">Hondenharen verwijderen</div>
            <p class="card__text"><b>Vanaf € 50,-</b></p>
            <p class="card__text">
              Intensieve behandeling voor bekleding, kieren en vloerbedekking, inclusief lastig bereikbare plekken.
            </p>
          </div>
          <div style="margin-top:14px;">
            <a class="btn btn--dark extra-pick" href="#" data-extra="hondenharen" data-label="Hondenharen verwijderen">Selecteer</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__body" style="display:flex; flex-direction:column; height:100%;">
          <div style="flex:1;">
            <div class="card__title">Hemel reinigen</div>
            <p class="card__text"><b>Vanaf € 50,-</b></p>
            <p class="card__text">
              Voor vlekken en vervuiling in de hemelbekleding. Zorgvuldig uitgevoerd en altijd in overleg.
            </p>
          </div>
          <div style="margin-top:14px;">
            <a class="btn btn--dark extra-pick" href="#" data-extra="hemel" data-label="Hemel reinigen">Selecteer</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__body" style="display:flex; flex-direction:column; height:100%;">
          <div style="flex:1;">
            <div class="card__title">Motorruimte reinigen</div>
            <p class="card__text"><b>Vanaf € 60,-</b></p>
            <p class="card__text">
              Voor een nette presentatie en verzorgde indruk onder de motorkap. Uitvoering altijd zorgvuldig en op eigen risico.
            </p>
          </div>
          <div style="margin-top:14px;">
            <a class="btn btn--dark extra-pick" href="#" data-extra="motorruimte" data-label="Motorruimte reinigen">Selecteer</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__body" style="display:flex; flex-direction:column; height:100%;">
          <div style="flex:1;">
            <div class="card__title">Speciale coatings</div>
            <p class="card__text"><b>Prijs op aanvraag</b></p>
            <p class="card__text">
              Glascoating, keramische coating of velgen-coating voor langdurige bescherming en makkelijker onderhoud.
            </p>
          </div>
          <div style="margin-top:14px;">
            <a class="btn btn--dark extra-pick" href="#" data-extra="coating" data-label="Speciale coatings">Selecteer</a>
          </div>
        </div>
      </div>

    </div>

    <div class="card reveal" style="margin-top:22px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Jouw keuze</h2>
          <p> Dit zijn de gekozen opties die je hebt geselecteerd.</p>

          <p class="p section-intro">
            <b>Pakket:</b> <span id="selectedPackageText">Nog geen pakket gekozen</span>
          </p>

          <p class="p section-intro">
            <b>Extra’s:</b> <span id="extrasSelectedText">Geen extra’s geselecteerd</span>
          </p>

          <div class="action-row action-row--center" style="margin-top:8px;">
            <a id="extrasToContactBtn" class="btn btn--primary" href="{{ route('contact') }}">Afspraak inplannen?</a>
            </a>
            <button id="extrasClearBtn" class="btn btn--outline" type="button">Wis selectie</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<script>
(function () {
  const params = new URLSearchParams(window.location.search);
  let selectedPackage = (params.get('pakket') || '').trim();

  const selected = new Set(
    (params.get('extras') || '')
      .split(',')
      .map(s => s.trim())
      .filter(Boolean)
  );

  const packageButtons = Array.from(document.querySelectorAll('.package-pick'));
  const extraButtons = Array.from(document.querySelectorAll('.extra-pick'));
  const selectedPackageText = document.getElementById('selectedPackageText');
  const selectedText = document.getElementById('extrasSelectedText');
  const toContactBtn = document.getElementById('extrasToContactBtn');
  const clearBtn = document.getElementById('extrasClearBtn');

  function buildExtrasString() {
    return Array.from(selected).join(',');
  }

  function getPackageLabel() {
    const btn = packageButtons.find(b => (b.dataset.package || '').trim() === selectedPackage);
    return btn ? (btn.dataset.packageLabel || '').trim() : '';
  }

  function updateUrl() {
    const next = new URLSearchParams();

    if (selectedPackage) next.set('pakket', selectedPackage);

    const extrasStr = buildExtrasString();
    if (extrasStr) next.set('extras', extrasStr);

    const newUrl = window.location.pathname + (next.toString() ? '?' + next.toString() : '') + window.location.hash;
    window.history.replaceState({}, '', newUrl);
  }

  function updatePackageButtons() {
    packageButtons.forEach(btn => {
      const key = (btn.dataset.package || '').trim();
      const isOn = key === selectedPackage;

      btn.textContent = isOn ? 'Gekozen' : 'Kies dit pakket';
      btn.classList.toggle('btn--primary', isOn);
      btn.classList.toggle('btn--dark', !isOn);
      btn.setAttribute('aria-pressed', isOn ? 'true' : 'false');
    });
  }

  function updateExtraButtons() {
    extraButtons.forEach(btn => {
      const key = (btn.dataset.extra || '').trim();
      const isOn = selected.has(key);

      btn.textContent = isOn ? 'Geselecteerd' : 'Selecteer';
      btn.classList.toggle('btn--primary', isOn);
      btn.classList.toggle('btn--dark', !isOn);
      btn.setAttribute('aria-pressed', isOn ? 'true' : 'false');
    });
  }

  function updateSummaryAndLinks() {
    const extrasStr = buildExtrasString();

    if (selectedPackageText) {
      selectedPackageText.textContent = selectedPackage ? getPackageLabel() : 'Nog geen pakket gekozen';
    }

    if (selectedText) {
      if (!extrasStr) {
        selectedText.textContent = 'Geen extra’s geselecteerd';
      } else {
        const labels = extraButtons
          .filter(btn => selected.has((btn.dataset.extra || '').trim()))
          .map(btn => (btn.dataset.label || '').trim())
          .filter(Boolean);

        selectedText.textContent = labels.join(', ');
      }
    }

    if (toContactBtn) {
      const baseHref = "{{ route('contact') }}";
      const url = new URL(baseHref, window.location.origin);

      if (selectedPackage) url.searchParams.set('pakket', selectedPackage);
      if (extrasStr) url.searchParams.set('extras', extrasStr);

      toContactBtn.setAttribute('href', url.pathname + url.search);
    }
  }

  packageButtons.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      const key = (this.dataset.package || '').trim();
      if (!key) return;

      selectedPackage = key;
      updatePackageButtons();
      updateUrl();
      updateSummaryAndLinks();
    });
  });

  extraButtons.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      const key = (this.dataset.extra || '').trim();
      if (!key) return;

      if (selected.has(key)) selected.delete(key);
      else selected.add(key);

      updateExtraButtons();
      updateUrl();
      updateSummaryAndLinks();
    });
  });

  if (clearBtn) {
    clearBtn.addEventListener('click', function() {
      selectedPackage = '';
      selected.clear();
      updatePackageButtons();
      updateExtraButtons();
      updateUrl();
      updateSummaryAndLinks();
    });
  }

  updatePackageButtons();
  updateExtraButtons();
  updateSummaryAndLinks();
})();
</script>
@endsection