<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
<p class="byline author vcard">
  {{ __('By', 'sage') }}

  @if(App::get_custom_author())
      <strong>{!!  App::get_custom_author() !!}</strong>
  @else
    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
      {{ get_the_author() }}
    </a>
  @endif

</p>
