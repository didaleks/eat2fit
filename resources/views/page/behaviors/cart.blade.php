@extends('layouts.app')

@section('content')

    <h1>Корзина</h1>
    <!-- Page Content-->
    <main class="page-content">
        <section class="section-95">
            <div class="container">
                @if($cart && count($cart->items))
                    <div class="table-responsive offset-top-40">
                        <table class="table table-custom-md table-default table-bordered-custom text-left">
                            <tbody>
                            <tr class="bg-accent">
                                <th class="inset-xl-left-50 text-white">Название</th>
                                <th class="text-white">Цена</th>
                                <th class="text-white">Количество</th>
                                <th class="text-white">Итого</th>
                            </tr>

                            @foreach($cart->items as $diet)
                                @php($item = $diet['item'])
                                <tr>
                                    <td>
                                        <div class="unit align-items-center flex-row unit-spacing-xs">
                                            <div class="unit-left"><a class="text-silver-chalice" href="{{ route('cart.remove', ['id'=> $item->id ]) }}"><span class="icon icon-xs fa fa-trash text-hover-primary"></span></a></div>
                                            <div class="unit-body">
                                                <p><a class="link-decoration-none" href="{{$item->url}}">{{$item->name}}</a></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-gray">{{$item->price}}</td>
                                    <td>
                                        <div class="form-wrap form-wrap-border-none">
                                            <input class="form-input input-sm" type="number" data-zeros="true" value="{{$diet['qty']}}" min="1" max="60">
                                        </div>
                                    </td>
                                    <td class="text-gray">{{$item->price * $diet['qty']}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-sm-end offset-top-30 offset-lg-top-50">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="table-responsive">
                                <table class="table table-custom-md table-default table-bordered-custom text-left">
                                    <tbody>
                                    <tr class="bg-gray-lighter">
                                        <th class="font-weight-bold text-gray">Итоги заказа</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>Количество дней:</td>
                                        <td class="text-gray">{{$cart->getTotalQt()}}</td>
                                    </tr>
                                    <tr>
                                        <td>Итого к оплате:</td>
                                        <td class="font-weight-bold text-gray">{{$cart->getTotalPrice()}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><a class="btn btn-block btn-primary offset-top-13" href="shop-checkout.html">Proceed to checkout</a>
                        </div>
                    </div>
                @else
                    <h2>Ваша корзина пуста</h2>
                @endif
            </div>
        </section>
    </main>

@endsection


