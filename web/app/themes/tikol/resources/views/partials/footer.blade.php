<footer class="content-info clearfix">
  <div class="container">
    <div class="d-lg-flex justify-content-lg-between">
      <nav class="mb-2 nav-footer">
        @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
      <div class="footer-widget text-left text-lg-right">
          <div class="copy mb-2 mb-lg-3">&copy; {{ date('Y') }} Tuning In To Kids, All Rights Reserved</div>
          <div class="advice"><strong>Advice:</strong> Aboriginal and Torres Strait Islander viewers are advised that this website may contain images and voices of people who have died</div>
      </div>
    </div>
{{--    @php dynamic_sidebar('sidebar-footer') @endphp--}}
  </div>
</footer>