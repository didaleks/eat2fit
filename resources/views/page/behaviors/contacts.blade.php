@extends('layouts.app')

@section('content')

  <main class="page-content">
    <!-- Contact Info-->
    <section class="section-95">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10">
            <h2 class="pb-5">{{$model->name}}</h2>
          </div>
          <div class="col-10 d-flex flex-wrap justify-content-between">
            <div class="col-lg-4 unit pt-3 align-items-top flex-row unit-spacing-xs">
              <div class="unit-left"><span class="icon icon-circle icon-primary fl-great-icon-set-ico fl-great-icon-set-placeholder34"></span></div>
              <div class="unit-body text-left">
                <div>
                  <p>Адрес:</p>
                </div>
                <div class="offset-top-5">
                  <p class="font-weight-bold"><span class="link-decoration-none text-hover-primary text-gray">{{ $settings->address }}</span></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 unit pt-3 align-items-top flex-row unit-spacing-xs">
              <div class="unit-left"><span class="icon icon-circle icon-primary fl-great-icon-set-ico fl-great-icon-set-mobile226"></span></div>
              <div class="unit-body text-left">
                <div>
                  <p>Телефоны:</p>
                </div>
                <div class="offset-top-5">
                  <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a></p>
                </div>
                <div class="offset-top-5">
                  <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="tel:{{ $settings->phone2 }}">{{ $settings->phone2 }}</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 unit pt-3 align-items-top flex-row unit-spacing-xs">
              <div class="unit-left"><span class="icon icon-circle icon-primary fl-great-icon-set-ico fl-great-icon-set-new99"></span></div>
              <div class="unit-body text-left">
                <div>
                  <p>Email Address:</p>
                </div>
                <div class="offset-top-5">
                  <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="mailto:{{ $settings->contact_email }}">{{ $settings->contact_email }}</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-bottom-95">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10">
            <h2 class="pb-5">Юридическая информация</h2>
          </div>
          <div class="col-10 d-flex flex-wrap justify-content-between">
            <div class="col-lg-6">
              <div class="unit pt-3 align-items-top flex-row unit-spacing-xs">
                <div class="unit-left"><span class="icon icon-circle icon-primary fl-great-icon-set-ico fl-great-icon-set-placeholder34"></span></div>
                <div class="unit-body text-left">
                  <div>
                    <p>Юридический адрес:</p>
                  </div>
                  <div class="offset-top-5">
                    <p class="font-weight-bold"><span class="link-decoration-none text-hover-primary text-gray">198510, г.Санкт-Петербург, г.Петергоф, Санкт-Петербургское ш., д.130, корп.7, литер А.</span></p>
                  </div>
                </div>
              </div>
              <div class="unit pt-3 align-items-top flex-row unit-spacing-xs">
                <div class="unit-left"><span class="icon icon-circle icon-primary fl-great-icon-set-book207"></span></div>
                <div class="unit-body text-left">
                  <div>
                    <p>Юридические данные:</p>
                  </div>
                  <div class="offset-top-5">
                    <p class="font-weight-bold"><span class="link-decoration-none text-hover-primary text-gray">ИНН: 7819315486, <br>ОГРН: 1127847162178</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="unit pt-3 align-items-top flex-row unit-spacing-xs">
                <div class="unit-left"><span class="icon icon-circle icon-primary fl-great-icon-set-ico fl-great-icon-set-mobile226"></span></div>
                <div class="unit-body text-left">
                  <div>
                    <p>Телефон:</p>
                  </div>
                  <div class="offset-top-5">
                    <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="tel:+7 (812) 604-02-64">+7 (812) 604-02-64</a></p>
                  </div>
                </div>
              </div>
              <div class="unit pt-3 align-items-top flex-row unit-spacing-xs">
                <div class="unit-left"><span class="icon icon-circle icon-primary fl-great-icon-set-ico fl-great-icon-set-new99"></span></div>
                <div class="unit-body text-left">
                  <div>
                    <p>Email Address:</p>
                  </div>
                  <div class="offset-top-5">
                    <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="mailto:info@eat2fit.ru">info@eat2fit.ru</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="yandex-map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab99875a5c0c0ca9acb1acbb388b7d211fd647b6823cc62434e26db25caea6c57&amp;source=constructor" width="100%" height="411" frameborder="0"></iframe>
      </div>
    </section>
  </main>


@endsection


