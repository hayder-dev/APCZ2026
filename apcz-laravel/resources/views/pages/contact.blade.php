@extends('layouts.app')

@section('title', 'Contact | Auto laten poetsen in Zaandam - APCZ')
@section('meta_description', 'Neem contact op met Auto Poets Centrale Zaanstad voor auto laten poetsen in Zaandam, auto detailing, showroomklaar maken, zakelijke autoverzorging en offerte of afspraak in Zaanstad en omgeving.')
@section('meta_keywords', 'contact autopoetsbedrijf zaandam, auto laten poetsen zaandam, auto detailing zaanstad, showroomklaar maken contact, zakelijke autopoetsservice, offerte autopoetsen')
@section('canonical', url('/contact'))

@section('content')

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner reveal">
      <div class="page-hero__kicker">Contact • Offerte • Afspraak</div>
      <h1 class="page-hero__title">Plan je afspraak of vraag een offerte aan</h1>
      <p class="page-hero__lead">
        Breng je de auto in de ochtend rond <b>08:00</b> bij ons langs, dan hebben wij alle tijd om deze zorgvuldig te behandelen.
        In veel gevallen is het voertuig <b>dezelfde dag weer klaar</b> om opgehaald te worden.
        Zo kun je later op de dag weer op pad met een auto die schoon, verzorgd en representatief is afgewerkt.
      </p>
    </div>
  </div>
</section>

