<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">


                <li>
                    <a href="/panel">
                        <i class="fas fa-house-damage"></i>
                        <span data-key="t-home">@lang('translation.HomePage')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}">
                        <i class=" fas fa-info-circle"></i>
                        <span data-key="t-chat">@lang('translation.about')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow" aria-expanded="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-shopping-cart">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span data-key="t-ecommerce">Hizmetler</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false" style="">
                        <li><a href="{{ route('list.serviceCategory') }}" key="t-products">Hizmet Kategori</a></li>
                        <li><a href="{{ route('list.service') }}" data-key="t-product-detail">Hizmet Listesi</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow" aria-expanded="true">
                        <i class=" fas fa-archive"></i>
                        <span data-key="t-ecommerce">Ürünler</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false" style="">
                        <li><a href="{{ route('list.productCategory') }}" key="t-products">Ürünler Kategori</a></li>
                        <li><a href="{{ route('list.product') }}" data-key="t-product-detail">Ürünler Listesi</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('list.slider') }}">
                        <i class=" fas fa-images"></i>
                        <span data-key="t-chat">@lang('Slider')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list.solutionPartner') }}">
                        <i class="fas fa-id-card"></i>
                        <span data-key="t-chat">@lang('Çözüm Ortakları')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog.list') }}">
                        <i class="fas fa-blog"></i>
                        <span data-key="t-chat">@lang('translation.Blog')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('settings') }}">
                        <i class="fas fa-cog"></i>
                        <span data-key="t-chat">@lang('translation.settings')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('address') }}">
                        <i class="fas fa-address-card"></i>
                        <span data-key="t-chat">@lang('translation.Addresses')</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
