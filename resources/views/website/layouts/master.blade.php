<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        <!-- Latest compiled and minified CSS & JS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

        <!-- Font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <!-- Style custom css -->
        <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

</head>

<body class="">
        <div class="page-home">
                <!-- Header -->
                @include('website.blocks.header')
                <!-- End Header-->
                <!-- Main -->
                @yield('content')
                <!-- End Main -->
                <!-- Footer -->
                @include('website.blocks.footer')
                <!-- End Footer -->
                <!-- Back to top -->
                   <a href="#" id="back-to-top" class=""><i class="fa fa-chevron-up"></i> </a>
                <!-- End Back to top -->
                <!-- End Phone number -->
                <div class="hotline" id="callnow">
                        <div class="hotline-phone-ring-wrap">
                                <div class="hotline-phone-ring" id="call-now-1">
                                        <div class="hotline-phone-ring-circle"></div>
                                        <div class="hotline-phone-ring-circle-fill"></div>
                                        <div class="hotline-phone-ring-img-circle">
                                                <a href="tel:0903504745" class="pps-btn-img">
                                                        <img src="data:image/webp;base64,UklGRswAAABXRUJQVlA4TMAAAAAvMUAMECcw//M//2raNmBTAdOrhFaAC0dguIokSbEODCycABSAAqj9m1qqe/Af0X8FbtsoOWZoX1H9UzC2hqmXZsgtHbBPkljzCjS0LXW0DSf2EQeETlxi2he8aGA83qirUAi71oznrahYPNg4sahVz5cZ8YlPGOATWz4wv3MhdZtnLFwmo7S4i9teSdGXj+sTL9zSjMzuVuKhRXEArzdPGstdaw6hYUZfarCuLkC6kPImRCiW2ZJEwrCPIf17qAA=" alt="Gọi điện thoại" data-lazy-src="" data-pin-no-hover="true" class="lazyloaded" data-was-processed="true">
                                                </a>
                                        </div>

                                </div>
                                <div class="hotline-bar __secondary">
                                        <a href="tel:0823579369"> <span class="text-hotline" id="call-now-1">0823 579 369</span> </a>
                                </div>
                                <div class="hotline-phone-ring" id="call-now-2">
                                        <div class="hotline-phone-ring-circle"></div>
                                        <div class="hotline-phone-ring-circle-fill"></div>
                                        <div class="hotline-phone-ring-img-circle">
                                                <a href="tel:0903504745" class="pps-btn-img">
                                                        <img src="data:image/webp;base64,UklGRswAAABXRUJQVlA4TMAAAAAvMUAMECcw//M//2raNmBTAdOrhFaAC0dguIokSbEODCycABSAAqj9m1qqe/Af0X8FbtsoOWZoX1H9UzC2hqmXZsgtHbBPkljzCjS0LXW0DSf2EQeETlxi2he8aGA83qirUAi71oznrahYPNg4sahVz5cZ8YlPGOATWz4wv3MhdZtnLFwmo7S4i9teSdGXj+sTL9zSjMzuVuKhRXEArzdPGstdaw6hYUZfarCuLkC6kPImRCiW2ZJEwrCPIf17qAA=" alt="Gọi điện thoại" data-lazy-src="" data-pin-no-hover="true" class="lazyloaded" data-was-processed="true">
                                                </a>
                                        </div>

                                </div>
                                <div class="hotline-bar">
                                        <a href="tel:0823579369"> <span class="text-hotline" id="call-now-1">0823 579 369</span> </a>
                                </div>
                        </div>
                </div>
                <!-- Menu on mobile-->
                <div id="cd-lateral-nav" class="visible-mobile">
                        <ul id="primary-menu-mobile" class="cd-navigation nav-dropdown">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-614">
                                        <a href="https://ruouthuonghieu.com/" aria-current="page">Home</a>
                                        <span class="arrow"></span>
                                        <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-636">
                                                        <a href="https://ruouthuonghieu.com/chung-toi/">Chúng tôi</a>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1224">
                                                        <a href="https://ruouthuonghieu.com/su-dung-ruou-thuong-hieu/">Lưu
                                                                ý sử dụng website</a>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5771">
                                                        <a href="https://ruouthuonghieu.com/hop-tac-voi-ruou-thuong-hieu/">Hợp
                                                                tác với Rượu Thương
                                                                Hiệu</a>
                                                </li>
                                        </ul>
                                </li>
                                @foreach($categories as $category)
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-{{$category->id}}">
                                        <a href="{{route('category', $category->slug)}}">{{$category->name}}</a>
                                        <span class="arrow"></span>
                                        <ul class="sub-menu">
                                                @if(count($category->childCategories))
                                                @foreach($category->childCategories as $childCategory)
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-{{$childCategory->id}}">
                                                        <a href="{{route('category', $childCategory->slug)}}">{{$childCategory->name}}</a>
                                                        @if(count($childCategory->categories))
                                                        <span class="arrow"></span>
                                                        @endif
                                                        <ul class="sub-menu">
                                                                @if(count($childCategory->categories))
                                                                @foreach($childCategory->categories as $child)
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5643">
                                                                        <a href="{{route('category', $child->slug)}}">{{$child->name}}</a>
                                                                </li>
                                                                @endforeach
                                                                @endif
                                                        </ul>
                                                </li>
                                                @endforeach
                                                @endif
                                        </ul>
                                </li>
                                @endforeach
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-6441">
                                        <a href="https://ruouthuonghieu.com/tin-tuc/">Kiến thức rượu</a>
                                        <span class="arrow"></span>
                                        <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5803">
                                                        <a href="https://ruouthuonghieu.com/tin-tuc/wine-tasting-events/">Wine
                                                                tasting events</a>
                                                </li>
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5802">
                                                        <a href="https://ruouthuonghieu.com/tin-tuc/ruou-va-mon-an/">Rượu
                                                                và món Ăn</a>
                                                </li>
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6388">
                                                        <a href="https://ruouthuonghieu.com/tin-tuc/tin-tuc-ve-ruou/">Tin
                                                                tức về rượu</a>
                                                </li>
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5801">
                                                        <a href="https://ruouthuonghieu.com/tin-tuc/pha-che-cocktail/">Pha
                                                                chế cocktail</a>
                                                </li>
                                        </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1390"><a href="https://ruouthuonghieu.com/lien-he/">Liên hệ</a></li>
                        </ul>
                </div>
                <!-- End Menu on mobile-->
                <div id="vnt-menu-fixed">
                        <ul>
                                <li class="cart">
                                        <a href="{{route('cart')}}" class="popupCart">
                                                <span class="sl ext_numcart">

                                                        @if(session()->get('cart') != null)
                                                        @php
                                                                $total_item = 0;
                                                        @endphp
                                                                @foreach(session()->get('cart') as $id => $cartItem )
                                                                        @php
                                                                                $total_item ++;
                                                                        @endphp
                                                                @endforeach
                                                                {{$total_item}}
                                                        @else
                                                                0
                                                        @endif
                                                </span>
                                                <i class="fa fa-shopping-bag" style="font-size: 18px" aria-hidden="true"></i>
                                        </a>
                                        <span><a href="{{route('cart')}}" class="popupCart">Giỏ hàng</a></span>
                                </li>
                                <li>
                                        <a href="tel:02836222000">
                                                <span class="fa fa-phone"></span>
                                        </a> 
                                        <span>
                                                Hotline:
                                                <span>
                                                        <a href="tel:02836222000">02836222000</a>
                                                </span>
                                        </span>
                                </li>
                                <li>
                                        <a href="http://m.me/bigsizethebs" target="_blank">
                                                <img alt="mess" src="{{asset('images/icons/mess.png')}}">
                                        </a>
                                        <span>
                                                <a href="http://m.me/bigsizethebs" target="_blank">Chat cùng chúng tôi</a>
                                        </span>
                                </li>
                                <li>
                                        <a href="https://zalo.me/1244613402445882530" target="_blank">
                                                <img alt="zalo" src="{{asset('images/icons/zalo.png')}}">
                                        </a> 
                                        <span>
                                                <a href="https://zalo.me/1244613402445882530" target="_blank">Chat cùng chúng tôi</a>
                                        </span>
                                </li>
                        </ul>
                </div>
        </div>
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="{{asset('asset/js/main.js')}}"></script>
        <script type="text/javascript" src="{{asset('asset/js/add_to_cart.js')}}"></script>
</body>

</html>