@extends('layouts.app')

@section('content')
  <!-- Parallax-->
  <section class="section section-height-800 parallax-container context-dark bg-gray-darkest text-xl-left" data-parallax-img="images/backgrounds/background-01-1920x900.jpg">
    <div class="parallax-content">
      <div class="bg-overlay-black">
        <div class="container section-30 section-md-95 section-lg-top-120 section-lg-bottom-150">
          <div class="d-none d-lg-block">
            <h1>Shopping Cart</h1>
          </div>
          <!-- List Inline-->
          <ul class="list-inline list-inline-dashed list-white text-big p offset-md-top-13">
            <li><a href="index.html">Home</a></li>
            <li><a href="shop-category.html">Shop</a></li>
            <li>Shopping Cart
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Page Content-->
  <main class="page-content cart {{(isset($cart) && count($cart->items))? '': 'empty'}}">
    <section class="section-95">
      <div class="container">
        <div class="cart-content">
          @if($cart && count($cart->items))
            <h2>Оформить заказ</h2>
            <div class="table-responsive offset-top-40">
              <table class="table table-custom-md table-default table-bordered-custom text-left table-cart">
                <tbody>
                <tr class="bg-accent">
                  <th class="inset-xl-left-50 text-white">Название</th>
                  <th class="text-white">Цена</th>
                  <th class="text-white">Количество дней</th>
                  <th class="text-white">Итого</th>
                </tr>

                @foreach($cart->items as $diet)
                  @php($item = $diet['item'])
                  <tr data-id="{{$item->id}}" class="table-cart__item">
                    <td>
                      <div class="unit align-items-center flex-row unit-spacing-xs">
                        <div class="unit-left">
                          <span class="icon icon-xs fa fa-trash text-hover-primary"></span>
                        </div>
                        <div class="unit-body">
                          <p><a class="link-decoration-none"
                                href="{{$item->url}}">{{$item->name}}</a></p>
                        </div>
                      </div>
                    </td>
                    <td class="text-gray cart__item_price">{{$item->price}}</td>
                    <td>
                      <div class="form-wrap form-wrap-border-none">
                        <input class="form-input input-sm cart__item_qty" type="number"
                               data-zeros="true"
                               value="{{$diet['qty']}}" min="1" max="60">
                      </div>
                    </td>
                    <td class="text-gray cart__item_summ">{{$item->price * $diet['qty']}}</td>
                  </tr>
                @endforeach

                </tbody>
              </table>
            </div>


            <div class="col-md-12 col-lg-8 offset-top-40 offset-md-top-0">
              <form class="text-left offset-top-20 order-form" method="post" action="{{ route('order.store') }}">
                @csrf
                {{--todo убрать дефолтные значения из полей --}}
                <div class="row justify-content-sm-left">
                  <div class="col-sm-12 inset-sm-right-15 inset-sm-left-15">
                    <div class="form-wrap">
                      <label class="form-label-outside required"
                             for="contact-us-name">ФИО:</label>
                      <input class="form-input" id="contact-us-name" type="text" name="name"
                             value="NAMENAME" data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-sm-6 offset-top-10 inset-sm-right-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-phone">Телефон:</label>
                      <input class="form-input" id="contact-us-phone" type="text" name="phone"
                             placeholder="Телефон"
                             data-constraints="@Required" value="9999999999">
                    </div>
                  </div>
                  <div class="col-sm-6 offset-top-10 inset-sm-left-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-email">E-mail:</label>
                      <input placeholder="E-mail" class="form-input" id="contact-us-email"
                             type="email" name="email"
                             data-constraints="@Required"
                             value="mail@demolink.org">

                    </div>
                  </div>
                  <div class="col-sm-12 offset-top-10 text-xl-left form-section-heading">Доставка
                    <label class="d-block form-label-outside">город Санкт-Петербург</label>
                  </div>
                  <div class="col-sm-4 offset-top-10 inset-sm-right-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-street">Улица:</label>
                      <input class="form-input" id="contact-us-street" type="text" name="street"
                             value="пр.Просвещения"
                             placeholder=""
                             data-constraints="@Required" value="">
                    </div>
                  </div>
                  <div class="col-sm-4 offset-top-10 inset-sm-left-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-home">Дом:</label>
                      <input placeholder="" class="form-input" id="contact-us-home"
                             type="text" name="home"
                             data-constraints="@Required"
                             value="64 к.5">

                    </div>
                  </div>
                  <div class="col-sm-4 offset-top-10 inset-sm-left-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-flat">Квартира:</label>
                      <input placeholder="" class="form-input" id="contact-us-flat"
                             type="text" name="flat"
                             data-constraints="@Required"
                             value="33">

                    </div>
                  </div>
                  <div class="col-sm-12 offset-top-10 text-xl-left">
                    <label class="form-label-outside">Дата доставки</label>
                  </div>
                  <div class="col-sm-6 offset-top-10 text-xl-left datepicker-wrapper">
                    <input required value="31 декабря" class="form-input" id="datepicker" width="300" name="shipping_date"/>
                    <script>
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap4',
                            locale: 'ru-ru',
                            format: 'dd mmm yyyy'
                        });
                    </script>
                  </div>
                  <div class="col-sm-6 offset-top-10 text-xl-left form-time">
                    <div class="form-wrap">
                      <label class="form-label-outside" for="contact-us-first-name">Время:</label>
                      <input class="form-input" id="contact-us-email"
                             name="shipping_hour"
                             type="number"
                             readonly
                             min="09"
                             max="22"
                             data-check="^\d+$"
                             value="09">
                      <input class="form-input" id="contact-us-time"
                             name="shipping_minutes"
                             type="number"
                             readonly
                             min="00"
                             max="60"
                             step="10"
                             data-check="^\d+$"
                             value="00">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 ml-3 box-xxs box-pay text-left offset-top-20 active">
                    <div class="form-wrap">
                      <label class="radio-inline font-weight-bold text-gray">
                        <input name="payment_type-radio" value="personally" type="radio" checked>При получении
                      </label>
                      <p class="offset-top-20">Оплата картой или наличными при получении</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 ml-3 ml-md-0 d-inline-block box-xxs box-pay text-left offset-sm-top-20">
                    <div class="form-wrap">
                      <label class="radio-inline font-weight-bold text-gray">
                        <input name="payment_type-radio" value="online" type="radio">Онлайн-платеж
                      </label>
                      <p class="offset-top-20">VISA/MasterCard/Мир</p>
                    </div>
                  </div>
                  <div class="col-sm-3 d-inline-block offset-top-20 ml-3 p-0">
                    <a href="#">Подробности об оплате</a>
                    <a href="#">Подробности о доставке</a>
                  </div>
                  <div class="col-sm-12 offset-top-10 text-center text-xl-left">
                    <div class="form-wrap">
                      <label class="form-label-outside" for="contact-us-message">Комментарии к
                        заказу:</label>
                      <textarea class="form-input" id="contact-us-message" name="message">mail@demolink.org</textarea>
                    </div>
                  </div>
                  <div class="col-sm-4 offset-top-10 inset-sm-right-7">
                    <div class="form-wrap">
                      <label class="form-label-outside" for="contact-us-first-name">Есть купон?</label>
                      <input class="form-input form-control-has-validation form-control-last-child" id="contact-us-"
                             type="text" name="coupon" placeholder="" value=""><span class="form-validation"></span>
                    </div>
                  </div>
                  <div class="col-md-4"></div>
                  <div class="col-md-4 col-lg-5 col-xl-4 offset-top-40 justify-content-sm-end">
                    <div class="table-responsive total-cart">
                      <table class="table table-custom-md table-default table-bordered-custom text-left">
                        <tbody>
                        <tr class="bg-gray-lighter">
                          <th class="font-weight-bold text-gray">Итоги заказа</th>
                          <th></th>
                        </tr>
                        <tr>
                          <td>Стоимость доставки:</td>
                          <td class="font-weight-bold text-gray">{{$cart->shippingPrice}}</td>
                        </tr>
                        <tr>
                          <td>Стоимость товаров:</td>
                          <td class="font-weight-bold text-gray total-cart__items-summ">{{$cart->getTotalPrice()}}</td>
                        </tr>
                        <tr>
                          <td>Итого к оплате:</td>
                          <td class="font-weight-bold text-gray total-cart__full-summ">{{$cart->getFullPrice()}}</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row d-flex justify-content-between inset-sm-right-15 inset-sm-left-15">
                  <div class="col-sm-6 offset-top-20">
                    <div class="form-wrap">
                      <label class="checkbox-inline text-primary">
                        <input name="privacy-policy" value="0" type="hidden">
                        <input name="privacy-policy" value="1" type="checkbox" checked>Я
                        согласен с <a href="/privacy-policy">условиями политики
                          конфиденциальности</a>
                      </label>
                    </div>
                  </div>
                  <div class="text-center text-lg-right offset-top-10">
                    <button class="btn btn-primary" type="submit">Подтвердить заказ</button>
                  </div>
                </div>
                <div class="col-md-12 p-0 d-flex offset-top-10">
                  <p>Поля, отмеченные символом <label class="form-label-outside required"></label>, обязательны для
                    заполнения</p>
                </div>
              </form>
            </div>
          @endif
        </div>
        @include('shared.cart_message')
      </div>
    </section>
  </main>

@endsection


