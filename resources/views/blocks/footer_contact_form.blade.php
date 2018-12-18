<h6>{{$heading}}</h6>
<form class="rd-mailform text-left offset-top-20" data-form-output="form-output-global"
      data-form-type="contact" method="post" action="{{ route('feedback.store') }}">
    @csrf
    <input type="hidden" name="type" value="{{$type}}">
    {{--todo убрать дефолтные значения из полей --}}
    <div class="row justify-content-sm-center">
        <div class="col-sm-12 inset-sm-right-15 inset-sm-left-15">
            <div class="form-wrap">
                <input class="form-input" id="contact-us-first-name" type="text" name="name" placeholder="Имя и фамилия"
                       data-constraints="@Required" value="mail@demolink.org">
            </div>
        </div>
        <div class="col-sm-6 offset-top-10 inset-sm-right-7">
            <div class="form-wrap">
                <input class="form-input" id="contact-us-email" type="email" name="email" placeholder="Email"
                       data-constraints="@Email @Required" value="mail@demolink.org">
            </div>
        </div>
        <div class="col-sm-6 offset-top-10 inset-sm-left-7">
            <div class="form-wrap">
                <input class="form-input" id="contact-us-phone" type="text" name="phone" placeholder="Телефон" required value="">
            </div>
        </div>
        <div class="col-sm-12 offset-top-10 text-center text-xl-left">
            <div class="form-wrap">
                <textarea class="form-input" id="contact-us-message" name="message" placeholder="Ваше сообщение(необязательно)">mail@demolink.org</textarea>
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
        <div class="col-4 text-center text-lg-right offset-top-10">
            <button class="btn btn-primary" type="submit">Отправить</button>
        </div>
    </div>
</form>