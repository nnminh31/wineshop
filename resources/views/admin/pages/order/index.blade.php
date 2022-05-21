@extends('admin.layouts.master')
@section('title')
Manage order
@endsection
@section('block')
List order
@endsection
@section('content')
<script src="//code.jquery.com/jquery.js"></script>
<style>
    th, td {
        text-align: center;
    }
    tr td a {
        border-radius: 2rem  !important;
        padding: 0 1rem !important;
        text-decoration: none !important
    }
    tr td a.order_status {
        background: white;
        border:1px solid red;
        color: red;
    }
</style>
<div class="card shadow mb-4">
    <div class="card-header py-3" style="float: left">
        <h6 class="m-0 font-weight-bold text-primary" style="float: left">Brand</h6>
        <a href="javascript:;" style="float: right; color: #000; text-decoration: none;">Add</a>
    </div>
    <div class="card-body">
        <div class="table-responsive" id="table-responsive">
            <form id="process" data-url="{{route('admin.orders.index')}}" method="post">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    {{ csrf_field() }}
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Order Date</th>
                            <th>Customer</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Process</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td><a href="{{route('admin.orders.edit', $order->id)}}">#{{$order->id}}</a></td>
                            <td>
                                <a href="{{route('admin.orders.edit', $order->id)}}">
                                    {{$order->created_at->format('d/m/Y H:i')}}
                                </a>
                            </td>
                            <td>
                                <a href="{{route('admin.users.edit', $order->user->email)}}">{{$order->user->email}}</a>
                            </td>
                            <td>
                                @if($order->status == 0)
                                    <a class="order_status order_status1" data-id="{{$order->id}}" href="{{route('admin.orders.edit', $order->id)}}">Pending</a>
                                @elseif($order->status == 1)
                                    <a class="order_status order_status1" data-id="{{$order->id}}" href="{{route('admin.orders.edit', $order->id)}}">Confirm</a>
                                @elseif($order->status == 2)
                                    <a class="order_status order_status1" data-id="{{$order->id}}" href="{{route('admin.orders.edit', $order->id)}}">Shipping</a>
                                @elseif($order->status == 3)
                                    <a class="order_status order_status1" data-id="{{$order->id}}" href="{{route('admin.orders.edit', $order->id)}}">Completed</a>
                                @elseif($order->status == 3)
                                    <a class="order_status order_status1" data-id="{{$order->id}}" href="{{route('admin.orders.edit', $order->id)}}">Cancelled</a>
                                @endif
                            </td>
                            <td style="text-align: right;"><a href="">{{number_format($order->amount, 0,',','.')}} ₫</a></td>
                            <td><a class="order_status progresser" href="javascript:;">
                                @if($order->status == 0)
                                    <span class="processing" data-id="{{$order->id}}">
                                        Process
                                    </span>
                                @else
                                    {{$order->processer->name ?? 'Process'}}
                                @endif
                            </a></td>
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Order Date</th>
                            <th>Customer</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Process</th>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
        {{$orders->links('vendor.pagination.custom')}}
    </div>
</div>
<script>
  $(document).ready(function () {
    $('.processing').click(function (e) {
        e.preventDefault();
        var id = e.target.dataset.id;
        var url = $('#process').data('url')
        console.log(id);
        $.ajax({
        type: 'PUT',
        url: url,
        dataType: 'json',
        data: {
            _token: $("input[name=_token]").val(),
            id: id,
        },
        success: function (response) {
            console.log(response)
            $(".order_status1[data-id='"+ response.order_id + "']").text(response.status)
            console.log($(".order_status1[data-id='"+ response.order_id + "']"))
        },
        error: function (jqXHR, textStatus, errorThrown) {
        }
        })
    })
  })
</script>
@endsection