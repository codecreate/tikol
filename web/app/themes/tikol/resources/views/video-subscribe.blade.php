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
          <a class="wp-block-button__link w-100" href="{!!$get_subscribe_benefits['cta']['url']!!}">
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



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner row">
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





  
  @endwhile
@endsection