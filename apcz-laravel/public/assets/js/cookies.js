document.addEventListener('DOMContentLoaded', () => {
  const banner = document.getElementById('cookieBanner');
  if (!banner) return;

  const KEY = 'apcz_cookie_consent';

  const showBanner = () => {
    banner.hidden = false;
    banner.style.display = 'flex';
  };

  const hideBanner = () => {
    banner.hidden = true;
    banner.style.display = 'none';
  };

  const saved = localStorage.getItem(KEY);

  if (!saved) {
    showBanner();
  } else {
    hideBanner();
  }

  banner.addEventListener('click', (event) => {
    const button = event.target.closest('[data-cookie-action]');
    if (!button) return;

    event.preventDefault();
    event.stopPropagation();

    const action = button.getAttribute('data-cookie-action');
    const value = action === 'accept' ? 'accepted' : 'declined';

    try {
      localStorage.setItem(KEY, value);
      hideBanner();

      window.dispatchEvent(
        new CustomEvent('apcz:cookie-consent', { detail: { value } })
      );

      console.log('Cookie consent opgeslagen:', value);
    } catch (error) {
      console.error('Cookie consent kon niet worden opgeslagen:', error);
    }
  });
});