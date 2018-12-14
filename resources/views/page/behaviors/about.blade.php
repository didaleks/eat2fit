@extends('layouts.app')

@section('content')

  <section class="section section-height-800 parallax-container context-dark bg-gray-darkest text-xl-left"
           data-parallax-img="/images/backgrounds/temp_banner.png">
    <div class="parallax-content">
      <div class="bg-overlay-black">
        <div class="container section-30 section-md-95 section-lg-top-120 section-lg-bottom-150">
          <div class="d-none d-lg-block">
            <h1>{{$model->name}}</h1>
          </div>
          <!-- List Inline-->
          <ul class="list-inline list-inline-dashed list-white text-big p offset-md-top-13">
            <li><a href="index.html">Home</a></li>
            <li><a href="health-philosophy.html">About Me</a></li>
            <li>Health Coaching Philosophy
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

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
          <div class="about__how-cook__img collapse  panel-collapse-five" id="collapseFiveImg">
            <span>5</span>
            <img class="img-responsive center-block" src="/images/backgrounds/temp_banner.png"
                 width="269" height="278" alt="">
          </div>
          <div class="about__how-cook__img collapse  panel-collapse-one" id="collapseOneImg">
            <span>1</span>
            <img class="img-responsive center-block" src="/images/backgrounds/temp_banner.png"
                 width="269" height="278" alt="">
          </div>
          <div class="about__how-cook__img collapse  panel-collapse-two" id="collapseTwoImg">
            <span>2</span>
            <img class="img-responsive center-block" src="/images/backgrounds/temp_banner.png"
                 width="269" height="278" alt="">
          </div>
          <div class="about__how-cook__img collapse  panel-collapse-three" id="collapseThreeImg">
            <span>3</span>
            <img class="img-responsive center-block" src="/images/backgrounds/temp_banner.png"
                 width="269" height="278" alt="">
          </div>
          <div class="about__how-cook__img collapse  panel-collapse-four" id="collapseFourImg">
            <span>4</span>
            <img class="img-responsive center-block" src="/images/backgrounds/temp_banner.png"
                 width="269" height="278" alt="">
          </div>
        </div>

        <div class="col-md-10 col-lg-6 offset-top-25">
          <div class="panel-group text-left" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-custom panel-default">
              <div class="panel-heading" id="headingFive" role="tab">
                <p class="panel-title"><a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Can I track my order?</a></p>
              </div>
              <div class="panel-collapse in collapse show" id="collapseFive" role="tabpanel" aria-labelledby="headingThree" style="">
                <div class="panel-body">Yes, you can! After placing your order you will receive an order confirmation via email. Each order starts production 24 hours after your order is placed. Within 72 hours of you placing your order, you will receive an expected delivery date. When the order ships, you will receive another email with the tracking number and a link to trace the order online with the carrier.</div>
              </div>
            </div>
            <div class="panel panel-custom panel-default">
              <div class="panel-heading" id="headingOne" role="tab">
                <p class="panel-title"><a class="d-block collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">How can I change something in my order?</a></p>
              </div>
              <div class="panel-collapse collapse" id="collapseOne" role="tabpanel" aria-labelledby="headingOne" style="">
                <div class="panel-body">If you need to change something in your order, please contact us immediately. We usually process orders within 2-4 hours, and once we have processed your order, we will be unable to make any changes.</div>
              </div>
            </div>
            <div class="panel panel-custom panel-default">
              <div class="panel-heading" id="headingTwo" role="tab">
                <p class="panel-title"><a class="d-block collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How can I pay for my order?</a></p>
              </div>
              <div class="panel-collapse collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" style="">
                <div class="panel-body">We accept Visa, MasterCard, and American Express credit and debit cards for your convenience.</div>
              </div>
            </div>
            <div class="panel panel-custom panel-default">
              <div class="panel-heading" id="headingThree" role="tab">
                <p class="panel-title"><a class="d-block collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How long will my order take to be delivered?</a></p>
              </div>
              <div class="panel-collapse collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingOne" style="">
                <div class="panel-body">Delivery times will depend on your location. Once payment is confirmed your order will be packaged. Delivery can be expected within 10 business days.</div>
              </div>
            </div>
            <div class="panel panel-custom panel-default">
              <div class="panel-heading" id="headingFour" role="tab">
                <p class="panel-title"><a class="d-block collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Can I return an item?</a></p>
              </div>
              <div class="panel-collapse collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingOne" style="">
                <div class="panel-body">Please contact our administrators for more information on returning products purchased on our website.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Блок "Лицензии" --}}
    <section class="section-45">
      <h3>Блок «Наши лицензии»</h3>
      <div class="container d-flex justify-content-center offset-top-30">
        <div class="col-md-6">
          <div class="swiper-container swiper-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">Slide 1</div>
              <div class="swiper-slide">Slide 2</div>
              <div class="swiper-slide">Slide 3</div>
              ...
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
    <section class="section-bottom-95 about__paralax-question">
      <div class="row justify-content-sm-center offset-top-50">
        <div class="col-md-10">
          <div class="parallax-container context-dark" data-parallax-img="images/backgrounds/background-02-970x800.jpg">
            <div class="material-parallax parallax"><img src="/images/backgrounds/temp_banner.png" alt=""
                                                         style="display: block; transform: translate3d(-50%, 230px, 0px);">
            </div>
            <div class="parallax-content">
              <div class="bg-overlay-black section-45">
                <h1>Блок "Задать вопрос диетологу"</h1>
                <form class="rd-mailform text-left offset-top-34" data-form-output="form-output-global"
                      data-form-type="contact" method="post" action="{{ route('feedback.store') }}" novalidate="novalidate">
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
                  <div class="row justify-content-sm-center p-3 align-items-sm-center inset-left-25 inset-right-25 inset-lg-left-0 inset-lg-right-0">
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
        </div>
      </div>
    </section>

    {{-- Блок Команда --}}
    <section class="section-95 about__team">
      <div class="container">
        <h2>Блок Команда</h2>
        <div class="row justify-content-sm-center offset-top-40">
          <div class="col-md-8 col-lg-4">
            <!-- Post Box Hover-->
            <article class="post-box-xs">
              <div class="post-box-xs-img-wrap">
                <div class="bg-image bg-image-1"></div>
              </div>
              <div class="post-box-xs-caption bg-default">
                <!-- List Inline-->
                <ul class="list-inline list-inline-22 list-inline-dashed-vertical font-weight-bold">
                  <li><a class="text-gray text-hover-primary" href="blog-post.html"><span
                          class="text-middle inset-right-7">Street workout</span><span
                          class="icon icon-sm material-design-ico material-design-camera59 text-middle text-gray"></span></a>
                  </li>
                  <li>September, 12, 2018</li>
                </ul>
                <div class="post-box-xs-hidden">
                  <p class="offset-top-13">Daily movement, in some form, will make you feel better each and every day.
                    Your body craves moment. It was built to move. That means, we...</p>
                </div>
                <p class="text-big font-weight-bold offset-top-5">. . .</p>
              </div>
            </article>
          </div>
          <div class="col-md-8 col-lg-4 offset-top-30 offset-md-top-0">
            <!-- Post Box Hover-->
            <article class="post-box-xs">
              <div class="post-box-xs-img-wrap">
                <div class="bg-image bg-image-2"></div>
              </div>
              <div class="post-box-xs-caption bg-default">
                <!-- List Inline-->
                <ul class="list-inline list-inline-22 list-inline-dashed-vertical font-weight-bold">
                  <li><a class="text-gray text-hover-primary" href="blog-post.html"><span
                          class="text-middle inset-right-7">Seasonal diets</span><span
                          class="icon icon-xs material-design-ico material-design-create3 text-middle text-gray"></span></a>
                  </li>
                  <li>September, 12, 2018</li>
                </ul>
                <div class="post-box-xs-hidden">
                  <p class="offset-top-13">Ever wondered why you crave certain foods? One reason is the change in
                    seasons. Our bodies seek foods that balance out the elements of the...</p>
                </div>
                <p class="text-big font-weight-bold offset-top-5">. . .</p>
              </div>
            </article>
          </div>
          <div class="col-md-8 col-lg-4 offset-top-30 offset-md-top-0">
            <!-- Post Box Hover-->
            <article class="post-box-xs">
              <div class="post-box-xs-img-wrap">
                <div class="bg-image bg-image-3"></div>
              </div>
              <div class="post-box-xs-caption bg-default">
                <!-- List Inline-->
                <ul class="list-inline list-inline-22 list-inline-dashed-vertical font-weight-bold">
                  <li><a class="text-gray text-hover-primary" href="blog-post.html"><span
                          class="text-middle inset-right-7">How to eat</span><span
                          class="icon icon-xs material-design-ico material-design-create3 text-middle text-gray"></span></a>
                  </li>
                  <li>September, 12, 2018</li>
                </ul>
                <div class="post-box-xs-hidden">
                  <p class="offset-top-13">We tend to be so conscious about WHAT to eat - fruits and vegetables, nuts,
                    seeds, quality fats and proteins, sprouts, herbs etc. But HOW to...</p>
                </div>
                <p class="text-big font-weight-bold offset-top-5">. . .</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    {{-- Блок «Партнеры» --}}
    <section class="section-45">
      <div class="contaner">
        <div class="row justify-content-sm-center">
          <div class="col-md-10">
            <h2>Блок «Партнеры»</h2>
            <p>I'm a health and lifestyle coach to smart (and busy!) women who want to look and feel their best, but who
              don't have a ton of time to exercise, shop for speciality foods, or cook tons of meals every week. I
              stumbled upon this path by accident, and it changed my life. Learn what good health can do and how
              extraordinary your life can be!</p>
          </div>
        </div>
        <div class="owl-carousel owl-carousel-centered offset-top-50"
             data-autoplay="true" data-items="2" data-sm-items="5"
             data-xl-items="5" data-stage-padding="5" data-loop="true"
             data-margin="30" data-mouse-drag="false"
             data-dots="true">
          <a href="#">
            <img class="img-responsive img-semi-transparent-inverse center-block"
                 src="/images/backgrounds/temp_banner.png" width="96" height="21"
                 alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="/images/backgrounds/temp_banner.png" width="101" height="20" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="/images/backgrounds/temp_banner.png" width="133" height="29" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="/images/backgrounds/temp_banner.png" width="148" height="19" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="/images/backgrounds/temp_banner.png" width="133" height="35" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="/images/backgrounds/temp_banner.png" width="130" height="34" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="/images/backgrounds/temp_banner.png" width="119" height="26" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="/images/backgrounds/temp_banner.png" width="127" height="31" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="/images/backgrounds/temp_banner.png" width="154" height="20" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="/images/backgrounds/temp_banner.png" width="140" height="41" alt=""></a></div>
      </div>
    </section>

  </main>


@endsection


