<!-- Page Header-->
<header class="page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="90px" data-lg-stick-up-offset="90px">
            <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <div class="rd-navbar-panel-inner">
                        <div class="rd-navbar-panel-inner-left">
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand-name" href="/"><img class="img-responsive center-block" src="/images/logo.svg" width="170" height="42" alt=""></a></div>
                        </div>
                        <div class="rd-navbar-panel-inner-right d-flex justify-content-end align-items-center page-header__phones">
                            <div class="mr-3 offset-top-10">
                                <i class="fa-mobile-phone"></i>
                                <span class="ya-phone"><a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a></span>
                            </div>
                            <div class="mr-3 offset-top-10">
                                <i class="fa-mobile-phone"></i>
                                <a href="tel:{{ $settings->phone2 }}">{{ $settings->phone2 }}</a>
                            </div>
                            <button class="btn btn-xs btn-primary text-bottom"  data-toggle="modal" data-target="#modalCallback">Заказать звонок</button>
                        </div>
                    </div>
                    <div class="rd-navbar__cart toogle">
                        <a class="icon icon-xxs icon-circle icon-gray-lighter" href="/cart">
                            <span class="white"><i class="fa fa-shopping-basket"></i></span>
                        </a>
                        <a href="/cart">
                            <sup class="title10 cart-icon round dark bg-light">{{ Cart::getCountItems() }}</sup>
                        </a>
                    </div>


                </div>
                <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                        @foreach($topMenu as $menuItem)
                            @php($menuItemUrl = (!empty($menuItem->url) ? $menuItem->url : $menuItem->page->url))
                            <li class="{{ (isset($model) && $model->url == $menuItemUrl) ? 'active' : '' }}">
                                <a href="{{$menuItemUrl}}">{{$menuItem->name}}</a>
                                @if (count($menuItem->childrensPublished()))
                                    <ul class="rd-navbar-dropdown">
                                        @foreach($menuItem->childrensPublished() as $subMenuItem)
                                        <li><a href="{{$subMenuItem->page->url}}">{{$subMenuItem->name}}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                            <div class="rd-navbar__cart-fixed">
                                <a class="icon icon-xxs icon-circle icon-gray-lighter" href="/cart">
                                    <span class="white"><i class="fa fa-shopping-basket"></i></span>
                                </a>
                                <a href="/cart">
                                    <sup class="title10 cart-icon round dark bg-light">{{ Cart::getCountItems() }}</sup>
                                </a>
                            </div>
                    </ul>


                </div>
            </div>
        </nav>
    </div>
</header>