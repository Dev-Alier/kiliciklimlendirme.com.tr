<div class="middel-header">
    <!-- Container -->
    <div class="container" style="display: flex;align-items: center">
        <!-- Logo Block -->
        <div class="col-md-4 col-sm-6 col-xs-12 logo-block">
            {{-- <a href="index.html" class="navbar-brand">Kılıç İklimlendirme</a> --}}
        </div><!-- Logo Block /- -->
        <!-- Search Block -->
        <div class="col-md-5 col-sm-6 col-xs-6 search-block">
            <img src="{{ asset('assets') }}/images/{{ $setting->logo }}" alt="{{ $setting->site_name }}">

        </div><!-- Search Block /- -->
        <!-- Menu Icon -->
        <div class="col-md-3 col-sm-6 col-xs-6 menu-icon">

        </div><!-- Menu Icon /- -->
    </div><!-- Container /- -->
</div>
<div class="container-fluid no-padding menu-block">
    <!-- Container -->
    <div class="container-fluid no-padding">
        <!-- nav -->
        <nav class="navbar navbar-default ow-navigation">

            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">

                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <a href="/">Anasayfa</a>
                    </li>
                    <li class="dropdown{{ Request::is('hizmetler') ? 'active' : '' }}">
                        <a href="#" title="Hizmetler" class="dropdown-toggle" role="button" aria-haspopup="true"
                            aria-expanded="false">Hizmetler</a>
                        <i class="ddl-switch fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                            @foreach ($allServiceCategories as $serviceCategory)
                                <li><a href="{{ route('service.list',$serviceCategory->slug) }}">{{ $serviceCategory->name }} </a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown{{ Request::is('urunler') ? 'active' : '' }}">
                        <a href="#" title="Hizmetler" class="dropdown-toggle" role="button" aria-haspopup="true"
                            aria-expanded="false">Ürünler</a>
                        <i class="ddl-switch fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                            @foreach ($allProductCategories as $productCategory)
                                <li><a href="{{ route('product.list',$productCategory->slug) }}">{{ $productCategory->name }} </a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="{{ Request::is('hakkimizda') ? 'active' : '' }}">
                        <a href="/hakkimizda">Hakkımızda</a>
                    </li>
                    <li class="{{ Request::is('cozum-ortaklari') ? 'active' : '' }}">
                        <a href="/cozum-ortaklari">Çözüm Ortaklarımız</a>
                    </li>
                    <li class="{{ Request::is('/blog') ? 'active' : '' }}">
                        <a href="/blog">Blog</a>
                    </li>
                    <li class="{{ Request::is('/iletisim') ? 'active' : '' }}">
                        <a href="/iletisim">İletişim</a>
                    </li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </nav><!-- nav /- -->
        <!-- Search Box -->
        <div class="search-box">
            <span><i class="icon_close"></i></span>
            <form><input type="text" class="form-control" placeholder="Enter a keyword and press enter..." /></form>
        </div><!-- Search Box /- -->
    </div><!-- Container /- -->
</div>
