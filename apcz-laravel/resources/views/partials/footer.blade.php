<footer class="footer">
  <div class="container">
    <div>
      <h3>APCZ</h3>
      <p style="margin:0; opacity:.85; line-height:1.8;">
        Auto Poets Centrale Zaanstad<br>
        Sinds 2003 • Zaanstad & Randstad
      </p>

      <div style="margin-top:14px; display:flex; gap:10px; flex-wrap:wrap;">
        <a class="btn btn--outline" href="https://wa.me/31649777080" target="_blank" rel="noopener">WhatsApp</a>
        <a class="btn btn--primary" href="{{ route('contact') }}">Afspraak plannen</a>
      </div>
    </div>

    <div>
      <h3>Contact</h3>
      <p style="margin:0; opacity:.85; line-height:1.9;">
        <b>Telefoon:</b> <a href="tel:+31649777080">06 - 49777080</a><br>
        <b>E-mail:</b> <a href="mailto:boekingen@apczaanstad.nl">boekingen@apczaanstad.nl</a><br>
        <b>Locatie:</b> Zijtocht 1, 1507 CD Zaandam
      </p>
    </div>

    <div>
      <h3>Openingstijden</h3>
      <p style="margin:0; opacity:.85; line-height:1.9;">
        Ma t/m vr: 08:00 – 17:00<br>
        Zaterdag: op afspraak<br><br>
        <a href="https://maps.app.goo.gl/bHN1YVBX2cVYKtmQ9" target="_blank" rel="noopener">
          Open in Google Maps →
        </a>
      </p>
    </div>
  </div>

  <div class="container footer__bottom">
    <div>© {{ date('Y') }} Auto Poets Centrale Zaanstad</div>
    <div style="display:flex; gap:14px; flex-wrap:wrap;">
      <a href="{{ route('diensten') }}">Pakketten</a>
      <a href="{{ route('projecten') }}">Projecten</a>
      <a href="{{ route('contact') }}">Contact</a>
    </div>
  </div>
</footer>

{{-- Floating WhatsApp --}}
<div class="whatsapp">
  <a href="https://wa.me/31649777080" target="_blank" rel="noopener">
    WhatsApp
  </a>
</div>