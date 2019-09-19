{{--
  Template Name: Inplayer Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  {{-- @include('partials.page-header') --}}
  <div class="row">
    <div class="col-12">
      @include('partials.content-page')
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 mt-2 mb-2" id="inplayer-50281"></div>
    <div class="col-lg-4 mt-2 mb-2" id="inplayer-50282"></div>
    <div class="col-lg-4 mt-2 mb-2" id="inplayer-50283"></div>
  </div>
  <div class="row">
    <div class="col-lg-4 mt-2 mb-2" id="inplayer-50284"></div>
    <div class="col-lg-4 mt-2 mb-2" id="inplayer-50285"></div>
    <div class="col-lg-4 mt-2 mb-2" id="inplayer-50286"></div>
  </div>
  <div class="row">
    <div class="col-lg-4 mt-2 mb-2" id="inplayer-50287"></div>
    <div class="col-lg-4 mt-2 mb-2" id="inplayer-50288"></div>
    <div class="col-lg-4 mt-2 mb-2" id="inplayer-50289"></div>
  </div>
  <div class="row">
    <div class="col-lg-4 mt-2 mb-2" id="inplayer-50290"></div>
  </div>
  @endwhile

  <script type="text/javascript">
      if (!paywall.isAuthenticated()) {
          window.location.replace("/parents");
      }
  </script>

@endsection