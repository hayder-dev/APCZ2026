<footer class="footer">
  <div class="container footer__grid">
    <div class="footer__col">
      <h3>Auto Poets Centrale Zaanstad</h3>
      <p class="footer__text">
        Specialist in <strong>auto laten poetsen</strong>, <strong>auto detailing</strong>,
        <strong>showroomklaar maken</strong>, <strong>fotostudio</strong> en
        <strong>zakelijke autoverzorging</strong> in Zaandam en Zaanstad.
      </p>
      <p class="footer__text">
        Wij werken voor klanten uit <strong>Zaandam</strong>, <strong>Zaanstad</strong>,
        <strong>Wormerveer</strong>, <strong>Assendelft</strong>, <strong>Koog aan de Zaan</strong>,
        <strong>Krommenie</strong>, <strong>Purmerend</strong> en <strong>Amsterdam</strong>.
      </p>
    </div>

    <div class="footer__col">
      <h3>Contact</h3>
      <p class="footer__text">
        <strong>Telefoon:</strong> <a href="tel:+31649777080">06 - 49777080</a><br>
        <strong>E-mail:</strong> <a href="mailto:info@apczaanstad.nl">info@apczaanstad.nl</a><br>
        <strong>Locatie:</strong> Zijtocht 1, 1507 CD Zaandam
      </p>
    </div>

    <div class="footer__col">
      <h3>Openingstijden</h3>
      <p class="footer__text">
        Ma t/m vr: 08:00 – 17:00<br>
        Zaterdag: op afspraak<br>
        Zondag: gesloten
      </p>
    </div>

    <div class="footer__col">
      <h3>Snel naar</h3>
      <ul class="footer__links">
        <li><a href="{{ route('diensten') }}">Pakketten</a></li>
        <li><a href="{{ route('projecten') }}">Projecten</a></li>
        <li><a href="{{ route('fotostudio') }}">Fotostudio</a></li>
        <li><a href="{{ route('over') }}">Over ons</a></li>
        <li><a href="{{ route('faq') }}">FAQ</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
  </div>

  <div class="footer__bar">
    <div class="container footer__bar-inner">
      <div>© {{ date('Y') }} Auto Poets Centrale Zaanstad. Alle rechten voorbehouden.</div>

      <div class="footer__bar-links">
        <a href="{{ url('/privacy') }}">Privacy</a>
        <a href="{{ url('/voorwaarden') }}">Voorwaarden</a>
      </div>
    </div>
  </div>
</footer>