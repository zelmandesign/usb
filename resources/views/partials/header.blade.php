<div id="wptime-plugin-preloader"></div>

<header class="banner navbar navbar-expand-md fixed-top">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/logo.svg')" width="175px" height="56px" class="lozad" alt="USB Flash Logo"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <i class="fas fa-bars"></i>
    </button>
    <nav class="nav-primary navbar-collapse collapse justify-content-end" id="navbarCollapse">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']) !!}
      @endif
    </nav>
  </div>
</header>
