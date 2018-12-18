@extends('layouts.app')

@section('content')

    @include('blocks.parallax')

    <main class="page-content">
        <section class="section-95">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-md-10">
                        <h2>{{$model->name}}</h2>
                        <p>{!! $model->content !!}</p>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection


