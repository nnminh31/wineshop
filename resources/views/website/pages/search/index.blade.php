@extends('website.layouts.master')
@section('title')
You searched for {{isset($_GET['s']) ? $_GET['s'] : ''}}
@endsection
@section('content')
<main class="cd-main-content">
    <div class="banner">
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar-page sticky-top">
                        <aside id="secondary" class="widget-area">
                            <section id="woocommerce_product_search-4" class="widget woocommerce widget_product_search">
                                <h2 class="widget-title">Tìm kiếm</h2>
                                <form role="search" method="get" class="woocommerce-product-search" action="{{route('search')}}">
                                    <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
                                    <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Từ khóa" value="{{isset($_GET['s']) ? $_GET['s'] : ''}}" name="s">
                                    <button type="submit" value="Tìm kiếm"><i class="fa fa-search"></i></button>
                                    <input type="hidden" name="post_type" value="product">
                                </form>
                            </section>
                            <section id="product_filter-2" class="widget widget_product_filter">
                                <form action="{{route('search')}}" method="get">
                                    <div class="filter-box">
                                        <h2>Tìm kiếm sản phẩm</h2>

                                        <div class="filter">
                                            <h3>Danh mục <i class="fa fa-angle-down"></i></h3>

                                            <div class="item-filt">
                                                @foreach($categories as $cat)
                                                <label>
                                                    <span><a href="{{route('category', $cat->slug)}}">{{$cat->name}}</a></span>
                                                </label>
                                                @endforeach
                                            </div>

                                        </div>

                                        <div class="filter">
                                            <h3>Thương hiệu <i class="fa fa-angle-down"></i></h3>

                                            <div class="item-filt">
                                                @foreach($brands as $brand)
                                                <label>
                                                    <span><a href="{{route('brand', $brand->slug)}}">{{$brand->name}}</a></span>
                                                </label>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="filter">
                                            <h3>Khoảng giá <i class="fa fa-angle-down"></i></h3>

                                            <div class="item-filt">
                                                <label>
                                                    <input type="radio" name="khoang-gia" value="200000-350000">
                                                    <span>200.000 - 350.000</span>
                                                </label>

                                                <label>
                                                    <input type="radio" name="khoang-gia" value="350000-500000">
                                                    <span>350.000 - 500.000</span>
                                                </label>

                                                <label>
                                                    <input type="radio" name="khoang-gia" value="500000-750000">
                                                    <span>500.000 - 750.000</span>
                                                </label>

                                                <label>
                                                    <input type="radio" name="khoang-gia" value="750000-1000000">
                                                    <span>750.000 - 1.000.000</span>
                                                </label>

                                                <label>
                                                    <input type="radio" name="khoang-gia" value="1000000-1500000">
                                                    <span>1.000.000 - 1.500.000</span>
                                                </label>

                                                <label>
                                                    <input type="radio" name="khoang-gia" value="1500000-2000000">
                                                    <span>1.500.000 - 2.000.000</span>
                                                </label>

                                                <label>
                                                    <input type="radio" name="khoang-gia" value="2000000-3000000">
                                                    <span>2.000.000 - 3.000.000</span>
                                                </label>

                                                <label>
                                                    <input type="radio" name="khoang-gia" value="3000000-4000000">
                                                    <span>3.000.000 - 4.000.000</span>
                                                </label>

                                                <label>
                                                    <input type="radio" name="khoang-gia" value="4000000-5000000">
                                                    <span>4.000.000 - 5.000.000</span>
                                                </label>

                                                <label>
                                                    <input type="radio" name="khoang-gia" value="5000000-10000000">
                                                    <span>5.000.000 - 10.000.000</span>
                                                </label>

                                                <label>
                                                    <input type="radio" name="khoang-gia" value="10000000-">
                                                    <span>Trên 10.000.000</span>
                                                </label>

                                                <label>
                                                    <input type="radio" name="khoang-gia" value="1500000-">
                                                    <span>Trên 1.500.000</span>
                                                </label>

                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </section>
                        </aside>
                    </div>
                </div>
                <div class="col-md-9">
                    <h1 class="title-page" style="text-transform: uppercase;">Kết quả tìm kiếm: "{{$_GET['s']}}"</h1>
                    <div class="sort-page">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <div class="sort-price">
                                    <span>Sắp xếp:</span>
                                    <select name="sort" id="sort">
                                        <option value="">Lựa chọn</option>
                                        <option value="desc">Giá từ cao xuống thấp</option>
                                        <option value="asc">Giá từ thấp đến cao</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-6">
                                <div class="pagination w-100">
                                    <ul class="list-inline text-right">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-pro">
                        <div class="list flex">
                            @foreach($products as $product)
                            <div class="w-25">
                                <div class="product-item">
                                    <a href="{{route('product', $product->slug)}}" title="{{$product->name}}" class="product-img">
                                        <img width="225" height="300" src="{{asset('/images/products/'.$product->image)}}" class="attachment-medium size-medium wp-post-image" alt="{{$product->name}}" loading="lazy" srcset="{{asset('/images/products/'.$product->image)}} 225w, https://ruouthuonghieu.com/wp-content/uploads/2018/12/xG008-768x1024.jpg.pagespeed.ic.27O2C0eUIi.webp 768w, https://ruouthuonghieu.com/wp-content/uploads/2018/12/xG008-150x200.jpg.pagespeed.ic.U9EZOKUB9_.webp 150w, {{asset('/images/products/'.$product->image)}} 1152w, {{asset('/images/products/'.$product->image)}} 1920w" sizes="(max-width: 225px) 100vw, 225px">
                                    </a>
                                    <div class="product-wrap">
                                        <h3><a href="{{route('product', $product->slug)}}" title="{{$product->name}}" style="text-transform: uppercase;">{{$product->name}}</a></h3>


                                        <p class="price price-list"><span class="woocommerce-Price-amount amount">{{number_format($product->price, 0, ',', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></p>

                                        <p class="link-detail"> <a href="{{route('product', $product->slug)}}" title="{{$product->name}}">Chi tiết</a></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{$products->links('vendor.pagination.custom')}}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection