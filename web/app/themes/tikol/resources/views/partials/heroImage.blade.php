<div class="container-fluid hero-image" data-responsive-background-image>
  <picture>
    <source media="(max-width: 576px)" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
    <source media="(min-width: 577px)" srcset="{!! $get_hero_image->image['url'] !!}">
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
  </picture>

  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-9 pr-lg-5 pl-lg-5">
        <h1 class="display-1 text-white font-weight-bold  mb-lg-5">{!! $get_hero_image->title !!}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 pr-lg-5 pl-lg-5">

        @if($get_hero_image->button1['url'] !== null)
          <a href="{!! $get_hero_image->button1['url'] !!}" class="btn btn-primary btn-inv btn-lg mr-lg-4"><span class="text font-weight-bold text-left">{!! $get_hero_image->button1['title'] !!}</span><span class="fa fa-angle-right text-secondary"></span></a>
        @endif
          @if($get_hero_image->button2['url'] !== null)
          <a href="{!! $get_hero_image->button2['url'] !!}" class="btn btn-primary btn-inv btn-lg"><span class="text font-weight-bold text-left">{!! $get_hero_image->button2['title'] !!}</span><span class="fa fa-angle-right text-secondary"></span></a>
        @endif
      </div>
    </div>
  </div>
</div>
