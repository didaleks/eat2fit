@extends('layouts.app')

@section('content')

  <h1>Корзина</h1>
  <!-- Page Content-->
  <main class="page-content cart {{isset($cart) && count($cart->items)?: 'empty'}}">
    <section class="section-95">
      <div class="container">
        <div class="cart-content">
          @if($cart && count($cart->items))
            <div class="table-responsive offset-top-40">
              <table class="table table-custom-md table-default table-bordered-custom text-left table-cart">
                <tbody>
                <tr class="bg-accent">
                  <th class="inset-xl-left-50 text-white">Название</th>
                  <th class="text-white">Цена</th>
                  <th class="text-white">Количество</th>
                  <th class="text-white">Итого</th>
                </tr>

                @foreach($cart->items as $diet)
                  @php($item = $diet['item'])
                  <tr data-id="{{$item->id}}">
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

            {{--<div class="row justify-content-sm-end offset-top-30 offset-lg-top-50">--}}
            {{--<div class="col-md-6 col-lg-5 col-xl-4">--}}
            {{--<div class="table-responsive">--}}
            {{--<table class="table table-custom-md table-default table-bordered-custom text-left">--}}
            {{--<tbody>--}}
            {{--<tr class="bg-gray-lighter">--}}
            {{--<th class="font-weight-bold text-gray">Итоги заказа</th>--}}
            {{--<th></th>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>Количество дней:</td>--}}
            {{--<td class="text-gray">{{$cart->getTotalQt()}}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>Итого к оплате:</td>--}}
            {{--<td class="font-weight-bold text-gray">{{$cart->getTotalPrice()}}</td>--}}
            {{--</tr>--}}
            {{--</tbody>--}}
            {{--</table>--}}
            {{--</div>--}}
            {{--<a class="btn btn-block btn-primary offset-top-13" href="shop-checkout.html">Proceed to--}}
            {{--checkout</a>--}}
            {{--</div>--}}
            {{--</div>--}}

            <div class="col-md-8 col-lg-8 offset-top-40 offset-md-top-0">
              <form class="text-left offset-top-20" method="post" action="{{ route('feedback.store') }}">
                @csrf
                <input type="hidden" name="type" value="cart">
                {{--todo убрать дефолтные значения из полей --}}
                <div class="row justify-content-sm-left">
                  <div class="col-sm-12 inset-sm-right-15 inset-sm-left-15">
                    <div class="form-wrap">
                      <label class="form-label-outside required"
                             for="contact-us-first-name">ФИО:</label>
                      <input class="form-input" id="contact-us-first-name" type="text" name="name"
                             value="mail@demolink.org" data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-sm-6 offset-top-10 inset-sm-right-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-first-name">Телефон:</label>
                      <input class="form-input" id="contact-us-phone" type="text" name="phone"
                             placeholder="Телефон"
                             data-constraints="@Required" value="9999999999">
                    </div>
                  </div>
                  <div class="col-sm-6 offset-top-10 inset-sm-left-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-first-name">E-mail:</label>
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
                      <label class="form-label-outside required" for="contact-us-first-name">Улица:</label>
                      <input class="form-input" id="contact-us-" type="text" name=""
                             placeholder=""
                             data-constraints="@Required" value="">
                    </div>
                  </div>
                  <div class="col-sm-4 offset-top-10 inset-sm-left-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-first-name">Дом:</label>
                      <input placeholder="" class="form-input" id="contact-us-email"
                             type="text" name="email"
                             data-constraints="@Required"
                             value="mail@demolink.org">

                    </div>
                  </div>
                  <div class="col-sm-4 offset-top-10 inset-sm-left-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-first-name">Квартира:</label>
                      <input placeholder="" class="form-input" id="contact-us-email"
                             type="text" name="email"
                             data-constraints="@Required"
                             value="33">

                    </div>
                  </div>
                  <div class="col-sm-12 offset-top-10 text-xl-left">
                    <label class="form-label-outside">Дата доставки</label>
                  </div>
                  <div class="col-sm-6 offset-top-10 text-xl-left datepicker-wrapper">
                    <input class="form-input" id="datepicker" width="300"/>
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
                             type="number"
                             min="09"
                             max="22"
                             data-check="^\d+$"
                             value="09">
                      <input class="form-input" id="contact-us-time"
                             type="number"
                             min="00"
                             max="60"
                             step="10"
                             data-check="^\d+$"
                             value="00">
                    </div>
                  </div>
                  <div class="col-sm-12 offset-top-10 text-center text-xl-left">
                    <div class="form-wrap">
                      <label class="form-label-outside" for="contact-us-message">Комментарии к
                        заказу:</label>
                      <textarea class="form-input" id="contact-us-message" name="message">mail@demolink.org</textarea>
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
                    <button class="btn btn-primary" type="submit">Отправить</button>
                  </div>
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


