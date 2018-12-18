@extends('layouts.app')

@section('content')

  <!-- Parallax-->
  <section class="section section-height-800 parallax-container context-dark bg-gray-darkest text-xl-left"
           data-parallax-img="/images/backgrounds/temp_banner.png">
    <div class="parallax-content">
      <div class="bg-overlay-black">
        <div class="container section-30 section-md-95 section-lg-top-120 section-lg-bottom-150">
          <div class="d-none d-lg-block">
            <h1>Work With Me</h1>
          </div>
          @includeIf('blocks.breadcrumb')
        </div>
      </div>
    </div>
  </section>
  <!-- Page Content-->
  <main class="page-content catalog">
    <!-- Welness-->
    <section class="section-95 section-sm-top-170">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="col-md-10 col-lg-12 col-xl-10">
            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-vertical tabs-vertical-xs tabs-vertical-variant-2 tabs-corporate" id="tabs-2">
              <div class="col-md-3">
                <ul class="nav nav-link">
                  <li class="active"><a href="#tabs-2-1" class="active" data-toggle="tab">Все рационы</a></li>
                  <li><a href="#tabs-2-2" data-toggle="tab">Вегетарианские</a></li>
                  <li><a href="#tabs-2-3" data-toggle="tab">Белковые</a></li>
                  <li><a href="#tabs-2-4" data-toggle="tab">Низкокалорийные</a></li>

                </ul>
                <p>
                  <label for="amount">Количество килокалорий:</label>
                  <input type="text" id="amount" readonly style="border:0; color:#a6c450; font-weight:bold;">
                </p>

                <div id="slider-range"></div>
              </div>
              <div class="tab-content tab-content-title-offset text-left">
                <div class="tab-pane fade show active" id="tabs-2-1">
                  <h2 class="tab-content-title text-center">Все рационы</h2>
                  @include('shared.diet_list', ['models' => $models])
                </div>
                <div class="tab-pane fade" id="tabs-2-2">
                  <h2 class="tab-content-title text-center">Вегетарианские</h2>
                  <p class="text-big font-weight-bold text-primary offset-top-20 offset-md-top-30">What is a Health
                    Coach?</p>
                  @include('shared.diet_list', ['models' => $models_vegan])
                </div>
                <div class="tab-pane fade" id="tabs-2-3">
                  <h2 class="tab-content-title text-center">Белковые</h2>
                  <p class="text-big font-weight-bold text-primary offset-top-20 offset-md-top-30">What is a Health
                    Coach?</p>
                  @include('shared.diet_list', ['models' => $models_protein])
                  <h2 class="offset-top-50 offset-lg-top-95 text-center">What to expect</h2>
                  <div class="row justify-content-sm-center offset-top-30">
                    <div class="col-sm-6">
                      <!-- List Marked-->
                      <ul class="list list-marked font-weight-bold text-primary">
                        <li>Bio-individuality</li>
                        <li>Dietary Theories</li>
                        <li>Primary Food</li>
                        <li>Deconstructing Cravings</li>
                        <li>Crowding Out</li>
                      </ul>
                    </div>
                    <div class="col-sm-6 offset-top-10 offset-xs-top-0">
                      <!-- List Marked-->
                      <ul class="list list-marked font-weight-bold text-primary">
                        <li>American Health Crisis</li>
                        <li>Food/Mood Connection</li>
                        <li>Government Policies</li>
                        <li>Hypoglycemia</li>
                        <li>School Food</li>
                      </ul>
                    </div>
                  </div>
                  <h2 class="offset-top-50 offset-lg-top-95 text-center">Our professionals</h2>
                  <div class="row justify-content-sm-center offset-top-40 text-center">
                    <div class="col-sm-6 col-md-5 col-lg-3"><img class="rounded-circle img-responsive center-block"
                                                                 src="/images/backgrounds/temp_banner.png"
                                                                 width="151" height="151" alt="">
                      <div class="offset-top-13 offset-lg-top-25">
                        <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                                       href="my-philosophy.html">Olivia Grosh</a></p>
                      </div>
                      <div class="offset-top-0">
                        <p class="text-gray">(coach)</p>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-3 offset-top-30 offset-xs-top-0"><img
                          class="rounded-circle img-responsive center-block"
                          src="/images/backgrounds/temp_banner.png" width="151" height="151" alt="">
                      <div class="offset-top-13 offset-lg-top-25">
                        <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                                       href="my-philosophy.html">Mark Johnson</a></p>
                      </div>
                      <div class="offset-top-0">
                        <p class="text-gray">(coach)</p>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-3 offset-top-30 offset-md-top-0"><img
                          class="rounded-circle img-responsive center-block"
                          src="/images/backgrounds/temp_banner.png" width="151" height="151" alt="">
                      <div class="offset-top-13 offset-lg-top-25">
                        <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                                       href="my-philosophy.html">Jessica Priston</a></p>
                      </div>
                      <div class="offset-top-0">
                        <p class="text-gray">(coach)</p>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-3 offset-top-30 offset-md-top-0"><img
                          class="rounded-circle img-responsive center-block"
                          src="/images/backgrounds/temp_banner.png" width="151" height="151" alt="">
                      <div class="offset-top-13 offset-lg-top-25">
                        <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray"
                                                       href="my-philosophy.html">Sam Kromstain</a></p>
                      </div>
                      <div class="offset-top-0">
                        <p class="text-gray">(coach)</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-2-4">
                  <h2 class="tab-content-title text-center">Низкокалорийные</h2>
                  <p class="text-big font-weight-bold text-primary offset-top-20 offset-md-top-30">What is a Health
                    Coach?</p>
                  @include('shared.diet_list', ['models' => $models_low_cal])
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>


@endsection


