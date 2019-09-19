{{--
  Template Name: Video Landing Page
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
  <section class="mt-5 mb-5" id="tuning-into-kids">
    <div class="row">
      <div class="col-12">
        <h2>{{$get_tuning_into_kids_area['subtitle']}}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 pr-lg-5">
        {!!$get_tuning_into_kids_area['video']!!}
      </div>
      <div class="col-lg-4 mt-lg-0 mt-4">
        {!!$get_tuning_into_kids_area['text']!!}
      </div>
    </div>
    <div class="row">
      <div class="col-12 mt-0 mt-lg-5">
        <h3>Sample Videos</h3>
      </div>
    </div>
    <div class="row">
      @if($get_tuning_into_kids_area['samples'])
        @foreach($get_tuning_into_kids_area['samples'] as $video_sample)
          <div class="col-md-6 mb-6 mb-lg-0">
          {!! $video_sample['video'] !!}
          </div>
        @endforeach
      @endif
    </div>
  </section>

  <hr />
  <section class="mt-5 mb-5" id="parenting-programs">
    <div class="row">
      <div class="col-12">
        <h2 class="mb-lg-4">{!!$get_parenting_programs_area['heading']!!}</h2>
      </div>
    </div>
    <div class="row ">
      <div class="col-lg-6">
        <div class="mb-lg-4 mt-lg-4">{!!$get_parenting_programs_area['content']!!}</div>
        <div class="row">
          <div class="col-12 col-lg-7 col-sm-9">
            <div class="wp-block-button is-style-squared mb-lg-4 mt-lg-4">
              <a class="wp-block-button__link w-100" href="{!!$get_parenting_programs_area['cta']['url']!!}">
                {!!$get_parenting_programs_area['cta']['title']!!}
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        @include('partials.event-coming-up-list')
      </div>
    </div>
  <section>

  @endwhile
@endsection