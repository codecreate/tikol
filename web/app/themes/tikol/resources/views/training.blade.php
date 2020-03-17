
{{--
  Template Name: Training Page
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


@endwhile
@endsection