{{--
  Template Name: Video Subscription Landing Page
--}}

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php the_post() @endphp
  <section class="mb-4">
    <div class="row">
      <div class="col-12">
        @php the_content() @endphp
      </div>
    </div>
  </section>

  <hr />

  <section class="mb-5 mt-5">
    <div class="row">
      <div class="col-lg-5">
        <h2>{!!$get_subscribe_benefits['subtitle']!!}</h2>
        <h3 class="h1">{!!$get_subscribe_benefits['price']!!}</h3>
        @if ($get_subscribe_benefits['cta']['url'])
          <div class="wp-block-button is-style-squared mb-lg-4 mt-lg-4">
          <a class="wp-block-button__link w-100{{$get_subscribe_benefits['cta']['url']=='#'?' inplayer-paywall-login':''}}" href="{!!$get_subscribe_benefits['cta']['url']!!}">
            {!!$get_subscribe_benefits['cta']['title']!!}
          </a>
        </div>
        @endif
        
      </div>
      <div class="col-lg-7">
        <img src="{!!$get_subscribe_benefits['image']['url']!!}" />
      </div>
    </div>
  </section>

  <hr />

  <section class="mb-5 mt-6">

    @if($get_examples['carouselItem'])
      <div class="slider autoplay mt-5 mb-5">
      @foreach($get_examples['carouselItem'] as $carousel_item)
        @include('partials.carousel-item', $carousel_item)
      @endforeach
      </div>
    @endif
    
    @if($get_examples['featureItem'])
      <div class="container text-center mt-5 mb-5">
        <h2>Features</h2>
        <div class="row justify-content-md-center">
          <div class="col col-lg-6">
            <ul class="fa-ul">
              @foreach($get_examples['featureItem'] as $feature_item)
                @include('partials.feature-block', $feature_item)
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    @endif
  
  </section>

  <hr />

  @if($get_testimonials['testimonialItem'])
    <section class="mb-5 mt-6">
      <div class="container">
        <div class="row">
            @foreach($get_testimonials['testimonialItem'] as $testimonial_item)
              <div class="col-md-3">
              @include('partials.testimonial-block', $testimonial_item)
              </div>
            @endforeach
          </div>
      </div>
    </section>
  @endif

  <section class="mt-6">
    <div class="container text-center">
      <div class="row justify-content-md-center">
        <div class="col col-lg-4">
          @include('partials.cta-button', $get_cta)
        </div>
      </div>
    </div>
  </section>

  @endwhile
@endsection