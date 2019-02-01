<h6>Контактные данные</h6>
<!-- Contact Info-->
<address class="contact-info p offset-top-20">
  <p>Адрес: {{$settings->address}}</p>
  <p>Юридический адрес: 198510, г.Петергоф, Санкт-Петербургское ш., д.130, корп.7, литер А.</p>
  <dl>
    <dt>Телефоны:</dt>
    <dd>
      <span class="ya-phone"><a class="ya-phone text-gray-light link-decoration-none text-hover-primary"
           href="tel:{{ $settings->phone }}">{{ $settings->phone }}
        </a>
      </span>
    </dd>
    <dd>
      <a class="text-gray-light link-decoration-none text-hover-primary"
           href="tel:{{ $settings->phone2 }}">{{ $settings->phone2 }}
      </a>
    </dd>
    <dd>
      <a class="text-gray-light link-decoration-none text-hover-primary"
         href="tel:+7 (812) 604-02-64">+7 (812) 604-02-64
      </a>
    </dd>
  </dl>
  <dl class="offset-top-10">
    <dt>E-mail:</dt>
    <dd><a class="link-decoration-none" href="mailto:{{ $settings->contact_email }}">{{ $settings->contact_email }}</a>
    </dd>
  </dl>
  <dl class="offset-top-10">
    <dt>Юридические данные::</dt>
    <dd>
      ИНН: 7819315486, <br>ОГРН: 1127847162178
    </dd>
  </dl>
</address>
<div class="bank-logos d-flex justify-content-lg-start justify-content-center offset-top-20">
  <img class="" title="МИР" src="/images/logos/mir-logo.png" alt="МИР">
  <img class="" title="VISA International" src="/images/logos/visa_logo.png" alt="VISA International">
  <img class="" title="MasterCard Worldwide" src="/images/logos/mastercard_logo.png" alt="MasterCard Worldwide">
</div>