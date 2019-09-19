<article @php post_class('mb-5') @endphp>
  <div class="row">
    <header class="col-md-12">
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    </header>
  </div>
  <div class="row">
    <div class="entry-summary col-lg-4 col-md-12 mb-3">
      {!!  App::get_featured_image(get_the_id()) !!}
    </div>
    <div class="entry-summary col-lg-8 col-md-12">
      @include('partials/entry-meta')
      @php the_excerpt() @endphp
    </div>
  </div>
</article>