@extends('layouts.app')

@section('content')

  <main class="page-content">
    <!-- Contact Info-->
    <section class="section-95">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10">
            <h2>{{$model->name}}</h2>
            <p class="text-big">{{ $model->content }}</p>
          </div>
          <div class="col-10 d-flex justify-content-between">
            <!-- Unit-->
            <div class="unit align-items-center flex-row unit-spacing-xs">
              <div class="unit-left"><span class="icon icon-circle icon-primary fl-great-icon-set-ico fl-great-icon-set-placeholder34"></span></div>
              <div class="unit-body text-left">
                <div>
                  <p>Адрес:</p>
                </div>
                <div class="offset-top-5">
                  <p class="font-weight-bold"><span class="link-decoration-none text-hover-primary text-gray">{{ $settings->address }}</span></p>
                </div>
              </div>
            </div>
            <!-- Unit-->
            <div class="unit align-items-center flex-row unit-spacing-xs offset-top-30">
              <div class="unit-left"><span class="icon icon-circle icon-primary fl-great-icon-set-ico fl-great-icon-set-mobile226"></span></div>
              <div class="unit-body text-left">
                <div>
                  <p>Телефоны:</p>
                </div>
                <div class="offset-top-5">
                  <p class="text-big font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a></p>
                </div>
                <div class="offset-top-5">
                  <p class="text-big font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="tel:{{ $settings->phone2 }}">{{ $settings->phone2 }}</a></p>
                </div>
              </div>
            </div>
            <!-- Unit-->
            <div class="unit align-items-center flex-row unit-spacing-xs offset-top-30">
              <div class="unit-left"><span class="icon icon-circle icon-primary fl-great-icon-set-ico fl-great-icon-set-new99"></span></div>
              <div class="unit-body text-left">
                <div>
                  <p>Email Address:</p>
                </div>
                <div class="offset-top-5">
                  <p class="text-big font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="mailto:{{ $settings->contact_email }}">{{ $settings->contact_email }}</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="yandex-map">
        <iframe
            src="https://yandex.ru/map-widget/v1/?um=constructor%3A3357130d999ac1d8854d38aea97b47a675e2b51cd5a942ec7f2f45ee558bf588&amp;source=constructor"
            width="100%" height="411" frameborder="0"></iframe>
      </div>
    </section>
  </main>


@endsection


