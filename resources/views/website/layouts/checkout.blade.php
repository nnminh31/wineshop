<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://cute0pets.tk/asset/frontend/css/checkout.vendor.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://petshophanoi.com/dist/css/checkout.min.css?v=bc5f183">
    <script src="https://petshophanoi.com/dist/js/checkout.vendor.min.js?v=11006c9"></script>
    <script src="http://cute0pets.tk/asset/frontend/js/checkout.min.js"></script>
    <style>
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 14px;
        }
    </style>
</head>

<body data-no-turbolink="">
    <header class="banner">
        <div class="wrap">
            <div class="logo logo--left ">

                <a href="/">
                    <img class="logo__image  logo__image--small " alt="Cutepets - Siêu thị thú cưng Pet shop Hà Nội"
                        src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/logo.png?1621568561910">
                </a>

            </div>
        </div>
    </header>
    <aside>
        <button class="order-summary-toggle" data-toggle="#order-summary"
            data-toggle-class="order-summary--is-collapsed">
            <span class="wrap">
                <span class="order-summary-toggle__inner">
                    <span class="order-summary-toggle__text expandable">
                        Đơn hàng (1 sản phẩm)
                    </span>
                    <span class="order-summary-toggle__total-recap" data-bind="getTextTotalPrice()">500.001₫</span>
                </span>
            </span>
        </button>
    </aside>
    <div class="content">
        <form data-tg-refresh="checkout" id="checkoutForm" data-url="http://cute0pets.tk/thanh-toan.html" method="post">
            <input type="hidden" name="_token" value="puPCSMlHo37azlPJOVMUigBFclK4Tmtoya7KFWcV">
            <div class="wrap">
                <main class="main">
                    <header class="main__header">
                        <div class="logo logo--left ">
                            <a href="/">
                                <img class="logo__image logo__image--small "
                                    alt="Cutepets - Siêu thị thú cưng Pet shop Hà Nội"
                                    src="//bizweb.dktcdn.net/100/307/433/themes/751183/assets/logo.png?1621568561910">
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
                                                <i
                                                    class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>
                                                Thông tin nhận hàng
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="section__content">
                                        <div class="fieldset">
                                            <div class="field field--show-floating-label">
                                                <div class="field__input-wrapper">
                                                    <label for="billingName" class="field__label">Họ và tên</label>
                                                    <input name="billingName" id="billingName" type="text"
                                                        class="field__input" value="ấdasdasd">
                                                </div>
                                            </div>

                                            <div class="field field--show-floating-label">
                                                <div class="field__input-wrapper">
                                                    <label for="billingPhone" class="field__label">
                                                        Số điện thoại
                                                    </label>
                                                    <input name="billingPhone" id="billingPhone" type="tel"
                                                        class="field__input" value="0123154512">
                                                </div>

                                            </div>

                                            <div class="field field--show-floating-label">
                                                <div class="field__input-wrapper">
                                                    <label for="billingAddress" class="field__label">
                                                        Địa chỉ
                                                    </label>
                                                    <input name="billingAddress" id="billingAddress" type="text"
                                                        class="field__input" data-bind="billing.address" value=""
                                                        placeholder="---">
                                                </div>

                                            </div>
                                            <div class="field field--show-floating-label ">
                                                <div class="field__input-wrapper field__input-wrapper--select2">
                                                    <label for="billingProvince" class="field__label">Tỉnh thành</label>
                                                    <select required="" name="billingProvince" id="billingProvince"
                                                        size="1" type="text"
                                                        class="field__input field__input--select select2-hidden-accessible"
                                                        value="" data-address-type="province"
                                                        data-address-zone="billing"
                                                        data-select2-id="select2-data-billingProvince" tabindex="-1"
                                                        aria-hidden="true">
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="field field--show-floating-label ">
                                                <div class="field__input-wrapper field__input-wrapper--select2">
                                                    <label for="billingDistrict" class="field__label">
                                                        Quận huyện
                                                    </label>
                                                    <select required="" name="billingDistrict" id="billingDistrict"
                                                        size="1" type="text"
                                                        class="field__input field__input--select select2-hidden-accessible"
                                                        value="" data-address-type="district"
                                                        data-address-zone="billing"
                                                        data-select2-id="select2-data-billingDistrict" tabindex="-1"
                                                        aria-hidden="true" disabled="disabled"></select>
                                                </div>

                                            </div>

                                            <div class="field field--show-floating-label ">
                                                <div class="field__input-wrapper field__input-wrapper--select2">
                                                    <label for="billingWard" class="field__label">
                                                        Phường xã
                                                    </label>
                                                    <select required="" name="billingWard" id="billingWard" size="1"
                                                        type="text"
                                                        class="field__input field__input--select select2-hidden-accessible"
                                                        value="" data-address-type="ward" data-address-zone="billing"
                                                        data-select2-id="select2-data-billingWard" tabindex="-1"
                                                        aria-hidden="true" disabled="disabled"></select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
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
                                    <div class="section__content" data-tg-refresh="refreshShipping"
                                        id="shippingMethodList"
                                        data-define="{isAddressSelecting: false, shippingMethods: []}">
                                        <div class="alert alert--loader spinner spinner--active hide"
                                            data-bind-show="isLoadingShippingMethod">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                                <use href="#spinner"></use>
                                            </svg>
                                        </div>


                                        <div class="alert alert-retry alert--danger hide"
                                            data-bind-event-click="handleShippingMethodErrorRetry()"
                                            data-bind-show="!isLoadingShippingMethod &amp;&amp; !isAddressSelecting &amp;&amp; isLoadingShippingError">
                                            <span data-bind="loadingShippingErrorMessage">Không thể load phí vận chuyển.
                                                Vui lòng thử
                                                lại</span> <i class="fa fa-refresh"></i>
                                        </div>




                                        <div class="content-box"
                                            data-bind-show="!isLoadingShippingMethod &amp;&amp; !isAddressSelecting &amp;&amp; !isLoadingShippingError"
                                            data-define="{shippingMethod: '564123_0,1 VND'}">

                                            <div class="content-box__row"
                                                data-define-array="{shippingMethods: {name: '564123_0,1 VND', textPrice: '1₫', subtotalPriceWithShippingFee: '500.001₫'}}">
                                                <div class="radio-wrapper">
                                                    <div class="radio__input">
                                                        <input type="radio" class="input-radio" name="shippingMethod"
                                                            id="shippingMethod-564123_0" value="564123_0,1 VND"
                                                            data-title="Shop liên hệ báo phí ship sau: 1₫"
                                                            data-bind="shippingMethod">
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


                                            <div class="content-box__row"
                                                data-define-array="{shippingMethods: {name: 'c_802_Standard,30.000 VND', textPrice: '30.000₫', subtotalPriceWithShippingFee: '530.000₫'}}">
                                                <div class="radio-wrapper">
                                                    <div class="radio__input">
                                                        <input type="radio" class="input-radio" name="shippingMethod"
                                                            id="shippingMethod-carrier_802_Standard"
                                                            value="c_802_Standard,30.000 VND"
                                                            data-title="Giao Hàng Tiết Kiệm (Tạm tính): 30.000₫"
                                                            data-bind="shippingMethod">
                                                    </div>
                                                    <label for="shippingMethod-carrier_802_Standard"
                                                        class="radio__label">
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


                                            <div class="content-box__row"
                                                data-define-array="{shippingMethods: {name: 'c_797_53320,100.000 VND', textPrice: '100.000₫', subtotalPriceWithShippingFee: '600.000₫'}}">
                                                <div class="radio-wrapper">
                                                    <div class="radio__input">
                                                        <input type="radio" class="input-radio" name="shippingMethod"
                                                            id="shippingMethod-carrier_797_53320"
                                                            value="c_797_53320,100.000 VND"
                                                            data-title="Giao Hàng Nhanh (Tạm tính) - Đường hàng không: 100.000₫"
                                                            data-bind="shippingMethod">
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

                                            <div class="content-box__row"
                                                data-define-array="{shippingMethods: {name: 'c_797_53321,60.000 VND', textPrice: '60.000₫', subtotalPriceWithShippingFee: '560.000₫'}}">
                                                <div class="radio-wrapper">
                                                    <div class="radio__input">
                                                        <input type="radio" class="input-radio" name="shippingMethod"
                                                            id="shippingMethod-carrier_797_53321"
                                                            value="c_797_53321,60.000 VND"
                                                            data-title="Giao Hàng Nhanh (Tạm tính) - Đường bộ: 60.000₫"
                                                            data-bind="shippingMethod">
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
                                                <i
                                                    class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
                                                Thanh toán
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="section__content">

                                        <div class="content-box">

                                            <div class="content-box__row">
                                                <div class="radio-wrapper payment">
                                                    <div class="radio__input">
                                                        <input name="paymentMethod" id="paymentMethod-471202"
                                                            type="radio" class="input-radio" data-bind="paymentMethod"
                                                            value="Thanh toán khi giao hàng (COD)" checked="">
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

                                                <div class="content-box__row__desc"
                                                    data-bind-show="paymentMethod == 'Thanh toán khi giao hàng (COD)'">
                                                    <p>Thanh toán tiền hàng và ship cho nhân viên giao hàng</p>

                                                </div>

                                            </div>

                                            <div class="content-box__row">
                                                <div class="radio-wrapper payment">
                                                    <div class="radio__input">
                                                        <input name="paymentMethod" id="paymentMethod-471201"
                                                            type="radio" class="input-radio" data-bind="paymentMethod"
                                                            value="Chuyển Khoản">
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

                                                <div class="content-box__row__desc hide"
                                                    data-bind-show="paymentMethod == 'Chuyển Khoản'">
                                                    <p>- Vietcombank Chi nhánh Sở giao dịch Nguyễn Bình Minh
                                                    </p>
                                                    <p>0011004240707
                                                    </p>
                                                    <p>Ghi chú Madon_SDT (VD: WE1234_0395445571)
                                                    </p>
                                                    <p>- Ví MoMo Nguyễn Bình Minh
                                                    </p>
                                                    <p>SĐT MoMo: 0395445571
                                                    </p>
                                                    <p>Ghi chú Madon_SDT (VD: WE1234_0912345678)</p>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </article>
                        <div class="field__input-btn-wrapper field__input-btn-wrapper--vertical hide-on-desktop">
                            <button type="submit" class="btn btn-checkout spinner"
                                data-bind-class="{'spinner--active': isSubmitingCheckout}"
                                data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
                                <span class="spinner-label">ĐẶT HÀNG</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                    <use href="#spinner"></use>
                                </svg>
                            </button>

                            <a href="http://cute0pets.tk/gio-hang.html" class="previous-link">
                                <i class="previous-link__arrow">❮</i>
                                <span class="previous-link__content">Quay về giỏ hàng</span>
                            </a>

                        </div>

                        <div id="common-alert" data-tg-refresh="refreshError">


                            <div class="alert alert--danger hide-on-desktop hide"
                                data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError"
                                data-bind="submitingCheckoutErrorMessage">
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
                                    <pre
                                        class="term-preview">CHÍNH SÁCH ĐỔI TRẢ HÀNG