<section class="section section--white" id="contact-form">
  <div class="container">

    @if(session('success'))
      <div class="card reveal" style="margin-bottom:18px;">
        <div class="card__body">
          <div class="card__title">Aanvraag verzonden</div>
          <p class="card__text" style="margin-bottom:0;"><b>{{ session('success') }}</b></p>
        </div>
      </div>
    @endif

    @if($errors->any())
      <div class="card reveal" style="margin-bottom:18px;">
        <div class="card__body">
          <div class="card__title">Controleer je invoer</div>
          <ul class="card__text" style="margin:10px 0 0; padding-left:18px;">
            @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    @endif

    <div class="grid-3" style="margin-top:0; align-items:start;">

      {{-- FORMULIER --}}
      <div class="card reveal" style="grid-column:span 2;">
        <div class="card__body">

          <div class="stack">
            <div class="card__title">Offerte of afspraak aanvragen</div>
            <p class="card__text" style="opacity:.86;">
              Vul hieronder je gegevens in om eenvoudig een afspraak of offerte aan te vragen.
              Heb je al een pakket gekozen? Dan worden jouw geselecteerde pakket en eventuele extra’s automatisch meegenomen in de aanvraag.
            </p>
            <p class="card__text" style="opacity:.86;">
              Vul indien mogelijk ook het kenteken van je voertuig in. Zo kunnen wij direct zien om welk type auto en bouwjaar het gaat,
              zodat we de behandeling beter kunnen inschatten en je gerichter kunnen helpen.
            </p>
          </div>

          @php
            $extrasVal = old('extras', request('extras'));
            $extrasPretty = $extrasVal ? str_replace(',', ', ', $extrasVal) : '';
            $pakketVal = old('pakket', request('pakket'));
          @endphp

          {{-- keuze overzicht --}}
          <div class="card" style="margin-top:18px;">
            <div class="card__body">
              <div class="card__title">Jouw selectie</div>
              <p class="card__text" style="margin-bottom:8px;">
                <b>Pakket:</b> {{ $pakketVal ?: 'Nog geen pakket gekozen' }}
              </p>
              <p class="card__text" style="margin-bottom:0;">
                <b>Extra’s:</b> {{ $extrasPretty ?: 'Geen extra’s geselecteerd' }}
              </p>
            </div>
          </div>

          <form method="POST" action="{{ route('contact.send') }}" style="margin-top:18px;">
            @csrf

            <input type="text" name="honeypot" value="" style="display:none" tabindex="-1" autocomplete="off">

            <input type="hidden" name="extras" id="extrasInput" value="{{ $extrasVal }}">
            <input type="hidden" name="merk" id="rdw_merk" value="{{ old('merk', request('merk')) }}">
            <input type="hidden" name="voertuigsoort" id="rdw_voertuigsoort" value="{{ old('voertuigsoort', request('voertuigsoort')) }}">
            <input type="hidden" name="rdw_label" id="rdw_label" value="{{ old('rdw_label', request('rdw_label')) }}">

            <div style="display:grid; gap:14px; grid-template-columns:1fr 1fr;">

              <div>
                <label class="card__text"><b>Naam*</b></label>
                <input class="input" name="naam" value="{{ old('naam') }}" required>
              </div>

              <div>
                <label class="card__text"><b>E-mail*</b></label>
                <input class="input" name="email" type="email" value="{{ old('email') }}" required>
              </div>

              <div>
                <label class="card__text"><b>Telefoon</b></label>
                <input class="input" name="telefoon" value="{{ old('telefoon') }}" placeholder="06...">
              </div>

              <div>
                <label class="card__text"><b>Kenteken</b></label>
                <div style="display:flex; gap:10px;">
                  <input
                    class="input"
                    id="kentekenInput"
                    name="kenteken"
                    value="{{ old('kenteken', request('kenteken')) }}"
                    placeholder="12ABCD"
                    style="flex:1; text-transform:uppercase;"
                  >
                  <button id="rdwBtn" class="btn btn--dark" type="button" style="white-space:nowrap;">
                    Zoek voertuig
                  </button>
                </div>
                <div class="card__text" id="rdwStatus" style="margin-top:6px; opacity:.75;"></div>
              </div>

              <div>
                <label class="card__text"><b>Merk / model</b></label>
                <input
                  class="input"
                  id="modelInput"
                  name="model"
                  value="{{ old('model', request('model')) }}"
                  placeholder="Wordt automatisch ingevuld"
                  readonly
                  style="opacity:.9;"
                >
              </div>

              <input type="hidden" name="pakket" value="{{ $pakketVal }}">

              <div style="grid-column:span 2;">
                <label class="card__text"><b>Bericht*</b></label>
                <textarea
                  class="input"
                  id="berichtInput"
                  name="bericht"
                  required
                  rows="6"
                >{{ old('bericht') }}</textarea>
              </div>

            </div>

            <div class="action-row action-row--center" style="margin-top:18px;">
              <button class="btn btn--primary" type="submit">Verstuur aanvraag</button>
            </div>

            <p class="card__text" style="opacity:.75; margin-top:14px; margin-bottom:0;">
              <b>Let op:</b> Wij doen ons best om zo snel mogelijk te reageren. Door drukte kan een reactie soms iets langer duren dan gebruikelijk.
            </p>
          </form>
        </div>
      </div>

      {{-- CONTACT INFO --}}
      <div class="card reveal">
        <div class="card__body">
          <div class="card__title">Direct contact</div>

          <p class="card__text">
            <b>Telefoon:</b> <a href="tel:+31649777080">06 - 49777080</a><br>
            <b>E-mail:</b> <a href="mailto:info@apczaanstad.nl">info@apczaanstad.nl</a>
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Openingstijden</b></div>
          <p class="card__text" style="opacity:.85;">
            Ma t/m vr: 08:00 – 17:00<br>
            Zaterdag: op afspraak
          </p>

          <div class="card__text" style="margin-top:10px;"><b>Locatie</b></div>
          <p class="card__text" style="opacity:.85; margin-top:6px;">
            Zijtocht 1<br>
            1507 CD Zaandam
          </p>

          <div class="action-row action-row--center" style="margin-top:12px;">
            <a class="btn btn--primary"
               href="https://maps.app.goo.gl/bHN1YVBX2cVYKtmQ9"
               target="_blank" rel="noopener">
              Open in Google Maps
            </a>
          </div>

          <div style="margin-top:16px; border-radius:18px; overflow:hidden; border:1px solid rgba(0,0,0,.12);">
            <iframe
              title="APCZ locatie - Zijtocht 1, Zaandam"
              src="https://www.google.com/maps?q=Zijtocht%201%2C%201507%20CD%20Zaandam&output=embed"
              width="100%"
              height="320"
              style="border:0;"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>

    </div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Autopoetsbedrijf in Zaandam en omgeving</h2>
          <p class="p section-intro">
            Auto Poets Centrale Zaanstad helpt klanten uit <b>Zaandam</b>, <b>Zaanstad</b>,
            <b>Wormerveer</b>, <b>Assendelft</b>, <b>Koog aan de Zaan</b>, <b>Krommenie</b>,
            <b>Westzaan</b>, <b>Oostzaan</b>, <b>Purmerend</b> en <b>Amsterdam</b> met auto laten poetsen,
            auto detailing, showroomklaar maken, autofotografie en zakelijke autoverzorging.
          </p>
          <p class="p section-intro">
            Wil je een afspraak maken of eerst overleggen wat het beste past bij jouw voertuig? Neem gerust contact op,
            dan denken wij met je mee over de juiste aanpak en planning.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

