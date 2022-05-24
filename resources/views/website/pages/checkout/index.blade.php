@extends('website.layouts.checkout')
@section('title')
Rượu thương hiệu - Kiểm tra đơn hàng
@endsection
@section('content')
<main class="main">
    <header class="main__header">
        <div class="logo logo--left ">
            <a href="{{route('home')}}">
                <img class="logo__image logo__image--small " alt="Cutepets - Siêu thị thú cưng Pet shop Hà Nội" width="80" style="max-height: 80px" src="{{asset('/images/logos/logo.svg')}}">
            </a>
        </div>
    </header>
    <div class="main__content">
        <article class="animate-floating-labels row">
            <div class="col col--two">
                <section class="section">
                    <div class="section__header">
                        <div class="layout-flex">
                            <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                <i class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>
                                Thông tin nhận hàng
                            </h2>
                        </div>
                    </div>
                    <div class="section__content">
                        <div class="fieldset">
                            <div class="field field--show-floating-label">
                                <div class="field__input-wrapper">
                                    <label for="billingName" class="field__label">Họ và tên</label>
                                    <input required name="billingName" id="billingName" type="text" class="field__input" value="{{$customer->name}}">
                                </div>
                            </div>

                            <div class="field field--show-floating-label">
                                <div class="field__input-wrapper">
                                    <label for="billingPhone" class="field__label">
                                        Số điện thoại
                                    </label>
                                    <input required name="billingPhone" id="billingPhone" type="tel" class="field__input" value="{{$customer->phone}}">
                                </div>

                            </div>

                            <div class="field field--show-floating-label">
                                <div class="field__input-wrapper">
                                    <label for="billingAddress" class="field__label">
                                        Địa chỉ
                                    </label>
                                    <input required name="billingAddress" id="billingAddress" type="text" class="field__input" data-bind="billing.address" value="{{$customer->address}}" placeholder="---">
                                </div>

                            </div>
                            <div class="field field--show-floating-label ">
                                <div class="field__input-wrapper field__input-wrapper--select2">
                                    <label for="billingProvince" class="field__label">Tỉnh thành</label>
                                    <select required="" name="billingProvince" id="billingProvince" size="1" type="text" class="field__input field__input--select select2-hidden-accessible" value="{{$customer->province}}" data-address-type="province" data-address-zone="billing" data-select2-id="select2-data-billingProvince" tabindex="-1" aria-hidden="true">
                                    </select>
                                </div>

                            </div>

                            <div class="field field--show-floating-label ">
                                <div class="field__input-wrapper field__input-wrapper--select2">
                                    <label for="billingDistrict" class="field__label">
                                        Quận huyện
                                    </label>
                                    <select required="" name="billingDistrict" id="billingDistrict" size="1" type="text" class="field__input field__input--select select2-hidden-accessible" value="{{$customer->district}}" data-address-type="district" data-address-zone="billing" data-select2-id="select2-data-billingDistrict" tabindex="-1" aria-hidden="true" disabled="disabled"></select>
                                </div>

                            </div>

                            <div class="field field--show-floating-label ">
                                <div class="field__input-wrapper field__input-wrapper--select2">
                                    <label for="billingWard" class="field__label">
                                        Phường xã
                                    </label>
                                    <select required="" name="billingWard" id="billingWard" size="1" type="text" class="field__input field__input--select select2-hidden-accessible" value="{{$customer->ward}}" data-address-type="ward" data-address-zone="billing" data-select2-id="select2-data-billingWard" tabindex="-1" aria-hidden="true" disabled="disabled"></select>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @if(session()->has('cart'))
                @php
                    $total = 0;
                    $total_item = 0;
                @endphp
                @foreach(session()->get('cart') as $id => $cartItem)
                    @php
                        $total_item ++;
                    @endphp
                    @php
                        $total += $cartItem['price'] * $cartItem['quantity']
                    @endphp
                @endforeach
                <div class="col col--two">

                    <section class="section">
                        <div class="section__header">
                            <div class="layout-flex">
                                <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                    <i class="fa fa-truck fa-lg section__title--icon hide-on-desktop"></i>
                                    Vận chuyển
                                </h2>
                            </div>
                        </div>
                        <div class="section__content" data-tg-refresh="refreshShipping" id="shippingMethodList" data-define="{isAddressSelecting: false, shippingMethods: []}">
                            <div class="alert alert--loader spinner spinner--active hide" data-bind-show="isLoadingShippingMethod">
                                <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                    <use href="#spinner"></use>
                                </svg>
                            </div>


                            <div class="alert alert-retry alert--danger hide" data-bind-event-click="handleShippingMethodErrorRetry()" data-bind-show="!isLoadingShippingMethod &amp;&amp; !isAddressSelecting &amp;&amp; isLoadingShippingError">
                                <span data-bind="loadingShippingErrorMessage">Không thể load phí vận chuyển.
                                    Vui lòng thử
                                    lại</span> <i class="fa fa-refresh"></i>
                            </div>




                            <div class="content-box" data-bind-show="!isLoadingShippingMethod &amp;&amp; !isAddressSelecting &amp;&amp; !isLoadingShippingError" data-define="{shippingMethod: '564123_0,1 VND'}">

                                <div class="content-box__row" data-define-array="{shippingMethods: {name: '564123_0,1 VND', textPrice: '1₫', subtotalPriceWithShippingFee: '{{number_format($total + 1, 0, ',','.')}}₫'}}">
                                    <div class="radio-wrapper">
                                        <div class="radio__input">
                                            <input type="radio" class="input-radio" name="shippingMethod" id="shippingMethod-564123_0" value="564123_0,1 VND" data-title="Shop liên hệ báo phí ship sau: 1₫" data-bind="shippingMethod">
                                        </div>
                                        <label for="shippingMethod-564123_0" class="radio__label">
                                            <span class="radio__label__primary">Shop liên hệ báo phí ship
                                                sau</span>
                                            <span class="radio__label__accessory">
                                                <span class="content-box__emphasis">
                                                    1₫
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>


                                <div class="content-box__row" data-define-array="{shippingMethods: {name: 'c_802_Standard,30.000 VND', textPrice: '30.000₫', subtotalPriceWithShippingFee: '{{number_format($total + 30000, 0, ',','.')}}₫'}}">
                                    <div class="radio-wrapper">
                                        <div class="radio__input">
                                            <input type="radio" class="input-radio" name="shippingMethod" id="shippingMethod-carrier_802_Standard" value="c_802_Standard,30.000 VND" data-title="Giao Hàng Tiết Kiệm (Tạm tính): 30.000₫" data-bind="shippingMethod">
                                        </div>
                                        <label for="shippingMethod-carrier_802_Standard" class="radio__label">
                                            <span class="radio__label__primary">Giao Hàng Tiết Kiệm (Tạm
                                                tính)</span>
                                            <span class="radio__label__accessory">
                                                <span class="content-box__emphasis">
                                                    30.000₫
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>


                                <div class="content-box__row" data-define-array="{shippingMethods: {name: 'c_797_53320,100.000 VND', textPrice: '100.000₫', subtotalPriceWithShippingFee: '{{number_format($total + 100000, 0, ',','.')}}₫'}}">
                                    <div class="radio-wrapper">
                                        <div class="radio__input">
                                            <input type="radio" class="input-radio" name="shippingMethod" id="shippingMethod-carrier_797_53320" value="c_797_53320,100.000 VND" data-title="Giao Hàng Nhanh (Tạm tính) - Đường hàng không: 100.000₫" data-bind="shippingMethod">
                                        </div>
                                        <label for="shippingMethod-carrier_797_53320" class="radio__label">
                                            <span class="radio__label__primary">Giao Hàng Nhanh (Tạm tính) -
                                                Đường hàng không</span>
                                            <span class="radio__label__accessory">
                                                <span class="content-box__emphasis">
                                                    100.000₫
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="content-box__row" data-define-array="{shippingMethods: {name: 'c_797_53321,60.000 VND', textPrice: '60.000₫', subtotalPriceWithShippingFee: '{{number_format($total + 60000, 0, ',','.')}}₫'}}">
                                    <div class="radio-wrapper">
                                        <div class="radio__input">
                                            <input type="radio" class="input-radio" name="shippingMethod" id="shippingMethod-carrier_797_53321" value="c_797_53321,60.000 VND" data-title="Giao Hàng Nhanh (Tạm tính) - Đường bộ: 60.000₫" data-bind="shippingMethod">
                                        </div>
                                        <label for="shippingMethod-carrier_797_53321" class="radio__label">
                                            <span class="radio__label__primary">Giao Hàng Nhanh (Tạm tính) -
                                                Đường bộ</span>
                                            <span class="radio__label__accessory">
                                                <span class="content-box__emphasis">
                                                    60.000₫
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="alert alert--info hide">
                                Vui lòng nhập thông tin giao hàng
                            </div>
                        </div>
                    </section>

                    <section class="section">
                        <div class="section__header">
                            <div class="layout-flex">
                                <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                    <i class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
                                    Thanh toán
                                </h2>
                            </div>
                        </div>
                        <div class="section__content">

                            <div class="content-box">

                                <div class="content-box__row">
                                    <div class="radio-wrapper payment">
                                        <div class="radio__input">
                                            <input name="paymentMethod" id="paymentMethod-471202" type="radio" class="input-radio" data-bind="paymentMethod" value="Thanh toán khi giao hàng (COD)" checked="">
                                        </div>
                                        <label for="paymentMethod-471202" class="radio__label">
                                            <span class="radio__label__primary">Thanh toán khi giao hàng
                                                (COD)</span>
                                            <span class="radio__label__accessory">
                                                <span class="radio__label__icon">
                                                    <i class="payment-icon payment-icon--4"></i>
                                                </span>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="content-box__row__desc" data-bind-show="paymentMethod == 'Thanh toán khi giao hàng (COD)'">
                                        <p>Thanh toán tiền hàng và ship cho nhân viên giao hàng</p>

                                    </div>

                                </div>

                                <div class="content-box__row">
                                    <div class="radio-wrapper payment">
                                        <div class="radio__input">
                                            <input name="paymentMethod" id="paymentMethod-471201" type="radio" class="input-radio" data-bind="paymentMethod" value="Chuyển Khoản">
                                        </div>
                                        <label for="paymentMethod-471201" class="radio__label">
                                            <span class="radio__label__primary">Chuyển Khoản</span>
                                            <span class="radio__label__accessory">
                                                <span class="radio__label__icon">
                                                    <i class="payment-icon payment-icon--3"></i>
                                                </span>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="content-box__row__desc hide" data-bind-show="paymentMethod == 'Chuyển Khoản'">
                                        <p>- BIDV Chi nhánh Sở giao dịch Nguyễn Nhật Minh
                                        </p>
                                        <p>12110000636901
                                        </p>
                                        <p>Ghi chú Madon_SDT (VD: WE1234_0395445571)
                                        </p>
                                        <p>- Ví MoMo Nguyễn Nhật Minh
                                        </p>
                                        <p>SĐT MoMo: 0911054847
                                        </p>
                                        <p>Ghi chú Madon_SDT (VD: WE1234_0912345678)</p>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            @endif
        </article>
        <div class="field__input-btn-wrapper field__input-btn-wrapper--vertical hide-on-desktop">
            <button type="submit" class="btn btn-checkout spinner" data-bind-class="{'spinner--active': isSubmitingCheckout}" data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
                <span class="spinner-label">ĐẶT HÀNG</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                    <use href="#spinner"></use>
                </svg>
            </button>

            <a href="{{route('cart')}}" class="previous-link">
                <i class="previous-link__arrow">❮</i>
                <span class="previous-link__content">Quay về giỏ hàng</span>
            </a>

        </div>

        <div id="common-alert" data-tg-refresh="refreshError">


            <div class="alert alert--danger hide-on-desktop hide" data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError" data-bind="submitingCheckoutErrorMessage">
            </div>
        </div>
    </div>

    <div class="main__footer unprintable">
        <ul class="main__policy">
            <li>
                <a data-toggle="#refund_term" data-toggle-class="hide">Chính sách hoàn trả</a>
            </li>
            <li>
                <a data-toggle="#privacy_term" data-toggle-class="hide">Chính sách bảo mật</a>
            </li>
            <li>
                <a data-toggle="#service_term" data-toggle-class="hide">Điều khoản sử dụng</a>
            </li>
        </ul>
        <p>Cảm ơn bạn đã đặt hàng tại Petshophanoi.com . Chúng tôi sẽ gọi xác nhận đơn hàng sớm nhất cho
            bạn!
            - Bạn cần tư vấn thêm về sản phẩm và cách thức đặt hàng. Vui lòng liên hệ số Hotline:
            0949111520 (Thành)
            Xin cảm ơn!</p>
        <div class="modal-wrapper hide" id="refund_term">
            <div class="modal" style="display: inline-block;">
                <div class="modal-header">
                    <h2 class="modal-title">Chính sách hoàn trả</h2>
                    <span class="close" data-toggle="#refund_term" data-toggle-class="hide">×</span>
                </div>
                <div class="modal-body">
                    <pre class="term-preview">@include('website.pages.checkout.components.return_policy')</pre>
                </div>
            </div>
        </div>
        <div class="modal-wrapper hide" id="privacy_term">
            <div class="modal" style="display: inline-block;">
                <div class="modal-header">
                    <h2 class="modal-title">Chính sách bảo mật</h2>
                    <span class="close" data-toggle="#privacy_term" data-toggle-class="hide">×</span>
                </div>
                <div class="modal-body">
                    <pre class="term-preview">@include('website.pages.checkout.components.privacy_policy')</pre>
                </div>
            </div>
        </div>
        <div class="modal-wrapper hide" id="service_term">
            <div class="modal" style="display: inline-block;">
                <div class="modal-header">
                    <h2 class="modal-title">Điều khoản sử dụng</h2>
                    <span class="close" data-toggle="#service_term" data-toggle-class="hide">×</span>
                </div>
                <div class="modal-body">
                    <pre class="term-preview">@include('website.pages.checkout.components.terms_of_use')</pre>
                </div>
            </div>
        </div>
    </div>

