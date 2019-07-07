<footer class="content-info page-footer font-small indigo">
  <div class="container">
    <nav class="nav-footer">
      @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
