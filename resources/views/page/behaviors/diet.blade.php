@extends('layouts.app')

@section('content')

  <!-- Parallax-->
  <section class="section diet section-height-800 parallax-container context-dark bg-gray-darkest text-xl-left"
           data-parallax-img="/{{image($model->image)->getResized(1300)}}">
    <div class="parallax-content">
      <div class="bg-overlay-black">
        <div class="container section-30 section-md-95 section-lg-top-120 section-lg-bottom-150">
          <!-- Breadcrumbs -->
          <ul class="list-inline list-inline-dashed list-white p offset-md-top-13">
            <li><a href="/">Главная</a></li>
            <li><a href="{{$catalogPage->url}}">{{$catalogPage->name}}</a></li>
            <li>{{$model->name}}</li>
          </ul>
          <div class="d-none d-lg-block offset-top-20">
            <h1>{{$model->name}}</h1>
          </div>
          <div class="diet__parallax-description">{!! $model->content !!}</div>

          <p class="offset-top-40">1 день питания - от <span class="diet__parallax-price-number">{{$model->price}} &#x20bd;</span>
          </p>

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
    <section class="section-top-95 recommend-section">
      <div class="container">
        <h2>Программа предназначена:</h2>
        <div class="row d-flex offset-top-34">
          <div class="d-flex justify-content-between col-md-10 col-lg-4">
            <div class="col-2 p-0 text-big-80 font-weight-bold text-primary recommend-section__number">1</div>
            <div class="col-9 p-0 ml-auto recommend-section__message d-flex align-items-center">Для тех, кто соблюдает пост</div>
          </div>
          <div class="d-flex justify-content-between col-md-10 col-lg-4 offset-top-45 offset-md-top-0">
            <div class="col-2 p-0 text-big-80 font-weight-bold text-primary recommend-section__number">2</div>
            <div class="col-9 p-0 ml-auto recommend-section__message d-flex align-items-center">Для тех, кто питается продуктами исключительно
              растительного происхождения
            </div>
          </div>
          <div class="d-flex justify-content-between col-md-10 col-lg-4 offset-top-45 offset-md-top-0">
            <div class="col-2 p-0 text-big-80 font-weight-bold text-primary recommend-section__number">3</div>
            <div class="col-9 p-0 ml-auto recommend-section__message d-flex align-items-center">Кто совсем не имеет навыков приготовления
              специализированной еды
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-45 feature">
      <div class="container">
        <h2>Особенность программы</h2>
        <div class="row no-gutters justify-content-sm-center offset-top-40 shadow-drop-sm">
          <div class="col-md-6 col-lg-4 feature__item first">
            <!-- Box-->
            <div class="box-xs inset-xl-left-35 inset-xl-right-35">
              <span class="icon icon-target"></span>
              <p class="text-big font-weight-bold offset-top-20 title">
                Цель программы</p>
              <p>Предлагаем вашему вниманию специальное постное меню, которое обеспечит сбалансированное и разнообразное
                питание во время поста.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 feature__item second">
            <!-- Box-->
            <div class="box-xs inset-xl-left-35 inset-xl-right-35">
              <span class="icon icon-bowl"></span>
              <p class="text-big font-weight-bold offset-top-20 title">Индивидуальный подход</p>
              <p>Индивидуальные рекомендации для Вас. Мы подберем оптимальную программу. Вас ждет разнообразие вкусов и
                прекрасное самочувствие!</p>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 feature__item third">
            <!-- Box-->
            <div class="box-xs inset-xl-left-35 inset-xl-right-35">
              <span class="icon icon-person"></span>
              <p class="text-big font-weight-bold offset-top-20 title">Индивидуальный подход</p>
              <p>Индивидуальные рекомендации для Вас. Мы подберем оптимальную программу. Вас ждет разнообразие вкусов и
                прекрасное самочувствие!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-45 menu">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10 col-xl-6">
            <h3 class="offset-top-25">Меню программы</h3>
          </div>
        </div>
        <div class="row justify-content-sm-center offset-top-20">
          <div class="col-md-10 col-xl-6">
            <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
              <ul class="nav nav-link">
                @for ($weekNum = 1; $weekNum <= $weeksCount; $weekNum++)
                  <li class="{{($weekNum == 1)? 'active': '' }}">
                    <a href="#tabs-1-{{$weekNum}}"
                       class="{{($weekNum == 1)? 'active': '' }}"
                       data-toggle="tab">{{$weekNum}} неделя</a>
                  </li>
                @endfor
              </ul>
            </div>
          </div>
        </div>
        <div class="row col-12 m-0 p-0">
            <div class="col-12 tab-content text-left">
              @for ($weekNum = 1; $weekNum <= $weeksCount; $weekNum++)

                @php
                  $j = $weekNum + 1;
                  $lastDayNum = $weekNum * 7;
                  $firstDayNum = $lastDayNum - 6;
                @endphp

                <div class="tab-pane fade {{($weekNum==1)?'show active':''}}" id="tabs-1-{{$weekNum}}">
                  <div class="container p-0">
                    <div class="row offset-top-13">
                        <div class="col-12 tabs-custom tabs-vertical tabs-corporate" id="tabs-{{$j}}">
                          {{-- Табы дней --}}
                          <ul class="nav nav-link d-flex col-md-1 justify-content-sm-between">
                            @foreach($model->days->whereIn('number', range($firstDayNum,$lastDayNum)) as $day)
                              <li class="{{($day->dayWeekNum()==1)?'active':''}} pt-4">
                                <a href="#tabs-{{$j}}-{{$day->number}}"
                                   data-toggle="tab"
                                   class="{{($day->dayWeekNum()==1)?'active':''}}">
                                  {{$day->dayWeekNum()}} день
                                </a>
                              </li>
                            @endforeach
                          </ul>
                          <div class="tab-content text-left offset-top-30">
                            @foreach($model->days->whereIn('number', range($firstDayNum,$lastDayNum)) as $day)
                              <div class="tab-pane fade {{($day->dayWeekNum()==1)?'show active':''}}"
                                   id="tabs-{{$j}}-{{$day->number}}">
                                @foreach($day->eatings->sortBy('eating_type.sort') as $eating)
                                  @if(!$eating->eating_type->trashed())
                                    <div class="menu_row col-sm-12 col-lg-12 d-lg-flex flex-sm-column flex-lg-row justify-content-lg-start justify-content-sm-center offset-top-10">
                                      <div class="col-lg-3 col-sm-12">
                                        <big class="font-weight-bold">{{$eating->name}}</big>
                                        <ul>
                                          @foreach($eating->dishes->sortBy('pivot.sort') as $dish)
                                            <li class="menu_row__dish-name"><span>{{$dish->name}}</span></li>
                                          @endforeach
                                        </ul>
                                      </div>
                                      <div class="col-lg-9 col-sm-12 d-flex justify-content-sm-start">
                                        @foreach($eating->dishes->sortBy('pivot.sort') as $dish)
                                          @if(isset($dish->fields['image']))
                                            @break($loop->iteration == 4)
                                            <div class="col-sm-4">
                                              <img class="img-responsive center-block"
                                                   src="{{ asset(image($dish->fields['image'])->getResized(200,200)) }}"
                                                   width="193" height="125" alt="">
                                            </div>
                                          @endif
                                        @endforeach
                                      </div>
                                    </div>
                                  @endif
                                @endforeach
                              </div>
                            @endforeach
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              @endfor
            </div>
        </div>
      </div>
    </section>
    <section class="section-45 extras">
      <div class="container">
        @if(!empty($extras))
        <div class="row justify-content-sm-center">
          <div class="col-md-10 col-xl-6">
            <h3 class="offset-top-25">Дополнительные товары</h3>
          </div>
        </div>
        <div class="row justify-content-sm-center">
          <div class="col-md-10 col-xl-6">
            <ul class="list-inline">
              @foreach($extras as $item)
                <li class="extras__item m-3"><span>{{$item->name}}</span></li>
              @endforeach
            </ul>
          </div>
        </div>
        @endif
        <div class="row justify-content-sm-center">
          <div class="col-md-10 col-xl-6">
            <div class="group-xs offset-top-10 offset-lg-top-20 product-buttons {{ inCart($model->id)? 'added' : '' }}">
              <span class="btn btn-primary product-buttons__item product-buttons__cart-full pl-5 pr-5"
                    data-id="{{$model->id}}"
                    data-days-count="7">Заказать рацион</span>
              <span class="btn btn-white-gray-outline product-buttons__item product-buttons__cart-remove pl-5 pr-5"
                    data-id="{{$model->id}}">Убрать из корзины</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-45 advice">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10 col-xl-6">
            <h3 class="offset-top-25">Не можешь определиться с программой, закажи консультацию и диетолога</h3>
          </div>
        </div>
        <div class="row justify-content-sm-center">
          <div class="col-md-10 col-xl-6 offset-top-30">
            <button class="btn btn-primary consult__button">
              Записаться на консультацию
            </button>
          </div>
        </div>
      </div>
    </section>
  </main>

  @include('shared.modal_consult')


@endsection


