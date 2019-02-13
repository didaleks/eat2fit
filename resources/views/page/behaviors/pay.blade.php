@extends('layouts.app')

@section('content')

  @include('blocks.parallax')

  <main class="page-content pay">
    <section class="section-95">
      <div class="container">
        <div class="pay-content">
          <h2>Совершить оплату на свободную сумму</h2>
          <div class="col-md-12 col-lg-8 offset-top-40 offset-md-top-0 mx-auto">
            <form class="text-left offset-top-20 pay-form" method="post" action="{{ route('order.store') }}">
              @csrf
              <input type="hidden" name="type" value="free_pay">
              <div class="row justify-content-sm-left">
                <div class="col-sm-12 inset-sm-right-15 inset-sm-left-15">
                  <div class="form-wrap">
                    <label class="form-label-outside required"
                           for="contact-us-name">ФИО:</label>
                    <input class="form-input" id="contact-us-name"
                           type="text"
                           name="name"
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
                    <input placeholder="E-mail" class="form-input" id="contact-us-email-pay"
                           type="email"
                           name="email"
                           data-constraints="@Required @Email">

                  </div>
                </div>

                <div class="col-sm-12 offset-top-10">
                  <div class="form-wrap">
                    <label class="form-label-outside required" for="contact-us-summ">Сумма оплаты в рублях:</label>
                    <input placeholder="Введите число" class="form-input" id="contact-us-summ-pay"
                           value="100"
                           type="number" name="summ">
                  </div>
                </div>

                <div class="col-sm-12 offset-top-10 text-center text-xl-left">
                  <div class="form-wrap">
                    <label class="form-label-outside" for="contact-us-message">
                      Комментарии к оплате:</label>
                    <textarea class="form-input" id="contact-us-message" name="message"></textarea>
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
        </div>
        @include('shared.pay_message_success')
      </div>
    </section>
  </main>

@endsection