<script>
(function () {
  const kentekenInput = document.getElementById('kentekenInput');
  const modelInput    = document.getElementById('modelInput');
  const rdwBtn        = document.getElementById('rdwBtn');
  const rdwStatus     = document.getElementById('rdwStatus');

  const rdwMerk       = document.getElementById('rdw_merk');
  const rdwVoertuig   = document.getElementById('rdw_voertuigsoort');
  const rdwLabel      = document.getElementById('rdw_label');
  const berichtInput  = document.getElementById('berichtInput');

  if (!kentekenInput || !modelInput || !rdwBtn) return;

  function cleanKenteken(v) {
    return (v || '').toUpperCase().replace(/[^A-Z0-9]/g, '');
  }

  function upsertRdwLine(line) {
    if (!berichtInput) return;
    const existing = berichtInput.value || '';

    if (!existing.includes('RDW:')) {
      berichtInput.value = (line + "\n\n" + existing).trim();
      return;
    }

    berichtInput.value = existing.replace(/^RDW:.*$/m, line);
  }

  async function lookup() {
    const kenteken = cleanKenteken(kentekenInput.value);
    kentekenInput.value = kenteken;

    modelInput.value = '';
    if (rdwMerk) rdwMerk.value = '';
    if (rdwVoertuig) rdwVoertuig.value = '';
    if (rdwLabel) rdwLabel.value = '';
    if (rdwStatus) rdwStatus.textContent = '';

    if (kenteken.length < 5) {
      if (rdwStatus) rdwStatus.textContent = 'Vul een geldig kenteken in.';
      return;
    }

    rdwBtn.disabled = true;
    rdwBtn.textContent = 'Zoeken...';
    if (rdwStatus) rdwStatus.textContent = 'Kenteken ophalen bij RDW…';

    try {
      const res = await fetch(`/rdw/lookup?kenteken=${encodeURIComponent(kenteken)}`, {
        headers: { 'Accept': 'application/json' }
      });

      const data = await res.json().catch(() => ({}));

      if (!res.ok || !data.ok) {
        if (rdwStatus) rdwStatus.textContent = data.message || 'Niet gevonden of fout bij RDW.';
        return;
      }

      modelInput.value = data.label || '';

      if (rdwMerk) rdwMerk.value = data.merk || '';
      if (rdwVoertuig) rdwVoertuig.value = data.voertuigsoort || '';
      if (rdwLabel) rdwLabel.value = data.label || '';

      const line = `RDW: ${data.kenteken} — ${data.label}${data.voertuigsoort ? ' (' + data.voertuigsoort + ')' : ''}`;
      upsertRdwLine(line);

      if (rdwStatus) rdwStatus.textContent = 'Voertuig gevonden.';
    } catch (e) {
      if (rdwStatus) rdwStatus.textContent = 'Netwerkfout. Probeer opnieuw.';
    } finally {
      rdwBtn.disabled = false;
      rdwBtn.textContent = 'Zoek voertuig';
    }
  }

  rdwBtn.addEventListener('click', lookup);

  kentekenInput.addEventListener('keydown', (e) => {
    if (e.key === 'Enter') {
      e.preventDefault();
      lookup();
    }
  });
})();
</script>

@endsection