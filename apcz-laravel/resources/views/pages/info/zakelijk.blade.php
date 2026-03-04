@extends('layouts.app')

@section('title','Wagenpark & zakelijk — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="center stack">
      <h1 class="h1">Wagenpark & zakelijk</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Een representatief wagenpark is een visitekaartje. Auto poets centrale Zaanstad helpt bedrijven met <b>periodiek onderhoud</b>,
        <b>vaste afspraken</b> en een <b>snelle doorlooptijd</b> — zodat voertuigen altijd strak voor de dag komen,
        zonder dat het jouw planning in de weg zit.
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
      </div>
    </div>

    {{-- HERO FOTO (1 foto) --}}
    <div class="card" style="margin-top:18px;">
      <div class="card__media">
        <img
          src="{{ asset('assets/img/info-zakelijk.jpg') }}"
          alt="Wagenpark & zakelijk"
          style="width:100%; height:auto; display:block;"
        >
      </div>
    </div>

    <div class="grid-3" style="margin-top:18px; align-items:start;">
      {{-- LINKERKANT: wat je krijgt + proces --}}
      <div class="card" style="grid-column: span 2;">
        <div class="card__body">
          <div class="card__title">Zakelijk klant worden</div>
          <p class="card__text" style="opacity:.88;">
            Heb je meerdere voertuigen of wil je structureel onderhoud? Wij werken met een vaste planning,
            duidelijke afspraken en een consistente kwaliteitsstandaard. Perfect voor bedrijven die geen “losse” poetsbeurt willen,
            maar een partner die meedenkt.
          </p>

          <div class="card__text" style="margin-top:12px;"><b>Voor wie?</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Bedrijfsauto’s & lease</b> — representatief richting klanten en medewerkers.</li>
            <li><b>Servicebussen</b> — intensief gebruik, veel instap, werkstof en vervuiling.</li>
            <li><b>Poolauto’s</b> — constant wisselende bestuurders, dus regelmaat is key.</li>
            <li><b>Directie-/premium voertuigen</b> — extra aandacht voor lakveilig en detailniveau.</li>
          </ul>

          <div class="card__text" style="margin-top:12px;"><b>Wat wij leveren</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Periodiek onderhoud</b> (wekelijks, 2-wekelijks of maandelijks)</li>
            <li><b>Consistente standaard</b> per voertuig (checklist, geen wisselende kwaliteit)</li>
            <li><b>Snelle doorlooptijd</b> met vooraf afgesproken slots</li>
            <li><b>Maatwerk per voertuig</b> (bijv. 1x per kwartaal “deep clean” interieur)</li>
            <li><b>Duidelijke communicatie</b> over staat, extra werk en planning</li>
          </ul>

          <div class="card__text" style="margin-top:12px;"><b>Planning & oplevering</b></div>
          <p class="card__text" style="opacity:.88;">
            In veel gevallen geldt: lever je een voertuig om <b>08:00</b> in, dan kan hij <b>dezelfde dag</b> weer mee terug.
            We zijn geopend tot <b>17:00</b>. Bij meerdere voertuigen maken we een planning die aansluit op jouw bedrijfsproces.
          </p>

          <div class="card__text" style="margin-top:12px;"><b>Belangrijke voorwaarden</b></div>
          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Motorruimte reinigen</b> is mogelijk, maar gebeurt <b>op eigen risico</b> (gevoelige elektronica/onderdelen).</li>
            <li><b>(Gerepareerde) schade / gespoten delen</b> graag vooraf melden i.v.m. aanpak en risico’s.</li>
            <li>Bij zware vervuiling (rook, dieren, vlekken, bouwstof) kan een toeslag gelden — <b>altijd vooraf afgestemd</b>.</li>
          </ul>

          <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
        <a class="btn btn--dark" href="{{ route('info.index') }}">Terug</a>
         <a class="btn btn--dark" href="{{ route('diensten') }}#pakketten">Bekijk showroompakketten</a>
 <a class="btn btn--primary" href="{{ route('contact') }}?route=dealers-showroom">Aanvraag</a>
          </div>
        </div>
      </div>

      {{-- RECHTERKANT: samenwerking --}}
      <div class="card">
        <div class="card__body">
          <div class="card__title">Samenwerking</div>
          <p class="card__text" style="opacity:.88;">
            Wil je een vaste structuur? Dan kunnen we werken met:
          </p>

          <ul class="card__text" style="margin-top:8px; padding-left:18px;">
            <li><b>Vaste dagen/slots</b> (bijv. elke woensdag 2 voertuigen)</li>
            <li><b>Periodieke deep clean</b> (bijv. 1x per kwartaal)</li>
            <li><b>Prioriteit</b> op voertuigen die direct inzetbaar moeten zijn</li>
          </ul>

          <div class="card__text" style="margin-top:12px;"><b>Direct contact</b></div>
          <p class="card__text" style="opacity:.88;">
            Stuur ons je wagenpark-grootte en wensen, dan maken we een voorstel.
          </p>

          <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
      
        </div>
      </div>
    </div>

  </div>
</section>
@endsection