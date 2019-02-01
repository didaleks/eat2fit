<section class="section-95 about__team">
  <div class="container">
    <h2>Блок Команда</h2>
    <div class="owl-carousel owl-nav-modern owl-carousel-inset-bottom-20 owl-carousel-navs-primary offset-top-40"
         data-autoplay="true" data-items="3" data-loop="true"
         data-margin="30" data-mouse-drag="false" data-dots="true" data-nav="true">
      @foreach($team as $item)
        <div class="owl-item offset-top-30 offset-md-top-0">
          <article class="post-box-xs">
            <div class="post-box-xs-img-wrap">
              <div class="bg-image" style="background-image: url({{asset(image($item['image'])->getResized(300))}})"></div>
            </div>
            <div class="post-box-xs-caption bg-default">
              <ul class="font-weight-bold">
                <li><a class="text-gray text-hover-primary">
                    <span class="text-middle inset-right-7">{{$item['name']}}</span>
                  </a>
                </li>
                <li>{{$item['position']}}</li>
              </ul>
              <div class="post-box-xs-hidden">
                <p class="offset-top-13">{{$item['text']}}</p>
              </div>
              <p class="text-big font-weight-bold offset-top-5">. . .</p>
            </div>
          </article>
        </div>
      @endforeach
    </div>
  </div>
</section>