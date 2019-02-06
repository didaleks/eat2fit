<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ app()->getLocale() }}">
<head>
    @if(config('app.env') == 'production')
        {!! $settings['script'] !!}
    @endif
    <title>{{$model->meta_title ?? $model->name}}</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="yandex-verification" content="23f995436427013b" />
    @include('blocks.assets')
</head>
<body>
<!-- Page-->
<div class="page text-center">
    @yield('body')
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>

</body>
</html>