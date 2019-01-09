@extends('layouts.app')

@section('content')

  @include('blocks.parallax')
  <main class="page-content catalog">
    <section class="section-95 section-sm-top-170">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10 col-lg-12 col-xl-10">
            <div class="tabs-custom tabs-vertical tabs-vertical-xs tabs-vertical-variant-2 tabs-corporate" id="tabs-2">
              <div class="col-md-3">
                <ul class="nav nav-link">
                  <li class="active"><a href="#tabs-2-0" class="active" data-toggle="tab">Все рационы</a></li>
                  @foreach($categories as $category)
                    <li><a href="#tabs-2-{{$loop->iteration}}" data-toggle="tab">{{$category->name}}</a></li>
                  @endforeach
                </ul>
                <p>
                  <label for="amount">Количество килокалорий:</label>
                  <input type="text" id="amount" readonly style="border:0; color:#a6c450; font-weight:bold;">
                </p>

                <div id="slider-range"></div>
              </div>
              <div class="tab-content tab-content-title-offset text-left">
                <div class="tab-pane fade show active" id="tabs-2-0">
                  <h2 class="tab-content-title text-center">Все рационы</h2>
                  @include('shared.diet_list', ['models' => $models])
                </div>
                @foreach($categories as $category)
                  <div class="tab-pane fade" id="tabs-2-{{$loop->iteration}}">
                    <h2 class="tab-content-title text-center">{{$category->name}}</h2>
                    @include('shared.diet_list', ['models' => $models->filter(function ($model) use ($category) {
                      foreach ($model->categories as $model_category) {
                        return ($model_category->id == $category->id)? $model : null;
                      };
                    })])
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>


@endsection


