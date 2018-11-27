<div class="footer-area black-bg-2 pt-70">
    <div class="footer-top-area pb-18">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-about mb-40">
                        <p>
                            {{--{!! nl2br($settings->footer_text) !!}--}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-22">
                            <h4>Информация</h4>
                        </div>
                        <div class="footer-content">
                            <ul>
{{--                                <li><a href="{{ route('client.cabinet') }}">Личный кабинет</a></li>--}}
                                <li><a href="/">Политика конфедециальности</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-22">
                            <h4>Время работы</h4>
                        </div>
                        <div class="footer-time">
                            <ul>
{{--                                <li>С  {{ $settings->work_time_start }} - до {{ $settings->work_time_end }}</li>--}}
{{--                                <li>Выходные: {{ $settings->weekends }}</li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-22">
                            <h4>Контакты</h4>
                        </div>
                        <div class="footer-contact">
                            <ul>
                                {{--<li>Адрес: {{ $settings->address }}</li>--}}
                                {{--<li>Телефон: <a href="tel:{{ preg_replace('|[^+\d]|', '', $settings->phone) }}">{{ $settings->phone }}</a></li>--}}
                                {{--<li>Email: <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area border-top-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-7">
                    <div class="copyright">
                        <p>
                            Copyright ©
                            @if(date('Y') > '2018')
                                2018 - {{ date('Y') }}.
                            @else
                                2018.
                            @endif
                            All Right Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-5">
                    <div class="footer-created">
                        Создание сайта — <a href="https://molinos.ru" target="_blank">molinos.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a id="scrollUp" href="#top"><i class="fa fa-angle-double-up"></i></a>