{{--
  Template Name: Inplayer Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  {{-- @include('partials.page-header') --}}
  <div class="d-flex justify-content-start mb-3">
    <button type="button" class="btn btn-secondary inplayer-paywall-account mr-2">My Account</button>
    <button type="button" class="btn btn-secondary inplayer-paywall-logout">Log Out</button>
  </div>
  <div class="row mb-3">
    <div class="col-12">
      @include('partials.content-page')
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 mt-2 mb-2">
      <div id="inplayer-71319"></div>
      <a class="hidden_link" href="#">pdf link here</a>
    </div>
    <div class="col-lg-6 mt-2 mb-2">
      <div id="inplayer-71320"></div>
      <a class="hidden_link" href="#">pdf link here</a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 mt-2 mb-2">
      <div id="inplayer-71321"></div>
      <a class="hidden_link" href="#">pdf link here</a>
    </div>
    <div class="col-lg-6 mt-2 mb-2">
      <div id="inplayer-71322"></div>
      <a class="hidden_link" href="#">pdf link here</a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 mt-2 mb-2">
      <div id="inplayer-71323"></div>
       <a class="hidden_link" href="#">pdf link here</a>
    </div>
    <div class="col-lg-6 mt-2 mb-2">
      <div id="inplayer-71324"></div>
      <a class="hidden_link" href="#">pdf link here</a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 mt-2 mb-2">
      <div id="inplayer-71325"></div>
      <a class="hidden_link" href="#">pdf link here</a>
    </div>
    <div class="col-lg-6 mt-2 mb-2">
      <div id="inplayer-71326"></div>
      <a class="hidden_link" href="#">pdf link here</a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 mt-2 mb-2">
      <div id="inplayer-71327"></div>
      <a class="hidden_link" href="#">pdf link here</a>
    </div>
    <div class="col-lg-6 mt-2 mb-2">
      <div id="inplayer-71328"></div>
      <a class="hidden_link" href="#">pdf link here</a>
    </div>
  </div>

  @endwhile

  <script type="text/javascript">

    paywall.on('any', function(e, data) {
      console.log("-- PLAYER --");
      showLinks();
    });

    function showLinks(){
      var links = document.getElementsByClassName('hidden_link');
        for (var i=0; i < links.length; i++) {
          links[i].classList.add('hidden_link-show');
        }
    }

    if (!paywall.isAuthenticated()) {
        window.location.replace("/parents");
    }
  </script>

@endsection