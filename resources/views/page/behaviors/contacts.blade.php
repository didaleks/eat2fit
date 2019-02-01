@extends('layouts.app')

@section('content')

  @include('blocks.parallax')

  <main class="page-content">
    <!-- Contact Info-->
    <section class="section-top-95">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10">
            <h2 class="pb-5">{{$model->name}}</h2>
          </div>
          <div class="col-10 d-flex flex-wrap justify-content-between">
            <div class="col-lg-6 col-md-6 unit pt-3 align-items-top flex-row unit-spacing-xs">
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
            <div class="col-lg-6 col-md-6 unit pt-3 align-items-top flex-row unit-spacing-xs">
              <div class="unit-left"><span class="icon icon-circle icon-primary fl-great-icon-set-ico fl-great-icon-set-mobile226"></span></div>
              <div class="unit-body text-left">
                <div>
                  <p>Телефоны:</p>
                </div>
                <div class="offset-top-5">
                  <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a></p>
                </div>
                <div class="offset-top-5">
                  <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="tel:{{ $settings->phone2 }}">{{ $settings->phone2 }}</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 unit pt-3 align-items-top flex-row unit-spacing-xs">
              <div class="unit-left"><span class="icon icon-circle icon-primary fl-great-icon-set-ico fl-great-icon-set-new99"></span></div>
              <div class="unit-body text-left">
                <div>
                  <p>Email Address:</p>
                </div>
                <div class="offset-top-5">
                  <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="mailto:{{ $settings->contact_email }}">{{ $settings->contact_email }}</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 unit pt-3 align-items-top flex-row unit-spacing-xs">
              <div class="unit-left"><span class="icon icon-circle icon-primary fl-great-icon-set-ico fl-great-icon-set-chronometer24"></span></div>
              <div class="unit-body text-left">
                <div>
                  <p>Время работы:</p>
                </div>
                <div class="offset-top-5">
                  <p class="font-weight-bold"><span class="link-decoration-none text-hover-primary text-gray">09:00–21:00 — Пн – Пт</span></p>
                </div>
                <div class="offset-top-5">
                  <p class="font-weight-bold"><span class="link-decoration-none text-hover-primary text-gray">10:00–19:00 — Сб – Вс</span></p>
                </div>
              </div>
            </div>
          </div>
          <p class="offset-top-30">Мы ждем Вас в Центре диетологии и правильного питания Eat2Fit на улице Марата, д. 49. Вы сможете получить консультацию диетолога, подобрать и заказать программу здорового питания за один визит.</p>
        </div>
      </div>
    </section>
    <section>
      <div class="yandex-map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab99875a5c0c0ca9acb1acbb388b7d211fd647b6823cc62434e26db25caea6c57&amp;source=constructor" width="100%" height="411" frameborder="0"></iframe>
      </div>
    </section>
  </main>


@endsection


