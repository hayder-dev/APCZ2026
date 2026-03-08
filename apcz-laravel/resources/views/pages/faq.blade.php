@extends('layouts.app')

@section('title', 'Veelgestelde vragen | Auto Poets Centrale Zaanstad')
@section('meta_description', 'Veelgestelde vragen over auto laten poetsen in Zaandam, auto detailing, showroomklaar maken, fotostudio, coatings, planning, betaling en zakelijke autoverzorging bij Auto Poets Centrale Zaanstad.')
@section('meta_keywords', 'faq autopoetsbedrijf zaandam, auto laten poetsen vragen, detailing faq, showroomklaar maken, coating vragen, fotostudio auto, zakelijke autopoetsservice')
@section('canonical', url('/faq'))

@section('content')
<section class="page-hero">
  <div class="container page-hero__inner reveal">
    <div class="page-hero__kicker">FAQ</div>
    <h1 class="page-hero__title">Veelgestelde vragen</h1>
    <p class="page-hero__lead">
      Hier vind je antwoorden op de meest gestelde vragen over onze behandelingen, planning en betalingen.
      Staat je vraag er niet tussen? Stuur ons gerust een bericht — we reageren zo snel mogelijk.
    </p>
  </div>
</section>

<section class="section section--white">
  <div class="container reveal" style="max-width:980px;">

    <div class="faq-search">
      <input
        id="faqSearch"
        class="faq-search__input"
        type="search"
        placeholder="Zoek in veelgestelde vragen… (bijv. 'rookgeur', 'coating', 'betaling')"
        aria-label="Zoek in veelgestelde vragen"
        autocomplete="off"
      />
      <button id="faqSearchClear" class="faq-search__clear" type="button">Wis</button>
    </div>

    {{-- =========================
        Reserveren & planning
    ========================== --}}
    <section class="faq-group" data-faq-group>
      <h2 style="margin:0 0 14px;">Reserveren & planning</h2>
      <div class="faq">

        <details class="faq__item" open>
          <summary class="faq__q">Hoe maak ik een afspraak?</summary>
          <div class="faq__a">
            Je kunt een afspraak aanvragen via het contactformulier op de website, via WhatsApp of telefonisch.
            Na je aanvraag nemen we contact op om de planning te bevestigen en eventuele details af te stemmen.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Moet ik altijd een afspraak maken?</summary>
          <div class="faq__a">
            We werken het liefst op afspraak. Zo kunnen we iedere auto de aandacht geven die nodig is en houden we de kwaliteit hoog.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Hoe lang duurt een behandeling?</summary>
          <div class="faq__a">
            Dat hangt af van het pakket, de grootte van de auto en de staat van het voertuig.
            Breng je de auto in de ochtend rond <b>08:00</b>, dan is deze in veel gevallen <b>dezelfde dag</b> weer klaar.
            Wij zijn geopend tot <b>17:00</b>. Bij extra werk stemmen we de planning altijd vooraf met je af.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kan ik ook op zaterdag langskomen?</summary>
          <div class="faq__a">
            Zaterdag is <b>op afspraak</b>. Stuur even een bericht via WhatsApp of het contactformulier voor een tijdslot.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kan ik mijn afspraak verzetten of annuleren?</summary>
          <div class="faq__a">
            Natuurlijk. Laat het ons zo vroeg mogelijk weten, dan zoeken we samen een nieuw moment.
            Hoe eerder je het aangeeft, hoe makkelijker we de planning netjes kunnen houden.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Als ik via de pakkettenpagina kom, wordt mijn pakket automatisch meegenomen?</summary>
          <div class="faq__a">
            Ja. Kom je via de pakkettenpagina, dan nemen we jouw gekozen pakket en eventuele extra’s automatisch mee in je aanvraag.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Waarom kan ik mijn kenteken invullen?</summary>
          <div class="faq__a">
            Als je het kenteken invult, krijgen wij direct een indicatie van het type auto en het bouwjaar.
            Zo kunnen we jouw aanvraag sneller beoordelen en gerichter adviseren.
          </div>
        </details>
      </div>
    </section>

    <div style="height:28px;"></div>

    {{-- =========================
        Locatie & faciliteiten
    ========================== --}}
    <section class="faq-group" data-faq-group>
      <h2 style="margin:0 0 14px;">Locatie & faciliteiten</h2>
      <div class="faq">

        <details class="faq__item" open>
          <summary class="faq__q">Waar zijn jullie gevestigd?</summary>
          <div class="faq__a">
            Wij zitten in Zaandam, gemeente Zaanstad. Het exacte adres vind je op de contactpagina van de website.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Is er gratis parkeren?</summary>
          <div class="faq__a">
            Ja, er zijn <b>gratis parkeerplekken</b> beschikbaar. Er is <b>geen betaald parkeren</b> bij ons op locatie.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kan ik op de auto wachten?</summary>
          <div class="faq__a">
            Ja, dat kan. We hebben kantoorruimtes waar je rustig kunt zitten.
            Je kunt gebruikmaken van de <b>wifi</b> om bijvoorbeeld aan je eigen werk te werken terwijl wij bezig zijn.
            Geef het even aan bij je aanvraag, dan houden we er rekening mee in de planning.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kan ik de auto eerder brengen of later ophalen?</summary>
          <div class="faq__a">
            Vaak is dat mogelijk. Stuur ons even een bericht met je voorkeur, dan stemmen we het af.
            We denken graag met je mee binnen onze openingstijden.
          </div>
        </details>

      </div>
    </section>

    <div style="height:28px;"></div>

    {{-- =========================
        Prijs, betaling & factuur
    ========================== --}}
    <section class="faq-group" data-faq-group>
      <h2 style="margin:0 0 14px;">Prijs, betaling & factuur</h2>
      <div class="faq">

        <details class="faq__item" open>
          <summary class="faq__q">Wat kost een poetsbeurt of detailingbehandeling?</summary>
          <div class="faq__a">
            De prijs hangt af van het gekozen pakket, het type auto, de staat van de auto en eventuele extra’s.
            Kies een pakket en stuur je aanvraag in — dan bevestigen we de prijs of nemen we contact op als we meerwerk verwachten.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Wanneer betaal ik?</summary>
          <div class="faq__a">
            In de meeste gevallen betaal je bij het ophalen van de auto.
            Bij grotere trajecten, zoals uitgebreide lakcorrectie of coating, kan het voorkomen dat we een kleine aanbetaling afspreken.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Hoe kan ik betalen?</summary>
          <div class="faq__a">
            Betalen kan doorgaans via <b>pin</b>, <b>betaalverzoek/QR</b> of in overleg contant.
            Wil je zakelijk betalen? Geef het even aan bij je aanvraag.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kan ik een factuur krijgen?</summary>
          <div class="faq__a">
            Ja, uiteraard. Geef bij je aanvraag of bij het afleveren even aan dat je een factuur wilt ontvangen.
            Zakelijke klanten kunnen factuurgegevens zoals bedrijfsnaam, KvK en btw-nummer toevoegen in het formulier.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kan ik een offerte krijgen?</summary>
          <div class="faq__a">
            Voor zakelijke aanvragen, bijvoorbeeld meerdere auto’s of periodiek onderhoud, kunnen we een duidelijke prijsafspraak of offerte maken.
            Stuur ons even een bericht met je wensen, dan maken we het concreet.
          </div>
        </details>

      </div>
    </section>

    <div style="height:28px;"></div>

    {{-- =========================
        Haal- & brengservice
    ========================== --}}
    <section class="faq-group" data-faq-group>
      <h2 style="margin:0 0 14px;">Haal- & brengservice</h2>
      <div class="faq">

        <details class="faq__item" open>
          <summary class="faq__q">Hebben jullie ook haal- en brengservice?</summary>
          <div class="faq__a">
            Ja. We bieden een <b>haal- en brengservice</b> aan tegen een <b>kleine toeslag</b>, afhankelijk van afstand en planning.
            Als je zelf niet mobiel kunt zijn, halen we de auto op en leveren we hem weer af zodra hij klaar is.
            Vermeld dit even in je aanvraag, dan stemmen we de tijden met je af.
          </div>
        </details>

      </div>
    </section>

    <div style="height:28px;"></div>

    {{-- =========================
        Pakketten & extra’s
    ========================== --}}
    <section class="faq-group" data-faq-group>
      <h2 style="margin:0 0 14px;">Pakketten & extra’s</h2>
      <div class="faq">

        <details class="faq__item" open>
          <summary class="faq__q">Wat houdt showroomstaat precies in?</summary>
          <div class="faq__a">
            Showroomstaat is een grondige behandeling waarbij we de auto zorgvuldig aanpakken en netjes afwerken.
            Denk aan een diepe reiniging van interieur en/of exterieur, afhankelijk van het pakket, met focus op detail en uitstraling.
            Wil je dat we ergens extra aandacht aan besteden? Zet het bij je aanvraag, dan houden we er rekening mee.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kan ik extra’s combineren met elk pakket?</summary>
          <div class="faq__a">
            Ja. Extra’s zoals koplampen polijsten, geurbehandeling, hondenharen verwijderen, hemel reinigen,
            lakcorrectie, polijsten of een coating kun je per aanvraag toevoegen. We adviseren je graag wat bij jouw auto past.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Moet mijn auto schoon zijn voordat ik hem breng?</summary>
          <div class="faq__a">
            Nee, dat is niet nodig. Wij beginnen bij de basis en bouwen vanaf daar op.
            Wel is het fijn als je persoonlijke spullen en waardevolle items even uit de auto haalt.
          </div>
        </details>

      </div>
    </section>

    <div style="height:28px;"></div>

    {{-- =========================
        Interieur
    ========================== --}}
    <section class="faq-group" data-faq-group>
      <h2 style="margin:0 0 14px;">Interieur: vlekken, geuren & dieptereiniging</h2>
      <div class="faq">

        <details class="faq__item" open>
          <summary class="faq__q">Halen jullie vlekken uit stoelen en bekleding?</summary>
          <div class="faq__a">
            In veel gevallen wel. We gebruiken professionele reinigingstechnieken en middelen om vlekken te behandelen.
            We zijn altijd eerlijk over de verwachting: sommige vlekken, bijvoorbeeld oude of ingetrokken vlekken, kunnen zichtbaar blijven.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kunnen jullie hondenharen verwijderen?</summary>
          <div class="faq__a">
            Ja, zeker. Hondenharen kunnen tijdrovend zijn, dus geef het even aan bij je aanvraag.
            Dan plannen we voldoende tijd in.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kunnen jullie rookgeur uit mijn auto halen?</summary>
          <div class="faq__a">
            Rookgeur is vaak hardnekkig. We kunnen dit doorgaans sterk verminderen en vaak ook verwijderen,
            maar het hangt af van hoe lang er gerookt is, het materiaal en waar de geurbron zit, zoals filters of stoffering.
            Soms is een combinatie nodig: dieptereiniging plus geurbehandeling.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kunnen jullie andere geuren verwijderen, zoals vocht of eten?</summary>
          <div class="faq__a">
            Ja. Belangrijk is dat we de <b>bron</b> aanpakken, bijvoorbeeld vocht in bekleding of vervuilde vloerbedekking.
            Daarna kan een geurbehandeling helpen om het geheel weer fris te krijgen.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Halen jullie schimmel uit een auto?</summary>
          <div class="faq__a">
            Ja. Schimmel ontstaat vaak door vocht, lekkage, stilstand of onvoldoende ventilatie.
            We kunnen schimmel professioneel reinigen, maar adviseren ook altijd om de oorzaak van vocht aan te pakken
            zodat het niet terugkomt.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Reinigen jullie het plafond of de hemel?</summary>
          <div class="faq__a">
            Ja, in veel gevallen. Een hemel vraagt wel om een voorzichtige aanpak vanwege de lijmlaag.
            We behandelen dit zorgvuldig om loslaten of vlekvorming te voorkomen.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Reinigen en verzorgen jullie leren bekleding?</summary>
          <div class="faq__a">
            Ja. Leer reinigen we met geschikte producten en kunnen we daarna verzorgen of beschermen.
            Beschadigingen zoals scheuren vallen meestal onder herstelwerk en niet onder standaard reiniging.
          </div>
        </details>

      </div>
    </section>

    <div style="height:28px;"></div>

    {{-- =========================
        Exterieur
    ========================== --}}
    <section class="faq-group" data-faq-group>
      <h2 style="margin:0 0 14px;">Exterieur: lak, velgen & lastige vervuiling</h2>
      <div class="faq">

        <details class="faq__item" open>
          <summary class="faq__q">Kunnen jullie krassen of swirls wegpolijsten?</summary>
          <div class="faq__a">
            Veel waskrassen en swirls zijn goed te corrigeren met polijsten of lakcorrectie.
            Diepere krassen die je met je nagel voelt zijn lastiger: die kunnen soms verbeteren, maar niet altijd volledig verdwijnen.
            We kijken graag mee en geven een realistische verwachting.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Doen jullie ook koplampen polijsten?</summary>
          <div class="faq__a">
            Ja. Doffe of vergeelde koplampen kunnen vaak weer helder worden gemaakt door polijsten en nabehandeling.
            Dit maakt de auto direct frisser en kan helpen voor uitstraling en zicht.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kunnen jullie teer of bitumen verwijderen?</summary>
          <div class="faq__a">
            Ja, dat kan. Teer en bitumen zijn hardnekkig en vragen om de juiste aanpak.
            Afhankelijk van de hoeveelheid kan het extra tijd kosten, dus vermeld het bij je aanvraag voor een passende inschatting.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kunnen jullie boomhars verwijderen?</summary>
          <div class="faq__a">
            Ja. Boomhars kan de lak aantasten als het te lang blijft zitten, dus het liefst zo snel mogelijk aanpakken.
            We behandelen dit zorgvuldig en lakvriendelijk.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kunnen jullie verfspetters of overspray verwijderen?</summary>
          <div class="faq__a">
            In veel gevallen wel, afhankelijk van type verf en hoe lang het erop zit.
            Stuur bij voorkeur even foto’s via WhatsApp, dan kunnen we beter inschatten wat nodig is.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kunnen jullie velgen grondig reinigen?</summary>
          <div class="faq__a">
            Ja. Velgen en remstof pakken we vaak grondig aan. Bij extreem vervuilde velgen kan het meerwerk zijn,
            maar we krijgen ze meestal weer mooi strak.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kunnen jullie insectenresten en vliegroest verwijderen?</summary>
          <div class="faq__a">
            Ja. Insectenresten, vliegroest en andere ingebrande vervuiling behandelen we met geschikte producten en technieken.
            Hoe langer het erop zit, hoe meer aandacht het kan vragen.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kunnen jullie pekel of wintervuil verwijderen?</summary>
          <div class="faq__a">
            Ja. Pekel kan agressief zijn voor je auto. We reinigen dit zorgvuldig, vooral rondom randen en gevoelige plekken.
            Tip: wacht in de winter niet te lang met reinigen.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kunnen jullie groene aanslag op een cabriodak verwijderen?</summary>
          <div class="faq__a">
            Vaak wel. Het hangt af van het materiaal, hoe lang het erop zit en de conditie van het dak.
            Stuur even foto’s mee bij je aanvraag — dit is soms tijdrovend en kan als meerwerk worden ingepland.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Doen jullie motorruimte reinigen?</summary>
          <div class="faq__a">
            Ja, dat kan. We werken zorgvuldig, maar elektronica blijft gevoelig.
            Daarom is motorruimte reinigen <b>op eigen risico</b>. We bespreken dit altijd vooraf.
          </div>
        </details>

      </div>
    </section>

    <div style="height:28px;"></div>

    {{-- =========================
        Coatings
    ========================== --}}
    <section class="faq-group" data-faq-group>
      <h2 style="margin:0 0 14px;">Coatings & bescherming</h2>
      <div class="faq">

        <details class="faq__item" open>
          <summary class="faq__q">Doen jullie ook coatings?</summary>
          <div class="faq__a">
            Ja. Een coating geeft extra bescherming en maakt onderhoud makkelijker.
            Voor het mooiste resultaat adviseren we vaak eerst lichte lakcorrectie of polijsten, afhankelijk van de staat van de lak.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Hoe lang blijft het resultaat mooi?</summary>
          <div class="faq__a">
            Dat hangt af van gebruik, onderhoud en waar de auto staat, binnen of buiten.
            We geven na afloop graag tips om je auto langer mooi te houden.
          </div>
        </details>

      </div>
    </section>

    <div style="height:28px;"></div>

    {{-- =========================
        Fotostudio
    ========================== --}}
    <section class="faq-group" data-faq-group>
      <h2 style="margin:0 0 14px;">Fotostudio & verkoopklaar maken</h2>
      <div class="faq">

        <details class="faq__item" open>
          <summary class="faq__q">Wat houdt de fotostudio in?</summary>
          <div class="faq__a">
            In de fotostudio maken we professionele foto’s van je auto — ideaal voor verkoop, bijvoorbeeld Marktplaats of Autoscout, of voor portfolio.
            Exterieur én interieur kunnen we meenemen, inclusief details zoals kilometerstand en opties.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Hoe ontvang ik de foto’s?</summary>
          <div class="faq__a">
            Meestal ontvang je de foto’s digitaal, bijvoorbeeld via WhatsApp of een downloadlink, afhankelijk van wat jij prettig vindt.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Kunnen jullie de auto verkoopklaar maken?</summary>
          <div class="faq__a">
            Zeker. Veel klanten combineren showroomstaat met fotostudio om de auto perfect te presenteren.
            Geef je verkoopdoel even aan, dan adviseren we het beste pakket en de juiste extra’s.
          </div>
        </details>

      </div>
    </section>

    <div style="height:28px;"></div>

    {{-- =========================
        Nazorg
    ========================== --}}
    <section class="faq-group" data-faq-group>
      <h2 style="margin:0 0 14px;">Nazorg & klachten</h2>
      <div class="faq">

        <details class="faq__item" open>
          <summary class="faq__q">Ik zie na afloop toch nog iets — wat nu?</summary>
          <div class="faq__a">
            Laat het ons direct weten. We kijken altijd eerlijk mee naar een passende oplossing.
            Het liefst meld je dit zo snel mogelijk, zodat we samen kunnen zien wat er aan de hand is.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Wat als er schade ontstaat?</summary>
          <div class="faq__a">
            Dat is natuurlijk nooit de bedoeling. Mocht er iets zijn, meld het direct en maak duidelijke foto’s.
            We nemen dit serieus en kijken samen naar de beste vervolgstap.
          </div>
        </details>

        <details class="faq__item">
          <summary class="faq__q">Wat raden jullie aan qua voorbereiding?</summary>
          <div class="faq__a">
            Haal bij voorkeur waardevolle spullen uit de auto en geef bijzonderheden even door, zoals hondenharen, rook, schimmel of vlekken.
            Dan kunnen we de behandeling perfect afstemmen.
          </div>
        </details>

      </div>
    </section>

    <div style="height:26px;"></div>

    <div class="card reveal" style="margin-top:24px;">
      <div class="card__body">
        <div class="center stack">
          <h2 class="h2" style="margin-bottom:0;">Autopoetsbedrijf in Zaandam en omgeving</h2>
          <p class="p section-intro">
            Auto Poets Centrale Zaanstad helpt klanten uit <b>Zaandam</b>, <b>Zaanstad</b>,
            <b>Wormerveer</b>, <b>Assendelft</b>, <b>Koog aan de Zaan</b>, <b>Krommenie</b>,
            <b>Westzaan</b>, <b>Oostzaan</b>, <b>Purmerend</b> en <b>Amsterdam</b> met auto laten poetsen,
            auto detailing, showroomklaar maken, fotostudio en zakelijke autoverzorging.
          </p>
          <p class="p section-intro">
            Staat je vraag er niet bij? Geen probleem — stuur ons een bericht. We denken graag met je mee.
          </p>

          <div style="margin-top:14px; display:flex; gap:10px; flex-wrap:wrap; justify-content:center;">
            <a class="btn btn--primary" href="{{ route('contact') }}">Contact</a>
            <a class="btn btn--whatsapp" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<script>
(function () {
  const input = document.getElementById('faqSearch');
  const clearBtn = document.getElementById('faqSearchClear');
  const groups = Array.from(document.querySelectorAll('[data-faq-group]'));

  if (!input || !groups.length) return;

  function normalize(str) {
    return (str || '')
      .toLowerCase()
      .normalize('NFD')
      .replace(/[\u0300-\u036f]/g, '')
      .trim();
  }

  function filterFaq() {
    const term = normalize(input.value);

    groups.forEach(group => {
      const items = Array.from(group.querySelectorAll('.faq__item'));
      let visibleCount = 0;

      items.forEach(item => {
        const text = normalize(item.textContent);
        const match = !term || text.includes(term);

        item.style.display = match ? '' : 'none';

        if (match) {
          visibleCount++;
          if (term) item.open = true;
        } else if (term) {
          item.open = false;
        }
      });

      group.style.display = visibleCount > 0 ? '' : 'none';
    });
  }

  input.addEventListener('input', filterFaq);

  clearBtn.addEventListener('click', function () {
    input.value = '';
    filterFaq();
    input.focus();
  });

  filterFaq();
})();
</script>
@endsection