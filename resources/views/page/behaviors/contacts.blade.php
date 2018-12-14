@extends('layouts.app')

@section('content')

  <main class="page-content">
    <!-- Contact Info-->
    <section class="section-95">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10">
            <h2>{{$model->name}}</h2>
            <p class="text-big">{{ $model->content }}</p>
          </div>
          <div class="col-10 d-flex justify-content-between">
            <div class="col-3">
              <address>Адрес:<p>4578 Marmora St, <br> Chicago D04 89GR.</p></address>
            </div>
            <div class="col-3">Телефон: 8 800 555 3535</div>
            <div class="col-3">
              <p>E-mail:</p>
              <span><a class="link-decoration-none" href="mailto:#">mail@demolink.org</a></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="yandex-map">
        <iframe
            src="https://yandex.ru/map-widget/v1/?um=constructor%3A3357130d999ac1d8854d38aea97b47a675e2b51cd5a942ec7f2f45ee558bf588&amp;source=constructor"
            width="100%" height="411" frameborder="0"></iframe>
      </div>
    </section>
  </main>


@endsection


