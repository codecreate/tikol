{{--
  Template Name: Shop Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="row">
    <div class="col-lg-12">
      @php the_content() @endphp
       @if($get_products)
        @foreach($get_products as $product)
          @include('partials.product-block', $product)
        @endforeach
      @endif
    </div>
  </div>
  @endwhile
@endsection