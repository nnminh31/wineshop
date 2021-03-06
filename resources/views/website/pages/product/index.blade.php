@extends('website.layouts.master')
@section('title')
{{$product->name}}
@endsection
@section('content')

<style>
    .swal-modal .swal-text {
        text-align: center;
    }
    .stopScroll {
        overflow-y: hidden;
    }
    .swal2-cancel { 
        color: #474c5f !important;
        background-color: #ebebeb !important;
        border-color: #dc3545 !important;
        transition: all 0.2s ease-in-out !important;
    }
    .btn-proceed-checkout {
        background: #f34111 !important;
        border: 1px solid #f34111 !important;
        transition: all 0.2s ease-in-out !important;
    }
    .btn-proceed-checkout:hover {
        background: #fff !important;
        border: 1px solid #f34111 !important;
        color: #f34111 !important;
    }
    .order-1 { order: 1; }
    .order-2 { order: 2; }

</style>
<script src="//code.jquery.com/jquery.js"></script>
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
<main class="cd-main-content">
    <!-- Banner -->
    <div class="banner">
        <div class="container">
            <div class="slider-banner slider-general owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <a href="javascript:void(0)">
                                <img src="{{asset('/images/banners/banner1.jpg')}}" class="img-fluid w-100" alt="" srcset="">
                            </a>
                        </div>
                        <div class="owl-item">
                            <a href="javascript:void(0)">
                                <img src="{{asset('/images/banners/banner1.jpg')}}" class="img-fluid w-100" alt="" srcset="">
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
    <!-- Wrapper -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <!-- Product image -->
                <div class="col-md-6">
                    <div class="product-gallery">
                        <div class="content-carousel">
                            <div>
                                <a href="javascript:void(0)" title="{{$product->name}}">

                                    <img width="576" height="576" src="{{asset('/images/products/'.$product->image)}}" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="{{asset('/images/products/'.$product->image)}} 600w, {{asset('/images/products/'.$product->image)}} 200w, {{asset('/images/products/'.$product->image)}} 300w, {{asset('/images/products/'.$product->image)}} 100w" sizes="(max-width: 600px) 100vw, 600px">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product image -->
                <!-- Product Info -->
                <div class="col-md-6">
                    <div class="product-detail">
                        <h1 class="title-page">{{$product->name}}</h1>
                        <p class="price">
                            <span class="price_sale_{{$product->id}}">{{number_format($product->price, 0, ',', '.')}}</span>
                            <span class="">???</span>
                        </p>
                        <div class="description" style="overflow: hidden; text-overflow: ellipsis;white-space: nowrap;">
                            {{strip_tags(trim(html_entity_decode($product->description)))}}
                        </div>
                        <div class="see-more" style="margin-top: 10px">
                            <a class="see-detail" href="#block-tab-infor" style="color: #f34111">[Xem th??m]</a>
                        </div>
                        <ul>
                            @if($product->country)
                            <li>
                                Qu???c Gia:
                                <a href="javascript:void(0)" rel="tag">{{$product->country}}</a>
                            </li>
                            @endif
                            @if($product->concentration)
                            <li>
                                N???ng ?????:
                                <a href="javascript:void(0)" rel="tag">{{$product->concentration}}%</a>
                            </li>
                            @endif
                            @if($product->capacity)
                            <li>
                                Dung T??ch:
                                <a href="javascript:void(0)" rel="tag">{{$product->capacity}}ml</a>
                            </li>
                            @endif
                        </ul>


                        <div class="box-1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="shop">
                                        <p class="p1">?????A CH??? MUA R?????U</p>
                                    </div>
                                    <div class="label-shop mtop20">C?? 2 ?????a ch??? cung c???p s???n ph???m n??y:</div>
                                    <ul class="mtop10">
                                        <li>Shop r?????u C??i Th??ng G???: 31C Tr???n Qu???c To???n, Ph?????ng 8, Qu???n 3, Th??nh ph??? H??? Ch?? Minh <b>Hotline: 0888 01 77 88 / 0903 504 745</b></li>
                                        <li>Shop r?????u v?? th???c ph???m Jungle Market: 369 Hai B?? Tr??ng, Ph?????ng 8, Qu???n 3, Th??nh ph??? H??? Ch?? Minh <b>Hotline: 082 3579 369 / 082 3979 369</b></li>
                                    </ul>
                                </div>
                                <div class="form-product col-md-12">

                                    <form data-url="{{route('cart.create')}}" role="form" id="add_product_to_cart">
                                        @csrf
                                        <div class="form-group form_button_details">
                                            <div class="custom input_number_product custom-btn-number form-control">
                                                <button class="btn_num num_1 button button_qty btn-minus" data-id="{{$product->id}}" type="button">-</button>
                                                <input type="number" id="qtym" name="product_qty" value="1" min="1" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" class="form-control prd_quantity cart_product_qty_{{$product->id}} quantity input-quantity-{{$product->id}}" data-id="{{$product->id}}">
                                                <button class="btn_num num_2 button button_qty btn-plus" data-id="{{$product->id}}" type="button">+</button>
                                            </div>
                                            <div class="button_actions">
                                                <input class="hidden" type="hidden" name="variantId" value="{{$product->id}}">

                                                <button type="submit" class="btn btn-lg  btn-cart button_cart_buy_enable add_cart btn_buy" data-id="{{$product->id}}" title="Mua h??ng">
                                                    <span class="btn-content">Mua h??ng</span>
                                                </button>
                                            </div>
                                            <div class="chatshop">
                                                <a href="https://www.messenger.com/t/100010397464106">Chat v???i shop</a>
                                            </div>

                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-12">
                                    <div class="flex-center mgt-10">
                                        <span class="clor">CHIA S???:</span>
                                        <p class="soci">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{route('product', $product->slug)}}" target="_blank" title="" class="fa fa-facebook"></a>
                                            <a href="https://plus.google.com/share?url={{route('product', $product->slug)}}" target="_blank" title="" class="fa fa-google-plus"></a>
                                            <a href="https://twitter.com/home?status={{route('product', $product->slug)}}" target="_blank" title="" class="fa fa-twitter"></a>
                                            <a href="https://pinterest.com/pin/create/button/?url={{route('product', $product->slug)}}&amp;media={{asset('/images/products/'.$product->image)}}&amp;description=" title="" class="fa fa-pinterest" target="_blank"></a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" id="block-tab-infor">
                    <div class="product-info">
                        <h4>TH??NG TIN S???N PH???M</h4>
                        <div class="cache">
                            {!!$product->description!!}
                        </div>
                    </div>
                </div>
                <!-- End Product Info -->
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-related">
                        <h3>S???N PH???M LI??N QUAN</h3>
                        <div class="list flex">
                            @foreach($related_products as $related_product)
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="product-item">
                                    <a href="{{route('product', $related_product->slug)}}" title="" class="product-img">
                                        <img width="300" height="300" src="{{asset('/images/products/'.$related_product->image)}}" alt="" loading="lazy" sizes="(max-width: 300px) 100vw, 300px">
                                    </a>
                                    <div class="product-wrap">
                                        <h3><a href="{{route('product', $related_product->slug)}}" title="{{$related_product->name}}">{{$related_product->name}}</a></h3>


                                        <p class="price price-list"><span class="woocommerce-Price-amount amount">{{number_format($related_product->price, 0, ',', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">???</span></span></p>

                                        <p class="link-detail"> <a href="{{route('product', $related_product->slug)}}" title="{{$related_product->name}}">Chi ti???t</a></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
</main>
<script type="text/javascript" src="{{asset('asset/js/add_to_cart.js')}}"></script>
<script>
    function redirect_to_url() {
        redirect("{{route('cart')}}")
    }
    function redirect_to_checkout() {
        redirect("{{route('checkout')}}")
    }
</script>
<script>
    $('.see-detail').click(function(e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $("#block-tab-infor").offset().top,
        }, 700);
        return false;
    });
</script>
@endsection