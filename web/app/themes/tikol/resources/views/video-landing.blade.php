{{--
  Template Name: Video Landing Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="row">
    <div class="col-lg-8 pr-lg-5">
      {!! $get_vlp_hero !!}
    </div>
    <div class="col-lg-4 mt-lg-0 mt-4">
      @include('partials.content-page')
    </div>
  </div>
  <div class="row">
    <div class="col-12 mt-0 mt-lg-5">
      <h3>Sample Videos</h3>
    </div>
  </div>
  <div class="row">
    @if($get_vlp_samples)
      @foreach($get_vlp_samples as $video_sample)
        <div class="col-md-4 mb-4 mb-lg-0">
         {!! $video_sample['video'] !!}
        </div>
      @endforeach
    @endif
  </div>
  <div class="row border-top border-white mt-5 pt-4">
    <div class="col-lg-6">
      <h3 class="mb-lg-4">{!! $get_vlp_event_promo['heading'] !!}</h3>
      <div class="mb-lg-4 mt-lg-4">{!! $get_vlp_event_promo['content'] !!}</div>
      <div class="row">
        <div class="col-12 col-lg-7 col-sm-9">
          <div class="wp-block-button is-style-squared mb-lg-4 mt-lg-4">
            <a class="wp-block-button__link w-100" href="{!! $get_vlp_event_promo['cta']['url'] !!}">
              {!! $get_vlp_event_promo['cta']['title'] !!}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      @include('partials.event-coming-up-list')
    </div>
  </div>

  @endwhile
@endsection