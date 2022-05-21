<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('asset/css/checkout.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://petshophanoi.com/dist/css/checkout.min.css?v=bc5f183">
    <script src="{{asset('asset/js/checkout.vendor.min.js')}}"></script>
    <script src="{{asset('asset/js/checkout.js')}}"></script>
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
                        src="{{asset('/images/logos/logo.svg')}}">
                </a>

            </div>
        </div>
    </header>
    <aside>
        @if(session()->has('cart') && session()->get('cart') != null)
            @php
                $total = 0;
                $total_item = 0;
            @endphp
            @foreach(session()->get('cart') as $id => $cartItem)
                @php
                    $total_item++;
                @endphp
                @php
                    $total += $cartItem['price'] * $cartItem['quantity']
                @endphp
            @endforeach
            <button class="order-summary-toggle" data-toggle="#order-summary"
                data-toggle-class="order-summary--is-collapsed">
                <span class="wrap">
                    <span class="order-summary-toggle__inner">
                        <span class="order-summary-toggle__text expandable">
                            Đơn hàng ({{$total_item}} sản phẩm)
                        </span>
                        <span class="order-summary-toggle__total-recap" data-bind="getTextTotalPrice()"></span>
                    </span>
                </span>
            </button>
        @else 
            <script>
					window.location.href = "{{route('cart')}}"
			</script>
        @endif
    </aside>
    <div class="content">
        <form data-tg-refresh="checkout" id="checkoutForm" data-url="{{route('checkout')}}" method="post">
            @csrf
            <div class="wrap">
                @yield('content')
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
                            name: $("#billingName").val(),
                            phone: $("#billingPhone").val(),
                            address: $("#billingAddress").val(),
                            ward: $("#billingWard :selected").text(),
                            district: $("#billingDistrict :selected").text(),
                            city: $("#billingProvince :selected").text(),
                            total: $("input[name=total_price]").val(),
                            shipping: $("input[name=shippingMethod]:checked").attr('data-title'),
                            shipping_fee: $("#total-line__price").text(),
                            payment: $("input[name=paymentMethod]:checked").val(),
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