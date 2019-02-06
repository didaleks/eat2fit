@extends('layouts.app')

@section('content')

  @include('blocks.parallax')

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
                  @include('shared.cart_table-row-item',['item'=>$item])
                @endforeach

                @foreach($cart->extras as $extra)
                  @php($item = $extra['item'])
                  @include('shared.cart_table-row-extra',['item'=>$item])
                @endforeach

                </tbody>
              </table>
            </div>


            <div class="col-md-12 col-lg-8 offset-top-40 offset-md-top-0">
              <form class="text-left offset-top-20 order-form" method="post" action="{{ route('order.store') }}">
                @csrf
                <div class="row justify-content-sm-left">
                  <div class="col-sm-12 inset-sm-right-15 inset-sm-left-15">
                    <div class="form-wrap">
                      <label class="form-label-outside required"
                             for="contact-us-name">ФИО:</label>
                      <input class="form-input" id="contact-us-name" type="text" name="name"
                             data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-sm-6 offset-top-10 inset-sm-right-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-phone">Телефон:</label>
                      <input class="form-input" id="contact-us-phone" type="text" name="phone"
                             placeholder="Телефон"
                             data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-sm-6 offset-top-10 inset-sm-left-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-email">E-mail:</label>
                      <input placeholder="E-mail" class="form-input" id="contact-us-email-cart"
                             type="email" name="email"
                             data-constraints="@Required @Email">

                    </div>
                  </div>
                  <div class="col-sm-12 offset-top-10 text-xl-left form-section-heading d-inline-block mt-4">
                    Доставка
                  </div>
                  <div class="col-sm-4 offset-top-10 inset-sm-right-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-street">Улица:</label>
                      <input class="form-input" id="contact-us-street" type="text" name="street"
                             value=""
                             placeholder=""
                             data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-sm-4 offset-top-10 inset-sm-left-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-home">Дом:</label>
                      <input placeholder="" class="form-input" id="contact-us-home"
                             type="text" name="home"
                             data-constraints="@Required">

                    </div>
                  </div>
                  <div class="col-sm-4 offset-top-10 inset-sm-left-7">
                    <div class="form-wrap">
                      <label class="form-label-outside required" for="contact-us-flat">Квартира:</label>
                      <input placeholder="" class="form-input" id="contact-us-flat"
                             type="text" name="flat"
                             data-constraints="@Required"
                             value="">

                    </div>
                  </div>
                  <div class="col-sm-12 d-md-flex justify-content-between offset-top-10 text-xl-left p-0">
                    <div class="col-sm-6">
                      <label class="form-label-outside">Дата доставки</label>
                      <div class="col-sm-12 offset-0 p-0 text-xl-left datepicker-wrapper">
                        <input required value="" class="form-input" id="datepicker" width="300" name="shipping_date" value="31 декабря"/>
                        <script>
                            var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                            $('#datepicker').datepicker({
                                uiLibrary: 'bootstrap4',
                                minDate: today,
                                locale: 'ru-ru',
                                format: 'dd mmm yyyy',
                                weekStartDay: 1,
                                width: '100%'
                                // change: function (e) {
                                //     console.log($(this).val())
                                // }
                            });
                        </script>
                      </div>
                    </div>
                    <div class="col-sm-6 p-0">
                      <label class="form-label-outside ml-3" for="contact-us-first-name">Время</label>
                      <div class="col-sm-12 p-0 offset-top-0 text-xl-left form-time">
                        <div class="form-wrap">
                          <input class="form-input" id="contact-us-hour"
                                 name="shipping_hour"
                                 type="number"
                                 readonly
                                 min="07"
                                 max="23"
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
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-6 ml-3 box-xxs box-pay text-left offset-top-20 active">
                    <div class="form-wrap">
                      <label class="radio-inline font-weight-bold text-gray">
                        <input name="payment_type" value="online" type="radio" checked>Онлайн-платеж
                      </label>
                      <p class="offset-top-20">VISA/MasterCard/Мир</p>
                    </div>
                  </div>
                  <div class="col-md-12 offset-top-20 ml-3 p-0">
                    <a href="{{Page::find(8)->url}}" target="_blank">Подробнее об оплате и доставке</a>
                  </div>
                  <div class="col-sm-12 offset-top-10 text-center text-xl-left">
                    <div class="form-wrap">
                      <label class="form-label-outside" for="contact-us-message">Комментарии к
                        заказу:</label>
                      <textarea class="form-input" id="contact-us-message" name="message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-12 offset-top-40">
                    <div class="table-responsive total-cart">
                      <table class="table table-custom-md table-default table-bordered-custom text-left">
                        <tbody>
                        <tr class="bg-gray-lighter">
                          <th class="font-weight-bold text-gray">Итоги заказа</th>
                          <th></th>
                        </tr>
                        <tr>
                          <td>Залоговая стоимость сумки:</td>
                          <td class="font-weight-bold text-gray text-nowrap">{{$cart->shippingPrice}} &#x20bd;</td>
                        </tr>
                        <tr>
                          <td>Стоимость товаров:</td>
                          <td class="font-weight-bold text-gray d-flex"><span class="total-cart__items-summ">{{$cart->getTotalPrice()}}</span> &#x20bd;</td>
                        </tr>
                        <tr>
                          <td>Итого к оплате:</td>
                          <td class="font-weight-bold text-gray d-flex"><span class="total-cart__full-summ">{{$cart->getFullPrice()}}</span> &#x20bd;</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row d-flex justify-content-between inset-sm-right-15 inset-sm-left-15">
                  <div class="col-sm-12 offset-top-20">
                    <div class="form-wrap">
                      <label class="checkbox-inline text-primary">
                        <input name="privacy-policy" value="0" type="hidden">
                        <input name="privacy-policy" value="1" type="checkbox" checked>Я
                        согласен с <a href="/privacy-policy" target="_blank">условиями политики
                          конфиденциальности</a>
                      </label>
                    </div>
                  </div>
                  <div class="text-center text-lg-right offset-top-20">
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
        @include('shared.cart_message_success')
      </div>
    </section>
  </main>

@endsection


