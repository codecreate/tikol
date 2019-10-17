{{--
  Template Name: Staff Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="row">
    <div class="col-lg-12">
      @php the_content() @endphp
       @if($get_staff)
        @foreach($get_staff as $staff)
          @include('partials.staff-block', $staff)
        @endforeach
      @endif
    </div>
  </div>
  @endwhile
@endsection