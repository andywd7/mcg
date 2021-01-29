export default {
  init() {
    // JavaScript to be fired on all pages
    const navToggle = document.querySelector('.header__toggle-nav');
    const navbar = document.querySelector('.navbar');

    navToggle.addEventListener('click', () => {
      navToggle.setAttribute(
        'aria-expanded',
        navToggle.getAttribute('aria-expanded') === 'false'
        ? 'true'
        : 'false'
      )
      navbar.classList.toggle('open');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
