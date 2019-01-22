@extends('layouts.app')

@section('content')

    <main class="page-content">
        <section class="section-95 bg-white">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-md-10">
                        <h2>{{$model->name}}</h2>
                        {!! $model->content !!}
                    </div>
                </div>
                <div class="row justify-content-sm-center offset-top-20">
                    <div class="col-md-10 col-xl-6">
                        <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                            <ul class="nav nav-link">
                                <li class="active"><a class="active" href="#tabs-1-1" data-toggle="tab">Доставка</a></li>
                                <li><a href="#tabs-1-2" data-toggle="tab">Способы оплаты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-sm-center offset-top-25">
                    <div class="col-md-10">
                        <div class="tab-content text-left">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <h3>Доставка</h3>
                                {!! $model->fields['shipping-text'] !!}
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <h3>Способы оплаты</h3>
                                {!! $model->fields['paying-text'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row offset-top-30">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa267f2d1d1cb9104f67657ed2c4978ba0aad8f10487426456c0565d09b04dcfd&source=constructor" width="100%" height="400" frameborder="0"></iframe>
            </div>
        </section>
    </main>

@endsection


