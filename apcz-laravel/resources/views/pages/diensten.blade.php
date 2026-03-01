@extends('layouts.app')

@section('title','Pakketten & Extra’s — APCZ')

@section('content')
<section class="section section--white" style="padding-top:40px;">
  <div class="container">
    <div class="center stack">
      <h1 class="h1">Pakketten</h1>
      <p class="p" style="max-width:980px; margin:0 auto;">
        Kies een pakket dat past bij jouw doel: opfrissen, interieur diep of volledig showroomklaar (eventueel met foto’s).
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
        <a class="btn btn--dark" href="#pakketten">6 pakketten</a>
        <a class="btn btn--dark" href="#extras">Optionele extra’s</a>
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak / offerte</a>
      </div>
    </div>
  </div>
</section>

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
            <a class="btn btn--dark" href="{{ route('contact') }}?pakket=bronze">Plan Brons</a>
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
            <a class="btn btn--dark" href="{{ route('contact') }}?pakket=bronze-wax">Plan Brons+</a>
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
            <a class="btn btn--primary" href="{{ route('contact') }}?pakket=silver">Plan Zilver</a>
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
            <a class="btn btn--primary" href="{{ route('contact') }}?pakket=silver-plus">Plan Zilver+</a>
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
            <li>Professionele foto's voor verkoop </li>
          </ul>

          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--primary" href="{{ route('contact') }}?pakket=gold">Plan Goud</a>
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
            <a class="btn btn--primary" href="{{ route('contact') }}?pakket=platinum">Plan Goud+</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- EXTRAS -->
<section class="section section--white" id="extras">
  <div class="container">
    <div class="stack">
      <h2 class="h2">Optionele extra’s</h2>
      <p class="p" style="max-width:980px;">
        Extra behandelingen die je kunt toevoegen aan elk pakket.
      </p>
    </div>

    <div class="grid-3" style="margin-top:18px;">
      <div class="card">
        <div class="card__body">
          <div class="card__title">Koplampen polijsten</div>
          <p class="card__text"><b>Vanaf € 35,- per koplamp</b></p>
          <p class="card__text">
            Doffe koplampen en lichte krasjes worden hersteld voor een frisse “als nieuw” uitstraling.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('contact') }}?extra=koplampen">Toevoegen / info</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Geurbehandeling</div>
          <p class="card__text"><b>Vanaf € 60,- per 3 uur</b></p>
          <p class="card__text">
            Voor rook, huisdieren of andere hardnekkige geuren. We werken met diverse middelen en aanpak per situatie.
            Denk aan <b>bacteriën</b>, gemorste melk, vocht/rook en meer.
          </p>
          <p class="card__text" style="opacity:.85;">
            Prijs hangt af van hoe sterk de geur is (bijv. hoeveel er is gerookt).
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('contact') }}?extra=geurbehandeling">Toevoegen / info</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Hondenharen verwijderen</div>
          <p class="card__text"><b>Vanaf € 25,-</b></p>
          <p class="card__text">
            Intensieve behandeling voor bekleding, kieren en vloerbedekking.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('contact') }}?extra=hondenharen">Toevoegen / info</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Hemel reinigen</div>
          <p class="card__text"><b>Vanaf € 50,-</b></p>
          <p class="card__text">
            Voor vlekken en vervuiling in de hemelbekleding (altijd in overleg i.v.m. materiaal).
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('contact') }}?extra=hemel">Toevoegen / info</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Motorruimte reinigen</div>
          <p class="card__text"><b>Vanaf € 60,-</b></p>
          <p class="card__text">
            Reinigen van de motorruimte voor een nette presentatie.
          </p>
          <p class="card__text" style="opacity:.85;">
            <b>Op eigen risico:</b> we werken zorgvuldig, maar elektronica/onderdelen blijven gevoelig.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('contact') }}?extra=motorruimte">Toevoegen / info</a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card__body">
          <div class="card__title">Speciale coatings</div>
          <p class="card__text"><b>Prijs op aanvraag</b></p>
          <p class="card__text">
            Glascoating / keramische coating / velgen-coating. We adviseren op basis van gebruik en budget.
          </p>
          <div style="margin-top:14px; display:flex; justify-content:center;">
            <a class="btn btn--dark" href="{{ route('contact') }}?extra=coating">Toevoegen / info</a>
          </div>
        </div>
      </div>
    </div>


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
  <li>
    <b>Donkere kleuren</b> (extra werk/finish en hogere zichtbaarheid van swirls): <b>+ € 50,-</b>.
  </li>
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
    <li>
  <b>Doorlooptijd & ophalen:</b> in de meeste gevallen geldt: lever je de auto om <b>08:00</b> in, dan kan hij <b>dezelfde dag</b> weer opgehaald worden.
  Wij zijn geopend tot <b>17:00</b>. Bij zwaardere vervuiling of grotere behandelingen stemmen we de planning vooraf met je af.
</li>
  </li>
</ul>

        <div class="center" style="margin-top:22px; display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
          <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak / offerte</a>
          <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection