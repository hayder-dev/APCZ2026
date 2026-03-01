/* APCZ Static Site JS */
(() => {
  const $ = (sel, root=document) => root.querySelector(sel);
  const $$ = (sel, root=document) => [...root.querySelectorAll(sel)];

  // Sticky header styling
  const header = $('.header');
  const onScroll = () => {
    if (!header) return;
    header.classList.toggle('is-scrolled', window.scrollY > 10);
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // Mobile menu
  const burger = $('#hamburger');
  const mobileMenu = $('#mobileMenu');
  if (burger && mobileMenu){
    burger.addEventListener('click', () => {
      const isOpen = mobileMenu.dataset.open === '1';
      mobileMenu.dataset.open = isOpen ? '0' : '1';
      mobileMenu.style.display = isOpen ? 'none' : 'block';
      burger.setAttribute('aria-expanded', String(!isOpen));
    });
    // Close on link click
    $$('#mobileMenu a').forEach(a => a.addEventListener('click', () => {
      mobileMenu.dataset.open = '0';
      mobileMenu.style.display = 'none';
      burger.setAttribute('aria-expanded','false');
    }));
  }

  // Active nav link
  const path = (location.pathname.split('/').pop() || 'index.html').toLowerCase();
  $$('.nav a, .mobile-menu a').forEach(a => {
    const href = (a.getAttribute('href') || '').toLowerCase();
    if (!href || href.startsWith('#')) return;
    const file = href.split('/').pop();
    if (file === path) a.classList.add('active');
  });

  // Smooth scrolling for in-page anchors
  document.addEventListener('click', (e) => {
    const a = e.target.closest('a[href^="#"]');
    if (!a) return;
    const id = a.getAttribute('href');
    if (!id || id === '#') return;
    const el = document.querySelector(id);
    if (!el) return;
    e.preventDefault();
    el.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });

  // Reveal on scroll (IntersectionObserver)
  const revealEls = $$('.reveal');
  if ('IntersectionObserver' in window && revealEls.length){
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting){
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.14 });
    revealEls.forEach(el => io.observe(el));
  } else {
    revealEls.forEach(el => el.classList.add('is-visible'));
  }

  // HERO slider (simple fade)
  const hero = $('#heroSlider');
  if (hero){
    const slides = (hero.dataset.slides || '').split(',').map(s => s.trim()).filter(Boolean);
    const intervalMs = Number(hero.dataset.interval || 4500);
    if (slides.length){
      let idx = 0;
      const makeSlide = (src, active=false) => {
        const d = document.createElement('div');
        d.className = 'hero__slide' + (active ? ' is-active' : '');
        const img = document.createElement('img');
        img.src = src;
        img.alt = hero.dataset.alt || 'Auto Poets Centrale Zaanstad';
        img.loading = active ? 'eager' : 'lazy';
        d.appendChild(img);
        return d;
      };

      // Preload first 2
      slides.slice(0,2).forEach(s => {
        const i = new Image();
        i.src = s;
      });

      const deck = document.createDocumentFragment();
      slides.forEach((s, i) => deck.appendChild(makeSlide(s, i===0)));
      hero.appendChild(deck);

      const slideEls = $$('.hero__slide', hero);
      const setActive = (next) => {
        slideEls[idx].classList.remove('is-active');
        idx = next;
        slideEls[idx].classList.add('is-active');
      };

      let timer = setInterval(() => setActive((idx+1) % slideEls.length), intervalMs);

      // Pause on hover (desktop)
      hero.addEventListener('mouseenter', () => { clearInterval(timer); });
      hero.addEventListener('mouseleave', () => { timer = setInterval(() => setActive((idx+1) % slideEls.length), intervalMs); });
    }
  }

})();