1. Đổi trả theo nhu cầu khách hàng (đổi trả hàng vì không ưng ý)
Tất cả mặt hàng đã mua đều có thể hoàn trả trong vòng 5 ngày kể từ ngày nhận hàng (trừ khi có quy định gì khác). Chúng tôi chỉ chấp nhận đổi trả cho các sản phẩm còn nguyên điều kiện ban đầu, còn hóa đơn mua hàng &amp; sản phẩm chưa qua sử dụng, bao gồm:
- Còn nguyên đóng gói và bao bì không bị móp rách.
- Đầy đủ các chi tiết, phụ kiện.
- Tem/ phiếu bảo hành, tem thương hiệu, hướng dẫn kỹ thuật  và các quà tặng kèm theo (nếu có) v.v… phải còn đầy đủ và nguyên vẹn
- Không bị dơ bẩn, trầy xước, hư hỏng, có mùi lạ hoặc có dấu hiệu đã qua qua sử dụng
2. Đổi trả không vì lý do chủ quan từ khách hàng
2.1. Hàng giao không mới, không nguyên vẹn, sai nội dung hoặc bị thiếu:
Chúng tôi khuyến khích quý khách hàng phải kiểm tra tình trạng bên ngoài của thùng hàng và sản phẩm trước khi thanh toán để đảm bảo rằng hàng hóa được giao đúng chủng loại, số lượng, màu sắc theo đơn đặt hàng và tình trạng bên ngoài không bị tác động.
Nếu gặp trường hợp này, Quý khách vui lòng từ chối nhận hàng và/hoặc báo ngay cho bộ phận hỗ trợ khách hàng để chúng tôi có phương án xử lí kịp thời. (Xin lưu ý những bước kiểm tra sâu hơn như dùng thử sản phẩm chỉ có thể được chấp nhận sau khi đơn hàng được thanh toán đầy đủ).
Trong trường hợp khách hàng đã thanh toán, nhận hàng và sau đó phát hiện hàng hóa không còn mới nguyên vẹn, sai nội dung hoặc thiếu hàng, xin vui lòng chụp ảnh sản phẩm gửi về hộp thư của chúng tôi để được chúng tôi hỗ trợ các bước tiếp theo như đổi/trả hàng hoặc gửi sản phẩm còn thiếu đến quý khách…
Sau 48h kể từ ngày quý khách nhận hàng, chúng tôi có quyền từ chối hỗ trợ cho những khiếu nại theo nội dung như trên.
2.2. Hàng giao bị lỗi
Khi quý khách gặp trục trặc với sản phẩm đặt mua của chúng tôi, vui lòng thực hiện các bước sau đây:
- Bước 1: Kiểm tra lại sự nguyên vẹn của sản phẩm, chụp lại ảnh sản phẩm xuất hiện lỗi.
- Bước 2: Quý khách liên hệ với trung tâm chăm sóc khách hàng của chúng tôi để được xác nhận.
- Bước 3:Trong vòng 30 ngày kể từ ngày nhận hàng, nếu quý khách được xác nhận từ trung tâm chăm sóc khách hàng rằng sản phẩm bị lỗi kỹ thuật, quý khách vui lòng truy cập ngay Hướng dẫn đổi trả hàng để bắt đầu quy trình đổi trả hàng.
3. Phương thức hoàn tiền
Tùy theo lí do hoàn trả sản phẩm kết quả đánh giá chất lượng tại kho, chúng tôi sẽ có những phương thức hoàn tiền với chi tiết như sau:
- Hoàn tiền bằng mã tiền điện tử dùng để mua sản phẩm mới
- Đổi sản phẩm mới cùng loại
- Chuyển khoản qua ngân hàng theo thông tin của quý khách cung cấp
- Riêng đối với các đơn hàng thanh toán qua thẻ tín dụng quốc tế, chúng tôi sẽ áp dụng hình thức hoàn tiền vào tài khoản thanh toán của chủ thẻ.
- Hoàn tiền mặt trực tiếp tại văn phòng
Mọi chi tiết hoặc thắc mắc quý khách vui lòng liên hệ với chúng tôi qua số điện thoại hỗ trợ hoặc để lại lời nhắn tại website. Xin chân thành cảm ơn.</pre>
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
                                    <pre
                                        class="term-preview">CHÍNH SÁCH BẢO MẬT
