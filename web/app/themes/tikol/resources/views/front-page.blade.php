@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 text-lg-center">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
  @endwhile
    </div>
    <div class="col-lg-2"></div>
  </div>

@endsection
