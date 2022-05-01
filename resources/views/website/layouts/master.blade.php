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
        <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
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
                <!-- Menu on mobile-->
                <div id="cd-lateral-nav" class="visible-mobile">
                        <ul id="primary-menu-mobile" class="cd-navigation nav-dropdown">
                                <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-614">
                                        <a href="https://ruouthuonghieu.com/" aria-current="page">Home</a>
                                        <span class="arrow"></span>
                                        <ul class="sub-menu">
                                                <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-636">
                                                        <a href="https://ruouthuonghieu.com/chung-toi/">Chúng tôi</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1224">
                                                        <a href="https://ruouthuonghieu.com/su-dung-ruou-thuong-hieu/">Lưu
                                                                ý sử dụng website</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5771">
                                                        <a
                                                                href="https://ruouthuonghieu.com/hop-tac-voi-ruou-thuong-hieu/">Hợp
                                                                tác với Rượu Thương
                                                                Hiệu</a>
                                                </li>
                                        </ul>
                                </li>
                                <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5640">
                                        <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/qua-tang-tet/">Quà Tặng
                                                Tết</a>
                                        <span class="arrow"></span>
                                        <ul class="sub-menu">
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5642">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/hop-qua-tet/">Hộp
                                                                &amp; Khay Quà
                                                                Tết</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5643">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/gio-qua-tet/">Giỏ
                                                                                Quà Tết</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5641">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/hop-ruou-tet/">Hộp
                                                                                Rượu
                                                                                Tết</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6148">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/qua-tet-gia-re/">Quà
                                                                                Tết Giá
                                                                                Rẻ</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5838">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/gio-qua-tet-doanh-nghiep/">Giỏ
                                                                                Quà Tết Doanh Nghiệp</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5847">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-tet/">Rượu
                                                                                Tết</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6061">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/banh-keo-nhap-khau/">Bánh
                                                                                kẹo
                                                                                nhập khẩu</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </li>
                                <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-1401">
                                        <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/">RƯỢU VANG</a>
                                        <span class="arrow"></span>
                                        <ul class="sub-menu">
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1404">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/ruou-vang-do/quoc-gia/">RƯỢU
                                                                VANG ĐỎ</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1405">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/ruou-vang-trang/">RƯỢU
                                                                VANG
                                                                TRẮNG</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3836">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/champagne/">RƯỢU
                                                                CHAMPAGNE/
                                                                VANG NỔ</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3837">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/sparkling-wine/">SPARKLING
                                                                WINE/ VANG NỔ</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3838">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/prosecco/">PROSECCO/
                                                                VANG
                                                                NỔ</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1406">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/ruou-vang-hong/">RƯỢU
                                                                VANG
                                                                HỒNG</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1408">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/ruou-vang-ngot/">RƯỢU
                                                                VANG
                                                                NGỌT</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5606">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang-bich/">RƯỢU
                                                                VANG BỊCH 3L,
                                                                5L</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5665">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/ruou-vang-do/quoc-gia/">TÌM
                                                                THEO QUỐC GIA</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9945">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/ruou-vang-do/quoc-gia/ruou-vang-phap/">Rượu
                                                                                Vang Pháp</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5668">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang-y/">Rượu
                                                                                Vang Ý</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5669">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/ruou-vang-do/quoc-gia/ruou-vang-chile/">Rượu
                                                                                Vang Chile</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5671">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang-uc/">Rượu
                                                                                vang
                                                                                Úc</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5667">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang-my/">Rượu
                                                                                vang
                                                                                Mỹ</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5670">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang-duc/">Rượu
                                                                                Vang
                                                                                Đức</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5694">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang-new-zealand/">Rượu
                                                                                vang New Zealand</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5672">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang-argentina/">Rượu
                                                                                vang Argentina</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-5876">
                                                        <a href="http://ruouthuonghieu.com" aria-current="page">TÌM THEO
                                                                LOẠI NHO</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5894">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/cabernet-sauvignon/">Cabernet
                                                                                Sauvignon</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5887">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/merlot/">Merlot</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5884">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/pinot-noir/">Pinot
                                                                                Noir</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5879">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/shiraz/">Shiraz</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5888">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/malbec/">Malbec</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5895">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/cabernet-france/">Cabernet
                                                                                France</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5875">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/zinfandel/">Zinfandel</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5907">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/blend/">Blend</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5881">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/sauvignon-blanc/">Sauvignon
                                                                                blanc</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5893">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/chardonnay/">Chardonnay</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5892">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/chenin-blanc/">Chenin
                                                                                Blanc</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5883">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/riesling/">Riesling</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5890">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/gewurztraniner/">Gewurztraniner</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5877">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/viognier/">Viognier</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5880">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/semillon/">Semillon</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5882">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/sangiovese/">Sangiovese</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-5896">
                                                        <a href="http://ruouthuonghieu.com" aria-current="page">Tìm theo
                                                                giá tiền</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5898">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/loc-san-pham/?danh-muc=ruou-vang&amp;khoang-gia=200000-350000">200.000đ
                                                                                – 350.000đ</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5902">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/loc-san-pham/?danh-muc=ruou-vang&amp;khoang-gia=350000-500000">350.000đ
                                                                                – 500.000đ</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5900">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/loc-san-pham/?danh-muc=ruou-vang&amp;khoang-gia=500000-750000">500.000đ
                                                                                – 750.000đ</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5899">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/loc-san-pham/?danh-muc=ruou-vang&amp;khoang-gia=750000-1000000">750.000đ
                                                                                – 1.000.000đ</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5904">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/loc-san-pham/?danh-muc=ruou-vang&amp;khoang-gia=1000000-1500000">1.000.000đ
                                                                                – 1.500.000đ</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5903">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/loc-san-pham/?danh-muc=ruou-vang&amp;khoang-gia=1500000-">&gt;
                                                                                1.500.000đ</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-9904">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/tim-theo-danh-muc/">TÌM
                                                                THEO
                                                                DANH MỤC</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9946">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/tim-theo-danh-muc/ruou-vang-qua-tang/">Rượu
                                                                                Vang Quà Tặng</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9924">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/tim-theo-danh-muc/ruou-vang-cao-cap/">Rượu
                                                                                Vang Cao Cấp</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9926">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/tim-theo-danh-muc/ruou-vang-noi-tieng/">Rượu
                                                                                Vang Nổi Tiếng</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9905">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/tim-theo-danh-muc/ruou-vang-gia-re/">Rượu
                                                                                Vang Giá Rẻ</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9930">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/tim-theo-danh-muc/10-chai-ruou-ngon-danh-cho-nu/">Rượu
                                                                                Vang Dành Cho Phụ Nữ</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9928">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-vang/tim-theo-danh-muc/ruou-vang-mini/">Rượu
                                                                                Vang Mini</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </li>
                                <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1403">
                                        <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-manh/">Rượu mạnh</a>
                                        <span class="arrow"></span>
                                        <ul class="sub-menu">
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5525">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/whisky-nhat/">Whisky
                                                                Nhật</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9186">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-manh/whisky-nhat/hibiki/">Hibiki</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9188">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-manh/whisky-nhat/nikka-whisky-nhat/">Nikka</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3840">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/single-malt-whisky/">Single
                                                                Malt
                                                                Whisky</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5717">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/macallan/">Macallan</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5710">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/whyte-and-mackay/">Dalmore</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5718">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/singleton/">Singleton</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5713">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/glenfiddich/">Glenfiddich</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5714">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/glenlivet/">Glenlivet</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9880">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-manh/single-malt-whisky/benriach/">Bowmore</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9875">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-manh/single-malt-whisky/glenmorangie/">Glenmorangie</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5715">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/laphroag/">Laphroag</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3841">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/blend-whisky/">Blended
                                                                Whisky</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5702">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/chivas/">Chivas</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5703">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/johnnie-walker/">Johnnie
                                                                                Walker</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5704">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ballantines/">Ballantines</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5707">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/jameson/">Jameson</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3839">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/whisky-my/">Whisky
                                                                Mỹ</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5733">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/jack-daniels/">Jack
                                                                                Daniel</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5734">
                                                                        <a>Jeam Bean</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3842">
                                                        <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/vodka/">Rượu
                                                                Vodka</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5752">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/beluga/">Beluga
                                                                                Vodka</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5757">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/danzka/">Danzka
                                                                                Vodka</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5762">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/tovaritch/">Tovaritch</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5751">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/absolut/">Absolut
                                                                                Vodka</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5761">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/smirnoff/">Smirnoff</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5760">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/skyy/">SKYY</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5759">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/putinka/">Putinka
                                                                                Vodka</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5758">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/grey-goose/">Grey
                                                                                Goose</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5753">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-manh/vodka/blavod/">Blavod
                                                                                Vodka</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5755">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ca-sau/">Vodka
                                                                                cá sấu</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1396">
                                                        <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/cognac/">Rượu
                                                                Cognac</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5738">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/hennessy/">Hennessy</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5740">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/remy/">Remy
                                                                                Martin</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5739">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/martell/">Martell</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5737">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/courvoisier/">Courvoisier</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5736">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/camus/">Camus</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5608">
                                                        <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/armagnac/">Rượu
                                                                Agmagnac</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5611">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/brandy/">Brandy</a>
                                                </li>
                                        </ul>
                                </li>
                                <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1402">
                                        <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-pha-che/">Rượu pha
                                                chế</a>
                                        <span class="arrow"></span>
                                        <ul class="sub-menu">
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3843">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/gin/">GIN</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5848">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bombay/">Bombay
                                                                                Gin</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5908">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/gordons-gin/">Gordon’s
                                                                                Gin</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5849">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/hendricks/">Hendricks
                                                                                Gin</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5854">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/tanqueray-gin/">Tanqueray
                                                                                Gin</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3844">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/rhum/">RHUM</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5857">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bacardi/">Bacardi</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5856">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/captain-morgan/">Captain
                                                                                Morgan</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5855">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/havana-club/">Havana
                                                                                Club</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5868">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/san-pham/malibu/">Malibu</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3848">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/tequila/">TEQUILA</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5863">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/tequila-jose-cuervo/">Tequila
                                                                                Jose Cuervo</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5862">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/tequila-patron/">Tequila
                                                                                Patron</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5861">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-pha-che/tequila/tequila-reserva-silver-1800/">Tequila
                                                                                1800</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3845">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-pha-che/liqueur/">RƯỢU
                                                                MÙI/
                                                                LIQUEURS</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5866">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/martini/">Martini</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5872">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/san-pham/cointreau/">Cointreau</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5869">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/san-pham/kahlua/">Kahlua</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5865">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/san-pham/midori-liquer/">Midori</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5871">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/san-pham/dom-benedictine/">DOM</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5873">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/san-pham/campari/">Campari</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5870">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/san-pham/galliano-lautentico/">Galliano</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5867">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/maria-brizard/">Maria
                                                                                Brizard</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5874">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bols/">Bols</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3847">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-pha-che/ruou-thao-moc/">Rượu
                                                                Thảo
                                                                Mộc</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5909">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/jagermeister/">Jaegermeister</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3846">
                                                        <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-sua/">Rượu
                                                                Sữa</a>
                                                        <span class="arrow"></span>
                                                        <ul class="sub-menu">
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5859">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/baileys/">Baileys</a>
                                                                </li>
                                                                <li
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5860">
                                                                        <a
                                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/sheridans/">Sheridan’s</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5614">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-trai-cay/">Rượu
                                                                Trái Cây</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5615">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/ruou-sake/">Rượu
                                                                Sakê</a>
                                                </li>
                                        </ul>
                                </li>
                                <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2131">
                                        <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bia-ban-chay-nhat/">Bia
                                                nhập</a>
                                        <span class="arrow"></span>
                                        <ul class="sub-menu">
                                                <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9819">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bia-ban-chay-nhat/5-loai-bia-bi-gia-va-chat-luong-tot-nhat/">BIA
                                                                BỈ</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9820">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bia-ban-chay-nhat/5-loai-bia-duc-gia-va-chat-luong-tot-nhat-hien-nay/">BIA
                                                                ĐỨC</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9821">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bia-ban-chay-nhat/bia-ha-lan-ban-chay-nhat/">BIA
                                                                HÀ LAN</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9822">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bia-ban-chay-nhat/5-loai-bia-lam-thu-cong-tai-viet-nam-co-gia-va-chat-luong-tot-nhat/">BIA
                                                                THỦ CÔNG VIỆT NAM</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9824">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bia-ban-chay-nhat/bia-y/">BIA
                                                                Ý</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9823">
                                                        <a
                                                                href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bia-ban-chay-nhat/bia-my/">BIA
                                                                MỸ</a>
                                                </li>
                                        </ul>
                                </li>
                                <li
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-6441">
                                        <a href="https://ruouthuonghieu.com/tin-tuc/">Kiến thức rượu</a>
                                        <span class="arrow"></span>
                                        <ul class="sub-menu">
                                                <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5803">
                                                        <a
                                                                href="https://ruouthuonghieu.com/tin-tuc/wine-tasting-events/">Wine
                                                                tasting events</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5802">
                                                        <a href="https://ruouthuonghieu.com/tin-tuc/ruou-va-mon-an/">Rượu
                                                                và món Ăn</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6388">
                                                        <a href="https://ruouthuonghieu.com/tin-tuc/tin-tuc-ve-ruou/">Tin
                                                                tức về rượu</a>
                                                </li>
                                                <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5801">
                                                        <a href="https://ruouthuonghieu.com/tin-tuc/pha-che-cocktail/">Pha
                                                                chế cocktail</a>
                                                </li>
                                        </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1390"><a
                                                href="https://ruouthuonghieu.com/lien-he/">Liên hệ</a></li>
                        </ul>
                </div>
                <!-- End Menu on mobile-->
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="{{ asset('asset/js/main.js') }}"></script>
</body>

</html>