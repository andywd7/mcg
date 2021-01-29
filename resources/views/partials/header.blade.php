<header class="header">
  <div class="header__brand">
    <button class="header__toggle-nav" type="button" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"></button>

    <a class="header__logo" href="{{ home_url('/') }}">
      <img src="@asset('images/mcg-logo.svg')" alt="MCG logo">
    </a>
  </div>

  <div class="header__scroll-label">
    <div>Scroll</div>
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
</header>
