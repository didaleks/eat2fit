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

  <main class="page-content production">
    {{-- Блок «Соблюдение норм» --}}
    <section class="section-95">
      <h3>Блок «Соблюдение норм»</h3>
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


    {{-- Блок «Цитата руководителя/главного технолога» --}}
    <section class="section-95 bg-gray-lighter">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10 col-lg-6 offset-top-40 offset-md-top-0 text-left">
            <div class="inset-xl-left-15">
              <h1>Блок «Цитата руководителя/главного технолога» </h1>
              <p class="text-big font-weight-bold text-primary">Главный технолог Eat2Fit</p>
              <p>I believe&nbsp;that taking a conscious approach to eating is crucial in today's crazy food world. Becoming what I call a Conscious Eater begins with a change in mindset. Eating consciously simply means to eat&nbsp;with awareness, knowing what we are eating, why we are eating it, where it comes from&nbsp;and how it will make us feel.</p>
              <!-- Blockquote-->
              <blockquote class="quote quote-classic text-left offset-top-20 inset-left-35">
                <p class="text-gray">
                  <q>Eating consciously allows us to establish the right balance of healthy to unhealthy food, and flexibility to adapt, both crucial to maintain our sanity. Overtime, it creates a deeper understanding of one's body, where eating becomes intuitive and we eat according to our body's needs.&nbsp;</q>
                </p>
              </blockquote>
            </div>
          </div>
          <div class="col-md-10 col-lg-6">
            <div class="d-inline-block"><img class="img-responsive center-block" src="/images/backgrounds/temp_banner.png" width="550" height="530" alt="">
            </div>
          </div>

        </div>
      </div>
    </section>

    {{-- Блок «Процесс готовки и упаковки» --}}
    <section class="section-95">
      <div class="container">
        <h2>Блок «Процесс готовки и упаковки» </h2>
        <div class="row no-gutters justify-content-sm-center offset-top-40 shadow-drop-sm">
          <div class="col-md-6 col-lg-4"><img class="img-responsive img-fullwidth img-fullheight center-block"
                                              src="/images/backgrounds/temp_banner.png" width="390" height="289" alt="">
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Box-->
            <div class="box-xs inset-xl-left-35 inset-xl-right-35"><span
                  class="icon fl-great-icon-set-ico fl-great-icon-set-pencil107 text-primary"></span>
              <p class="text-big font-weight-bold"><a class="link-decoration-none" href="blog-post.html">Seasonal
                  diet</a></p>
              <p>Ever wondered why you crave certain foods? One reason is the change in seasons. Our bodies seek foods
                that balance out the elements of the season…</p>
              <p class="text-big font-weight-bold offset-top-10">. . .</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4"><img class="img-responsive img-fullwidth img-fullheight center-block"
                                              src="/images/backgrounds/temp_banner.png" width="390" height="289" alt="">
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Box-->
            <div class="box-xs inset-xl-left-35 inset-xl-right-35"><span
                  class="icon fl-great-icon-set-ico fl-great-icon-set-video172 text-primary"></span>
              <p class="text-big font-weight-bold"><a class="link-decoration-none" href="blog-post.html">Street
                  workout</a></p>
              <p>Daily movement, in some form, will make you feel better each and every day. Your body craves moment. It
                was built to move. That means, we need to find...</p>
              <p class="text-big font-weight-bold offset-top-10">. . .</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4"><img class="img-responsive img-fullwidth img-fullheight center-block"
                                              src="/images/backgrounds/temp_banner.png" width="390" height="289" alt="">
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Box-->
            <div class="box-xs inset-xl-left-35 inset-xl-right-35"><span
                  class="icon fl-great-icon-set-ico fl-great-icon-set-pencil107 text-primary"></span>
              <p class="text-big font-weight-bold"><a class="link-decoration-none" href="blog-post.html">How to eat</a>
              </p>
              <p>We tend to be so conscious about WHAT to eat - fruits and vegetables, nuts, seeds, quality fats and
                proteins, sprouts, herbs etc. But HOW to eat is just as important, if not more. </p>
              <p class="text-big font-weight-bold offset-top-10">. . .</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Блок «Призыв к действию» --}}
    <section class="section section-height-800 parallax-container context-dark"
             data-parallax-img="/images/backgrounds/temp_banner.png">
      <div class="parallax-content">
        <div class="bg-overlay-green-leaf">
          <div class="container section-110 section-md-170">
            <div class="row justify-content-sm-center">
              <div class="col-sm-10">
                <h1>Блок «Призыв к действию»</h1>
                <p class="text-big text-uppercase text-spacing-100">I’ve had a particularly rough month. I’ve been
                  working tons and getting ready for a very big move.</p><a
                    class="btn btn-white-outline offset-top-20 offset-md-top-30" href="/catalog">
                  Start training program</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  {{-- Блок «Новости производства» --}}
  <!-- Featured events-->
    <section class="section-95">
      <div class="container">
        <h2>Блок «Новости производства»</h2>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-nav-modern owl-carousel-inset-bottom-20 owl-carousel-navs-primary offset-top-40"
             data-autoplay="true" data-items="1" data-md-items="2" data-stage-padding="5" data-loop="true"
             data-margin="30" data-mouse-drag="false" data-dots="true" data-nav="true">
          <div class="owl-item">
            <!-- Post Box-->
            <article class="post-box">
              <div class="post-box-img-wrap"><img src="/images/backgrounds/temp_banner.png" width="571" height="234" alt="">
              </div>
              <div class="post-box-caption bg-default"><span
                    class="icon icon-circle fl-great-icon-set-ico fl-great-icon-set-pencil107 bg-default"></span>
                <div class="post-meta font-weight-bold">September, 12, 2018</div>
                <p class="post-box-title text-big font-weight-bold text-uppercase text-spacing-100 offset-top-5"><a
                      class="link-decoration-none" href="blog-post.html">Seasonal diets</a></p>
                <div class="post-box-caption-hidden">
                  <p>Ever wondered why you crave certain foods? One reason is the change in seasons. Our bodies seek
                    foods that balance out the elements of the season…</p>
                </div>
              </div>
            </article>
          </div>
          <div class="owl-item">
            <!-- Post Box-->
            <article class="post-box">
              <div class="post-box-img-wrap"><img src="/images/backgrounds/temp_banner.png" width="571" height="234" alt="">
              </div>
              <div class="post-box-caption bg-default"><span
                    class="icon icon-circle fl-great-icon-set-ico fl-great-icon-set-video172 bg-default"></span>
                <div class="post-meta font-weight-bold">September, 12, 2018</div>
                <p class="post-box-title text-big font-weight-bold text-uppercase text-spacing-100 offset-top-5"><a
                      class="link-decoration-none" href="blog-post.html">How to eat</a></p>
                <div class="post-box-caption-hidden">
                  <p>We tend to be so conscious about WHAT to eat - fruits and vegetables, nuts, seeds, quality fats and
                    proteins, sprouts, herbs etc. But HOW to eat is just as important, if not more. </p>
                </div>
              </div>
            </article>
          </div>
          <div class="owl-item">
            <!-- Post Box-->
            <article class="post-box">
              <div class="post-box-img-wrap"><img src="/images/backgrounds/temp_banner.png" width="571" height="234" alt="">
              </div>
              <div class="post-box-caption bg-default"><span
                    class="icon icon-circle fl-great-icon-set-ico fl-great-icon-set-pencil107 bg-default"></span>
                <div class="post-meta font-weight-bold">September, 12, 2018</div>
                <p class="post-box-title text-big font-weight-bold text-uppercase text-spacing-100 offset-top-5"><a
                      class="link-decoration-none" href="blog-post.html">Seasonal diets</a></p>
                <div class="post-box-caption-hidden">
                  <p>Ever wondered why you crave certain foods? One reason is the change in seasons. Our bodies seek
                    foods that balance out the elements of the season…</p>
                </div>
              </div>
            </article>
          </div>
          <div class="owl-item">
            <!-- Post Box-->
            <article class="post-box">
              <div class="post-box-img-wrap"><img src="/images/backgrounds/temp_banner.png" width="571" height="234" alt="">
              </div>
              <div class="post-box-caption bg-default"><span
                    class="icon icon-circle fl-great-icon-set-ico fl-great-icon-set-video172 bg-default"></span>
                <div class="post-meta font-weight-bold">September, 12, 2018</div>
                <p class="post-box-title text-big font-weight-bold text-uppercase text-spacing-100 offset-top-5"><a
                      class="link-decoration-none" href="blog-post.html">How to eat</a></p>
                <div class="post-box-caption-hidden">
                  <p>We tend to be so conscious about WHAT to eat - fruits and vegetables, nuts, seeds, quality fats and
                    proteins, sprouts, herbs etc. But HOW to eat is just as important, if not more. </p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  </main>


@endsection