Cám ơn quý khách đã quan tâm và truy cập vào website. Chúng tôi tôn trọng và cam kết sẽ bảo mật những thông tin mang tính riêng tư của Quý khách.
Chính sách bảo mật sẽ giải thích cách chúng tôi tiếp nhận, sử dụng và (trong trường hợp nào đó) tiết lộ thông tin cá nhân của Quý khách.
Bảo vệ dữ liệu cá nhân và gây dựng được niềm tin cho quý khách là vấn đề rất quan trọng với chúng tôi. Vì vậy, chúng tôi sẽ dùng tên và các thông tin khác liên quan đến quý khách tuân thủ theo nội dung của Chính sách bảo mật. Chúng tôi chỉ thu thập những thông tin cần thiết liên quan đến giao dịch mua bán.
Chúng tôi sẽ giữ thông tin của khách hàng trong thời gian luật pháp quy định hoặc cho mục đích nào đó. Quý khách có thể truy cập vào website và trình duyệt mà không cần phải cung cấp chi tiết cá nhân. Lúc đó, Quý khách đang ẩn danh và chúng tôi không thể biết bạn là ai nếu Quý khách không đăng nhập vào tài khoản của mình.
1. Thu thập thông tin cá nhân
- Chúng tôi thu thập, lưu trữ và xử lý thông tin của bạn cho quá trình mua hàng và cho những thông báo sau này liên quan đến đơn hàng, và để cung cấp dịch vụ, bao gồm một số thông tin cá nhân: danh hiệu, tên, giới tính, ngày sinh, email, địa chỉ, địa chỉ giao hàng, số điện thoại, fax, chi tiết thanh toán, chi tiết thanh toán bằng thẻ hoặc chi tiết tài khoản ngân hàng.
- Chúng tôi sẽ dùng thông tin quý khách đã cung cấp để xử lý đơn đặt hàng, cung cấp các dịch vụ và thông tin yêu cầu thông qua website và theo yêu cầu của bạn.
- Hơn nữa, chúng tôi sẽ sử dụng các thông tin đó để quản lý tài khoản của bạn; xác minh và thực hiện giao dịch trực tuyến, nhận diện khách vào web, nghiên cứu nhân khẩu học, gửi thông tin bao gồm thông tin sản phẩm và dịch vụ. Nếu quý khách không muốn nhận bất cứ thông tin tiếp thị của chúng tôi thì có thể từ chối bất cứ lúc nào.
- Chúng tôi có thể chuyển tên và địa chỉ cho bên thứ ba để họ giao hàng cho bạn (ví dụ cho bên chuyển phát nhanh hoặc nhà cung cấp).
- Chi tiết đơn đặt hàng của bạn được chúng tôi lưu giữ nhưng vì lí do bảo mật nên chúng tôi không công khai trực tiếp được. Tuy nhiên, quý khách có thể tiếp cận thông tin bằng cách đăng nhập tài khoản trên web. Tại đây, quý khách sẽ thấy chi tiết đơn đặt hàng của mình, những sản phẩm đã nhận và những sản phẩm đã gửi và chi tiết email, ngân hàng và bản tin mà bạn đặt theo dõi dài hạn.
- Quý khách cam kết bảo mật dữ liệu cá nhân và không được phép tiết lộ cho bên thứ ba. Chúng tôi không chịu bất kỳ trách nhiệm nào cho việc dùng sai mật khẩu nếu đây không phải lỗi của chúng tôi.
- Chúng tôi có thể dùng thông tin cá nhân của bạn để nghiên cứu thị trường. mọi thông tin chi tiết sẽ được ẩn và chỉ được dùng để thống kê. Quý khách có thể từ chối không tham gia bất cứ lúc nào.
2. Bảo mật
- Chúng tôi có biện pháp thích hợp về kỹ thuật và an ninh để ngăn chặn truy cập trái phép hoặc trái pháp luật hoặc mất mát hoặc tiêu hủy hoặc thiệt hại cho thông tin của bạn.
- Chúng tôi khuyên quý khách không nên đưa thông tin chi tiết về việc thanh toán với bất kỳ ai bằng e-mail, chúng tôi không chịu trách nhiệm về những mất mát quý khách có thể gánh chịu trong việc trao đổi thông tin của quý khách qua internet hoặc email.
- Quý khách tuyệt đối không sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống website. Mọi vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước pháp luật nếu cần thiết.
- Mọi thông tin giao dịch sẽ được bảo mật nhưng trong trường hợp cơ quan pháp luật yêu cầu, chúng tôi sẽ buộc phải cung cấp những thông tin này cho các cơ quan pháp luật.
Các điều kiện, điều khoản và nội dung của trang web này được điều chỉnh bởi luật pháp Việt Nam và tòa án Việt Nam có thẩm quyền xem xét.
3. Quyền lợi khách hàng
-Quý khách có quyền yêu cầu truy cập vào dữ liệu cá nhân của mình, có quyền yêu cầu chúng tôi sửa lại những sai sót trong dữ liệu của bạn mà không mất phí. Bất cứ lúc nào bạn cũng có quyền yêu cầu chúng tôi ngưng sử dụng dữ liệu cá nhân của bạn cho mục đích tiếp thị.</pre>
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
                                    <pre class="term-preview">HƯỚNG DẪN MUA HÀNG
											Bước 1: Truy cập website và lựa chọn sản phẩm cần mua để mua hàng
											Bước 2:  Click và sản phẩm muốn mua, màn hình hiển thị ra pop up với các lựa chọn sau:
											Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để lựa chọn thêm sản phẩm vào giỏ hàng
											Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ hàng
											Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng bấm vào: Đặt hàng và thanh toán
											Bước 3: Lựa chọn thông tin tài khoản thanh toán
											Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập là email và mật khẩu vào mục đã có tài khoản trên hệ thống
											Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng điền các thông tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài khoản bạn sẽ dễ dàng theo dõi được đơn hàng của mình
											Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp chuột vào mục đặt hàng không cần tài khoản
											Bước 4: Điền các thông tin của bạn để nhận đơn hàng, lựa chọn hình thức thanh toán và vận chuyển cho đơn hàng của mình
											Bước 5: Xem lại thông tin đặt hàng, điền chú thích và gửi đơn hàng
											Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng cách gọi điện lại để xác nhận lại đơn hàng và địa chỉ của bạn.
											Trân trọng cảm ơn.
										</pre>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
                <aside class="sidebar">
                    <div class="sidebar__header">
                        <h2 class="sidebar__title">
                            Đơn hàng (1 sản phẩm)
                        </h2>
                    </div>
                    <div class="sidebar__content">
                        <div id="order-summary" class="order-summary order-summary--is-collapsed">
                            <div class="order-summary__sections">
                                <div
                                    class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
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

                                            <tr class="product">
                                                <td class="product__image">
                                                    <div class="product-thumbnail">
                                                        <div class="product-thumbnail__wrapper" data-tg-static="">

                                                            <img src="http://cute0pets.tk/uploads/products/h97pB-071359-Qem.jpg"
                                                                alt="Áo đồng phục giao hàng Grab Bike dành cho chó mèo - CutePets"
                                                                class="product-thumbnail__image">

                                                        </div>
                                                        <span class="product-thumbnail__quantity">1</span>
                                                    </div>
                                                </td>
                                                <th class="product__description">
                                                    <span class="product__description__name">
                                                        Áo đồng phục giao hàng Grab Bike dành cho chó mèo - CutePets
                                                    </span>

                                                </th>
                                                <td class="product__quantity visually-hidden"><em>Số lượng:</em>1</td>
                                                <td class="product__price">
                                                    500.000₫
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="order-summary__section order-summary__section--discount-code"
                                    data-tg-refresh="refreshDiscount" id="discountCode">
                                    <h3 class="visually-hidden">Mã khuyến mại</h3>
                                    <div class="edit_checkout animate-floating-labels">
                                        <div class="fieldset">
                                            <div class="field  ">
                                                <div class="field__input-btn-wrapper">
                                                    <div class="field__input-wrapper">
                                                        <input name="reductionCode" placeholder="Nhập mã giảm giá"
                                                            id="reductionCode" type="text" class="field__input"
                                                            autocomplete="off"
                                                            data-bind-disabled="isLoadingReductionCode"
                                                            data-bind-event-keypress="handleReductionCodeKeyPress(event)"
                                                            data-define="{reductionCode: null}"
                                                            data-bind="reductionCode">
                                                    </div>
                                                    <button class="field__input-btn btn spinner btn--disabled"
                                                        type="button"
                                                        data-bind-disabled="isLoadingReductionCode || !reductionCode"
                                                        data-bind-class="{'spinner--active': isLoadingReductionCode, 'btn--disabled': !reductionCode}"
                                                        data-bind-event-click="applyReductionCode()" disabled="">
                                                        <span class="spinner-label">Áp dụng</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                                            <use href="#spinner"></use>
                                                        </svg>
                                                    </button>
                                                </div>

                                                <p class="field__message field__message--error field__message--error-always-show hide"
                                                    data-bind-show="!isLoadingReductionCode &amp;&amp; isLoadingReductionCodeError"
                                                    data-bind="loadingReductionCodeErrorMessage">

                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="order-summary__section order-summary__section--total-lines order-summary--collapse-element"
                                    data-define="{subTotalPriceText: '500.000'}"
                                    data-tg-refresh="refreshOrderTotalPrice" id="orderSummary">
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
                                                <td class="total-line__price">500.000₫</td>
                                                <input type="hidden" name="total_price" value="500000">
                                            </tr>

                                            <tr class="total-line total-line--shipping-fee">
                                                <th class="total-line__name">
                                                    Phí vận chuyển
                                                </th>
                                                <td class="total-line__price" data-bind="getTextShippingPrice()">1₫</td>
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
                                                    <span class="payment-due__price"
                                                        data-bind="getTextTotalPrice()">500.001₫</span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div
                                    class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
                                    <button type="submit" class="btn btn-checkout spinner"
                                        data-bind-class="{'spinner--active': isSubmitingCheckout}"
                                        data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
                                        <span class="spinner-label">ĐẶT HÀNG</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                            <use href="#spinner"></use>
                                        </svg>
                                    </button>


                                    <a href="http://cute0pets.tk/gio-hang.html" class="previous-link">
                                        <i class="previous-link__arrow">❮</i>
                                        <span class="previous-link__content">Quay về giỏ hàng</span>
                                    </a>

                                </div>


                            </div>
                        </div>
                    </div>
                </aside>

            </div>

        </form>
        <script>
            $(document).ready(function () {
                // Shipping
                var shippingMethod = $('.content-box__row .radio-wrapper input[name=shippingMethod]')
                $(shippingMethod).each(function () {
                    $(this).click(function () {
                        $(this).attr('checked', 'true')
                    })
                });
                // Payment
                var paymentMethod = $('.content-box__row .radio-wrapper input[name=paymentMethod]')
                $(paymentMethod).each(function () {
                    $(this).click(function () {
                        $(this).attr('checked', 'true')
                    })
                });
                $('#checkoutForm').submit(function (e) {
                    e.preventDefault();
                    var url = $(this).attr('data-url');
                    $.ajax({
                        type: 'post',
                        url: url,
                        data: {
                            _token: $("input[name=_token]").val(),
                            surname: $("#billingSurname").val(),
                            name: $("#billingName").val(),
                            phone: $("#billingPhone").val(),
                            address: $("#billingAddress").val(),
                            ward: $("#billingWard :selected").text(),
                            ward_code: $("#billingWard :selected").val(),
                            district: $("#billingDistrict :selected").text(),
                            district_code: $("#billingDistrict :selected").val(),
                            city: $("#billingProvince :selected").text(),
                            city_code: $("#billingProvince :selected").val(),
                            note: $("#note").val(),
                            total: $("input[name=total_price]").val(),
                            shipping: $("input[name=shippingMethod]:checked").attr('data-title'),
                            payment: $("input[name=paymentMethod]:checked").val()
                        },
                        dataType: 'JSON',
                        success: function (respone) {
                            if (respone) {
                                window.location.href = "http://cute0pets.tk/thong-tin-hoa-don.html"
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {

                        }
                    })
                })
            })
        </script>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="spinner">
                <svg viewBox="0 0 30 30">
                    <circle stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                        stroke-dasharray="85%" cx="50%" cy="50%" r="40%">
                        <animateTransform attributeName="transform" type="rotate" from="0 15 15" to="360 15 15"
                            dur="0.7s" repeatCount="indefinite"></animateTransform>
                    </circle>
                </svg>
            </symbol>
        </svg>
    </div>
</body>

</html>