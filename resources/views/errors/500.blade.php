@extends('layouts.error_base')

@section('title', 'Серверная ошибка 500')

@section('body')

  <div class="container">
    <div class="row">
      <div
          class="section-top-220 section-bottom-110 section-md-111 section-cover row justify-content-sm-center align-items-sm-center">
        <div class="col-md-10 col-xl-12">
          <div class="jumbotron-custom jumbotron-custom-variant-2">
            <div class="jumbotron-custom-title">500</div>
            <h1 class="offset-top-10 offset-lg-top-20">Серверная ошибка</h1>
            <p class="text-big offset-top-20">Приносим извинения за временные неудобства. <br
                  class="d-none d-lg-inline-block">
              Пожалуйста опишите Ваш порядок действий, которые привели к
              ошибке, на почту
              <a href="mailto:support@molinos.ru">support@molinos.ru</a></p>
            @include('errors.buttons')
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection