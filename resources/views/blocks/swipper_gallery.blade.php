<h6><a href="https://www.instagram.com/_eat2fit_/" target="_blank">Instagram</a></h6>
<div class="group-xs flickr widget-flickrfeed offset-top-20" data-lightgallery="group"
     data-flickr-tags="tm61252">
  @foreach(collect($insta) as $media)
    <a class="flickr-item" data-lightgallery="item"
       href="{{ $media['thumbnail'] }}"
       data-image_c="href"
       data-size="1000x780"
       data-type="flickr-item">
      <img width="87"
           height="83"
           data-title="alt"
           src="{{ $media['thumbnail'] }}"
           data-image_q="src">
    </a>
  @endforeach
</div>