@extends('admin.layouts.master')
@section('title')
Đơn hàng #{{$order->id}}
@endsection
@section('block')

@endsection
@section('content')
<link rel="stylesheet" href="{{asset('asset/css/admin/style.css')}}">
<section class="login">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 class="title-headding order-headding" style="color: #323c3f">Đơn hàng</h1>
				<span class="note order_date"><i>Ngày tạo — 21/05/2022 20:05</i>
					<a class="color_main" href="http://cute0pets.tk/tai-khoan/thong-tin-tai-khoan.html">
						<i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Quay lại trang tài khoản
					</a>
				</span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div id="order_payment" class="span6 box-address margin-top-20">
					<div class="box-header">
						<h2 class="title-head">Địa chỉ thanh toán</h2>
						<p>
							Trạng thái thanh toán:

							<i class="status_pending">

								Chưa thanh toán

							</i>

						</p>
					</div>
					<div class="address note">
						<p>
							<i class="fa fa-user"></i>
							<a class="color_main" href="tel:0123154512" id="customer_phone">ấdasdasd</a>
						</p>
						<p>
							<i class="fa fa-map-marker"></i>
							Phường 8, Quận 3, TP Hồ Chí Minh
						</p>
						<p>
							<i class="fa fa-phone"> </i>
							<a class="color_main" href="tel:0123154512">0123154512</a>
						</p>

					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">

				<div id="order_shipping" class="span6 box-address margin-top-20">
					<div class="box-header">
						<h2 class="title-head">Địa chỉ giao hàng</h2>
						<p>
							Trạng thái vận chuyển:

							<i class="status_">

								Chưa giao hàng

							</i>

						</p>
					</div>
					<div class="address note">
						<p><i class="fa fa-user"></i>ấdasdasd</p>
						<p><i class="fa fa-map-marker"></i>
							Phường 8, Quận 3, TP Hồ Chí Minh,

						</p>
						<p><i class="fa fa-phone"></i>0123154512</p>
					</div>
				</div>

			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="table-responsive-block margin-top-20">
					<table id="order_details" class="table table-cart">
						<thead class="thead-default">
							<tr>
								<th>Sản phẩm</th>
								<th>Mã sản phẩm</th>
								<th>Giá</th>
								<th>Số lượng</th>
								<th>Tổng</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td data-title="Tên">
								<a class="color_main" href="http://cute0pets.tk/san-pham/thuc-an-cho-lon-ganador-adult-10kg-vi-cuu-va-gao.html">Thức ăn chó lớn Ganador Adult 10Kg - Vị Cừu và Gạo</a>								
							</td>
							<td data-title="Mã SKU">---</td>
							<td data-title="Giá" class="numeric">425.000₫</td>
							<td data-title="Số lượng" class="numeric">1</td>
							<td data-title="Tổng" class="numeric">425.000₫</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<table class="table totalorders">
				<tfoot>
						<tr class="order_summary ">
							<td class="fix-width-200">Tạm tính:</td>								
							<td class="total money right">425.000₫</td>
						</tr>   
						
						
						<tr class="order_summary ">
							<td class="fix-width-200" colspan="">Phí vận chuyển ():</td>
              							<td class="total money right">1₫</td>
						</tr>
						
						<tr class="order_summary order_total">
							<td class="fix-width-200">Tổng tiền:</td>								
							<td class="right"><strong>425.001₫ </strong></td>
						</tr>   
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</section>
@endsection