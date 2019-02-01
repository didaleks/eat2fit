@extends('layouts.error_base')

@section('title', 'Страница не найдена 404')

@section('body')
  <div class="container">
    <div class="row">
      <div
          class="section-top-220 section-bottom-110 section-md-111 section-cover row justify-content-sm-center align-items-sm-center">
        <div class="col-md-10 col-xl-12">
          <div class="jumbotron-custom">
            <div class="jumbotron-custom-title">404</div>
            <h1 class="offset-top-10 offset-lg-top-20">Страница по данному адресу не найдена</h1>
            <p class="text-big offset-top-20">Возможно страница была перемещена на другой адрес.</p>
            @include('errors.buttons')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection