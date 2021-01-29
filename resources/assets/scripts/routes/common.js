export default {
  init() {
    // JavaScript to be fired on all pages
    const navToggle = document.querySelector('.header__toggle-nav');
    const navbar = document.querySelector('.navbar');
    const navBackdrop = document.querySelector('.navbar__backdrop');

    navToggle.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      navToggle.setAttribute(
        'aria-expanded',
        navToggle.getAttribute('aria-expanded') === 'false'
        ? 'true'
        : 'false'
      )
      navBackdrop.classList.toggle('show');
      navbar.classList.toggle('open');
    });

    navBackdrop.onclick = () => {
      navBackdrop.classList.remove('show');
      navbar.classList.remove('open');
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
