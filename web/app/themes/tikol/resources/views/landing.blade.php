{{--
  Template Name: Landing Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="row">
    <div class="col-lg-8 pr-lg-5">
      @include('partials.content-page')
    </div>
    <aside class="col-lg-4 mt-4 mb-5 mt-lg-0 mb-lg-0">
      {{$get_lp_aside}}
    </aside>
  </div>
  <div class="row">
    @if($get_lp_link_blocks)
      @foreach($get_lp_link_blocks as $link_block)
        <div class="col-md-4 ">
          @include('partials.link-block', $link_block)
        </div>
      @endforeach
    @endif
  </div>
  @endwhile
@endsection