@extends('layouts.app')

@section('content')

  <!-- Swiper-->
  <div class="swiper-container swiper-slider swiper-slider-variant-1" data-autoplay="5000" data-min-height="400px"
       data-simulate-touch="false" data-slide-effect="fade">
    <div class="swiper-wrapper">
      @foreach($model->fields['slides'] as $slide)
        <div class="swiper-slide" data-slide-bg="{{ asset(image($slide['image'])->url) }}">
          <div class="swiper-slide-caption">
            <div class="container">
              <div class="row justify-content-sm-center justify-content-lg-start text-lg-left">
                <div class="col-md-10 col-lg-8 col-xl-5">
                  <div class="text-big-80 font-accent" data-caption-animate="fadeInDown" data-caption-delay="50"
                       data-caption-duration="700">{{ $slide['head'] }}
                  </div>
                  <p class="text-big font-weight-bold offset-top-13" data-caption-animate="fadeIn"
                     data-caption-delay="200" data-caption-duration="700">{{ $slide['text'] }}</p><a
                      class="btn btn-white-outline offset-top-20 offset-sm-top-13 offset-lg-top-30"
                      href="{{ $slide['link'] }}"
                      data-caption-animate="fadeInUp" data-caption-delay="50" data-caption-duration="700">Перейти</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
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
          <div class="col-md-8 col-lg-6 order-lg-1">
            <img class="img-responsive center-block" src="{{asset('images/main/fish-and-omega-3-fatty-acids.jpg')}}" width="570"
                 height="350"
                 alt=""></div>
          <div class="col-md-8 col-lg-6 offset-top-34 offset-md-top-0">
            <div class="inset-lg-left-50 inset-lg-right-50 inset-xl-left-50 inset-xl-right-50">
              <h2>EAT2FIT – Ваш личный диетолог и шеф — повар!</h2>
              <p class="offset-lg-top-35">Eat2Fit — полноценные сбалансированные программы питания с доставкой на дом, разработанный диетологами и шеф-поварами. Но это не просто здоровая еда, это продукт, меняющий жизнь!</p>
              <ul class="list list-marked font-weight-bold text-primary text-left">
                <li>самые свежие продукты премиального качества</li>
                <li>6 приемов пищи в день</li>
                <li>3 в 1 - правильное питание, удобный сервис, медицинское сопровождение</li>
                <li>10 дней - длительность курса каждой программы</li>
                <li>гарантированный результат</li>
                <li>более 30 вариантов меню</li>
                <li>диагностика состава тела, две консультации диетолога</li>
                <li>доставка с интервалом в 60 минут</li>
              </ul>
              <a class="btn btn-primary offset-top-34" href="/about">О компании</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Блок "Что мы предлагаем" --}}
    <section class="section-95 main__features">
      <div class="container">
        <h2>Что мы предлагаем</h2>
        <div class="row no-gutters justify-content-sm-center offset-top-40 shadow-drop-sm main__features__list">
          <div class="col-md-6 col-lg-4">
            <img class="img-responsive img-fullwidth img-fullheight center-block"
                 src="{{asset('images/main/features1.jpg')}}"
                 width="390"
                 height="289" alt="">
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Box-->
            <div class="box-xs inset-xl-left-35 inset-xl-right-35">
              <span class="icon fl-great-icon-set-ico fl-great-icon-set-pencil107 text-primary"></span>
              <p class="text-big font-weight-bold">
                <span class="link-decoration-none text-primary">
                  Инструмент достижения целей
                </span>
              </p>
              <p>Разнообразные и полезные блюда, дающие красоту и здоровье? Это возможно с Eat2Fit!<br/>
                Врачи-диетологи кафедры диетологии и гастроэнтерологии СЗГМУ им. Мечникова тщательно проработали каждую из питания Eat2Fit.
                Универсальные решения для любых целей: от безопасного снижения веса до организации спортивного питания.</p>
              <p class="text-big font-weight-bold offset-top-10">. . .</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <img class="img-responsive img-fullwidth img-fullheight center-block"
                 src="{{asset('images/main/features2.jpg')}}" width="390" height="289" alt="">
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Box-->
            <div class="box-xs inset-xl-left-35 inset-xl-right-35"><span
                  class="icon fl-great-icon-set-ico fl-great-icon-set-video172 text-primary"></span>
              <p class="text-big font-weight-bold"><span class="link-decoration-none text-primary">Разнообразие и удобство</span></p>
              <p>С Eat2Fit вы можете поставить перед собой самые амбициозные задачи и достигнуть намеченных целей.<br/>Похудеть или поддержать спортивную форму, сформировать здоровые привычки или улучшить здоровье — всего этого легко добиться вместе с личным диетологом и программами Eat2Fit.</p>
              <p class="text-big font-weight-bold offset-top-10">. . .</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <img class="img-responsive img-fullwidth img-fullheight center-block"
                 src="{{asset('images/main/features3.jpg')}}" width="390" height="289" alt="">
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Box-->
            <div class="box-xs inset-xl-left-35 inset-xl-right-35"><span
                  class="icon fl-great-icon-set-ico fl-great-icon-set-pencil107 text-primary"></span>
              <p class="text-big font-weight-bold"><span class="link-decoration-none text-primary">Красота и здоровье</span>
              </p>
              <p>Курс из диетических и полезных блюд, разработанных диетологом и приготовленных шеф-поваром.<br/>Это не просто здоровая и вкусная еда с доставкой на дом, это настоящий проводник по здоровой жизни!</p>
              <p class="text-big font-weight-bold offset-top-10">. . .</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <img class="img-responsive img-fullwidth img-fullheight center-block"
                 src="{{asset('images/main/features1.jpg')}}"
                 width="390"
                 height="289" alt="">
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Box-->
            <div class="box-xs inset-xl-left-35 inset-xl-right-35">
              <span class="icon fl-great-icon-set-ico fl-great-icon-set-pencil107 text-primary"></span>
              <p class="text-big font-weight-bold">
                <span class="link-decoration-none text-primary">Профессионализм и уверенность</span>
              </p>
              <p>Услуга Eat2Fit — это 100% контроль со стороны врача-диетолога и выбор подходящей программы питания после детального изучения особенностей организма клиента.<br/>Мы гарантируем результат при соблюдении наших рекомендаций, так как личный диетолог всегда следит за успехами клиента и при необходимости может оперативно скорректировать рацион.</p>
              <p class="text-big font-weight-bold offset-top-10">. . .</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <img class="img-responsive img-fullwidth img-fullheight center-block"
                 src="{{asset('images/main/features2.jpg')}}" width="390" height="289" alt="">
          </div>
        </div>
      </div>
    </section>

    {{-- Блок «Блок выберите план» --}}
    <section class="section-30">
      <h2 class="pb-4">Блок «Блок выберите план»</h2>
      <div class="row no-gutters justify-content-sm-center" style="font-size:0;">
        @foreach($model->fields['planes'] as $item)
          <div class="col-sm-10 col-md-8 col-lg-4
              offset-xs-top-30 offset-md-top-0
              section-relative bg-image
              bg-image-overlay bg-image-hover" style="background-image: url({{asset(image($item['image'])->getResized(600,600))}})">
            <!-- Box Offer-->
            <div class="box-offer box-offer-variant-2 context-dark">
              <div class="box-offer-caption">
                <span class="icon icon-lg fl-great-icon-set-ico fl-great-icon-set-tree108"></span>
                <h2 class="offset-top-10 offset-xs-top-20 offset-md-top-10 offset-xl-top-20">
                  {{ $item['head'] }}
                </h2>
                <p class="text-big
                font-weight-bold
                offset-top-5
                offset-xs-top-10 offset-md-top-5 offset-xl-top-10">{{ $item['text'] }}</p>
                <a class="btn btn-white-outline offset-top-5 offset-xs-top-13 offset-md-top-5 offset-xl-top-13"
                   href="{{$item['link']}}">Перейти</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </section>

    {{-- Блок «Обращение диетолога и шеф-повара» --}}
    <section class="section-45">
      <div class="container">
        <h2>Блок «Обращение диетолога и шеф-повара»</h2>
        <div class="row justify-content-sm-center offset-top-40">
          <div class="col-md-10 col-lg-8 col-xl-12 offset-top-40 offset-lg-top-0 text-left">
            <div class="owl-carousel" data-autoplay="true" data-items="1" data-stage-padding="15" data-loop="true" data-margin="30" data-mouse-drag="false" data-dots-custom=".owl-custom-pagination" data-nav="false">
              <div class="owl-item">
                <div class="row justify-content-sm-center">
                  <div class="col-sm-6"><img class="img-responsive center-block" src="{{asset('images/main/nazarenko.jpg')}}" width="269" height="278" alt=""></div>
                  <div class="col-sm-6 pt-5 pt-lg-0">
                    <p class="text-big font-weight-bold text-primary">Профессор кафедры гастроэнтерологии и диетологии СЗГМУ им. Мечникова, Д.М.Н.</p>

                    <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                      <p class="text-gray">
                        <q>Еда во многом определяет самочувствие человека. Рационы EAT2FIT помогают людям сохранять и улучшать здоровье, успевать больше, вести правильный образ жизни и всегда оставаться в форме. Все меню EAT2FIT разработано при участии врачей кафедры диетологии и гастроэнтерологии СЗГМУ им. Мечникова.</q>
                      </p>
                      <div class="offset-top-20">
                        <p class="font-weight-bold"><span class="link-decoration-none text-hover-primary text-gray">
                            Людмила Ивановна Назаренко</span></p>
                      </div>
                      <div class="offset-top-0">
                        <p class="text-gray">(Врач-диетолог)</p>
                      </div>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="owl-item">
                <div class="row justify-content-sm-center">
                  <div class="col-sm-6"><img class="img-responsive center-block" src="{{asset('images/main/kirill_muzychenko.jpg')}}" width="269" height="278" alt=""></div>
                  <div class="col-sm-6 pt-5 pt-lg-0">
                    <p class="text-big font-weight-bold text-primary">Профессор кафедры гастроэнтерологии и диетологии СЗГМУ им. Мечникова, Д.М.Н.</p>
                    <blockquote class="quote quote-classic text-left offset-top-20 offset-md-top-25">
                      <p class="text-gray">
                        <q>Опыт работы нашего шеф-повара Кирилла Музыченко (ресторан "Летний Дворец") дал возможность сделать кухню Eat2Fit изысканной, способной приятно удивить настоящего гурмана. Кирилл отвечает за качество, вкус и разнообразие нашего меню. Совместно с врачом-диетологом он проработал каждый рецепт и продумал технологию приготовления блюд. Так что, каждый день Вы получаете абсолютно сбалансированный и правильно приготовленный рацион.</q>
                      </p>
                      <div class="offset-top-20">
                        <p class="font-weight-bold">
                          <span class="link-decoration-none text-hover-primary text-gray">
                            Кирилл Музыченко
                          </span>
                        </p>
                      </div>
                      <div class="offset-top-0">
                        <p class="text-gray">(Шеф-повар)</p>
                      </div>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-sm-center offset-top-25">
          <div class="col-md-6 col-xl-4">
            <div class="section-hidden">
              <div class="text-both-lines">
                <div class="owl-custom-pagination">
                  <div class="owl-dot active" data-owl-item="0"></div>
                  <div class="owl-dot" data-owl-item="1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    {{-- Блок "Призыв к действию" --}}
    <section class="section section-height-800 parallax-container context-dark"
             data-parallax-img="{{asset('images/main/call_1.png')}}">
      <div class="parallax-content">
        <div class="bg-overlay-gray-darken">
          <div class="container section-95">
            <div class="jumbotron-custom jumbotron-custom-variant-3">
              <h2>Вы приняли решение правильно питаться?</h2>
              <p>Вы выбираете программу сбалансированного питания сами или с диетологом</p>
              <p>Шеф-повар готовит вкусный и правильный рацион по разработанному меню</p>
              <p>Курьер привозит сумку-холодильник к вам домой или в офис</p>
              <p><span class="text-uppercase text-big">ВЫ ПИТАЕТЕСЬ РАЗНООБРАЗНО И ПРАВИЛЬНО!</span><br/>А наш диетолог всегда к вашим услугам</p>
              <div class="group-xs">
                <a class="btn btn-primary offset-top-20" href="/catalog">Перейти в каталог</a>
                <button class="btn btn-white-outline offset-top-20" data-toggle="modal" data-target="#modalCallback">Заказать обратный звонок</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


@endsection


