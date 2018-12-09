@extends('layouts.app')

@section('content')

    <!-- Parallax-->
    <section class="section diet section-height-800 parallax-container context-dark bg-gray-darkest text-xl-left" data-parallax-img="/images/backgrounds/background-01-1920x900.jpg">
        <div class="parallax-content">
            <div class="bg-overlay-black">
                <div class="container section-30 section-md-95 section-lg-top-120 section-lg-bottom-150">
                    <!-- List Inline-->
                    <ul class="list-inline list-inline-dashed list-white p offset-md-top-13">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/catalog">Рационы</a></li>
                        <li>{{$model->name}}
                        </li>
                    </ul>
                    <div class="d-none d-lg-block offset-top-20">
                        <h1>{{$model->name}}</h1>
                    </div>
                    <div class="diet__parallax-description">{!! $model->content !!}</div>

                    <p class="offset-top-40">1 день питания - от <span class="diet__parallax-price-number">2900 &#x20bd;</span></p>

                    <div class="group-xs offset-top-10 offset-lg-top-20 product-buttons {{ inCart($model->id)? 'added' : '' }}">
                        <span class="btn btn-primary product-buttons__item product-buttons__cart-full"
                              data-id="{{$model->id}}"
                              data-days-count="7">Заказать рацион</span>
                        <span class="btn btn-white-outline product-buttons__item product-buttons__cart-test"
                              data-id="{{$model->id}}"
                              data-days-count="1">Пробный день</span>
                        <span class="btn btn-white-outline product-buttons__item product-buttons__cart-remove"
                              data-id="{{$model->id}}">Убрать из корзины</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Page Content-->
    <main class="page-content diet__content">
        <section class="section-95 recommend-section">
            <div class="container">
                <h2>Программа предназначена:</h2>
                <div class="row d-flex offset-top-34">
                    <div class="col-md-10 col-lg-4">
                        <div class="col-2 p-0 text-big-80 font-weight-bold text-primary">1</div>
                        <div class="col-9 p-0 ml-auto recommend-section__message">Для тех, кто соблюдает пост</div>
                    </div>
                    <div class="col-md-10 col-lg-4 offset-top-45 offset-md-top-0">
                        <div class="col-2 p-0 text-big-80 font-weight-bold text-primary">2</div>
                        <div class="col-9 p-0 ml-auto recommend-section__message">Для тех, кто питается продуктами исключительно растительного происхождения</div>
                    </div>
                    <div class="col-md-10 col-lg-4 offset-top-45 offset-md-top-0">
                        <div class="col-2 p-0 text-big-80 font-weight-bold text-primary">3</div>
                        <div class="col-9 p-0 ml-auto recommend-section__message">Кто совсем не имеет навыков приготовления специализированной еды</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-95">
            <div class="container">
                <h2>Latest news</h2>
                <div class="row no-gutters justify-content-sm-center offset-top-40 shadow-drop-sm">
                    <div class="col-md-6 col-lg-4">
                        <!-- Box-->
                        <div class="box-xs inset-xl-left-35 inset-xl-right-35"><span class="icon fl-great-icon-set-ico fl-great-icon-set-crosshair15 text-primary"></span>
                            <p class="text-big font-weight-bold"><a class="link-decoration-none" href="blog-post.html">Цель программы</a></p>
                            <p>Предлагаем вашему вниманию специальное постное меню, которое обеспечит сбалансированное и разнообразное питание во время поста.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4"><img class="img-responsive img-fullwidth img-fullheight center-block" src="/images/pages/events-03-390x289.jpg" width="390" height="289" alt=""></div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Box-->
                        <div class="box-xs inset-xl-left-35 inset-xl-right-35"><span class="icon material-icons-person  fl-great-icon-set-pencil107 text-primary"></span>
                            <p class="text-big font-weight-bold"><a class="link-decoration-none" href="blog-post.html">Индивидуальный подход</a></p>
                            <p>Индивидуальные рекомендации для Вас. Мы подберем оптимальную программу. Вас ждет разнообразие вкусов и прекрасное самочувствие!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-95">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-md-10 col-xl-6">
                        <h1>Tabs & Accordions</h1>
                        <p class="text-big offset-top-34">With modern and intuitive interface of tabs and accordions, you can control contents to be organised within a single frame.</p>
                        <h3 class="offset-top-25">Horizontal tabs</h3>
                    </div>
                </div>
                <div class="row justify-content-sm-center offset-top-20">
                    <div class="col-md-10 col-xl-6">
                        <!-- Bootstrap tabs-->
                        <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                            <!-- Nav tabs-->
                            <ul class="nav nav-link">
                                @for ($i = 1; $i < 7; $i++)
                                    <li class="{{($i == 1)? 'active': '' }}"><a href="#tabs-1-{{$i}}" data-toggle="tab">Tab #{{$i}}</a></li>
                                @endfor

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-sm-center offset-top-25">
                    <div class="col-md-10">
                        <div class="tab-content text-left">
                            @for ($weekNum = 1; $weekNum < 7; $weekNum++)
                                @php($j = $weekNum + 1)
                                <div class="tab-pane fade {{($weekNum==1)?'show active':''}}" id="tabs-1-{{$weekNum}}">
                                    <div class="container offset-top-65 offset-md-top-90">
                                        <h3>Vertical tabs</h3>
                                        <div class="row justify-content-sm-center offset-top-13">
                                            <div class="col-md-10">
                                                <div class="tabs-custom tabs-vertical tabs-corporate" id="tabs-{{$j}}">
                                                    <ul class="nav nav-link">
                                                        @for ($k = 1; $k <= 7; $k++)
                                                            <li class="{{($k==1)?'active':''}}"><a href="#tabs-{{$j}}-{{$k}}" data-toggle="tab">Tab {{$k}}</a></li>
                                                        @endfor
                                                    </ul>
                                                    <div class="tab-content text-left">
                                                        @for ($k = 1; $k <= 7; $k++)
                                                            <div class="tab-pane fade {{($k==1)?'show active':''}}" id="tabs-{{$j}}-{{$k}}">
                                                                <p>Неделя {{$weekNum}}, день недели {{$k}}</p>
                                                            </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Welcome!-->
        <section class="section-95">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-md-8 col-lg-6 order-lg-1"><img class="img-responsive center-block" src="/images/pages/home-01-570x350.jpg" width="570" height="350" alt=""></div>
                    <div class="col-md-8 col-lg-6 offset-top-34 offset-md-top-0">
                        <div class="inset-lg-left-50 inset-lg-right-50 inset-xl-left-50 inset-xl-right-50">
                            <h1>{{$model->name}}</h1>
                            <p class="offset-lg-top-35">I am a Certified Health Coach, focused on women's health, bringing you super-practical support to help you feel great, take care of your body, and actually enjoy the process. I don’t tell my clients what to do, I teach them what to do.</p>
                            <p class="text-big font-weight-bold text-gray offset-lg-top-40">A fresh & fun approach to your life <br class="d-none d-xl-inline-block"> health and happiness in your life.</p><a class="btn btn-primary offset-top-34" href="my-philosophy.html">More about me</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-95 bg-gray-lighter">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-md-10">
                        <h2>Are you ready to harness the power of vibrant health to fuel <br class="d-none d-xl-inline-block"> your extraordinary life?</h2>
                        <p>I'm a health and lifestyle coach to smart (and busy!) women who want to look and feel their best, but who don't have a ton of time to exercise, shop for speciality foods, or cook tons of meals every week. I stumbled upon this path by accident, and it changed my life. Learn what good health can do and how extraordinary your life can be!</p>
                    </div>
                </div>
                <div class="row justify-content-sm-center offset-top-45">
                    <div class="col-md-8 col-lg-4">
                        <!-- Box-->
                        <div class="box box-sm box-hover bg-default">
                            <div class="box-hover-inner"><span class="icon icon-lg fl-great-icon-set-ico fl-great-icon-set-coffee66 text-primary"></span>
                                <p class="text-big font-weight-bold text-primary">Nutrition Strategy</p>
                                <div class="box-hover-hidden">
                                    <p class="offset-top-13">Get a simple, doable tweak to your habits, that will make you a healthy, vibrant version of yourself.</p>
                                    <p class="text-big font-weight-bold offset-top-5 text-primary">. . .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-4 offset-top-30 offset-md-top-0">
                        <!-- Box-->
                        <div class="box box-sm box-hover bg-default">
                            <div class="box-hover-inner"><span class="icon icon-lg fl-great-icon-set-ico fl-great-icon-set-ball38 text-primary"></span>
                                <p class="text-big font-weight-bold text-primary">Exercise Program</p>
                                <div class="box-hover-hidden">
                                    <p class="offset-top-13">Get your individual exercise program that will meet your special needs considering your final goal.</p>
                                    <p class="text-big font-weight-bold offset-top-5 text-primary">. . .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-4 offset-top-30 offset-md-top-0">
                        <!-- Box-->
                        <div class="box box-sm box-hover bg-default">
                            <div class="box-hover-inner"><span class="icon icon-lg fl-great-icon-set-ico fl-great-icon-set-alarm49 text-primary"></span>
                                <p class="text-big font-weight-bold text-primary">Routine Program</p>
                                <div class="box-hover-hidden">
                                    <p class="offset-top-13">Our program is distinct in that it adopts a holistic approach to health coaching based on your schedule.</p>
                                    <p class="text-big font-weight-bold offset-top-5 text-primary">. . .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 3 months with a Health Coach-->
        <!-- Parallax-->
        <section class="section section-height-800 parallax-container context-dark" data-parallax-img="/images/backgrounds/background-15-1920x900.jpg">
            <div class="parallax-content">
                <div class="bg-overlay-gray-darken">
                    <div class="container section-95">
                        <!-- Jumbotron Custom-->
                        <div class="jumbotron-custom jumbotron-custom-variant-3">
                            <h1>3 months with a Health Coach</h1>
                            <p class="text-big">Start working on your body today, and with the individual fitness program, already in 90 days <br class="d-none d-xl-inline-block"> you will see a totally different girl in the mirror!</p>
                            <div class="group-xs offset-top-20 offset-lg-top-40"><a class="btn btn-primary" href="group-coaching.html">Read more</a><a class="btn btn-white-outline" href="contact-me.html">Book a program</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News & articles-->
        <section class="section-95">
            <div class="container">
                <h2>News & articles</h2>
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
                                    <li><a class="text-gray text-hover-primary" href="blog-post.html"><span class="text-middle inset-right-7">Street workout</span><span class="icon icon-sm material-design-ico material-design-camera59 text-middle text-gray"></span></a></li>
                                    <li>September, 12, 2018</li>
                                </ul>
                                <div class="post-box-xs-hidden">
                                    <p class="offset-top-13">Daily movement, in some form, will make you feel better each and every day. Your body craves moment. It was built to move. That means, we...</p>
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
                                    <li><a class="text-gray text-hover-primary" href="blog-post.html"><span class="text-middle inset-right-7">Seasonal diets</span><span class="icon icon-xs material-design-ico material-design-create3 text-middle text-gray"></span></a></li>
                                    <li>September, 12, 2018</li>
                                </ul>
                                <div class="post-box-xs-hidden">
                                    <p class="offset-top-13">Ever wondered why you crave certain foods? One reason is the change in seasons. Our bodies seek foods that balance out the elements of the...</p>
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
                                    <li><a class="text-gray text-hover-primary" href="blog-post.html"><span class="text-middle inset-right-7">How to eat</span><span class="icon icon-xs material-design-ico material-design-create3 text-middle text-gray"></span></a></li>
                                    <li>September, 12, 2018</li>
                                </ul>
                                <div class="post-box-xs-hidden">
                                    <p class="offset-top-13">We tend to be so conscious about WHAT to eat - fruits and vegetables, nuts, seeds, quality fats and proteins, sprouts, herbs etc. But HOW to...</p>
                                </div>
                                <p class="text-big font-weight-bold offset-top-5">. . .</p>
                            </div>
                        </article>
                    </div>
                </div><a class="btn btn-width-200 btn-primary offset-top-13" href="contact-me.html">Subscribe to my blog</a>
            </div>
        </section>
        <!-- Our Skills-->
        <section class="context-dark" style="background: #191919 url(/images/backgrounds/background-03-1920x620.jpg) center/cover no-repeat;">
            <div class="bg-overlay-green-leaf">
                <div class="container section-120 section-md-140">
                    <div class="row justify-content-sm-center">
                        <div class="col-md-8 col-lg-12">
                            <div class="row justify-content-sm-center">
                                <div class="col-sm-6 col-lg-3 col-xl-2">
                                    <div class="inset-xl-left-25 inset-xl-right-25 inset-lg-left-25 inset-lg-right-25"><span class="icon icon-xl fl-great-icon-set-ico fl-great-icon-set-diamond37"></span>
                                        <!-- CountTo-->
                                        <h1 class="counter offset-top-13">12</h1>
                                        <p class="text-big offset-top-10">Years<br class="d-none d-xl-inline-block"> of experience</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 col-xl-2 offset-top-65 offset-xs-top-0">
                                    <div class="inset-xl-left-25 inset-xl-right-25 inset-lg-left-25 inset-lg-right-25"><span class="icon icon-xl fl-great-icon-set-ico fl-great-icon-set-portfolio36"></span>
                                        <!-- CountTo-->
                                        <h1 class="counter offset-top-13">15</h1>
                                        <p class="text-big offset-top-10">Kinds<br class="d-none d-xl-inline-block"> of methodics</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 col-xl-2 offset-top-65 offset-md-top-0">
                                    <div class="inset-xl-left-25 inset-xl-right-25 inset-lg-left-25 inset-lg-right-25"><span class="icon icon-xl fl-great-icon-set-ico fl-great-icon-set-sportive64"></span>
                                        <!-- CountTo-->
                                        <h1 class="counter offset-top-13">7</h1>
                                        <p class="text-big offset-top-10">International certificates</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 col-xl-2 offset-top-65 offset-md-top-0">
                                    <div class="inset-xl-left-25 inset-xl-right-25 inset-lg-left-25 inset-lg-right-25"><span class="icon icon-xl fl-great-icon-set-ico fl-great-icon-set-like77"></span>
                                        <!-- CountTo-->
                                        <h1 class="counter offset-top-13">345</h1>
                                        <p class="text-big offset-top-10">Happy customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Success stories-->
        <section class="section-95 section-md-bottom-45">
            <div class="container">
                <h2>Success stories</h2>
                <div class="row justify-content-sm-center offset-top-40">
                    <div class="col-md-10 col-lg-8 col-xl-6">
                        <div class="row justify-content-sm-center">
                            <div class="col-sm-6"><img class="img-responsive center-block" src="/images/pages/praise-01-269x278.jpg" width="269" height="278" alt=""></div>
                            <div class="col-sm-6 offset-top-30 offset-xs-top-0"><img class="img-responsive center-block" src="/images/pages/praise-02-269x278.jpg" width="269" height="278" alt=""></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-6 offset-top-40 offset-lg-top-0 text-left">
                        <!-- Owl Carousel-->
                        <div class="owl-carousel" data-autoplay="true" data-items="1" data-stage-padding="15" data-loop="true" data-margin="30" data-mouse-drag="false" data-dots-custom=".owl-custom-pagination" data-nav="false">
                            <div class="owl-item">
                                <p class="text-big font-weight-bold text-primary">Rita Jefferson lost 10 pounds and 1 size</p>
                                <p>Joanna is unlike most nutritionists. She allows you to use foods that work with your lifestyle to address your concerns. I felt that I had a choice in what I ate and how I ate it rather than being on a strict diet. She was there with constant support, offering recipe recommendations or checking to make sure I was staying on track.</p>
                                <!-- Blockquote-->
                                <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                                    <p class="text-gray">
                                        <q>Working with her changed the way I look at food - I not only feel better and healthier, but I also enjoy going to the grocery store and putting meals together using ingredients I previously overlooked. I completed the program having fixed all of my original concerns, and I enjoyed every session. </q>
                                    </p>
                                    <div class="offset-top-20">
                                        <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="my-philosophy.html">Rita Jefferson</a></p>
                                    </div>
                                    <div class="offset-top-0">
                                        <p class="text-gray">(writer)</p>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="owl-item">
                                <p class="text-big font-weight-bold text-primary">Lola Jordon lost 20 pounds and 2 sizes</p>
                                <p>Working with Joanna has allowed me to tune into how I eat, why I eat, and how it makes me feel. I'm more aware of times when I eat not because I'm hungry but because something else is bothering me or causing stress. Not focusing on food to make me feel better has improved my relationships with others and with myself.</p>
                                <!-- Blockquote-->
                                <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                                    <p class="text-gray">
                                        <q>She’s helped me better manage stress. I've also noticed more balance in my life, including making room for creativity and relaxation; time with family and friends; better time management; and things I never thought I'd do like running my first 5k race! I feel more confident that I can set goals.</q>
                                    </p>
                                    <div class="offset-top-20">
                                        <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="my-philosophy.html">Lola Jordon</a></p>
                                    </div>
                                    <div class="offset-top-0">
                                        <p class="text-gray">(artist)</p>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="owl-item">
                                <p class="text-big font-weight-bold text-primary">Jina Green lost 30 pounds and 3 sizes</p>
                                <p>I originally contacted Joanna because I was having trouble getting my eating habits under control, and was finally ready to admit that I couldn't do it on my own. After our initial consultation, I was convinced that if anyone could help, it was Joanna; and this turned out to be true. In six months, I lost approximately 30 pounds and 3 sizes.</p>
                                <!-- Blockquote-->
                                <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                                    <p class="text-gray">
                                        <q>More importantly, I am making far more healthy food choices, and my self-confidence has never been better. But working with Joanna is not just about losing weight. Her personalized approach also addresses improving fitness levels, diversifying one's diet and managing stress.</q>
                                    </p>
                                    <div class="offset-top-20">
                                        <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="my-philosophy.html">Jina Green</a></p>
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
        <!-- Visit my shop-->
        <!-- Parallax-->
        <section class="section section-height-800 parallax-container" data-parallax-img="/images/backgrounds/background-07-1920x1019.jpg">
            <div class="parallax-content">
                <div class="container section-110">
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-10 col-md-8">
                            <!-- Box-->
                            <div class="box-sm bg-default">
                                <h1 class="text-primary">Visit my shop</h1>
                                <p class="text-big text-gray offset-top-13">You will find many interesting things that can strengthen your body</p><a class="btn btn-primary offset-top-13" href="shop-category.html">Click here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection


