@extends('website.layouts.master')
@section('title')
Giỏ hàng
@endsection
@section('content')
<script src="//code.jquery.com/jquery.js"></script>
<link rel="stylesheet" href="{{asset('asset/css/cart.css')}}">
<main class="cd-main-content" style="min-height: auto;">
    <!-- Banner -->
    <div class="banner">
    </div>
    <!-- End Banner -->
    <!-- Wrapper -->
    <div class="wrapper main-container" style="padding: 30px 0;">
        <!-- Desktop Cart-->
        <div class="main container hidden-xs cart-desktop">
            <!-- Cart title -->
            <div class="header-cart" style="background:#fff;">
                <div class="title-cart">
                    <h3 style="line-height: 1.45">Giỏ hàng giỏ bạn</h3>
                    @if(session()->get('cart') != null)
                        (<span class="count_item_pr">
                            @php
                            $total_item = 0;
                            @endphp
                            @foreach(session()->get('cart') as $id => $cartItem )
                                @php
                                $total_item ++;
                                @endphp
                            @endforeach
                            {{$total_item}}
                        </span> sản phẩm)
                    @endif
                </div>
            </div>
            <!-- End Cart title  -->
            <div class="col-main cart_desktop_page cart-page">
                @if(session()->get('cart') != null)
                    <div class="cart page_cart hidden-xs">
                        <form data-url="{{route('cart.update')}}" class="margin-bottom-0 update_cart_url" id="update_cart_url">
                            @csrf
                            <div class="bg-scroll">
                                <div class="cart-thead">
                                    <div style="width: 17%">Ảnh sản phẩm</div>
                                    <div style="width: 33%"><span class="nobr">Tên sản phẩm</span></div>
                                    <div style="width: 15%" class="a-center"><span class="nobr">Đơn giá</span></div>
                                    <div style="width: 20%" class="a-center">Số lượng</div>
                                    <div style="width: 15%" class="a-center">Thành tiền</div>
                                </div>
                                <div class="cart-tbody">
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach(session()->get('cart') as $id => $cartItem)
                                        @php
                                            $total += $cartItem['price'] * $cartItem['quantity']
                                        @endphp
                                        <div class="item-cart productid-{{$cartItem['id']}}">
                                            <div style="width: 17%" class="image">
                                                <a class="product-image" title="{{$cartItem['name']}}" href="{{route('product', $cartItem['slug'])}}">
                                                    <img width="75" height="auto" alt="{{$cartItem['name']}}" src="{{asset('/images/products/'.$cartItem['image'])}}">
                                                </a>
                                            </div>
                                            <div style="width: 33%" class="prd_name">
                                                <h2 class="product-name">
                                                    <a class="text2line" href="{{route('product', $cartItem['slug'])}}">{{$cartItem['name']}}</a>
                                                    <span class="variant-title" style="display: none;">Default Title</span>
                                                </h2>
                                                <a class="button remove-item remove-item-cart" title="Xóa" href="javascript:;" data-id="{{$cartItem['id']}}">
                                                    <span>
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                        <span>Xóa sản phẩm</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div style="width: 15%" class="a-center">
                                                <span class="item-price">
                                                    <span class="price">{{number_format($cartItem['price'], 0, ',', '.')}}₫</span>
                                                </span>
                                            </div>
                                            <div style="width: 20%" class="a-center">
                                                <div class="input_qty_pr input_qty_cart">
                                                    <input class="productID" type="hidden" name="productID" value="{{$cartItem['id']}}">
                                                    <button disabled="" class="btn_num num_1 reduced_pop items-count btn-minus cart_update" data-id="{{$cartItem['id']}}" data-id="{{$id}}" type="button">–</button>
                                                    <input data-id="{{$id}}" type="number" maxlength="12" min="1" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" class="input-text number-sidebar input_pop input_pop qtyItem{{$cartItem['id']}} input-quantity-{{$cartItem['id']}} product_qty" id="qtyItem{{$cartItem['id']}}" name="product_qty" size="4" value="{{$cartItem['quantity'] ?? 1}}">
                                                    <button class="btn_num num_2 increase_pop items-count btn-plus cart_update" data-id="{{$cartItem['id']}}" data-id="{{$id}}" type="button">+</button>
                                                </div>
                                            </div>
                                            <div style="width: 15%" class="a-center"><span class="cart-price"> <span class="price">{{number_format($cartItem['price'] * $cartItem['quantity'] , 0, ',', '.')}}₫</span> </span></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </form>
                        <div class="cart-collaterals cart_submit row" style="justify-content: flex-end;">
                            <div class="totals-table totals col-sm-12 col-md-6 col-xs-12">
                                <div class="totals">
                                    <div class="inner">
                                        <table class="table shopping-cart-table-total margin-bottom-0" id="shopping-cart-totals-table">
                                            <colgroup>
                                                <col>
                                                <col>
                                            </colgroup>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="0" class="a-right">
                                                        <span style="display: inline">Tạm tính:</span>
                                                    </td>
                                                    <td class="a-right">
                                                        <strong>
                                                            <span class="totals_price price" style="display: inline">{{number_format($total, 0, ',', '.')}}₫</span>
                                                        </strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="0" class="a-right">
                                                        <span style="display: inline">Thành tiền:</span>
                                                    </td>
                                                    <td class="a-right">
                                                        <strong>
                                                            <span class="totals_price_second totals_price price" style="display: inline">{{number_format($total, 0, ',', '.')}}₫</span>
                                                        </strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <ul class="checkout">
                                            <li class="clearfix f-right">
                                                <button class="btn btn-white f-left" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='/collections/all'">
                                                    <span>Tiếp tục mua hàng</span>
                                                </button>
                                                <button class="btn btn-primary button btn-proceed-checkout f-right" title="Thực hiện thanh toán" type="button" onclick="window.location.href='/checkout'">
                                                    <span>Thực hiện thanh toán</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <p class="hidden-xs-down">Không có sản phẩm nào trong giỏ hàng. Quay lại <a href="{{route('home')}}" style="color:#f34111;">cửa hàng</a>
                    để tiếp tục mua sắm.</p>
                @endif
            </div>
        </div>
        <!-- End Desktop Cart -->
        <!-- Mobile Cart -->
        <div class="cart-mobile d-md-none d-lg-none">
            <form data-url="{{route('cart.update')}}" class="margin-bottom-0 update_cart_url" novalidate>
                @csrf
                <!-- Title cart -->
                <div class="header-cart" style="background:#fff;">
                    <div class="title-cart">
                        <h3>Giỏ hàng của bạn</h3>
                        @if(session()->get('cart') == null)
                            <p>(Chưa có sản phẩm nào) nhấn vào <a href="{{route('home')}}">cửa hàng</a> để mua hàng</p>
                        @endif
                    </div>
                </div>
                <!-- End Title cart -->
                <div class="header-cart-content" style="background:#fff;">
                @if(session()->get('cart') != null)
                    <div class="cart_page_mobile content-product-list">
                        @foreach(session()->get('cart') as $id => $cartItem)
                        <div class="item-product item productid-{{$cartItem['id']}}">
                            <div class="item-product-cart-mobile">
                                <a href="{{route('product', $cartItem['slug'])}}" class="product-images1" title="{{$cartItem['name']}}">
                                    <img style="height: auto" alt="{{$cartItem['name']}}" width="80" height="150" src="{{asset('/images/products/'.$cartItem['image'])}}">
                                </a>
                            </div>
                            <div class="title-product-cart-mobile">
                                <h3 style="color: #323c3f; letter-spacing: .01em;">
                                    <a href="" title="">{{$cartItem["name"]}}</a>
                                </h3>
                                <p>Giá: <span>{{number_format($cartItem['price'], 0, ',', '.')}}₫</span></p>
                            </div>
                            <div class="select-item-qty-mobile">
                                <div class="txt_center input_qty_cart">
                                    <input class="productID" type="hidden" name="productID" value="{{$cartItem['id']}}">
                                    <button class="btn_num num_1 reduced items-count1 btn-minus cart_update" data-id="{{$cartItem['id']}}" type="button">–</button>
                                    <input id="#input-pop-2" data-id="{{$cartItem['id']}}" type="number" maxlength="12" min="1" class="input-text number-sidebar1 input_pop input_pop quantity input-quantity-{{$cartItem['id']}} product_qty"  oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" size="4" value="{{$cartItem['quantity'] ?? 1}}" style="border: 1px solid #e1e1e1; outline: none">
                                    <!-- <input type="text" value="{{$cartItem['quantity']}}"> -->
                                    <button class="btn_num num_2 increase items-count1 btn-plus cart_update" data-id="{{$cartItem['id']}}" type="button">+</button>
                                </div>
                                <a class="button remove-item remove-item-cart" href="javascript:;" data-id="111">Xóa</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="header-cart-price">
                        <div class="title-cart">
                            <h3 class="text-xs-left" style="color: #323c3f; letter-spacing: .01em; margin-top: 20px; margin-bottom: 10px">Tổng tiền</h3>
                            <a class="text-xs-right pull-right totals_price_mobile totals_price" href="">{{number_format($total, 0, ',', '.')}}₫</a>
                        </div>
                        <div class="checkout">
                            <a href="" class="btn btn-proceed-checkout-mobile" style="color: #fff;background-color: #f34111; border: none; outline: none">
                                <span>Tiến hành thanh toán</span>
                            </a>
                            <button class="btn btn-white f-left" title="Tiếp tục mua hàng" type="button" style="outline: none; border: 0">
                                <span>Tiếp tục mua hàng</span>
                            </button>
                        </div>
                    </div>
                @endif
                </div>
            </form>
        </div>
        <!-- End Mobile Cart -->
    </div>
    <!-- End Wrapper -->
</main>
<script type="text/javascript" src="{{asset('asset/js/add_to_cart.js')}}"></script>
@endsection