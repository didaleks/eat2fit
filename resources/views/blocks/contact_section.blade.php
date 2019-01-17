<section class="section-95 section-md-bottom-45 footer_contact_form">
  <div class="container">
    <div class="row justify-content-sm-center justify-content-lg-start text-lg-left">
      <div class="col-md-10 col-lg-3">
        @include('blocks.contacts')
      </div>
      <div class="col-md-10 col-lg-5 offset-top-40 offset-md-top-0">
        @include('blocks.footer_contact_form', ['type'=>'footer', 'heading' => 'Свяжитесь с нами'])
      </div>
      <div class="col-sm-10 col-lg-3 offset-lg-1 offset-top-40 offset-md-top-0 p-0">
        @include('blocks.swipper_gallery')
      </div>
    </div>
  </div>
</section>