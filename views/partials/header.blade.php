<nav class="mainNav">
  <header class="container">
    <div class="headerContainer row px-0">
      <div class="headerContent--logoContainer col-3 col-md-2 col-xl-3 px-0">
        <a class="headerContent--logo" href="{{ home_url('/') }}">
          <img class="logo" src="@asset('images/logo.svg')" alt="TAM" />
        </a>
      </div>
      <div class="col-changer col-9 col-md-10 col-xl-9 px-0">
        <nav class="headerContent--nav_primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
          <a href="" class="headerContent--menu" alt="menu"><img src="@asset('images/icons/menu.svg')" alt="menu"></a>
        </nav>
      </div>
      <div class="headerContent--overlay">
        <div class="container">
          <div class="top">
            <a href="" class="headerContent--close" alt="stäng"><img src="@asset('images/icons/close.svg')" alt="stäng"></a>
          </div>
          <div class="bottom">
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
          </div>
        </div>
      </div>
    </div>
  </header>
</nav>