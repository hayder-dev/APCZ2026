@extends('layouts.app')

@section('title','Contact — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="center stack">
      <h1 class="h1">Contact</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Vraag een offerte aan of plan je afspraak. Meestal kun je de auto (bij inleveren om 08:00) dezelfde dag weer ophalen — we zijn open tot 17:00.
      </p>
    </div>

    @if(session('success'))
      <div class="card" style="margin-top:18px;">
        <div class="card__body">
          <b>{{ session('success') }}</b>
        </div>
      </div>
    @endif

    @if($errors->any())
      <div class="card" style="margin-top:18px;">
        <div class="card__body">
          <b>Check even je invoer:</b>
          <ul style="margin:10px 0 0; padding-left:18px;">
            @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    @endif

    <div class="grid-3" style="margin-top:18px; align-items:start;">
      <div class="card" style="grid-column: span 2;">
        <div class="card__body">
          <div class="card__title">Offerte / afspraak aanvragen</div>
          <p class="card__text" style="opacity:.85;">
            Vul het formulier in. Als je via een pakket-knop komt, nemen we dat automatisch mee.
          </p>

          <form method="POST" action="{{ route('contact.send') }}" style="margin-top:12px;">
            @csrf

            {{-- anti-spam --}}
            <input type="text" name="honeypot" value="" style="display:none" tabindex="-1" autocomplete="off">

            {{-- ✅ extras uit URL of old input (1x) --}}
            @php
              $extrasVal = old('extras', request('extras'));
              $extrasPretty = $extrasVal ? str_replace(',', ', ', $extrasVal) : '';
            @endphp
            <input type="hidden" name="extras" id="extrasInput" value="{{ $extrasVal }}">

            {{-- ✅ RDW hidden velden (worden meegestuurd in mail) --}}
            <input type="hidden" name="merk" id="rdw_merk" value="{{ old('merk', request('merk')) }}">
            <input type="hidden" name="voertuigsoort" id="rdw_voertuigsoort" value="{{ old('voertuigsoort', request('voertuigsoort')) }}">
            <input type="hidden" name="rdw_label" id="rdw_label" value="{{ old('rdw_label', request('rdw_label')) }}">

            <div style="display:grid; gap:12px; grid-template-columns:1fr 1fr;">
              <div>
                <label class="card__text"><b>Naam*</b></label>
                <input
                  name="naam"
                  value="{{ old('naam') }}"
                  required
                  style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12);">
              </div>

              <div>
                <label class="card__text"><b>E-mail*</b></label>
                <input
                  name="email"
                  type="email"
                  value="{{ old('email') }}"
                  required
                  style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12);">
              </div>

              <div>
                <label class="card__text"><b>Telefoon</b></label>
                <input
                  name="telefoon"
                  value="{{ old('telefoon') }}"
                  placeholder="06..."
                  style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12);">
              </div>

              <div>
                <label class="card__text"><b>Kenteken</b></label>

                <div style="display:flex; gap:10px;">
                  <input
                    id="kentekenInput"
                    name="kenteken"
                    value="{{ old('kenteken', request('kenteken')) }}"
                    placeholder="12ABCD"
                    style="flex:1; width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12); text-transform:uppercase;">
                  <button id="rdwBtn" class="btn btn--dark" type="button" style="white-space:nowrap;">
                    Zoek voertuig
                  </button>
                </div>

                <div class="card__text" id="rdwStatus" style="margin-top:6px; opacity:.75;"></div>
              </div>

              <div>
                <label class="card__text"><b>Merk / model</b></label>
                <input
                  id="modelInput"
                  name="model"
                  value="{{ old('model', request('model')) }}"
                  placeholder="Wordt automatisch ingevuld"
                  readonly
                  style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12); opacity:.9;">
              </div>

              <div style="grid-column: span 2;">
                <label class="card__text"><b>Pakket (optioneel)</b></label>
                <input
                  name="pakket"
                  value="{{ old('pakket', request('pakket')) }}"
                  placeholder="bijv. Brons, Zilver+, Goud..."
                  style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12);">
              </div>

              <div style="grid-column: span 2;">
                <label class="card__text"><b>Gekozen extra’s (optioneel)</b></label>
                <input
                  id="extrasPreview"
                  value="{{ $extrasPretty }}"
                  placeholder="Geen extra’s geselecteerd"
                  readonly
                  style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12); opacity:.85;">
              </div>

              <div style="grid-column: span 2;">
                <label class="card__text"><b>Bericht*</b></label>
                <textarea
                  id="berichtInput"
                  name="bericht"
                  required
                  rows="6"
                  style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(0,0,0,.12);">{{ old('bericht') }}</textarea>
              </div>
            </div>

            <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:14px; justify-content:center;">
              <button class="btn btn--primary" type="submit">Verstuur aanvraag</button>
              <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
            </div>

            <p class="card__text" style="opacity:.75; margin-top:14px;">
              <b>Let op:</b> Wij doen ons best om zo snel mogelijk te reageren. Door drukte kan dit soms wat langer duren dan gebruikelijk.
            </p>
          </form>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Direct contact</div>
          <p class="card__text">
            <b>Telefoon:</b> <a href="tel:+31649777080">06 - 49777080</a><br>
            <b>E-mail:</b> <a href="mailto:boekingen@apczaanstad.nl">boekingen@apczaanstad.nl</a>
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

          <div style="margin-top:12px; display:flex; gap:10px; flex-wrap:wrap; justify-content:center;">
            <a class="btn btn--primary"
               href="https://maps.app.goo.gl/bHN1YVBX2cVYKtmQ9"
               target="_blank" rel="noopener">
              Open in Google Maps
            </a>
          </div>

          <div style="margin-top:14px; border-radius:18px; overflow:hidden; border:1px solid rgba(0,0,0,.12);">
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
  </div>
</section>

<script>
(function () {
  // ------------------------
  // Extras: preview netjes maken (komma + spatie)
  // ------------------------
  const extrasInput   = document.getElementById('extrasInput');
  const extrasPreview = document.getElementById('extrasPreview');

  if (extrasInput && extrasPreview) {
    const val = (extrasInput.value || '').trim();
    extrasPreview.value = val ? val.split(',').map(s => s.trim()).filter(Boolean).join(', ') : '';
  }

  // ------------------------
  // RDW lookup
  // ------------------------
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
    // vervang eerste RDW regel
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

      // zichtbare veld
      modelInput.value = data.label || '';

      // hidden velden (mail)
      if (rdwMerk) rdwMerk.value = data.merk || '';
      if (rdwVoertuig) rdwVoertuig.value = data.voertuigsoort || '';
      if (rdwLabel) rdwLabel.value = data.label || '';

      // optioneel: RDW info bovenaan bericht
      const line = `Uw voertuig: ${data.kenteken} — ${data.label}${data.voertuigsoort ? ' ('+data.voertuigsoort+')' : ''}`;
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