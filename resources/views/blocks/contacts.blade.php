<h6>Адрес</h6>
<!-- Contact Info-->
<address class="contact-info p offset-top-20">
  <p>{{$settings->address}}</p>
  <dl>
    <dt>Телефон:</dt>
    <dd>
      <a class="text-gray-light link-decoration-none text-hover-primary"
           href="tel:{{ $settings->phone }}">{{ $settings->phone }}
      </a>
    </dd>
    <dd>
      <a class="text-gray-light link-decoration-none text-hover-primary"
           href="tel:{{ $settings->phone2 }}">{{ $settings->phone2 }}
      </a>
    </dd>
  </dl>
  <dl class="offset-top-10">
    <dt>E-mail:</dt>
    <dd><a class="link-decoration-none" href="mailto:{{ $settings->contact_email }}">{{ $settings->contact_email }}</a>
    </dd>
  </dl>
</address>
<div class="bank-logos d-flex justify-content-lg-start justify-content-center offset-top-20">
  <img class="" title="МИР" src="/images/logos/mir-logo.png" alt="МИР">
  <img class="" title="VISA International" src="/images/logos/visa_logo.png" alt="VISA International">
  <img class="" title="MasterCard Worldwide" src="/images/logos/mastercard_logo.png" alt="MasterCard Worldwide">
</div>