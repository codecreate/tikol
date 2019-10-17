<div class="product-block mt-3 mb-3">
  <div class="row">
  <div class="col-lg-4">
      <img class="product-block-image" src="{{$image['url']}}" alt="{{$image['alt']}}" >
    </div>
    <div class="col-lg-8">
      {{-- <div class="card mb-4">
        <div class="card-body"> --}}
          <h2>{{$title}}</h2>
          <strong>{{$position}}</strong>
        {{-- </div>
        <div class="card-body"> --}}
          {!!$description!!}
        {{-- </div>
      </div> --}}
    </div>
  </div>
</div>