@extends('layouts.app')

@section('content')

  @include('blocks.parallax')

  <main class="page-content about">

    {{-- Блок «Как отбираем продукты» --}}
    <section class="section-95 section-md-bottom-0">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10">
            <h2>Блок «Как отбираем продукты»</h2>
          </div>
        </div>
        <div class="row justify-content-sm-center justify-content-md-start offset-md-top-34">
          <div class="col-lg-6">
            <div class="row justify-content-sm-center">
              <div class="col-md-6"><span
                    class="icon icon-lg fl-great-icon-set-ico fl-great-icon-set-chat73 text-primary"></span>
                <p class="text-big font-weight-bold text-primary">A Holistic Approach</p>
                <p>To truly understand health, we need to look beyond food. In my coaching style I practice a holistic
                  (whole) approach to...</p>
                <p class="text-big font-weight-bold offset-top-10">. . .</p>
              </div>
              <div class="col-md-6 offset-top-40 offset-sm-top-0"><span
                    class="icon icon-lg fl-great-icon-set-ico fl-great-icon-set-like77 text-primary"></span>
                <p class="text-big font-weight-bold text-primary">You are Unique</p>
                <p>I believe in the concept of bio-individuality, which means that each person has unique food and
                  lifestyle...</p>
                <p class="text-big font-weight-bold offset-top-10">. . .</p>
              </div>
              <div class="col-md-6 offset-top-40 offset-sm-top-25"><span
                    class="icon icon-lg fl-great-icon-set-ico fl-great-icon-set-trophy70 text-primary"></span>
                <p class="text-big font-weight-bold text-primary">Upgrade Your Life</p>
                <p>My services are not just for those with specific needs or goals such as weight loss, increased energy
                  or elimination...</p>
                <p class="text-big font-weight-bold offset-top-10">. . .</p>
              </div>
              <div class="col-md-6 offset-top-40 offset-sm-top-25"><span
                    class="icon icon-lg fl-great-icon-set-ico fl-great-icon-set-user156 text-primary"></span>
                <p class="text-big font-weight-bold text-primary">Online Coaching Program</p>
                <p>As your personal online coach I can help you realize how simple it is to be healthy, provide serious
                  accountability...</p>
                <p class="text-big font-weight-bold offset-top-10">. . .</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-5"><img class="img-responsive center-block d-none d-lg-inline-block"
                                              src="/images/backgrounds/temp_banner.png" width="470"
                                              height="540" alt=""></div>
        </div>
      </div>
    </section>

    {{-- Блок «Как готовим и храним продукты» --}}
    <section class="section-95 about__how-cook">
      <h3>Блок «Как готовим и храним продукты»</h3>
      <div class="container d-flex justify-content-center offset-top-65">
        <div class="col-md-10 col-lg-6">
          <div class="about__how-cook__img">
            <span>1</span>
            <img class="img-responsive center-block" src="/images/backgrounds/temp_banner.png"
                 width="80%" height="278" alt="">
          </div>
        </div>

        <div class="col-md-10 col-lg-6 offset-top-25">
          <div class="panel-group text-left" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-custom panel-default">
              <div class="panel-heading" id="headingFive" role="tab">
                <p class="panel-title">
                  <span class="d-block">
                    Can I track my order?</span>
                </p>
              </div>
              <div class="panel-collapse in collapse show" id="" role="tabpanel"
                   aria-labelledby="headingThree" style="">
                <div class="panel-body">Yes, you can! After placing your order you will receive an order confirmation
                  via email. Each order starts production 24 hours after your order is placed. Within 72 hours of you
                  placing your order, you will receive an expected delivery date. When the order ships, you will receive
                  another email with the tracking number and a link to trace the order online with the carrier.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Блок "Лицензии" --}}
    <section class="section-45 about__licensees">
      <h3>Блок «Наши лицензии»</h3>
      <div class="container d-flex justify-content-center offset-top-30">
        <div class="col-md-6">
          <div class="swiper-container swiper-slider">
            <div class="swiper-wrapper">
              @foreach($model->fields['images'] as $item)
                <div class="swiper-slide"
                     data-toggle="modal"
                     data-target="#modalImg"
                     data-slide-bg="{{asset(image($item['image'])->url)}}"></div>
              @endforeach
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
          </div>
        </div>
        <div class="col-md-10 col-lg-6 offset-top-25">
          <div class="col-md-10">
            <h2>Are you ready to harness the power of vibrant health to fuel <br class="d-none d-xl-inline-block"> your
              extraordinary life?</h2>
            <p>I'm a health and lifestyle coach to smart (and busy!) women who want to look and feel their best, but who
              don't have a ton of time to exercise, shop for speciality foods, or cook tons of meals every week. I
              stumbled upon this path by accident, and it changed my life. Learn what good health can do and how
              extraordinary your life can be!</p>
          </div>
        </div>
      </div>
    </section>


    {{-- Задать вопрос диетологу --}}
    <section
        class="section about__paralax-question section-height-800 parallax-container context-dark bg-gray-darkest text-xl-left"
        data-parallax-img="/images/backgrounds/temp_banner.png">
      <div class="parallax-content">
        <div class="bg-overlay-black section-45 d-flex justify-content-center text-center">
          <div class="col-md-10">
            <h1>Блок "Задать вопрос диетологу"</h1>
            <form class="rd-mailform text-left offset-top-34" data-form-output="form-output-global"
                  data-form-type="contact" method="post" action="{{ route('feedback.store') }}"
                  novalidate="novalidate">
              @csrf
              <input type="hidden" name="type" value="question">
              <div class="row justify-content-sm-center">
                <div class="col-lg-4 text-center">
                  <div class="inset-lg-left-10 inset-xl-left-40">
                    <p>Keep up with the latest school news and events. Enter your e-mail and subscribe to our
                      newsletter.</p>
                  </div>
                </div>
              </div>
              <div
                  class="row justify-content-sm-center p-3 align-items-sm-center inset-left-25 inset-right-25 inset-lg-left-0 inset-lg-right-0">
                <div class="col-3 form-wrap form-wrap-transparent has-error">
                  <input class="form-input form-control-has-validation form-control-last-child"
                         type="text"
                         placeholder="Имя"
                         name="name" data-constraints="@Required" id=""><span
                      class="form-validation">Поле обязательно для заполнения.</span>
                </div>
                <div class="col-3 form-wrap form-wrap-transparent has-error">
                  <input class="form-input form-control-has-validation form-control-last-child" type="text"
                         placeholder="E-mail"
                         name="email" data-constraints="@Email @Required" id=""><span
                      class="form-validation">Поле обязательно для заполнения.</span>
                </div>
                <div class="col-3 form-wrap form-wrap-transparent has-error">
                  <input class="form-input form-control-has-validation form-control-last-child" type="text"
                         placeholder="Ваш вопрос"
                         name="message" data-constraints="@Required" id=""><span
                      class="form-validation">Поле обязательно для заполнения.</span>
                </div>
                <div class="col-3 text-center offset-top-10 offset-md-top-0">
                  <button class="btn btn-primary" type="submit">Задать вопрос</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    {{-- Блок «Наши партнеры» --}}
    <section class="section-45">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10">
            <h2>Наши партнеры</h2>
            <p>I'm a health and lifestyle coach to smart (and busy!) women who want to look and feel their best, but who
              don't have a ton of time to exercise, shop for speciality foods, or cook tons of meals every week. I
              stumbled upon this path by accident, and it changed my life. Learn what good health can do and how
              extraordinary your life can be!</p>
          </div>
        </div>
      </div>
      <div class="owl-carousel owl-carousel-centered offset-top-50"
           data-autoplay="true" data-items="2" data-sm-items="5"
           data-xl-items="5" data-loop="true"
           data-mouse-drag="false"
           data-dots="true">
        @foreach($model->fields['partners'] as $partner)
          <a href="#">
            <img class="img-responsive img-semi-transparent-inverse center-block"
                 src="{{asset(image($partner['image'])->getResized(148))}}" width="148">
          </a>
        @endforeach

      </div>

    </section>

  </main>


@endsection


