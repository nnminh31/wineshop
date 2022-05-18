@extends('admin.layouts.master')
@section('title')
Manage order
@endsection
@section('block')
List order
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3" style="float: left">
        <h6 class="m-0 font-weight-bold text-primary" style="float: left">Brand</h6>
        <a href="{{route('admin.brands.add')}}" style="float: right">Add</a>
    </div>
    <div class="card-body">
        <div class="table-responsive" id="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
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
                        <td><a href="">{{$order->name}}</a></td>
                        <td class="text-center">
                            <a href="">
                                {{$order->created_at}}
                            </a>
                        </td>
                        <td><a href="">{{$order->user->name}}</a></td>
                        <td><a href="">{{$order->status}}</a></td>
                        <td><a href="">{{$order->status}}</a></td>
                        <td><a href="">{{$order->status}}</a></td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Process</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        {{$orders->links('vendor.pagination.custom')}}
    </div>
</div>

@endsection