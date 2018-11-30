@extends('layouts.app')

@section('content')


    <!-- Parallax-->
    <section class="section section-height-800 parallax-container context-dark bg-gray-darkest text-xl-left" data-parallax-img="images/backgrounds/background-01-1920x900.jpg">
        <div class="parallax-content">
            <div class="bg-overlay-black">
                <div class="container section-30 section-md-95 section-lg-top-120 section-lg-bottom-150">
                    <div class="d-none d-lg-block">
                        <h1>Work With Me</h1>
                    </div>
                    <!-- List Inline-->
                    <ul class="list-inline list-inline-dashed list-white text-big p offset-md-top-13">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="work-with-me.html">Work With Me</a></li>
                        <li>Wellness
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Content-->
    <main class="page-content">
        <!-- Welness-->
        <section class="section-95 section-sm-top-170">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-md-10 col-lg-12 col-xl-10">
                        <!-- Bootstrap tabs-->
                        <div class="tabs-custom tabs-vertical tabs-vertical-xs tabs-vertical-variant-2 tabs-corporate" id="tabs-2">
                            <!-- Nav tabs-->
                            <ul class="nav nav-link">
                                <li class="active"><a href="#tabs-2-1" data-toggle="tab">Все рационы</a></li>
                                <li><a href="#tabs-2-2" data-toggle="tab">Веганские</a></li>
                                <li><a href="#tabs-2-3" data-toggle="tab">Белковые</a></li>
                            </ul>
                            <div class="tab-content tab-content-title-offset text-left">
                                <div class="tab-pane fade show active" id="tabs-2-1">
                                    <h2 class="tab-content-title text-center">Все рационы</h2>
                                    @include('shared.diet_list', ['models' => $models])
                                </div>
                                <div class="tab-pane fade" id="tabs-2-2">
                                    <h2 class="tab-content-title text-center">Holistic health coaching</h2>
                                    <p class="text-big font-weight-bold text-primary offset-top-20 offset-md-top-30">What is a Health Coach?</p>
                                    <p>A Health Coach is a supportive mentor and wellness authority who works with clients to help them feel their best through food and lifestyle changes. Instead of prescribing one diet or way of exercising, Health Coaches tailor individualized wellness programs to meet their clients' needs. Relationships, exercise, career, and spirituality are just as important to your health as the food you eat. Health Coaches understand this and take a holistic approach to supporting the whole person. Find out how health coaching stacks up against other health and wellness jobs.</p>
                                    <div class="row justify-content-sm-center offset-top-34">
                                        <div class="col-lg-6"><img class="img-responsive" src="images/pages/coaching-01-370x278.jpg" width="370" height="278" alt=""></div>
                                        <div class="col-lg-6 offset-top-30 offset-md-top-0">
                                            <p>As an Integrative Nutrition graduate, you will receive the most comprehensive training in nutrition, coaching skills, and business development there is. Take a peek at what a day in the life of an Integrative Nutrition Health Coach looks like and how you can make a living doing work you love.</p>
                                            <!-- List Marked-->
                                            <ul class="list list-marked font-weight-bold text-primary offset-top-13">
                                                <li>Health program referrals</li>
                                                <li>Communications and point-of-contact</li>
                                                <li>Ongoing health assessment completions</li>
                                                <li>Health fair & screening support</li>
                                                <li>Goal Setting</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row justify-content-sm-center offset-top-34 offset-lg-top-70">
                                        <div class="col-lg-6 order-lg-1"><img class="img-responsive" src="images/pages/typography-02-370x278.jpg" width="370" height="278" alt=""></div>
                                        <div class="col-lg-6 offset-top-30 offset-md-top-0">
                                            <p>As a Health Coach, you call the shots. There's no manager to report to, no Human Resources telling you how to use your time off or sick days, and no employee manual. It's all up to you! You have the power to create your own schedule and see clients on days and at times that work for you.</p>
                                            <!-- List Marked-->
                                            <ul class="list list-marked font-weight-bold text-primary offset-top-13">
                                                <li>Weight management</li>
                                                <li>Tobacco cessation</li>
                                                <li>Stress management</li>
                                                <li>Healthy Eating</li>
                                                <li>Lifestyle improvement</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-2-3">
                                    <h2 class="tab-content-title text-center">Immediate workshops</h2>
                                    <div class="row justify-content-sm-center offset-top-25 offset-md-top-40">
                                        <div class="col-lg-5"><img class="img-responsive" src="images/pages/workshops-01-270x278.jpg" width="270" height="278" alt=""></div>
                                        <div class="col-lg-7 inset-md-left-0 offset-top-30 offset-md-top-0">
                                            <p class="text-big font-weight-bold text-primary">What we offer</p>
                                            <p>Health Coach workshops are loaded with science-based, up-to-date information that lead the attendees through the maze of confusing, often conflicting information surrounding nutrition and lifestyle.  Management receives customized metrics that matter.</p>
                                            <!-- Blockquote-->
                                            <blockquote class="quote quote-classic text-left offset-top-13 offset-md-top-25 inset-left-35">
                                                <p class="text-gray">
                                                    <q>The Health Coach Corporate Wellness program can be made available to employee family members, further reducing the risk of illness in the workplace,  Each workshop is custom designed to meet the needs of your workforce.</q>
                                                </p>
                                                <div class="offset-top-20">
                                                    <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="my-philosophy.html">Nikki Pool</a></p>
                                                </div>
                                                <div class="offset-top-0">
                                                    <p class="text-gray">(Member)</p>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
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
                                        <div class="col-sm-6 col-md-5 col-lg-3"><img class="rounded-circle img-responsive center-block" src="images/users/user-olivia-grosh-151x151.jpg" width="151" height="151" alt="">
                                            <div class="offset-top-13 offset-lg-top-25">
                                                <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="my-philosophy.html">Olivia Grosh</a></p>
                                            </div>
                                            <div class="offset-top-0">
                                                <p class="text-gray">(coach)</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-5 col-lg-3 offset-top-30 offset-xs-top-0"><img class="rounded-circle img-responsive center-block" src="images/users/user-mark-johnson-151x151.jpg" width="151" height="151" alt="">
                                            <div class="offset-top-13 offset-lg-top-25">
                                                <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="my-philosophy.html">Mark Johnson</a></p>
                                            </div>
                                            <div class="offset-top-0">
                                                <p class="text-gray">(coach)</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-5 col-lg-3 offset-top-30 offset-md-top-0"><img class="rounded-circle img-responsive center-block" src="images/users/user-jessica-priston-151x151.jpg" width="151" height="151" alt="">
                                            <div class="offset-top-13 offset-lg-top-25">
                                                <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="my-philosophy.html">Jessica Priston</a></p>
                                            </div>
                                            <div class="offset-top-0">
                                                <p class="text-gray">(coach)</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-5 col-lg-3 offset-top-30 offset-md-top-0"><img class="rounded-circle img-responsive center-block" src="images/users/user-sam-kromstain-151x151.jpg" width="151" height="151" alt="">
                                            <div class="offset-top-13 offset-lg-top-25">
                                                <p class="font-weight-bold"><a class="link-decoration-none text-hover-primary text-gray" href="my-philosophy.html">Sam Kromstain</a></p>
                                            </div>
                                            <div class="offset-top-0">
                                                <p class="text-gray">(coach)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


@endsection


