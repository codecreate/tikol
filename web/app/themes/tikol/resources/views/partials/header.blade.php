<header class="banner">
  <div class="container">
    <?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
    }?>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
