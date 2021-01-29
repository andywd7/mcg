<header class="banner">
  <div class="container">
    <button class="navbar-toggler" type="button" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a href="{{ home_url('/') }}">
      <img src="@asset('images/mcg-logo.svg')" alt="MCG logo">
    </a>

    <div>
      <div>Scroll</div>
      <div>to navigate</div>
    </div>

    <nav id="navbar" class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
          'container'  => '',
          'theme_location' => 'primary_navigation',
          'menu_class' => 'navbar-nav',
          'echo' => false
        ]) !!}
      @endif
    </nav>
  </div>
</header>
