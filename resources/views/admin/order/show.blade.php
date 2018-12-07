@extends('admin::layouts.admin_form')


@section('controls')
@endsection

@section('fields')
{{--  @dd(json_decode($model->cart) )--}}
  <h4>Данные о товарах в корзине</h4>
  <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">ID рациона</th>
      <th scope="col">Название рациона</th>
      <th scope="col">Количество дней</th>
      <th scope="col">Сумма заказа без учета доставки</th>
    </tr>
    </thead>
    <tbody>

    @php($cart = json_decode($model->cart))
    @foreach($cart->items as $product_data)
      @php($item = $product_data->item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td><a href="{{$item->url}}" target="_blank">{{$item->name}}</a></td>
        <td>{{$product_data->qty}}</td>
        <td>{{$product_data->price}} рублей</td>
      </tr>
    @endforeach
    </tbody>
  </table>

  <h4>Данные о доставке</h4>
  <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Поле</th>
      <th scope="col">Значение</th>
    </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Контактное лицо</th>
        <td>{{$model->name}}</td>
      </tr>
      <tr>
        <th scope="row">Телефон</th>
        <td><a href="tel:{{$model->phone}}">{{$model->phone}}</a></td>
      </tr>
      <tr>
        <th scope="row">E-mail</th>
        <td>{{$model->email}}</td>
      </tr>
      <tr>
        <th scope="row">Адрес</th>
        <td>{{$model->address}}</td>
      </tr>
      <tr>
        <th scope="row">Время доставки:</th>
        <td>{{$model->shipping_datetime}}</td>
      </tr>
      <tr>
        <th scope="row">Тип оплаты:</th>
        <td>{{$model->payment_type}}</td>
      </tr>
      <tr>
        <th scope="row">Комментарии к заказу:</th>
        <td>"{{$model->message}}"</td>
      </tr>
      <tr>
        <th scope="row">Время создания заказа:</th>
        <td>{{$model->created_at}}</td>
      </tr>
      <tr>
        <th scope="row">Cумма заказа без учета доставки:</th>
        <td>{{$cart->totalPrice}} рублей</td>
      </tr>
      <tr>
        <th scope="row">Сумма заказа с учетом доставки:</th>
        <td>{{$cart->totalFullPrice}} рублей</td>
      </tr>
    </tbody>
  </table>

@endsection
