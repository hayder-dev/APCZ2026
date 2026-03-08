document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.header');
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.toggle('is-open');
      hamburger.classList.toggle('is-active', isOpen);
      hamburger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    mobileMenu.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('is-open');
        hamburger.classList.remove('is-active');
        hamburger.setAttribute('aria-expanded', 'false');
      });
    });
  }

  const onScroll = () => {
    if (!header) return;
    header.classList.toggle('is-scrolled', window.scrollY > 12);
  };

  onScroll();
  window.addEventListener('scroll', onScroll);

  const revealItems = document.querySelectorAll('.reveal');

  if ('IntersectionObserver' in window && revealItems.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    revealItems.forEach((item) => observer.observe(item));
  } else {
    revealItems.forEach((item) => item.classList.add('is-visible'));
  }
});