</main>
<aside class="sidebar">
    @if(session()->has('cart'))
		@php
            $total = 0;
            $total_item = 0;
		@endphp
		@foreach(session()->get('cart') as $id => $cartItem)
            @php
                $total_item ++;
            @endphp
		    @php
                $total += $cartItem['price'] * $cartItem['quantity']
            @endphp
	    @endforeach
    <div class="sidebar__header">
        <h2 class="sidebar__title">
            Đơn hàng ({{$total_item}} sản phẩm)
        </h2>
    </div>

    <div class="sidebar__content">
        <div id="order-summary" class="order-summary order-summary--is-collapsed">
            <div class="order-summary__sections">
                <div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
                    <table class="product-table">
                        <caption class="visually-hidden">Chi tiết đơn hàng</caption>
                        <thead class="product-table__header">
                            <tr>
                                <th>
                                    <span class="visually-hidden">Ảnh sản phẩm</span>
                                </th>
                                <th>
                                    <span class="visually-hidden">Mô tả</span>
                                </th>
                                <th>
                                    <span class="visually-hidden">Sổ lượng</span>
                                </th>
                                <th>
                                    <span class="visually-hidden">Đơn giá</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(session()->get('cart') as $id => $cartItem)
                                <tr class="product">
                                    <td class="product__image">
                                        <div class="product-thumbnail">
                                            <div class="product-thumbnail__wrapper" data-tg-static="">

                                                <img src="{{asset('/images/products/'.$cartItem['image'])}}" alt="{{$cartItem['name']}}" class="product-thumbnail__image">

                                            </div>
                                            <span class="product-thumbnail__quantity">{{$cartItem['quantity']}}</span>
                                        </div>
                                    </td>
                                    <th class="product__description">
                                        <span class="product__description__name">
                                            {{$cartItem['name']}}
                                        </span>

                                    </th>
                                    <td class="product__quantity visually-hidden">
                                        <em>Số lượng:</em>
                                        {{$cartItem['quantity']}}
                                    </td>
                                    <td class="product__price">
                                        {{number_format($cartItem['price'], 0, ',', '.')}}₫
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="order-summary__section order-summary__section--discount-code" data-tg-refresh="refreshDiscount" id="discountCode">
                    <h3 class="visually-hidden">Mã khuyến mại</h3>
                    <div class="edit_checkout animate-floating-labels">
                        <div class="fieldset">
                            <div class="field  ">
                                <div class="field__input-btn-wrapper">
                                    <div class="field__input-wrapper">
                                        <input name="reductionCode" placeholder="Nhập mã giảm giá" id="reductionCode" type="text" class="field__input" autocomplete="off" data-bind-disabled="isLoadingReductionCode" data-bind-event-keypress="handleReductionCodeKeyPress(event)" data-define="{reductionCode: null}" data-bind="reductionCode">
                                    </div>
                                    <button class="field__input-btn btn spinner btn--disabled" data-bind-disabled="isLoadingReductionCode || !reductionCode" data-bind-class="{'spinner--active': isLoadingReductionCode, 'btn--disabled': !reductionCode}" disabled="">
                                        <span class="spinner-label">Áp dụng</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                            <use href="#spinner"></use>
                                        </svg>
                                    </button>
                                </div>

                                <p class="field__message field__message--error field__message--error-always-show hide" data-bind-show="!isLoadingReductionCode &amp;&amp; isLoadingReductionCodeError" data-bind="loadingReductionCodeErrorMessage">

                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="order-summary__section order-summary__section--total-lines order-summary--collapse-element" data-define="{subTotalPriceText: '{{number_format($total, 0,',','.')}}'}" data-tg-refresh="refreshOrderTotalPrice" id="orderSummary">
                    <table class="total-line-table">
                        <caption class="visually-hidden">Tổng giá trị</caption>
                        <thead>
                            <tr>
                                <td><span class="visually-hidden">Mô tả</span></td>
                                <td><span class="visually-hidden">Giá tiền</span></td>
                            </tr>
                        </thead>
                        <tbody class="total-line-table__tbody">
                            <tr class="total-line total-line--subtotal">
                                <th class="total-line__name">
                                    Tạm tính
                                </th>
                                <td class="total-line__price">{{number_format($total, 0,',','.')}}₫</td>
                                <input type="hidden" name="total_price" value="{{$total}}">
                            </tr>

                            <tr class="total-line total-line--shipping-fee">
                                <th class="total-line__name">
                                    Phí vận chuyển
                                </th>
                                <td class="total-line__price" id="total-line__price" data-bind="getTextShippingPrice()" id="total-line__price"></td>
                            </tr>

                        </tbody>
                        <tfoot class="total-line-table__footer">
                            <tr class="total-line payment-due">
                                <th class="total-line__name">
                                    <span class="payment-due__label-total">
                                        Tổng cộng
                                    </span>
                                </th>
                                <td class="total-line__price">
                                    <span class="payment-due__price" data-bind="getTextTotalPrice()"></span>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
                    <button type="submit" class="btn btn-checkout spinner" data-bind-class="{'spinner--active': isSubmitingCheckout}" data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
                        <span class="spinner-label">ĐẶT HÀNG</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                            <use href="#spinner"></use>
                        </svg>
                    </button>


                    <a href="{{route('cart')}}" class="previous-link">
                        <i class="previous-link__arrow">❮</i>
                        <span class="previous-link__content">Quay về giỏ hàng</span>
                    </a>

                </div>


            </div>
        </div>
    </div>
    @endif
</aside>
@endsection