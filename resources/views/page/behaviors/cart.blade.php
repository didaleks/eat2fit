@extends('layouts.app')

@section('content')

    <h1>Корзина</h1>
    @dd($cart)
    <!-- Page Content-->
    <main class="page-content">
        <section class="section-95">
            <div class="container">
                <h2>Корзина</h2>
                @if(count($cart->items))
                    @foreach(array_column($cart->items, 'item') as $model)
                        <div class="row justify-content-sm-center offset-top-40">
                            <div class="col-md-8 col-lg-4">
                                <!-- Post Box Hover-->
                                <article class="post-box-xs">
                                    <div class="post-box-xs-img-wrap">
                                        <div class="bg-image bg-image-1"></div>
                                    </div>
                                    <div class="post-box-xs-caption bg-default">
                                        <!-- List Inline-->
                                        <ul class="list-inline list-inline-22 list-inline-dashed-vertical font-weight-bold">
                                            <li><a class="text-gray text-hover-primary" href="blog-post.html"><span
                                                            class="text-middle inset-right-7">Street workout</span><span
                                                            class="icon icon-sm material-design-ico material-design-camera59 text-middle text-gray"></span></a>
                                            </li>
                                            <li>{{$model -> name}}</li>
                                        </ul>
                                        <div class="post-box-xs-hidden">
                                            <p class="offset-top-13">Daily movement, in some form, will make you feel
                                                better each and every day. Your body craves moment. It was built to
                                                move. That means, we...</p>
                                        </div>
                                        <p class="text-big font-weight-bold offset-top-5">. . .</p>
                                    </div>
                                </article>
                            </div>
                        </div><a class="btn btn-width-200 btn-primary offset-top-13" href="contact-me.html">Subscribe to
                            my blog</a>
                    @endforeach
                @endif
            </div>
        </section>
    </main>


@endsection


