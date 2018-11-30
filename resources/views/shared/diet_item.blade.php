<div class="col-md-6 col-lg-6 mb-4">
    <a class="thumbnail-classic" href="work-with-me.html">
        <span class="thumbnail-classic-img-wrap">
            <img class="img-responsive center-block"
                 src="images/pages/massage-01-370x230.jpg"
                 width="370"
                 height="230"
                 alt="">
        </span>
    </a>
    <p class="text-big font-weight-bold offset-top-13 offset-md-top-20">
        <a class="link-decoration-none" href="{{$model->url}}">{{$model->name}}</a></p>
    <p>{!! str_limit($model->content, 120) !!}</p>
    <a class="btn btn-primary offset-top-13 offset-lg-top-20" href="{{$model->url}}">Подробнее</a>
</div>