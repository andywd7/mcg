<header class="header">
  <div class="header__brand">
    <button class="header__toggle-nav" type="button" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"></button>

    <a class="header__logo" href="{{ home_url('/') }}">
      <img src="@asset('images/mcg-logo.svg')" alt="MCG logo">
    </a>
  </div>

  <div class="scroll-label text-sm">
    <div class="scroll-label__container">
      <span class="scroll-label__dash"></span>Scroll
    </div>
    <div>to navigate</div>
  </div>

  <nav id="navbar" class="navbar">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu([
        'container'  => '',
        'theme_location' => 'primary_navigation',
        'menu_class' => 'navbar__nav',
        'echo' => false
      ]) !!}
    @endif
  </nav>
  <div class="navbar__backdrop"></div>
</header>
