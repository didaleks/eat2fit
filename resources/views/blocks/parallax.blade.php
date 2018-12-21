<section class="section section-height-800 parallax-container context-dark bg-gray-darkest text-xl-left"
         data-parallax-img="{{ asset(image($model->image)->getResized(1800)) }}">
  <div class="parallax-content">
    <div class="bg-overlay-black">
      <div class="container section-30 section-md-95 section-lg-top-120 section-lg-bottom-150">
        <div class="d-none d-lg-block">
          <h1>{{$model->name}}</h1>
        </div>
        @includeIf('blocks.breadcrumb')
      </div>
    </div>
  </div>
</section>