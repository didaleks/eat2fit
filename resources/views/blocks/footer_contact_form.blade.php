<!-- Contact Us-->
<section class="section-95 section-md-bottom-45">
    <div class="container">
        <div class="row justify-content-sm-center justify-content-lg-start text-lg-left">
            <div class="col-md-10 col-lg-3">
                <h6>Address</h6>
                <!-- Contact Info-->
                <address class="contact-info p offset-top-20">
                    <p>4578 Marmora St, <br> Chicago D04 89GR.</p>
                    <dl>
                        <dt>Telephone:</dt>
                        <dd><a class="text-gray-light link-decoration-none text-hover-primary" href="tel:#">1-800-1234-567</a>
                        </dd>
                    </dl>
                    <dl class="offset-top-10">
                        <dt>E-mail:</dt>
                        <dd><a class="link-decoration-none" href="mailto:#">mail@demolink.org</a></dd>
                    </dl>
                </address>
            </div>
            <div class="col-md-10 col-lg-5 offset-top-40 offset-md-top-0">
                <h6>Get in touch</h6>
                <!-- RD Mailform-->
                <form class="rd-mailform text-left offset-top-20" data-form-output="form-output-global"
                      data-form-type="contact" method="post" action="{{ route('feedback.store') }}">
                    @csrf
                    <input type="hidden" name="type" value="footer">
                    {{--todo убрать дефолтные значения из полей --}}
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-12 inset-sm-right-15 inset-sm-left-15">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-us-first-name">Имя и фамилия</label>
                                <input class="form-input" id="contact-us-first-name" type="text" name="name"
                                       data-constraints="@Required" value="mail@demolink.org">
                            </div>
                        </div>
                        <div class="col-sm-6 offset-top-10 inset-sm-right-7">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-us-email">Email</label>
                                <input class="form-input" id="contact-us-email" type="email" name="email"
                                       data-constraints="@Email @Required" value="mail@demolink.org">
                            </div>
                        </div>
                        <div class="col-sm-6 offset-top-10 inset-sm-left-7">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-us-phone">Телефон</label>
                                <input class="form-input" id="contact-us-phone" type="text" name="phone"
                                       data-constraints="@Required" value="323232323">
                            </div>
                        </div>
                        <div class="col-sm-12 offset-top-10 text-center text-xl-left">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-us-message">Сообщение(необязательно)</label>
                                <textarea class="form-input" id="contact-us-message" name="message">mail@demolink.org</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between inset-sm-right-15 inset-sm-left-15">
                        <div class="col-sm-6 offset-top-20">
                            <div class="form-wrap">
                                <label class="checkbox-inline text-primary">
                                    <input name="privacy-policy" value="0" type="hidden">
                                    <input name="privacy-policy" value="1" type="checkbox" checked>Я согласен с <a href="/privacy-policy">условиями политики конфиденциальности</a>
                                </label>
                            </div>
                        </div>
                        <div class="text-center text-lg-right offset-top-10">
                            <button class="btn btn-primary" type="submit">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-10 col-lg-3 offset-lg-1 offset-top-40 offset-md-top-0">
                <h6>Flickr</h6>
                <div class="group-xs flickr widget-flickrfeed offset-top-20" data-lightgallery="group"
                     data-flickr-tags="tm61252"><a class="flickr-item" data-lightgallery="item"
                                                   href="http://farm6.staticflickr.com/5802/29943773064_35b614b909_c.jpg"
                                                   data-image_c="href" data-size="1000x780" data-type="flickr-item"><img
                                width="87" height="83" data-title="alt"
                                src="http://farm6.staticflickr.com/5802/29943773064_35b614b909_q.jpg" alt="Movies"
                                data-image_q="src"></a><a class="flickr-item" data-lightgallery="item"
                                                          href="http://farm6.staticflickr.com/5681/29943773084_315b1fbcd5_c.jpg"
                                                          data-image_c="href" data-size="1000x780"
                                                          data-type="flickr-item"><img width="87" height="83"
                                                                                       data-title="alt"
                                                                                       src="http://farm6.staticflickr.com/5681/29943773084_315b1fbcd5_q.jpg"
                                                                                       alt="Sexy and fashionable couple in sunglasses. Vogue"
                                                                                       data-image_q="src"></a><a
                            class="flickr-item" data-lightgallery="item"
                            href="http://farm6.staticflickr.com/5623/29943772684_2273107e5b_c.jpg" data-image_c="href"
                            data-size="1000x780" data-type="flickr-item"><img width="87" height="83" data-title="alt"
                                                                              src="http://farm6.staticflickr.com/5623/29943772684_2273107e5b_q.jpg"
                                                                              alt="5" data-image_q="src"></a><a
                            class="flickr-item" data-lightgallery="item"
                            href="http://farm6.staticflickr.com/5334/29943772954_5df42932e2_c.jpg" data-image_c="href"
                            data-size="1000x780" data-type="flickr-item"><img width="87" height="83" data-title="alt"
                                                                              src="http://farm6.staticflickr.com/5334/29943772954_5df42932e2_q.jpg"
                                                                              alt="traditional breakfast"
                                                                              data-image_q="src"></a><a
                            class="flickr-item" data-lightgallery="item"
                            href="http://farm6.staticflickr.com/5334/29943772954_5df42932e2_c.jpg" data-image_c="href"
                            data-size="1000x780" data-type="flickr-item"><img width="87" height="83" data-title="alt"
                                                                              src="http://farm6.staticflickr.com/5334/29943772954_5df42932e2_q.jpg"
                                                                              alt="traditional breakfast"
                                                                              data-image_q="src"></a><a
                            class="flickr-item" data-lightgallery="item"
                            href="http://farm6.staticflickr.com/5334/29943772954_5df42932e2_c.jpg" data-image_c="href"
                            data-size="1000x780" data-type="flickr-item"><img width="87" height="83" data-title="alt"
                                                                              src="http://farm6.staticflickr.com/5334/29943772954_5df42932e2_q.jpg"
                                                                              alt="traditional breakfast"
                                                                              data-image_q="src"></a></div>
            </div>
        </div>
    </div>
</section>