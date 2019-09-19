<div class="product-block mt-3 mb-3">
  <div class="row">
    <div class="col-lg-8">
      <div class="card mb-4">
        <div class="card-body">
          <h2>{{$title}}</h2>
          <strong>{!!html_entity_decode($author)!!}</strong>
        </div>
        <div class="card-body">
          {{$description}}
          {{$price}}
          <div class="wp-block-button is-style-squared mt-4 mb-4">
            <a class="wp-block-button__link" href="{{ $link }}" target="_blank" rel= “noopener”>Purchase online</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <img class="product-block-image" src="{{$image['url']}}" alt="{{$image['alt']}}" >
    </div>
  </div>
</div>