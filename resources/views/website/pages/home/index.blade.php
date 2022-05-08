@extends('website.layouts.master')
@section('title')
Trang chủ - Bán rượu chính hãng - Giỏ quà tết sang trọng
@endsection
@section('content')
<main class="cd-main-content">
    <!-- Banner -->
    <div class="banner">
        <div class="container">
            <div class="slider-banner slider-general owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <a href="javascript:void(0)">
                                <img src="https://ruouthuonghieu.com/wp-content/uploads/2020/07/xFJ_1.jpg.pagespeed.ic.Codx1Wq-dS.webp" class="img-fluid w-100" alt="" srcset="">
                            </a>
                        </div>
                        <div class="owl-item">
                            <a href="javascript:void(0)">
                                <img src="https://ruouthuonghieu.com/wp-content/uploads/2020/07/xFJ_1.jpg.pagespeed.ic.Codx1Wq-dS.webp" class="img-fluid w-100" alt="" srcset="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <div class="owl-prev">
                        <button></button>
                    </div>
                    <div class="owl-next">
                        <button></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Tet-gift -->
    <div class="tet-gift">
        <div class="container">
            <div class="title-product">
                <h1>
                    <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/danh-muc-cho-banner-quang-cao/20-san-pham-ban-chay-nhat/" title="QUÀ TẶNG TẾT 2021">QUÀ TẶNG TẾT 2021</a>
                </h1>
            </div>
            <div class="slide-pro">
                <div class="product-slider slider-general owl-carousel owl-theme">
                    @foreach($tet_holidays as $t_holiday)
                    <div class="item cloned">
                        <div class="product-item">
                            <a href="{{route('product', $t_holiday->slug)}}" title="{{$t_holiday->name}}" class="product-img">

                                <img width="300" height="300" src="{{asset('/images/products/'.$t_holiday->image)}}" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy">
                            </a>
                            <div class="product-wrap">
                                <h3>
                                    <a href="{{route('product', $t_holiday->slug)}}" title="{{$t_holiday->name}}">{{$t_holiday->name}}</a>
                                </h3>


                                <p class="price price-list">
                                    <span class="woocommerce-Price-amount amount">{{number_format($t_holiday->price, 0, ',', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>
                                </p>

                                <p class="link-detail">
                                    <a href="{{route('product', $t_holiday->slug)}}" title="">Chi
                                        tiết</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- End Tet-gift -->

    <!-- Brands -->
    <div class="brands-wrap">
        <div class="container">
            <div class="row">
                <!-- Col-md-9 -->
                <div class="col-md-9">
                    <div class="brands">
                        <div class="title-block">
                            <h2>
                                <a href="javascript:void(0)" title="THƯƠNG HIỆU NỔI TIẾNG">THƯƠNG
                                    HIỆU NỔI TIẾNG </a>
                            </h2>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tab-1" role="tab" data-toggle="tab">Rượu
                                        mạnh</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#tab-2" role="tab" data-toggle="tab">Rượu
                                        vang</a>
                                </li>
                            </ul>

                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Tab-panel 1 -->
                            <div role="tabpanel" class="tab-pane fade in show active" id="tab-1">
                                <div class="brand-list">
                                    <div class="brand-banner">
                                        @foreach($brands as $brand)
                                        @if($brand->ordinal == 1 && $brand->type == "Rượu mạnh")
                                        <a href="javascript:void(0)" title="{{$brand->name}}">
                                            <img src="{{asset('/images/brands/'.$brand->icon)}}" alt="{{$brand->name}}">
                                        </a>
                                        @endif
                                        @endforeach
                                    </div>
                                    <!--  -->
                                    <div class="brand-s">
                                        <ul class="brand-logo">
                                            @foreach($brands as $brand)
                                            @if($brand->ordinal == null && $brand->type == "Rượu mạnh")
                                            <li>
                                                <a href="{{route('brand', $brand->slug)}}" title="{{$brand->name}}">
                                                    <img src="{{asset('/images/brands/'.$brand->icon)}}" alt="{{$brand->name}}">
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab-panel 1 -->
                            <!-- Tab-panel 2 -->
                            <div role="tabpanel" class="tab-pane fade" id="tab-2">
                                <div class="brand-list">
                                    <div class="brand-banner">
                                        @foreach($brands as $brand)
                                        @if($brand->ordinal == 1 && $brand->type == "Rượu vang")
                                        <a href="javascript:void(0)" title="{{$brand->name}}">
                                            <img src="{{asset('/images/brands/'.$brand->icon)}}" alt="{{$brand->name}}">
                                        </a>
                                        @endif
                                        @endforeach
                                    </div>
                                    <!--  -->
                                    <div class="brand-s">
                                        <ul class="brand-logo">
                                            @foreach($brands as $brand)
                                            @if($brand->ordinal == null && $brand->type == "Rượu vang")
                                            <li>
                                                <a href="{{route('brand', $brand->slug)}}" title="{{$brand->name}}">
                                                    <img src="{{asset('/images/brands/'.$brand->icon)}}" alt="{{$brand->name}}">
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab-panel 2 -->
                        </div>
                        <!-- End Tab panes -->
                    </div>
                </div>
                <!-- End Col-md-9 -->
                <!-- Col-md-3 -->
                <div class="col-md-3">
                    <div class="brand-news">
                        <div class="brand-contact">
                            <div class="br-news">
                                <div class="flex-center-between">
                                    <h4>
                                        <a href="https://ruouthuonghieu.com/category/tin-tuc/" title="Bản tin">Bản
                                            tin</a>
                                    </h4>
                                    <a href="https://ruouthuonghieu.com/category/tin-tuc/" title="Bản tin" target="">Xem thêm
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li>
                                        <a href="https://ruouthuonghieu.com/gio-qua-tet/qua-tet-tang-sep-hop-phong-thuy/" title="QUÀ TẾT TẶNG SẾP HỢP PHONG THỦY">
                                            <i class="fa fa-angle-right"></i>
                                            QUÀ TẾT TẶNG SẾP
                                            HỢP PHONG THỦY
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://ruouthuonghieu.com/tin-tuc/happy-birthday-11-year-anniversary/" title="HAPPY BIRTHDAY 11 YEAR ANNIVERSARY"><i class="fa fa-angle-right"></i>
                                            HAPPY BIRTHDAY
                                            11 YEAR
                                            ANNIVERSARY </a>
                                    </li>
                                    <li>
                                        <a href="https://ruouthuonghieu.com/tin-tuc/glenfiddich-single-malt-scotch-whisky-hop-qua-tet-2022/" title="GLENFIDDICH SINGLE MALT SCOTCH WHISKY HỘP QUÀ TẾT 2022"><i class="fa fa-angle-right"></i>
                                            GLENFIDDICH
                                            SINGLE MALT
                                            SCOTCH WHISKY
                                            HỘP QUÀ TẾT 2022
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://ruouthuonghieu.com/tin-tuc/goi-y-cac-dong-vang-ngon-dip-le-quoc-khanh-2-9/" title="GỢI Ý CÁC DÒNG VANG NGON DỊP LỄ QUỐC KHÁNH 2 -9"><i class="fa fa-angle-right"></i>
                                            GỢI Ý CÁC DÒNG
                                            VANG NGON DỊP LỄ
                                            QUỐC KHÁNH 2 -9
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Col-md-3 -->
                <!-- Col-md-12 -->
                <div class="col-md-12">
                    <div class="promo-banner">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bia-ban-chay-nhat/" title class="zoom">
                                    <img src="https://ruouthuonghieu.com/wp-content/uploads/2020/08/Banner_4-2.png" alt="" title="">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bia-ban-chay-nhat/" title class="zoom">
                                    <img src="https://ruouthuonghieu.com/wp-content/uploads/2020/08/Banner_4-2.png" alt="" title="">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bia-ban-chay-nhat/" title class="zoom">
                                    <img src="https://ruouthuonghieu.com/wp-content/uploads/2020/08/Banner_4-2.png" alt="" title="">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/bia-ban-chay-nhat/" title class="zoom">
                                    <img src="https://ruouthuonghieu.com/wp-content/uploads/2020/08/Banner_4-2.png" alt="" title="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Col-md-12 -->
            </div>
        </div>
    </div>
    <!-- End Brands -->

    <!-- Hot product -->
    <div class="hot-product">
        <div class="container">
            <div class="title-block">
                <h2>
                    <a href="https://ruouthuonghieu.com/shop-ruou-uy-tin/danh-muc-cho-banner-quang-cao/san-pham-moi/" title="Sản Phẩm Mới" class="text-uppercase">Sản Phẩm
                        Mới</a>
                </h2>
            </div>
            <div class="product-slider slider-general owl-carousel owl-theme">
                @foreach($hot_products as $hot_product)
                <div class="item cloned">
                    <div class="product-item">
                        <a href="{{route('product', $hot_product->slug)}}" title="{{$hot_product->name}}" class="product-img">

                            <img width="300" height="300" src="{{asset('/images/products/'.$hot_product->image)}}" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy" srcset="{{asset('/images/products/'.$hot_product->image)}} 300w, {{asset('/images/products/'.$hot_product->image)}} 200w, {{asset('/images/products/'.$hot_product->image)}} 100w, {{asset('/images/products/'.$hot_product->image)}} 578w" sizes="(max-width: 300px) 100vw, 300px">
                        </a>
                        <div class="product-wrap">
                            <h3><a href="{{route('product', $hot_product->slug)}}" title="KHAY QUÀ TẾT K0042">{{$hot_product->name}}</a>
                            </h3>


                            <p class="price price-list">
                                <span class="woocommerce-Price-amount amount">{{number_format($hot_product->price, 0, ',', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>
                            </p>

                            <p class="link-detail">
                                <a href="{{route('product', $hot_product->slug)}}" title="">Chi
                                    tiết</a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Hot product -->

    <!-- Product-1  -->
    <div class="products products-1">
        <div class="container">
            <div class="title-block">
                <h2>
                    <a href="{{route('category', $category->slug)}}" title="" class="text-uppercase">{{$category->name}}</a>
                </h2>
                <div class="nav-child flex-center-end">
                    <ul class="flex-center">
                        @for ($i = 0; $i < 4; $i++)
                        <li>
                            <a href="{{route('category', $category->childCategories[$i]->name)}}" title="{{$category->childCategories[$i]->name}}">
                                {{$category->childCategories[$i]->name}}
                            </a>
                        </li>
                        @endfor
                    </ul>
                    <a href="{{route('category', $category->slug)}}" title="{{$category->name}}" class="show-all">Xem thêm</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="products_list flex">
                        <div class="brand-banner">
                            <a href="{{route('category', $category->slug)}}" title="{{$category->name}}">
                                <img src="{{asset('/images/banners/Banner_1.png')}}" alt="">
                            </a>
                        </div>
                        <div class="product-list">
                            <div class="flex" style="flex-wrap: wrap;">
                                @foreach($wines as $wine)
                                <div class="w-33">
                                    <div class="product-item">
                                        <a href="{{route('product', $wine->slug)}}" title="" class="product-img">
                                            <img width="300" height="300" src="{{asset('/images/products/'.$wine->image)}}" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy" srcset="{{asset('/images/products/'.$wine->image)}} 300w, {{asset('/images/products/'.$wine->image)}} 200w, {{asset('/images/products/'.$wine->image)}} 100w, {{asset('/images/products/'.$wine->image)}} 600w" sizes="(max-width: 300px) 100vw, 300px">
                                        </a>
                                        <div class="product-wrap">
                                            <h3>
                                                <a href="{{route('product', $wine->slug)}}" title="{{$wine->name}}">
                                                    {{$wine->name}}
                                                </a>
                                            </h3>
                                            <p class="price price-list">
                                                <span class="amount">{{number_format($wine->price, 0, ',', '.')}}&nbsp;<span class="currency_symbol">₫</span></span>
                                            </p>
                                            <p class="link-detail">
                                                <a href="{{route('product', $wine->slug)}}" title="{{$wine->name}}">Chi
                                                    tiết</a>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hot-sidebar">
                        <div class="title">TOP 5 SẢN PHẨM HOT</div>
                        <div class="hot-banner">
                            <a href="{{route('category', $category->slug)}}" title="{{$category->name}}">
                                <img src="{{asset('/images/banners/Banner-Phụ-09-09.png')}}" alt="Banner-Phụ-09-09">
                            </a>
                        </div>
                        <ul>
                            @php
                                $i = 0
                            @endphp
                            @foreach($top_wines as $top_wine)
                            @php
                                $i++
                            @endphp
                            <li>
                                <a href="{{route('product', $top_wine->slug)}}" title="{{$top_wine->name}}" class="product-img">

                                    <img width="300" height="300" src="{{asset('/images/products/'.$top_wine->image)}}" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy" srcset="{{asset('/images/products/'.$top_wine->image)}} 300w, {{asset('/images/products/'.$top_wine->image)}} 200w, {{asset('/images/products/'.$top_wine->image)}} 100w, {{asset('/images/products/'.$top_wine->image)}} 600w" sizes="(max-width: 300px) 100vw, 300px">
                                    <span>{{$i}}</span></a>
                                <div class="product-wrap">
                                    <h3><a href="{{route('product', $top_wine->slug)}}" title="{{$top_wine->name}}">{{$top_wine->name}}</a>
                                    </h3>


                                    <p class="price price-list">
                                        <span class="amount">{{number_format($top_wine->price, 0, ',', '.')}}&nbsp;<span class="currency_symbol">₫</span></span>
                                    </p>

                                </div>
                            </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="promo-banner">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="javascript:void(0)" title="" class="zoom">
                                    <img src="{{asset('/images/banners/Banner-Phụ-05.png')}}" alt="" title="">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="javascript:void(0)" title="" class="zoom">
                                    <img src="{{asset('/images/banners/Banner-Phụ-06.png')}}" alt="" title="">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="javascript:void(0)" title="" class="zoom">
                                    <img src="{{asset('/images/banners/Banner-Phụ-07.png')}}" alt="" title="">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="javascript:void(0)" title="" class="zoom">
                                    <img src="{{asset('/images/banners/Banner-Phụ-08.png')}}" alt="" title="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product-1  -->
    <!-- Product-2  -->
    <div class="products products-2">
        <div class="container">
            <div class="title-block">
                <h2>
                    <a href="{{route('category', $brandy_category->slug)}}" title="" class="text-uppercase">{{$brandy_category->name}}</a>
                </h2>
                <div class="nav-child flex-center-end">
                    <ul class="flex-center">
                        @for ($i = 0; $i < 4; $i++)
                        <li>
                            <a href="{{route('category', $brandy_category->childCategories[$i]->name)}}" title="{{$brandy_category->childCategories[$i]->name}}">
                                {{$brandy_category->childCategories[$i]->name}}
                            </a>
                        </li>
                        @endfor
                    </ul>
                    <a href="{{route('category', $brandy_category->slug)}}" title="{{$brandy_category->name}}" class="show-all">Xem thêm</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="products_list flex">
                        <div class="brand-banner">
                            <a href="{{route('category', $brandy_category->slug)}}" title="{{$brandy_category->name}}">
                                <img src="{{asset('/images/banners/xBanner_13.png.pagespeed.ic.XpJ4qrKaGS.png')}}" alt="">
                            </a>
                        </div>
                        <div class="product-list">
                            <div class="flex" style="flex-wrap: wrap;">
                                @foreach($brandies as $brandie)
                                <div class="w-33">
                                    <div class="product-item">
                                        <a href="{{route('product', $brandie->slug)}}" title="" class="product-img">
                                            <img width="300" height="300" src="{{asset('/images/products/'.$brandie->image)}}" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy" srcset="{{asset('/images/products/'.$brandie->image)}} 300w, {{asset('/images/products/'.$brandie->image)}} 200w, {{asset('/images/products/'.$brandie->image)}} 100w, {{asset('/images/products/'.$brandie->image)}} 600w" sizes="(max-width: 300px) 100vw, 300px">
                                        </a>
                                        <div class="product-wrap">
                                            <h3>
                                                <a href="{{route('product', $brandie->slug)}}" title="{{$brandie->name}}">
                                                    {{$brandie->name}}
                                                </a>
                                            </h3>
                                            <p class="price price-list">
                                                <span class="amount">{{number_format($brandie->price, 0, ',', '.')}}&nbsp;<span class="currency_symbol">₫</span></span>
                                            </p>
                                            <p class="link-detail">
                                                <a href="{{route('product', $brandie->slug)}}" title="{{$brandie->name}}">Chi
                                                    tiết</a>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hot-sidebar">
                        <div class="title">TOP 5 SẢN PHẨM HOT</div>
                        <div class="hot-banner">
                            <a href="{{route('category', $brandy_category->slug)}}" title="{{$brandy_category->name}}">
                                <img src="{{asset('/images/banners/Banner-Phụ-14-1.png')}}" alt="Banner-Phụ-14-1">
                            </a>
                        </div>
                        <ul>
                            @php
                                $i = 0
                            @endphp
                            @foreach($top_brandies as $top_brandie)
                            @php
                                $i++
                            @endphp
                            <li>
                                <a href="{{route('product', $top_brandie->slug)}}" title="{{$top_brandie->name}}" class="product-img">

                                    <img width="300" height="300" src="{{asset('/images/products/'.$top_brandie->image)}}" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy" srcset="{{asset('/images/products/'.$top_brandie->image)}} 300w, {{asset('/images/products/'.$top_brandie->image)}} 200w, {{asset('/images/products/'.$top_brandie->image)}} 100w, {{asset('/images/products/'.$top_brandie->image)}} 600w" sizes="(max-width: 300px) 100vw, 300px">
                                    <span>{{$i}}</span></a>
                                <div class="product-wrap">
                                    <h3><a href="{{route('product', $top_brandie->slug)}}" title="{{$top_brandie->name}}">{{$top_brandie->name}}</a>
                                    </h3>


                                    <p class="price price-list">
                                        <span class="amount">{{number_format($top_brandie->price, 0, ',', '.')}}&nbsp;<span class="currency_symbol">₫</span></span>
                                    </p>

                                </div>
                            </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="promo-banner">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="javascript:void(0)" title="" class="zoom">
                                    <img src="{{asset('/images/banners/Banner-Phụ-10.png')}}" alt="Banner-Phụ-10" title="">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="javascript:void(0)" title="" class="zoom">
                                    <img src="{{asset('/images/banners/Banner-Phụ-11.png')}}" alt="Banner-Phụ-11" title="">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="javascript:void(0)" title="" class="zoom">
                                    <img src="{{asset('/images/banners/Banner-Phụ-12.png')}}" alt="Banner-Phụ-12" title="">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="javascript:void(0)" title="" class="zoom">
                                    <img src="{{asset('/images/banners/Banner-Phụ-13.png')}}" alt="Banner-Phụ-13" title="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product-2  -->
    <!-- Product-3  -->
    <div class="products products-3">
        <div class="container">
            <div class="title-block">
                <h2>
                    <a href="{{route('category', $mix_category->slug)}}" title="" class="text-uppercase">{{$mix_category->name}}</a>
                </h2>
                <div class="nav-child flex-center-end">
                    <ul class="flex-center">
                        @for ($i = 0; $i < 4; $i++)
                        <li>
                            <a href="{{route('category', $mix_category->childCategories[$i]->name)}}" title="{{$mix_category->childCategories[$i]->name}}">
                                {{$mix_category->childCategories[$i]->name}}
                            </a>
                        </li>
                        @endfor
                    </ul>
                    <a href="{{route('category', $mix_category->slug)}}" title="{{$mix_category->name}}" class="show-all">Xem thêm</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="products_list flex">
                        <div class="brand-banner">
                            <a href="{{route('category', $mix_category->slug)}}" title="{{$mix_category->name}}">
                                <img src="{{asset('/images/banners/xBanner_12.png.pagespeed.ic.0bd5K3FxwL.png')}}" alt="xBanner_12">
                            </a>
                        </div>
                        <div class="product-list">
                            <div class="flex" style="flex-wrap: wrap;">
                                @foreach($mixes as $mix)
                                <div class="w-33">
                                    <div class="product-item">
                                        <a href="{{route('product', $mix->slug)}}" title="" class="product-img">
                                            <img width="300" height="300" src="{{asset('/images/products/'.$mix->image)}}" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy" srcset="{{asset('/images/products/'.$mix->image)}} 300w, {{asset('/images/products/'.$mix->image)}} 200w, {{asset('/images/products/'.$mix->image)}} 100w, {{asset('/images/products/'.$mix->image)}} 600w" sizes="(max-width: 300px) 100vw, 300px">
                                        </a>
                                        <div class="product-wrap">
                                            <h3>
                                                <a href="{{route('product', $mix->slug)}}" title="{{$mix->name}}">
                                                    {{$mix->name}}
                                                </a>
                                            </h3>
                                            <p class="price price-list">
                                                <span class="amount">{{number_format($mix->price, 0, ',', '.')}}&nbsp;<span class="currency_symbol">₫</span></span>
                                            </p>
                                            <p class="link-detail">
                                                <a href="{{route('product', $mix->slug)}}" title="{{$mix->name}}">Chi
                                                    tiết</a>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hot-sidebar">
                        <div class="title">TOP 5 SẢN PHẨM HOT</div>
                        <div class="hot-banner">
                            <a href="{{route('category', $mix_category->slug)}}" title="{{$mix_category->name}}">
                                <img src="{{asset('/images/banners/Banner-Phụ-19.png')}}" alt="Banner-Phụ-19">
                            </a>
                        </div>
                        <ul>
                            @php
                                $i = 0
                            @endphp
                            @foreach($top_mixes as $top_mix)
                            @php
                                $i++
                            @endphp
                            <li>
                                <a href="{{route('product', $top_mix->slug)}}" title="{{$top_mix->name}}" class="product-img">

                                    <img width="300" height="300" src="{{asset('/images/products/'.$top_mix->image)}}" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy" srcset="{{asset('/images/products/'.$top_mix->image)}} 300w, {{asset('/images/products/'.$top_mix->image)}} 200w, {{asset('/images/products/'.$top_mix->image)}} 100w, {{asset('/images/products/'.$top_mix->image)}} 600w" sizes="(max-width: 300px) 100vw, 300px">
                                    <span>{{$i}}</span></a>
                                <div class="product-wrap">
                                    <h3><a href="{{route('product', $top_mix->slug)}}" title="{{$top_mix->name}}">{{$top_mix->name}}</a>
                                    </h3>


                                    <p class="price price-list">
                                        <span class="amount">{{number_format($top_mix->price, 0, ',', '.')}}&nbsp;<span class="currency_symbol">₫</span></span>
                                    </p>

                                </div>
                            </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="promo-banner">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="javascript:void(0)" title="" class="zoom">
                                    <img src="{{asset('/images/banners/Banner-Phụ-15.png')}}" alt="Banner-Phụ-15" title="">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="javascript:void(0)" title="" class="zoom">
                                    <img src="{{asset('/images/banners/Banner-Phụ-16.png')}}" alt="Banner-Phụ-16" title="">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="javascript:void(0)" title="" class="zoom">
                                    <img src="{{asset('/images/banners/Banner-Phụ-17.png')}}" alt="Banner-Phụ-17" title="">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="javascript:void(0)" title="" class="zoom">
                                    <img src="{{asset('/images/banners/Banner-Phụ-18.png')}}" alt="Banner-Phụ-18" title="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product-3  -->
</main>
@endsection