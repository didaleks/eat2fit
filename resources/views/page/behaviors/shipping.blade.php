@extends('layouts.app')

@section('content')

    <main class="page-content">
        <section class="section-95 bg-white">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-md-10">
                        <h2>{{$model->name}}</h2>
                        <p>I'm a health and lifestyle coach to smart (and busy!) women who want to look and feel their best, but who don't have a ton of time to exercise, shop for speciality foods, or cook tons of meals every week. I stumbled upon this path by accident, and it changed my life. Learn what good health can do and how extraordinary your life can be!</p>
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
                                <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers. Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly.</p>
                                <p>Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <h3>Способы оплаты</h3>
                                <p>The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click.</p>
                                <p>We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site. Our blog and social media accounts are available to encourage communication and connection between clients and personnel and tell you more about us in the informal environments where we can have a dialogue instead of just a narrative like that.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection


