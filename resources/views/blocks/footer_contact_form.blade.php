<h6>{{$heading}}</h6>
<form class="rd-mailform text-left offset-top-20" data-form-output="form-output-global"
      data-form-type="contact" method="post" action="{{ route('feedback.store') }}">
    @csrf
    <input type="hidden" name="type" value="{{$type}}">
    {{--todo убрать дефолтные значения из полей --}}
    <div class="row justify-content-sm-center">
        <div class="col-sm-12 inset-sm-right-15 inset-sm-left-15">
            <div class="form-wrap">
                <input class="form-input" id="{{$type}}-contact-form-first-name" type="text" name="name" placeholder="Имя и фамилия"
                       data-constraints="@Required" value="">
            </div>
        </div>
        @if($type != 'callback')
        <div class="col-sm-6 offset-top-10">
            <div class="form-wrap">
                <input class="form-input" id="{{$type}}-contact-form-email" type="email" name="email" placeholder="Email"
                       data-constraints="@Email @Required" value="">
            </div>
        </div>
        @endif
        <div class="{{($type == 'callback')?'col-sm-12':'col-sm-6'}} offset-top-10">
            <div class="form-wrap">
                <input class="form-input" id="{{$type}}-contact-form-phone" type="text" name="phone" placeholder="Телефон" required value="">
            </div>
        </div>
        <div class="col-sm-12 offset-top-10 text-center text-xl-left">
            <div class="form-wrap">
                <textarea class="form-input" id="{{$type}}-contact-form-message" name="message" placeholder="Ваше сообщение(необязательно)"></textarea>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-between inset-sm-right-15 inset-sm-left-15">
        <div class="col-sm-12 offset-top-20">
            <div class="form-wrap">
                <label class="checkbox-inline text-primary">
                    <input name="privacy-policy" value="0" type="hidden">
                    <input name="privacy-policy" value="1" type="checkbox" checked>Я согласен с <a href="/privacy-policy">условиями политики конфиденциальности</a>
                </label>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center text-center text-lg-right offset-top-10">
            <button class="btn btn-primary" type="submit">Отправить</button>
        </div>
    </div>
</form>