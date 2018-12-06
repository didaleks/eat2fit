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
                            <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img class="img-responsive center-block" src="/images/logo-134x42.png" width="134" height="42" alt=""></a></div>
                        </div>
                        <div class="rd-navbar-panel-inner-right">
                            <!-- List Inline-->
                            <ul class="list-inline list-inline-0">
                                <li><a class="icon icon-xxs icon-circle icon-gray-lighter fa fa-tumblr-square" href="#"></a></li>
                                <li><a class="icon icon-xxs icon-circle icon-gray-lighter fa fa-pinterest-p" href="#"></a></li>
                                <li><a class="icon icon-xxs icon-circle icon-gray-lighter fa fa-soundcloud" href="#"></a></li>
                                <li><a class="icon icon-xxs icon-circle icon-gray-lighter fa fa-vimeo-square" href="#"></a></li>
                                <li class="rd-navbar__cart">
                                    <a class="icon icon-xxs icon-circle icon-gray-lighter" href="/cart">
                                        <span class="white"><i class="fa fa-shopping-basket"></i></span>
                                    </a>
                                    <a href="/cart">
                                        <sup class="title10 round dark bg-light">{{ \App\Models\Cart::getCountItems() }}</sup>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- RD Navbar Collaps-->
                    <button class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-panel-inner-right"><span></span></button>
                </div>
                <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                        @foreach($topMenu as $menuItem)
                            @php($menuItemUrl = (!empty($menuItem->url) ? $menuItem->url : $menuItem->page->url))
                            <li class="{{ (isset($model) && $model->url == $menuItemUrl) ? 'active' : '' }}">
                                <a href="{{$menuItemUrl}}">{{$menuItem->name}}</a>
                                @if (count($menuItem->childrens))
                                    <ul class="rd-navbar-dropdown">
                                        @foreach($menuItem->childrens as $subMenuItem)
                                        <li><a href="{{$subMenuItem->page->url}}">{{$subMenuItem->name}}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>