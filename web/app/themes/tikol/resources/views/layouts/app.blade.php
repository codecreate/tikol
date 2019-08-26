<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    <script type="text/javascript">
      var paywall = new InplayerPaywall('5de5d300-61cd-4268-88f3-ab8366b55f29',
      @php
        if(is_page('videos') == true) {
          echo '[{id: 50281},{id: 50282},{id: 50283},{id: 50284},{id: 50285},{id: 50286},{id: 50287},{id: 50288},{id: 50289},{id: 50290}],';
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
          //e.type: 'logout'
          //data.account
          console.log("-- LOGOUT --");
          console.log(e, data);
          if (e.type === 'logout'){
              window.location.replace("/parents");
          }
      });

      paywall.on('authenticated', function(e, data) {
        // console.log('InplayerPaywall authenticated', data);
        console.log('InplayerPaywall authenticated', e.action);
        //e.type: 'authenticated'
        //e.action: 'login', 'register' or 'token'
        //data.account
        //data.access_token
        //data.expires
        //data.refresh_token
        //data.timestamp
        console.log("-- AUTHENTICATED --");
        console.log(e, data);
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