<?php
$settings = new \LaravelAdmin\Models\Settings()
?>
<base href="{{config('app.url')}}">
<p>Ваш заказ №{{$model->id}} принят на обработку. Вам перезвонят в ближайшее время.</p>
<p>Оплата доставки произодится отдельно на странице на странице <a href="{{config('app.url')}}/free-pay">{{config('app.url')}}/free-pay</a></p>
<p>По любым вопросам обращайтесь по телефону: {{$settings->phone}}</p>