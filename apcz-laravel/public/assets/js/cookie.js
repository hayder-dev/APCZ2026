document.addEventListener('DOMContentLoaded', () => {
  const banner = document.getElementById('cookieBanner');
  if (!banner) return;

  const KEY = 'apcz_cookie_consent'; // accepted | declined

  // Toon banner alleen als er nog geen keuze is
  if (!localStorage.getItem(KEY)) {
    banner.hidden = false;
  }

  const acceptBtn = banner.querySelector('[data-cookie-action="accept"]');
  const declineBtn = banner.querySelector('[data-cookie-action="decline"]');

  const setConsent = (value) => {
    localStorage.setItem(KEY, value);
    banner.hidden = true;

    // Handig voor later (analytics pas laden bij accepted)
    window.dispatchEvent(
      new CustomEvent('apcz:cookie-consent', { detail: { value } })
    );
  };

  if (acceptBtn) acceptBtn.addEventListener('click', () => setConsent('accepted'));
  if (declineBtn) declineBtn.addEventListener('click', () => setConsent('declined'));
});