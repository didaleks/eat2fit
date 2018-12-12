@extends('layouts.app')

@section('content')

  <section class="section section-height-800 parallax-container context-dark bg-gray-darkest text-xl-left"
           data-parallax-img="images/backgrounds/background-01-1920x900.jpg">
    <div class="parallax-content">
      <div class="bg-overlay-black">
        <div class="container section-30 section-md-95 section-lg-top-120 section-lg-bottom-150">
          <div class="d-none d-lg-block">
            <h1>Health Coaching Philosophy</h1>
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

  <main class="page-content">

    {{-- Блок «Как отбираем продукты» --}}
    <section class="section-95 section-md-bottom-0">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10">
            <h2>Как отбираем продукты</h2>
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
                                              src="images/pages/health-coaching-philosophy-01-470x540.jpg" width="470"
                                              height="540" alt=""></div>
        </div>
      </div>
    </section>

    {{-- Блок «Как готовим и храним продукты» --}}
    <section class="section-95 about__how-cook">
      <div class="container">
        <h2>Блок «Как готовим и храним продукты»</h2>
        <div class="row justify-content-sm-center offset-top-40">
          <div class="col-md-10 col-lg-6"><img class="img-responsive center-block"
                                               src="images/pages/health-coaching-philosophy-02-570x350.jpg" width="570"
                                               height="350" alt=""></div>
          <div class="col-md-10 col-lg-6 text-left offset-top-40 offset-md-top-0">
            <p class="text-big font-weight-bold text-primary">Why health coaching</p>
            <p>I am thrilled you are here because it means that like me, you are a health conscious individual. Whether
              you already consider yourself healthy or you are just awakening to the potential of a healthy lifestyle,
              this site is for you.</p>
            <!-- List Marked-->
            <ul class="list list-marked font-weight-bold text-primary offset-top-13">
              <li>You struggle with emotional or binge eating</li>
              <li>You have unrestful sleep and wake up tired</li>
              <li>You feel stressed and anxious</li>
              <li>You want to learn about health and wellness</li>
              <li>You realise that health should be one of your top priorities</li>
            </ul>
            <a class="btn btn-primary offset-top-25 offset-md-top-40" href="group-coaching.html">Read more</a>
          </div>
        </div>
      </div>
    </section>

    {{-- Блок "Лицензии" --}}
    <section class="section-95">
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
            <div class="owl-carousel" data-autoplay="true" data-items="1" data-stage-padding="15" data-loop="true"
                 data-margin="30" data-mouse-drag="false" data-dots-custom=".owl-custom-pagination" data-nav="false">
              <div class="owl-item">
                <p class="text-big font-weight-bold text-primary">Rita Jefferson lost 10 pounds and 1 size</p>
                <p>Joanna is unlike most nutritionists. She allows you to use foods that work with your lifestyle to
                  address your concerns. I felt that I had a choice in what I ate and how I ate it rather than being on
                  a strict diet. She was there with constant support, offering recipe recommendations or checking to
                  make sure I was staying on track.</p>
                <!-- Blockquote-->
                <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                  <p class="text-gray">
                    <q>Working with her changed the way I look at food - I not only feel better and healthier, but I
                      also enjoy going to the grocery store and putting meals together using ingredients I previously
                      overlooked. I completed the program having fixed all of my original concerns, and I enjoyed every
                      session. </q>
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
              <div class="owl-item">
                <p class="text-big font-weight-bold text-primary">Lola Jordon lost 20 pounds and 2 sizes</p>
                <p>Working with Joanna has allowed me to tune into how I eat, why I eat, and how it makes me feel. I'm
                  more aware of times when I eat not because I'm hungry but because something else is bothering me or
                  causing stress. Not focusing on food to make me feel better has improved my relationships with others
                  and with myself.</p>
                <!-- Blockquote-->
                <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                  <p class="text-gray">
                    <q>She’s helped me better manage stress. I've also noticed more balance in my life, including making
                      room for creativity and relaxation; time with family and friends; better time management; and
                      things I never thought I'd do like running my first 5k race! I feel more confident that I can set
                      goals.</q>
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
              <div class="owl-item">
                <p class="text-big font-weight-bold text-primary">Jina Green lost 30 pounds and 3 sizes</p>
                <p>I originally contacted Joanna because I was having trouble getting my eating habits under control,
                  and was finally ready to admit that I couldn't do it on my own. After our initial consultation, I was
                  convinced that if anyone could help, it was Joanna; and this turned out to be true. In six months, I
                  lost approximately 30 pounds and 3 sizes.</p>
                <!-- Blockquote-->
                <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                  <p class="text-gray">
                    <q>More importantly, I am making far more healthy food choices, and my self-confidence has never
                      been better. But working with Joanna is not just about losing weight. Her personalized approach
                      also addresses improving fitness levels, diversifying one's diet and managing stress.</q>
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
          </div>
        </div>
        <div class="row justify-content-sm-center offset-top-25">
          <div class="col-md-6 col-xl-4">
            <div class="section-hidden">
              <div class="text-both-lines">
                <div class="owl-custom-pagination">
                  <div class="owl-dot" data-owl-item="0"></div>
                  <div class="owl-dot" data-owl-item="1"></div>
                  <div class="owl-dot" data-owl-item="2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Задать вопрос диетологу --}}
    <section class="section-bottom-95 about__paralax-question">
      <div class="row justify-content-sm-center offset-top-50">
        <div class="col-md-10">
          <div class="parallax-container context-dark" data-parallax-img="images/backgrounds/background-02-970x800.jpg">
            <div class="material-parallax parallax"><img src="images/backgrounds/background-02-970x800.jpg" alt=""
                                                         style="display: block; transform: translate3d(-50%, 230px, 0px);">
            </div>
            <div class="parallax-content">
              <div class="bg-overlay-black section-45">
                <h1>Subscribe to my newsletter</h1>
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
        <h2>News &amp; articles</h2>
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
            <h2>Are you ready to harness the power of vibrant health to fuel <br class="d-none d-xl-inline-block"> your
              extraordinary life?</h2>
            <p>I'm a health and lifestyle coach to smart (and busy!) women who want to look and feel their best, but who
              don't have a ton of time to exercise, shop for speciality foods, or cook tons of meals every week. I
              stumbled upon this path by accident, and it changed my life. Learn what good health can do and how
              extraordinary your life can be!</p>
          </div>
        </div>
        <div class="owl-carousel owl-carousel-centered offset-top-50"
             data-autoplay="true" data-items="2" data-sm-items="5"
             data-xl-items="10" data-stage-padding="5" data-loop="true"
             data-margin="30" data-mouse-drag="false"
             data-dots="true">
          <a href="#">
            <img class="img-responsive img-semi-transparent-inverse center-block"
                 src="images/partners/partner-01-96x21.jpg" width="96" height="21"
                 alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="images/partners/partner-02-101x20.jpg" width="101" height="20" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="images/partners/partner-03-133x29.jpg" width="133" height="29" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="images/partners/partner-04-148x19.jpg" width="148" height="19" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="images/partners/partner-05-133x35.jpg" width="133" height="35" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="images/partners/partner-06-130x34.jpg" width="130" height="34" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="images/partners/partner-07-119x26.jpg" width="119" height="26" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="images/partners/partner-08-127x31.jpg" width="127" height="31" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="images/partners/partner-09-154x20.jpg" width="154" height="20" alt=""></a><a href="#"><img
                class="img-responsive img-semi-transparent-inverse center-block"
                src="images/partners/partner-10-140x41.jpg" width="140" height="41" alt=""></a></div>
      </div>
    </section>

  </main>


@endsection


