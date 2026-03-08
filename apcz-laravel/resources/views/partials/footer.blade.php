<footer class="footer">
  <div class="container footer__grid">
    <div class="footer__col">
      <h3>APCZ</h3>
      <p class="footer__text">
        Auto Poets Centrale Zaanstad<br>
        Sinds 2003 • Zaanstad & Randstad
      </p>

      <div class="footer__buttons">
        <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
      </div>
    </div>

    <div class="footer__col">
      <h3>Contact</h3>
      <p class="footer__text">
        <strong>Telefoon:</strong> <a href="tel:+31649777080">06 - 49777080</a><br>
        <strong>E-mail:</strong> <a href="mailto:boekingen@apczaanstad.nl">boekingen@apczaanstad.nl</a><br>
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
        <li><a href="{{ route('over') }}">Over ons</a></li>
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

<div class="whatsapp">
  <a href="https://wa.me/31649777080" target="_blank" rel="noopener">
    WhatsApp
  </a>
</div>