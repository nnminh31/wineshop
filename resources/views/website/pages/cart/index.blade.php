@extends('website.layouts.master')
@section('title')
Giỏ hàng
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('asset/css/cart.css')}}">
<main class="cd-main-content">
    <!-- Banner -->
    <div class="banner">
    </div>
    <!-- End Banner -->
    <!-- Wrapper -->
    <div class="wrapper main-container">
        <!-- Desktop Cart-->
        <div class="main container hidden-xs cart-desktop">
            <!-- Cart title -->
            <div class="header-cart" style="background:#fff;">
                <div class="title-cart">
                    <h3 style="line-height: 1.45">Giỏ hàng giỏ bạn</h3>
                    (<span class="count_item_pr">1</span> sản phẩm)
                </div>
            </div>
            <!-- End Cart title  -->
            <div class="col-main cart_desktop_page cart-page">
                <div class="cart page_cart hidden-xs">
                    <form action="" class="margin-bottom-0">
                        <div class="bg-scroll">
                            <div class="cart-thead">
                                <div style="width: 17%">Ảnh sản phẩm</div>
                                <div style="width: 33%"><span class="nobr">Tên sản phẩm</span></div>
                                <div style="width: 15%" class="a-center"><span class="nobr">Đơn giá</span></div>
                                <div style="width: 20%" class="a-center">Số lượng</div>
                                <div style="width: 15%" class="a-center">Thành tiền</div>
                            </div>
                            <div class="cart-tbody">
                                <div class="item-cart productid-61019412">
                                    <div style="width: 17%" class="image"><a class="product-image" title="Thức ăn cho chó Nature Gourmet lọ 400g Mix thịt rau củ sấy - CutePets" href="/thuc-an-cho-cho-nature-gourmet-lo-400g-mix-thit-rau-cu-say"><img width="75" height="auto" alt="Thức ăn cho chó Nature Gourmet lọ 400g Mix thịt rau củ sấy - CutePets" src="//bizweb.dktcdn.net/thumb/small/100/307/433/products/thuc-an-cho-cho-nature-gourmet-lo-400g-mix-thit-rau-cu-say-3.jpg"></a></div>
                                    <div style="width: 33%" class="prd_name">
                                        <h2 class="product-name"> <a class="text2line" href="/thuc-an-cho-cho-nature-gourmet-lo-400g-mix-thit-rau-cu-say">Thức ăn cho chó Nature Gourmet lọ 400g Mix thịt rau củ sấy - CutePets</a><span class="variant-title" style="display: none;">Default Title</span> </h2><a class="button remove-item remove-item-cart" title="Xóa" href="javascript:;" data-id="61019412"><span><i class="fa fa-trash" aria-hidden="true"></i><span>Xóa sản phẩm</span></span></a>
                                    </div>
                                    <div style="width: 15%" class="a-center"><span class="item-price"> <span class="price">90.000₫</span></span></div>
                                    <div style="width: 20%" class="a-center">
                                        <div class="input_qty_pr"><input class="variantID" type="hidden" name="variantId" value="61019412"><button disabled="" class=" reduced_pop items-count btn-minus" type="button">–</button><input type="text" maxlength="12" min="1" onchange="if(this.value == 0)this.value=1;" class="input-text number-sidebar input_pop input_pop qtyItem61019412" id="qtyItem61019412" name="Lines" size="4" value="1"><button class="increase_pop items-count btn-plus" type="button">+</button></div>
                                    </div>
                                    <div style="width: 15%" class="a-center"><span class="cart-price"> <span class="price">90.000₫</span> </span></div>
                                </div>
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
                                                        <span class="totals_price price" style="display: inline">90.000₫</span>
                                                    </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="0" class="a-right">
                                                    <span style="display: inline">Thành tiền:</span>
                                                </td>
                                                <td class="a-right">
                                                    <strong>
                                                        <span class="totals_price_second totals_price price" style="display: inline">90.000₫</span>
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
            </div>
        </div>
        <!-- End Desktop Cart -->
        <!-- Mobile Cart -->
        <div class="cart-mobile hidden-mb hidden-lg hidden-sm">
            <form action="" novalidate class="margin-bottom-0">
                ssss
            </form>
        </div>
        <!-- End Mobile Cart -->
    </div>
    <!-- End Wrapper -->
</main>
@endsection