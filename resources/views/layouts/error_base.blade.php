<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
  <title>@yield('title')</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  @include('blocks.assets')
</head>
<body>
<!-- Page-->
<div class="page text-center">
  <div class="page-loader">
    <div>
      <div class="page-loader-body">
        <div class="cssload-loader">
          <div class="cssload-inner cssload-one"></div>
          <div class="cssload-inner cssload-two"></div>
          <div class="cssload-inner cssload-three"></div>
        </div>
      </div>
    </div>
  </div>

  <main class="page-content"
        style="background: #191919 url(images/backgrounds/background-08-1920x1019.jpg) center/cover no-repeat">
    <div class="bg-overlay-gray-darken">
      <div class="one-page">
        <div class="container">
          <div class="one-page-header">
            <!--Navbar Brand-->
            <div class="rd-navbar-brand d-inline-block offset-top-30">
              <a href="/">
                <img class="img-responsive center-block" src="{{asset('images/logo.svg')}}" width="160" height="51"
                     alt="">
              </a>
            </div>
          </div>
        </div>
        <section class="context-dark">

          @yield('body')

        </section>
        <div class="one-page-footer">
          <div class="container d-flex justify-content-center">
            @include('errors.copyright')
          </div>
        </div>

      </div>
    </div>
  </main>

</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>

@include('blocks.js')

</body>
</html>