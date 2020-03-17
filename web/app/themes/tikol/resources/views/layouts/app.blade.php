<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    <script type="text/javascript">

      var paywall = new InplayerPaywall('1fc0b7d6-5eae-401c-a327-39734ca7a227',
      @php
        if(is_page('videos') == true) {
          echo '[{id: 79538},{id: 79539},{id: 79541},{id: 79545},{id: 79546},{id: 79547},{id: 79548},{id: 79549},{id: 79551},{id: 79552}],';
        }
      @endphp
      {
          brandingId: "884",
          language: 'EN',
          hideUserMenu: true,
          hideProtectedBy: true
      });

      paywall.showPaywall({ registerFirst: true });

      paywall.on('logout', function(e, data) {
          console.log("-- LOGOUT --");
          if (e.type === 'logout'){
              window.location.replace("/parents");
          }
      });

      paywall.on('authenticated', function(e, data) {
        console.log("-- AUTHENTICATED --");
        if (e.action === 'login' || e.action === 'register'){
            window.location.replace("/parents/videos");
        }
      });

    </script>

    @php do_action('get_header') @endphp
    @include('partials.header')
    @include('partials.heroImage')
    <div class="wrap container mt-lg-n5 bg-primary pt-3 p-lg-5" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp

  </body>
</html>