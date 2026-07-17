/* ===========================
   SLICK
=========================== */
$(function () {
  $('.grade-servicos').slick({
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    arrows: true,
    dots: false,
    infinite: true,
    responsive: [
      { breakpoint: 768, settings: { centerPadding: '0px', slidesToShow: 2, arrows: false } },
      { breakpoint: 480, settings: { centerPadding: '0px', slidesToShow: 1, arrows: false } }
    ]
  });

  $('.avaliacao__carrossel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3500,
    speed: 650,
    arrows: false,
    dots: true,
    infinite: true,
    pauseOnHover: true,
    pauseOnFocus: true
  });
});


/* ===========================
   PARALLAX AVALIACAO (mouse)
=========================== */
(() => {
  const box = document.querySelector('#avaliacao .container');
  if (!box) return;

  let raf = null;

  function onMove(e) {
    const rect = box.getBoundingClientRect();
    const x = (e.clientX - rect.left) / rect.width;
    const y = (e.clientY - rect.top) / rect.height;

    const dx = (x - 0.5) * 10;
    const dy = (y - 0.5) * 6;

    if (raf) cancelAnimationFrame(raf);
    raf = requestAnimationFrame(() => {
      box.style.transform = `translate3d(${dx}px, ${dy}px, 0)`;
    });
  }

  function onLeave() {
    box.style.transform = 'translate3d(0,0,0)';
  }

  box.addEventListener('mousemove', onMove);
  box.addEventListener('mouseleave', onLeave);
})();


/* ===========================
   FAQ: abre um por vez (accordion)
=========================== */
document.querySelectorAll('#faq details.faq-item').forEach((item) => {
  item.addEventListener('toggle', () => {
    if (!item.open) return;

    document.querySelectorAll('#faq details.faq-item').forEach((other) => {
      if (other !== item) other.removeAttribute('open');
    });
  });
});


/* ===========================
   MENU MOBILE
=========================== */
(() => {
  const html = document.documentElement;
  const btnAbrir = document.querySelector('.abrir-menu');
  const btnFechar = document.querySelector('.fechar-menu');
  const menu = document.querySelector('.topo-pill__menu');
  const dropdownLinks = document.querySelectorAll('.menu-item--dropdown > .menu-link--drop');

  if (!btnAbrir || !btnFechar || !menu) return;

  function estaNoMobile() {
    return window.innerWidth <= 786;
  }

  function abrirMenu() {
    html.classList.add('menu-mobile');
  }

  function fecharMenu() {
    html.classList.remove('menu-mobile');
    document.querySelectorAll('.menu-item--dropdown.is-open').forEach((dropdown) => {
      dropdown.classList.remove('is-open');
    });
  }

  btnAbrir.addEventListener('click', abrirMenu);
  btnFechar.addEventListener('click', fecharMenu);

  menu.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      if (estaNoMobile() && link.classList.contains('menu-link--drop')) return;
      fecharMenu();
    });
  });

  dropdownLinks.forEach((link) => {
    link.addEventListener('click', (e) => {
      if (!estaNoMobile()) return;

      e.preventDefault();

      const dropdownAtual = link.closest('.menu-item--dropdown');

      document.querySelectorAll('.menu-item--dropdown.is-open').forEach((dropdown) => {
        if (dropdown !== dropdownAtual) {
          dropdown.classList.remove('is-open');
        }
      });

      dropdownAtual.classList.toggle('is-open');
    });
  });

  document.addEventListener('click', (e) => {
    if (!html.classList.contains('menu-mobile')) return;
    const clicouDentroMenu = e.target.closest('.topo-pill__menu') || e.target.closest('.abrir-menu');
    if (!clicouDentroMenu) fecharMenu();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') fecharMenu();
  });

  window.addEventListener('resize', () => {
    if (!estaNoMobile()) fecharMenu();
  });
})();


/* ===========================
   MENU FIXO APOS O HERO
=========================== */
(() => {
  const hero = document.querySelector('.hero');
  const cabecalho = document.getElementById('cabecalhoPrincipal');

  if (!hero || !cabecalho) return;

  function mostrarMenuFixo() {
    if (cabecalho.classList.contains('saindo')) {
      cabecalho.classList.remove('menu-fixo', 'saindo');
      void cabecalho.offsetWidth;
    }

    if (!cabecalho.classList.contains('menu-fixo')) {
      cabecalho.classList.add('menu-fixo');
    }
  }

  function esconderMenuFixo() {
    if (!cabecalho.classList.contains('menu-fixo') || cabecalho.classList.contains('saindo')) {
      return;
    }

    cabecalho.classList.add('saindo');
  }

  function atualizarEstadoMenu() {
    const topoAtual = window.scrollY;
    const fimDoHero = hero.offsetTop + hero.offsetHeight;

    if (topoAtual >= fimDoHero) {
      mostrarMenuFixo();
    } else {
      esconderMenuFixo();
    }
  }

  cabecalho.addEventListener('animationend', (evento) => {
    if (evento.animationName !== 'menuFixoOut') return;
    cabecalho.classList.remove('menu-fixo', 'saindo');
  });

  atualizarEstadoMenu();

  window.addEventListener('scroll', atualizarEstadoMenu, { passive: true });
  window.addEventListener('resize', atualizarEstadoMenu);
})();
