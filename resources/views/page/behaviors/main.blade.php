@extends('layouts.app')

@section('content')

  <!-- Swiper-->
  <div class="swiper-container swiper-slider swiper-slider-variant-1" data-autoplay="5000" data-min-height="400px"
       data-simulate-touch="false" data-slide-effect="fade">
    <div class="swiper-wrapper">
      <div class="swiper-slide" data-slide-bg="images/backgrounds/background-12-1920x900.jpg">
        <div class="swiper-slide-caption">
          <div class="container">
            <div class="row justify-content-sm-center justify-content-lg-start text-lg-left">
              <div class="col-md-10 col-lg-8 col-xl-5">
                <div class="text-big-80 font-accent" data-caption-animate="fadeInDown" data-caption-delay="50"
                     data-caption-duration="700">Best Green Eats
                </div>
                <p class="text-big font-weight-bold offset-top-13" data-caption-animate="fadeIn"
                   data-caption-delay="200" data-caption-duration="700">Health and Nutrition Coach. <br
                      class="d-none d-lg-inline-block"> Yoga Teacher. Writer. Consultant.</p><a
                    class="btn btn-white-outline offset-top-20 offset-sm-top-13 offset-lg-top-30" href="contact-me.html"
                    data-caption-animate="fadeInUp" data-caption-delay="50" data-caption-duration="700">Subscribe</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="images/backgrounds/background-14-1920x900.jpg">
        <div class="swiper-slide-caption">
          <div class="container">
            <div class="row justify-content-sm-center justify-content-lg-start text-lg-left">
              <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="text-big-80 font-accent" data-caption-animate="fadeInDown" data-caption-delay="50"
                     data-caption-duration="700">Enjoy a Healthy Life
                </div>
                <p class="text-big font-weight-bold offset-top-13" data-caption-animate="fadeIn"
                   data-caption-delay="200" data-caption-duration="700">With advice and methods available here, <br
                      class="d-none d-lg-inline-block"> you can easily improve your life!</p><a
                    class="btn btn-white-outline offset-top-20 offset-sm-top-13 offset-lg-top-30" href="contact-me.html"
                    data-caption-animate="fadeInUp" data-caption-delay="50" data-caption-duration="700">Subscribe</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="images/backgrounds/background-13-1920x900.jpg">
        <div class="swiper-slide-caption">
          <div class="container">
            <div class="row justify-content-sm-center justify-content-lg-start text-lg-left">
              <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="text-big-80 font-accent" data-caption-animate="fadeInDown" data-caption-delay="50"
                     data-caption-duration="700">Choose Your Diet
                </div>
                <p class="text-big font-weight-bold offset-top-13" data-caption-animate="fadeIn"
                   data-caption-delay="200" data-caption-duration="700">I can help you make your life healthier and your
                  body stronger in no time.</p><a
                    class="btn btn-white-outline offset-top-20 offset-sm-top-13 offset-lg-top-30" href="contact-me.html"
                    data-caption-animate="fadeInUp" data-caption-delay="50" data-caption-duration="700">Subscribe</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button swiper-button-prev d-none d-lg-block">
        <div class="wrap"><span class="swiper-button__arrow"><span
                class="icon material-icons-ico material-icons-chevron_left"></span></span>
          <div class="preview">
            <div class="preview__img"></div>
          </div>
        </div>
      </div>
      <div class="swiper-button swiper-button-next d-none d-lg-block">
        <div class="wrap"><span class="swiper-button__arrow"><span
                class="icon material-icons-ico material-icons-chevron_right"></span></span>
          <div class="preview">
            <div class="preview__img"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container section-relative">
      <!-- Swiper Pagination-->
      <div class="swiper-pagination swiper-pagination-right"></div>
    </div>
  </div>
  <main class="page-content">
    {{-- Блок "О нас" --}}
    <section class="section-95">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-8 col-lg-6 order-lg-1"><img class="img-responsive center-block"
                                                         src="images/pages/home-01-570x350.jpg" width="570" height="350"
                                                         alt=""></div>
          <div class="col-md-8 col-lg-6 offset-top-34 offset-md-top-0">
            <div class="inset-lg-left-50 inset-lg-right-50 inset-xl-left-50 inset-xl-right-50">
              <h2>Блок "О нас"!</h2>
              <p class="offset-lg-top-35">I am a Certified Health Coach, focused on women's health, bringing you
                super-practical support to help you feel great, take care of your body, and actually enjoy the process.
                I don’t tell my clients what to do, I teach them what to do.</p>
              <p class="text-big font-weight-bold text-gray offset-lg-top-40">A fresh & fun approach to your life <br
                    class="d-none d-xl-inline-block"> health and happiness in your life.</p><a
                  class="btn btn-primary offset-top-34" href="/about">More about me</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Блок "Что мы предлагаем" --}}
    <section class="section-95 main__features">
      <div class="container">
        <h2>Latest news</h2>
        <div class="row no-gutters justify-content-sm-center offset-top-40 shadow-drop-sm main__features__list">
          <div class="col-md-6 col-lg-4"><img class="img-responsive img-fullwidth img-fullheight center-block"
                                              src="images/pages/events-01-390x289.jpg" width="390" height="289" alt="">
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
                                              src="images/pages/events-02-390x289.jpg" width="390" height="289" alt="">
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
                                              src="images/pages/events-03-390x289.jpg" width="390" height="289" alt="">
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Box-->
            <div class="box-xs inset-xl-left-35 inset-xl-right-35"><span
                  class="icon fl-great-icon-set-ico fl-great-icon-set-pencil107 text-primary"></span>
              <p class="text-big font-weight-bold"><a class="link-decoration-none" href="blog-post.html">How to eat</a>
              </p>
              <p>We tend to be so conscious about WHAT to eat - fruits and vegetables, nuts, seeds, quality fats and
                proteins, sprouts, herbs etc. But HOW to eat is just as important, if not more.&nbsp;</p>
              <p class="text-big font-weight-bold offset-top-10">. . .</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Блок «Гарантируем результат за 10 дней» --}}
    <section class="section-95">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10">
            <h2>10 Days to Sugar Freedom will help you take control of your sugar cravings for good</h2>
          </div>
        </div>
        <div class="row justify-content-sm-center offset-top-40 text-left">
          <div class="col-md-8 col-lg-6">
            <p class="text-big text-uppercase text-gray text-spacing-100 font-weight-bold">After 10 Days to Sugar
              Freedom you will:</p>
            <!-- List Index-->
            <ul class="list list-index font-weight-bold text-primary offset-top-13 offset-md-top-20">
              <li class="list-index-counter">Confidently manage your sugar cravings WITHOUT depriving yourself</li>
              <li class="list-index-counter">Stop struggling and depending on willpower to resist sugar</li>
              <li class="list-index-counter">Boost your energy without sugar (or caffeine!)</li>
              <li class="list-index-counter">Get back on track quickly after the occasional 'sugar binge' (it
                happens!)
              </li>
            </ul>
          </div>
          <div class="col-md-8 col-lg-6 offset-top-40 offset-md-top-0">
            <p class="text-big text-uppercase text-gray text-spacing-100 font-weight-bold">Here's what you get:</p>
            <!-- List Index-->
            <ul class="list list-index font-weight-bold text-primary offset-top-13 offset-md-top-20">
              <li class="list-index-counter">Daily email coaching sessions with easy-to-follow action plans</li>
              <li class="list-index-counter">Quick recipes and food suggestions to satisfy your sweet tooth
                (naturally)
              </li>
              <li class="list-index-counter">Tools to help you identify the real cause of your sugar cravings</li>
              <li class="list-index-counter">Other resources to keep you on track and in control of sugar</li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    {{-- Блок «Блок выберите план» --}}
    <section class="section-xs-bottom-95 section-md-bottom-0">
      <div class="row no-gutters justify-content-sm-center" style="font-size:0;">
        <div class="col-sm-10 col-md-8 col-lg-4 section-relative bg-image bg-image-3 bg-image-overlay bg-image-hover">
          <!-- Box Offer-->
          <div class="box-offer box-offer-variant-2 context-dark">
            <div class="box-offer-caption"><span
                  class="icon icon-lg fl-great-icon-set-ico fl-great-icon-set-tree108"></span>
              <h2 class="offset-top-10 offset-xs-top-20 offset-md-top-10 offset-xl-top-20">Healthy Eating is Not
                Hard</h2>
              <p class="text-big font-weight-bold offset-top-5 offset-xs-top-10 offset-md-top-5 offset-xl-top-10">Tips
                for planning your nutritious diet.</p><a
                  class="btn btn-white-outline offset-top-5 offset-xs-top-13 offset-md-top-5 offset-xl-top-13"
                  href="welness.html">Click here</a>
            </div>
          </div>
        </div>
        <div
            class="col-sm-10 col-md-8 col-lg-4 offset-xs-top-30 offset-md-top-0 section-relative bg-image bg-image-4 bg-image-overlay bg-image-hover">
          <!-- Box Offer-->
          <div class="box-offer box-offer-variant-2 context-dark">
            <div class="box-offer-caption"><span
                  class="icon icon-lg fl-great-icon-set-ico fl-great-icon-set-tree108"></span>
              <h2 class="offset-top-10 offset-xs-top-20 offset-md-top-10 offset-xl-top-20">The Best Fitness Advice and
                Info</h2>
              <p class="text-big font-weight-bold offset-top-5 offset-xs-top-10 offset-md-top-5 offset-xl-top-10">
                Resource for health and fitness tips.</p><a
                  class="btn btn-white-outline offset-top-5 offset-xs-top-13 offset-md-top-5 offset-xl-top-13"
                  href="welness.html">Click here</a>
            </div>
          </div>
        </div>
        <div
            class="col-sm-10 col-md-8 col-lg-4 offset-xs-top-30 offset-md-top-0 section-relative bg-image bg-image-5 bg-image-overlay bg-image-hover">
          <!-- Box Offer-->
          <div class="box-offer box-offer-variant-2 context-dark">
            <div class="box-offer-caption"><span
                  class="icon icon-lg fl-great-icon-set-ico fl-great-icon-set-tree108"></span>
              <h2 class="offset-top-10 offset-xs-top-20 offset-md-top-10 offset-xl-top-20">Tea Weight Loss Diet</h2>
              <p class="text-big font-weight-bold offset-top-5 offset-xs-top-10 offset-md-top-5 offset-xl-top-10">Tea
                diet is a method of losing weight by drinking tea.</p><a
                  class="btn btn-white-outline offset-top-5 offset-xs-top-13 offset-md-top-5 offset-xl-top-13"
                  href="welness.html">Click here</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Блок «Обращение диетолога и шеф-повара» --}}
    <section class="section-95 section-md-bottom-45">
      <div class="container">
        <h2>Success stories</h2>
        <div class="row justify-content-sm-center offset-top-40">
          <div class="col-md-10 col-lg-8 col-xl-6">
            <div class="row justify-content-sm-center">
              <div class="col-sm-6"><img class="img-responsive center-block" src="images/pages/praise-01-269x278.jpg"
                                         width="269" height="278" alt=""></div>
              <div class="col-sm-6 offset-top-30 offset-xs-top-0"><img class="img-responsive center-block"
                                                                       src="images/pages/praise-02-269x278.jpg"
                                                                       width="269" height="278" alt=""></div>
            </div>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-6 offset-top-40 offset-lg-top-0 text-left">
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-loaded" data-autoplay="true" data-items="1" data-stage-padding="15"
                 data-loop="true" data-margin="30" data-mouse-drag="false" data-dots-custom=".owl-custom-pagination"
                 data-nav="false" style="">


              <div class="owl-stage-outer">
                <div class="owl-stage"
                     style="transform: translate3d(-1140px, 0px, 0px); transition: all 0.25s ease 0s; width: 4020px; padding-left: 15px; padding-right: 15px;">
                  <div class="owl-item cloned" style="width: 540px; margin-right: 30px;">
                    <div class="owl-item">
                      <p class="text-big font-weight-bold text-primary">Lola Jordon lost 20 pounds and 2 sizes</p>
                      <p>Working with Joanna has allowed me to tune into how I eat, why I eat, and how it makes me feel.
                        I'm more aware of times when I eat not because I'm hungry but because something else is
                        bothering me or causing stress. Not focusing on food to make me feel better has improved my
                        relationships with others and with myself.</p>
                      <!-- Blockquote-->
                      <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                        <p class="text-gray">
                          <q>She’s helped me better manage stress. I've also noticed more balance in my life, including
                            making room for creativity and relaxation; time with family and friends; better time
                            management; and things I never thought I'd do like running my first 5k race! I feel more
                            confident that I can set goals.</q>
                        </p>
                        <div class="offset-top-20">
                          <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                                         href="my-philosophy.html">Lola Jordon</a></p>
                        </div>
                        <div class="offset-top-0">
                          <p class="text-gray">(artist)</p>
                        </div>
                      </blockquote>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 540px; margin-right: 30px;">
                    <div class="owl-item">
                      <p class="text-big font-weight-bold text-primary">Jina Green lost 30 pounds and 3 sizes</p>
                      <p>I originally contacted Joanna because I was having trouble getting my eating habits under
                        control, and was finally ready to admit that I couldn't do it on my own. After our initial
                        consultation, I was convinced that if anyone could help, it was Joanna; and this turned out to
                        be true. In six months, I lost approximately 30 pounds and 3 sizes.</p>
                      <!-- Blockquote-->
                      <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                        <p class="text-gray">
                          <q>More importantly, I am making far more healthy food choices, and my self-confidence has
                            never been better. But working with Joanna is not just about losing weight. Her personalized
                            approach also addresses improving fitness levels, diversifying one's diet and managing
                            stress.</q>
                        </p>
                        <div class="offset-top-20">
                          <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                                         href="my-philosophy.html">Jina Green</a></p>
                        </div>
                        <div class="offset-top-0">
                          <p class="text-gray">(actress)</p>
                        </div>
                      </blockquote>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 540px; margin-right: 30px;">
                    <div class="owl-item">
                      <p class="text-big font-weight-bold text-primary">Rita Jefferson lost 10 pounds and 1 size</p>
                      <p>Joanna is unlike most nutritionists. She allows you to use foods that work with your lifestyle
                        to address your concerns. I felt that I had a choice in what I ate and how I ate it rather than
                        being on a strict diet. She was there with constant support, offering recipe recommendations or
                        checking to make sure I was staying on track.</p>
                      <!-- Blockquote-->
                      <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                        <p class="text-gray">
                          <q>Working with her changed the way I look at food - I not only feel better and healthier, but
                            I also enjoy going to the grocery store and putting meals together using ingredients I
                            previously overlooked. I completed the program having fixed all of my original concerns, and
                            I enjoyed every session.&nbsp;</q>
                        </p>
                        <div class="offset-top-20">
                          <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                                         href="my-philosophy.html">Rita Jefferson</a></p>
                        </div>
                        <div class="offset-top-0">
                          <p class="text-gray">(writer)</p>
                        </div>
                      </blockquote>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 540px; margin-right: 30px;">
                    <div class="owl-item">
                      <p class="text-big font-weight-bold text-primary">Lola Jordon lost 20 pounds and 2 sizes</p>
                      <p>Working with Joanna has allowed me to tune into how I eat, why I eat, and how it makes me feel.
                        I'm more aware of times when I eat not because I'm hungry but because something else is
                        bothering me or causing stress. Not focusing on food to make me feel better has improved my
                        relationships with others and with myself.</p>
                      <!-- Blockquote-->
                      <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                        <p class="text-gray">
                          <q>She’s helped me better manage stress. I've also noticed more balance in my life, including
                            making room for creativity and relaxation; time with family and friends; better time
                            management; and things I never thought I'd do like running my first 5k race! I feel more
                            confident that I can set goals.</q>
                        </p>
                        <div class="offset-top-20">
                          <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                                         href="my-philosophy.html">Lola Jordon</a></p>
                        </div>
                        <div class="offset-top-0">
                          <p class="text-gray">(artist)</p>
                        </div>
                      </blockquote>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 540px; margin-right: 30px;">
                    <div class="owl-item">
                      <p class="text-big font-weight-bold text-primary">Jina Green lost 30 pounds and 3 sizes</p>
                      <p>I originally contacted Joanna because I was having trouble getting my eating habits under
                        control, and was finally ready to admit that I couldn't do it on my own. After our initial
                        consultation, I was convinced that if anyone could help, it was Joanna; and this turned out to
                        be true. In six months, I lost approximately 30 pounds and 3 sizes.</p>
                      <!-- Blockquote-->
                      <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                        <p class="text-gray">
                          <q>More importantly, I am making far more healthy food choices, and my self-confidence has
                            never been better. But working with Joanna is not just about losing weight. Her personalized
                            approach also addresses improving fitness levels, diversifying one's diet and managing
                            stress.</q>
                        </p>
                        <div class="offset-top-20">
                          <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                                         href="my-philosophy.html">Jina Green</a></p>
                        </div>
                        <div class="offset-top-0">
                          <p class="text-gray">(actress)</p>
                        </div>
                      </blockquote>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 540px; margin-right: 30px;">
                    <div class="owl-item">
                      <p class="text-big font-weight-bold text-primary">Rita Jefferson lost 10 pounds and 1 size</p>
                      <p>Joanna is unlike most nutritionists. She allows you to use foods that work with your lifestyle
                        to address your concerns. I felt that I had a choice in what I ate and how I ate it rather than
                        being on a strict diet. She was there with constant support, offering recipe recommendations or
                        checking to make sure I was staying on track.</p>
                      <!-- Blockquote-->
                      <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                        <p class="text-gray">
                          <q>Working with her changed the way I look at food - I not only feel better and healthier, but
                            I also enjoy going to the grocery store and putting meals together using ingredients I
                            previously overlooked. I completed the program having fixed all of my original concerns, and
                            I enjoyed every session.&nbsp;</q>
                        </p>
                        <div class="offset-top-20">
                          <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                                         href="my-philosophy.html">Rita Jefferson</a></p>
                        </div>
                        <div class="offset-top-0">
                          <p class="text-gray">(writer)</p>
                        </div>
                      </blockquote>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 540px; margin-right: 30px;">
                    <div class="owl-item">
                      <p class="text-big font-weight-bold text-primary">Lola Jordon lost 20 pounds and 2 sizes</p>
                      <p>Working with Joanna has allowed me to tune into how I eat, why I eat, and how it makes me feel.
                        I'm more aware of times when I eat not because I'm hungry but because something else is
                        bothering me or causing stress. Not focusing on food to make me feel better has improved my
                        relationships with others and with myself.</p>
                      <!-- Blockquote-->
                      <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                        <p class="text-gray">
                          <q>She’s helped me better manage stress. I've also noticed more balance in my life, including
                            making room for creativity and relaxation; time with family and friends; better time
                            management; and things I never thought I'd do like running my first 5k race! I feel more
                            confident that I can set goals.</q>
                        </p>
                        <div class="offset-top-20">
                          <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                                         href="my-philosophy.html">Lola Jordon</a></p>
                        </div>
                        <div class="offset-top-0">
                          <p class="text-gray">(artist)</p>
                        </div>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav disabled">
                <div class="owl-prev"></div>
                <div class="owl-next"></div>
              </div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
        <div class="row justify-content-sm-center offset-top-25">
          <div class="col-md-6 col-xl-4">
            <div class="section-hidden">
              <div class="text-both-lines">
                <div class="owl-custom-pagination">
                  <div class="owl-dot" data-owl-item="0"></div>
                  <div class="owl-dot" data-owl-item="1"></div>
                  <div class="owl-dot active" data-owl-item="2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Блок «Частые вопросы» --}}
    <section class="section-bottom-95">
      <div class="container offset-top-65 offset-md-top-90">
        <h3>Accordions</h3>
        <div class="offset-top-25">
          <!-- Accordion-->
          <div class="panel-group text-left" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-custom panel-default">
              <div class="panel-heading" id="headingOne" role="tab">
                <p class="panel-title"><a class="d-block collapsed" role="button" data-toggle="collapse"
                                          data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                                          aria-controls="collapseOne">How can I change something in my order?</a></p>
              </div>
              <div class="panel-collapse collapse" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">If you need to change something in your order, please contact us immediately. We
                  usually process orders within 2-4 hours, and once we have processed your order, we will be unable to
                  make any changes.
                </div>
              </div>
            </div>
            <div class="panel panel-custom panel-default">
              <div class="panel-heading" id="headingTwo" role="tab">
                <p class="panel-title"><a class="d-block collapsed" role="button" data-toggle="collapse"
                                          data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                          aria-controls="collapseTwo">How can I pay for my order?</a></p>
              </div>
              <div class="panel-collapse collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">We accept Visa, MasterCard, and American Express credit and debit cards for your
                  convenience.
                </div>
              </div>
            </div>
            <div class="panel panel-custom panel-default">
              <div class="panel-heading" id="headingThree" role="tab">
                <p class="panel-title"><a class="d-block collapsed" role="button" data-toggle="collapse"
                                          data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                          aria-controls="collapseThree">How long will my order take to be delivered?</a>
                </p>
              </div>
              <div class="panel-collapse collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">Delivery times will depend on your location. Once payment is confirmed your
                  order will be packaged. Delivery can be expected within 10 business days.
                </div>
              </div>
            </div>
            <div class="panel panel-custom panel-default">
              <div class="panel-heading" id="headingFour" role="tab">
                <p class="panel-title"><a class="d-block collapsed" role="button" data-toggle="collapse"
                                          data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                          aria-controls="collapseFour">Can I return an item?</a></p>
              </div>
              <div class="panel-collapse collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">Please contact our administrators for more information on returning products
                  purchased on our website.
                </div>
              </div>
            </div>
            <div class="panel panel-custom panel-default">
              <div class="panel-heading" id="headingFive" role="tab">
                <p class="panel-title"><a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion"
                                          href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Can I
                    track my order?</a></p>
              </div>
              <div class="panel-collapse collapse in" id="collapseFive" role="tabpanel" aria-labelledby="headingThree">
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

    {{-- Блок «Отзывы» --}}
    <section class="section-95 main__feedbacks">
      <div class="container">
        <h2>Testimonials</h2>
        <div class="row justify-content-sm-center offset-top-34">
          <div class="col-md-10 col-lg-4">
            <p class="text-big font-weight-bold text-primary">Jina Green lost 30 pounds and 3 sizes</p>
            <p>I originally contacted Joanna because I was having trouble getting my eating habits under control, and
              was finally ready to admit that I couldn't do it on my own. After our initial consultation, I was
              convinced that if anyone could help, it was Joanna.</p><img
                class="img-responsive rounded-circle center-block offset-top-20 offset-md-top-30"
                src="images/users/user-jina-green-172x172.jpg" width="172" height="172" alt="">
            <div class="offset-top-13 offset-md-top-25">
              <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                             href="my-philosophy.html">Jina Green</a></p>
            </div>
            <div class="offset-top-0">
              <p class="text-gray">(actress)</p>
            </div>
          </div>
          <div class="col-md-10 col-lg-4 offset-top-45 offset-md-top-0">
            <p class="text-big font-weight-bold text-primary">Lola Jordon lost 20 pounds and 2 sizes</p>
            <p>Working with Joanna has allowed me to tune into how I eat, why I eat, and how it makes me feel. I'm more
              aware of times when I eat not because I'm hungry but because something else is bothering me. Not focusing
              on food has improved my relationships with others.</p><img
                class="img-responsive rounded-circle center-block offset-top-20 offset-md-top-30"
                src="images/users/user-lola-jordon-172x172.jpg" width="172" height="172" alt="">
            <div class="offset-top-13 offset-md-top-25">
              <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                             href="my-philosophy.html">Lola Jordon</a></p>
            </div>
            <div class="offset-top-0">
              <p class="text-gray">(artist)</p>
            </div>
          </div>
          <div class="col-md-10 col-lg-4 offset-top-45 offset-md-top-0">
            <p class="text-big font-weight-bold text-primary">Rita Jefferson lost 10 pounds and 1 size</p>
            <p>Joanna is unlike most nutritionists. She allows you to use foods that work with your lifestyle to address
              your concerns. I felt that I had a choice in what I ate and how I ate it rather than being on a strict
              diet. She was there with constant support.</p><img
                class="img-responsive rounded-circle center-block offset-top-20 offset-md-top-30"
                src="images/users/user-rita-jefferson-172x172.jpg" width="172" height="172" alt="">
            <div class="offset-top-13 offset-md-top-25">
              <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                             href="my-philosophy.html">Rita Jefferson</a></p>
            </div>
            <div class="offset-top-0">
              <p class="text-gray">(writer)</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Призыв к действию --}}
    <section class="section section-height-800 parallax-container context-dark"
             data-parallax-img="images/backgrounds/background-15-1920x900.jpg">
      <div class="parallax-content">
        <div class="bg-overlay-gray-darken">
          <div class="container section-95">
            <div class="jumbotron-custom jumbotron-custom-variant-3">
              <h2>3 months with a Health Coach</h2>
              <p class="text-big">Start working on your body today, and with the individual fitness program, already in
                90 days <br class="d-none d-xl-inline-block"> you will see a totally different girl in the mirror!</p>
              <div class="group-xs offset-top-20 offset-lg-top-40"><a class="btn btn-primary" href="/catalog">Перейти в
                  каталог</a><a class="btn btn-white-outline" href="contact-me.html">Заказать обратный звонок</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


@endsection


