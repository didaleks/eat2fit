<base href="{{config('app.url')}}">

<p>Здравствуйте, на сайте {{config('app.name')}} был оставлен запрос на свободную оплату
  на странице <a href="{{config('app.url')}}/free-pay">{{config('app.url')}}/free-pay</a>.</p>
<p>Вы можете просмотреть информацию в административной панели по ссылке:</p>
<a href="{{config('app.url')}}/admin/order/{{$model->id}}">Оплата #{{$model->id}}</a>
