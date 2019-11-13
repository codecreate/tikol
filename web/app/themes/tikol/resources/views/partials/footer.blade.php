<footer class="content-info clearfix">
  <div class="container">
    <div class="d-lg-flex flex-row align-items-center justify-content-between mb-5">
      <nav class="nav-footer">
        @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
      <div class="footer-widget text-lg-right pl-lg-4">
        <div class="copy">&copy; {{ date('Y') }} Tuning In To Kids, All Rights Reserved</div>
        <div class="advice"><strong>Advice:</strong> Aboriginal and Torres Strait Islander viewers are advised that this website may contain images and voices of people who have died</div>
      </div>
    </div>
    <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-start justify-content-md-center flex-sm-column footer-logos">
      <img src="<?php echo get_template_directory_uri().'/assets/images/l-melbourne.gif'; ?>" />
      <img src="<?php echo get_template_directory_uri().'/assets/images/l-mindful.gif'; ?>" />
      <img src="<?php echo get_template_directory_uri().'/assets/images/l-cali.gif'; ?>" />
    </div>
  </div>
</footer>

