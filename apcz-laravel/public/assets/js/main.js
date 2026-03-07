/* APCZ Site JS */
(() => {
  const $ = (sel, root = document) => root.querySelector(sel);
  const $$ = (sel, root = document) => [...root.querySelectorAll(sel)];

  /* =========================
     HEADER SCROLL STATE
     ========================= */
  const header = $('#siteHeader') || $('.header');

  const onScroll = () => {
    if (!header) return;
    header.classList.toggle('is-scrolled', window.scrollY > 10);
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* =========================
     MOBILE MENU
     ========================= */
  const burger = $('#hamburger');
  const mobileMenu = $('#mobileMenu');

  if (burger && mobileMenu) {
    const setMenuState = (open) => {
      mobileMenu.classList.toggle('is-open', open);
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    };

    setMenuState(false);

    burger.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.contains('is-open');
      setMenuState(!isOpen);
    });

    $$('#mobileMenu a').forEach((a) => {
      a.addEventListener('click', () => {
        setMenuState(false);
      });
    });

    document.addEventListener('click', (e) => {
      const clickedInsideMenu = mobileMenu.contains(e.target);
      const clickedBurger = burger.contains(e.target);

      if (!clickedInsideMenu && !clickedBurger && mobileMenu.classList.contains('is-open')) {
        setMenuState(false);
      }
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth > 980) {
        setMenuState(false);
      }
    });
  }

  /* =========================
     SMOOTH SCROLL ANCHORS
     ========================= */
  document.addEventListener('click', (e) => {
    const a = e.target.closest('a[href^="#"]');
    if (!a) return;

    const id = a.getAttribute('href');
    if (!id || id === '#') return;

    const el = document.querySelector(id);
    if (!el) return;

    e.preventDefault();
    el.scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  });

  /* =========================
     REVEAL ON SCROLL
     ========================= */
  const revealEls = $$('.reveal');

  if ('IntersectionObserver' in window && revealEls.length) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.14
    });

    revealEls.forEach((el) => io.observe(el));
  } else {
    revealEls.forEach((el) => el.classList.add('is-visible'));
  }

  /* =========================
     HERO SLIDER
     ========================= */
  const hero = $('#heroSlider');

  if (hero) {
    const slides = (hero.dataset.slides || '')
      .split(',')
      .map((s) => s.trim())
      .filter(Boolean);

    const intervalMs = Number(hero.dataset.interval || 4600);

    if (slides.length) {
      let idx = 0;
      let timer = null;

      const makeSlide = (src, active = false) => {
        const slide = document.createElement('div');
        slide.className = 'hero__slide' + (active ? ' is-active' : '');

        const img = document.createElement('img');
        img.src = src;
        img.alt = hero.dataset.alt || 'Auto Poets Centrale Zaanstad';
        img.loading = active ? 'eager' : 'lazy';

        slide.appendChild(img);
        return slide;
      };

      slides.slice(0, 2).forEach((src) => {
        const preload = new Image();
        preload.src = src;
      });

      const fragment = document.createDocumentFragment();
      slides.forEach((src, i) => {
        fragment.appendChild(makeSlide(src, i === 0));
      });
      hero.appendChild(fragment);

      const slideEls = $$('.hero__slide', hero);
      if (!slideEls.length) return;

      const setActive = (next) => {
        slideEls[idx].classList.remove('is-active');
        idx = next;
        slideEls[idx].classList.add('is-active');
      };

      const startSlider = () => {
        stopSlider();
        timer = window.setInterval(() => {
          setActive((idx + 1) % slideEls.length);
        }, intervalMs);
      };

      const stopSlider = () => {
        if (timer) {
          clearInterval(timer);
          timer = null;
        }
      };

      startSlider();

      hero.addEventListener('mouseenter', stopSlider);
      hero.addEventListener('mouseleave', startSlider);
    }
  }
})();