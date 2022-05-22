@extends('admin.layouts.master')
@section('title')
Đơn hàng #{{$order->id}}
@endsection
@section('block')

@endsection
@section('content')
<script src="//code.jquery.com/jquery.js"></script>
<link rel="stylesheet" href="{{asset('asset/css/admin/style.css')}}">
<section class="login">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 class="title-headding order-headding" style="color: #323c3f">Đơn hàng</h1>
				<span class="note order_date"><i>Ngày tạo — {{$order->created_at->format("d/m/Y H:i")}}</i>
					<a class="color_main" href="{{route('admin.orders.index')}}">
						<i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Quay lại
					</a>
				</span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div id="order_payment" class="span6 box-address margin-top-20">
					<div class="box-header">
						<h2 class="title-head">PAYMENT ADDRESS</h2>
						<p>
							Payment Status:

							<i class="status_pending">
								Unpaid
							</i>

						</p>
					</div>
					<div class="address note">
						<p>
							<i class="fa fa-user"></i>
							<a class="color_main" href="tel:{{$order->deliveryAddress->phone ?? ''}}" id="customer_phone">{{$order->user->name}}</a>
						</p>
						<p>
							<i class="fa fa-map-marker"></i>
							{{$order->deliveryAddress->ward ?? ''}}, {{$order->deliveryAddress->district ?? ''}}, {{$order->deliveryAddress->city ?? ''}}
						</p>
						<p>
							<i class="fa fa-phone"> </i>
							<a class="color_main" href="tel:{{$order->deliveryAddress->phone ?? ''}}">{{$order->deliveryAddress->phone ?? '---'}}</a>
						</p>

					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">

				<div id="order_shipping" class="span6 box-address margin-top-20">
					<div class="box-header">
						<h2 class="title-head">DELIVERY ADDRESS</h2>
						<p>
							Shipping status:
							<i class="status_">
								@if ($order->status == 0 || $order->status == 1)
									No delivery
								@elseif ($order->status == 2)
									Shipping
								@elseif ($order->status == 3)
									Completed
								@elseif ($order->status == 4)
									Cancelled
								@endif
							</i>

						</p>
					</div>
					<div class="address note">
						<p>
							<i class="fa fa-user"></i>
							{{$order->user->name}}
						</p>
						<p>
							<i class="fa fa-map-marker"></i>
							{{isset($order->deliveryAddress->ward) ? $order->deliveryAddress->ward : null}}, {{$order->deliveryAddress->district ?? null}}, {{$order->deliveryAddress->city ?? null}}
						</p>
						<p><i class="fa fa-phone"></i>{{$order->deliveryAddress->phone ?? '---'}}</p>
					</div>
				</div>

			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="table-responsive-block margin-top-20">
					<table id="order_details" class="table table-cart">
                    	{{ csrf_field() }}
						<thead class="thead-default">
							<tr>
								<th width="10%">Image</th>
								<th>Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Amount</th>
							</tr>
						</thead>
						<tbody>
						@php
                			$total = 0;
						@endphp
						@foreach($order->orderDetails as $item)
							@php
								$total += $item->price * $item->quantity;
							@endphp
							<tr>
								<td width="10%" data-title="Ảnh sản phẩm">
									<img src="{{asset('images/products/'.$item->product->image)}}" width="50px" alt="">
								</td>
								<td data-title="Tên sản phẩm">
									<a style="display: flex; height: 50px; justify-content: center; align-items: center" class="color_main" href="{{route('product', $item->product->slug)}}" target="_blank">
										{{$item->product->name}}
									</a>								
								</td>
								<td data-title="Giá" class="numeric">
									<span style="display: flex; height: 50px; justify-content: center; align-items: center">
										{{number_format($item->price, 0, ',', '.')}} ₫
									</span>
								</td>
								<td data-title="Số lượng" class="numeric">
									<span style="display: flex; height: 50px; justify-content: center; align-items: center">
										{{$item->quantity}}
									</span>
								</td>
								<td data-title="Tổng" class="numeric">
									<span style="display: flex; height: 50px; justify-content: center; align-items: center">
										{{number_format($item->price * $item->quantity, 0, ',', '.')}} ₫
									</span>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<table class="table totalorders">
				<tfoot>
						<tr class="order_summary ">
							<td class="fix-width-200">Provisional :</td>								
							<td class="total money right">{{number_format($total, 0, ',', '.')}} ₫</td>
						</tr>   
						
						
						<tr class="order_summary ">
							<td class="fix-width-200" colspan="">Shipping fee ():</td>
              				<td class="total money right">{{number_format($order->shipping_fee, 0, ',', '.')}} ₫</td>
						</tr>
						
						<tr class="order_summary order_total">
							<td class="fix-width-200">Total money:</td>								
							<td class="right"><strong>{{number_format($total + $order->shipping_fee, 0, ',', '.')}} ₫ </strong></td>
						</tr>   
					</tfoot>
				</table>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						@if ($order->status == 0 || $order->status == 1 || $order->status == 2)
						<span class="btn btn-primary {{$order->status == 2 ? 'disabled' : '' }}" id="delivery" data-id="{{$order->id}}" data-status="2" data-url="{{route('admin.orders.index')}}">
							@if ($order->status == 0 || $order->status == 1)
								Delivery
							@elseif ($order->status == 2)
								Delivering
							@endif
						</span>
						@endif
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						@if ($order->status == 0 || $order->status == 1 || $order->status == 4)
						<span class="btn btn-destroy {{$order->status == 4 ? 'disabled' : '' }}" style="color: #fff; float: right;" id="cancel" data-id="{{$order->id}}" data-status="4" data-url="{{route('admin.orders.index')}}">
							@if ($order->status == 0 || $order->status == 1)
								Cancel order
							@elseif ($order->status == 4)
								Cancelled
							@endif
						</span>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	$(document).ready(function () {
		// Delivery
		$('#delivery').click(function (e) {
			e.preventDefault();
			var id = e.target.dataset.id;
			var status = e.target.dataset.status;
			var url = e.target.dataset.url;
			$.ajax({
			type: 'PUT',
			url: url,
			dataType: 'json',
			data: {
				_token: $("input[name=_token]").val(),
				id: id,
				status: status,
			},
			success: function (response) {
				console.log(response)
				$("#delivery").text("Delivering");
				$("#delivery").addClass("disabled");
				$(".status_").text(response.status);
				$("#cancel").remove();

			},
			error: function (jqXHR, textStatus, errorThrown) {
			}
			})
		})

		// Cancel
		$('#cancel').click(function (e) {
			e.preventDefault();
			var id = e.target.dataset.id;
			var status = e.target.dataset.status;
			var url = e.target.dataset.url;
			$.ajax({
			type: 'PUT',
			url: url,
			dataType: 'json',
			data: {
				_token: $("input[name=_token]").val(),
				id: id,
				status: status,
			},
			success: function (response) {
				console.log(response)
				$("#cancel").text("Cancelled");
				$("#cancel").addClass("disabled");
				$(".status_").text(response.status);
				$("#delivery").remove();
			},
			error: function (jqXHR, textStatus, errorThrown) {
			}
			})
		})
	})
</script>
@endsection