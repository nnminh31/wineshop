<html class="thankyou-page">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Cutepets - Pet shop &amp; Grooming Spa Thú cưng Hà Nội - Cảm ơn">
	<title>Cutepets - Pet shop &amp; Grooming Spa Thú cưng Hà Nội - Cảm ơn</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('asset/css/bill.css')}}">

</head>

<body data-no-turbolink="">
	<header class="banner">
		<div class="wrap">
			<div class="logo logo--left ">

				<a href="{{route('home')}}">
					<img class="logo__image  logo__image--small " alt="Cutepets - Pet shop &amp; Grooming Spa Thú cưng Hà Nội"
						src="{{asset('/images/logos/logo.svg')}}" width="80" style="max-height: 80px">
				</a>

			</div>
		</div>
	</header>
	<div class="content">
		<form>
			<div class="wrap wrap--mobile-fluid">
				<main class="main main--nosidebar">
					<header class="main__header">
						<div class="logo logo--left ">

							<a href="{{route('home')}}">
								<img class="logo__image  logo__image--small "
									alt="Cutepets - Pet shop &amp; Grooming Spa Thú cưng Hà Nội"
									src="{{asset('/images/logos/logo.svg')}}" width="80" style="max-height: 80px">
							</a>

						</div>
					</header>
					<div class="main__content">
						<article class="row">
							<div class="col col--primary">
								<section class="section section--icon-heading">
									<div class="section__icon unprintable">
										<svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
											<g fill="none" stroke="#8EC343" stroke-width="2">
												<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;">
												</circle>
												<path d="M17.417,37.778l9.93,9.909l25.444-25.393"
													style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
											</g>
										</svg>
									</div>
									<div class="thankyou-message-container">
										<h2 class="section__title">Cảm ơn bạn đã đặt hàng</h2>

										<p class="section__text">
											Một email xác nhận đã được gửi tới minh@gmail.com. <br>
											Xin vui lòng kiểm tra email của bạn
										</p>

									</div>
								</section>
							</div>
							<div class="col col--secondary">
								<aside class="order-summary order-summary--bordered order-summary--is-collapsed" id="order-summary">
									<div class="order-summary__header">
										<div class="order-summary__title">
											Đơn hàng #{{$order[0]->order_id}}
											<span class="unprintable">(1)</span>
										</div>
                                        <style>
                                            .expandable:after {
                                                content: ""
                                            }
                                        </style>
										<div class="order-summary__action hide-on-desktop unprintable">
											<a data-toggle="#order-summary" data-toggle-class="order-summary--is-collapsed"
												class="expandable">
												Xem chi tiết
											</a>
										</div>
									</div>
									<div class="order-summary__sections">
										<div
											class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
											<table class="product-table">
												<tbody>
												@php
													$fee = 0;
													$total = 0;
													$item_quantity = 0;
												@endphp
												@foreach($order[0]->orderDetails as $item)
													@php
														$item_quantity += $item->quantity;
														$total += $item->price * $item->quantity;
													@endphp
													<tr class="product">
														<td class="product__image">
															<div class="product-thumbnail">
																<div class="product-thumbnail__wrapper">

																	<img
																		src="{{asset('/images/products/'.$item->product->image)}}"
																		alt="{{$item->product->name}}"
																		class="product-thumbnail__image">

																</div>
																<span class="product-thumbnail__quantity unprintable">{{$item->quantity}}</span>
															</div>
														</td>
														<th class="product__description">
															<span class="product__description__name">{{$item->product->name}}</span>
														</th>
														<td class="product__quantity printable-only">
                                                            {{$item->quantity}}
														</td>
														<td class="product__price">
															{{number_format($item->price * $item->quantity, 0, ',', '.')}} ₫
														</td>
													</tr>
												@endforeach	
												</tbody>
											</table>
										</div>
										<div class="order-summary__section">
											<table class="total-line-table">
												<tbody class="total-line-table__tbody">

													<tr class="total-line total-line--subtotal">
														<th class="total-line__name">Tạm tính</th>
														<td class="total-line__price">{{number_format($total, 0,',','.')}} ₫</td>
													</tr>

													<tr class="total-line total-line--shipping-fee">
														<th class="total-line__name">Phí vận chuyển</th>
														<td class="total-line__price">{{$order[0]->shipping_fee}} ₫</td>
													</tr>

												</tbody>
											</table>
										</div>
										<div class="order-summary__section">
											<table class="total-line-table">
												<tbody class="total-line-table__tbody">
													<tr class="total-line payment-due">
														<th class="total-line__name">
															<span class="payment-due__label-total">Tổng cộng</span>
														</th>
														<td class="total-line__price">
															<span class="payment-due__price">{{number_format($total + $order[0]->shipping_fee, 0,',','.')}} ₫</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<script>
										var hide = document.getElementById("order-summary");
										hide.onclick = () => {
											hide.classList.toggle("order-summary--is-collapsed");
										}
									</script>
								</aside>
							</div>
							<div class="col col--primary">
								<section class="section">
									<div class="section__content section__content--bordered">

										<div class="row">

											<div class="col col--md-two">
												<h2>Thông tin mua hàng</h2>
												<p>{{$order[0]->user->name}}</p>
												<p>{{$order[0]->user->email}}</p>
												<p>{{$order[0]->user->phone}}</p>
											</div>

											<div class="col col--md-two">
												<h2>Địa chỉ nhận hàng</h2>
												<p>{{$order[0]->user->name}}</p>
                                                <p>{{$order[0]->user->email}}</p>
                                                <p>{{$order[0]->deliveryAddress->ward}}, {{$order[0]->deliveryAddress->district}}, {{$order[0]->deliveryAddress->city}}</p>
                                                <p>{{$order[0]->deliveryAddress->phone}}</p>
											</div>
										</div>
										<div class="row">
											<div class="col col--md-two">
												<h2>Phương thức thanh toán</h2>
												<p>{{$order[0]->payment_method}}</p>
											</div>
											<div class="col col--md-two">
												<h2>Phương thức vận chuyển</h2>
												<p>{{$order[0]->shipping_method}}</p>
											</div>
										</div>

									</div>
								</section>
								<section class="section unprintable">
									<div class="field__input-btn-wrapper field__input-btn-wrapper--floating">
										<a href="{{route('home')}}" class="btn btn--large">Tiếp tục mua hàng</a>
										<span class="text-icon-group text-icon-group--large icon-print" onclick="window.print()">
											<i class="fa fa-print"></i>
											<span>In </span>
										</span>
									</div>
								</section>
							</div>
						</article>
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
						<p>Cảm ơn bạn đã đặt hàng tại Petshophanoi.com . Chúng tôi sẽ gọi xác nhận đơn hàng sớm nhất cho bạn!
							- Bạn cần tư vấn thêm về sản phẩm và cách thức đặt hàng. Vui lòng liên hệ số Hotline: 0949111520 (Thành)
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
									<pre
										class="term-preview">@include('website.pages.checkout.components.privacy_policy')</pre>
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
			</div>
		</form>
	</div>

</body>

</html>