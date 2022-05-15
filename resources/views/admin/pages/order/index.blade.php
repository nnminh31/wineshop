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
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Process</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td><a href="">{{$brand->name}}</a></td>
                        <td <?php
                            if ($brand->description) {
                                echo 'class="text-center"';
                            }
                            ?> class="text-center"><a href="{{route('admin.brands.edit', $brand->slug)}}">
                                <?php
                                if ($brand->description) {
                                    echo $brand->description;
                                } else {
                                    echo "----";
                                }
                                ?>
                            </a></td>
                        <td><a href="">{{$brand->type}}</a></td>
                        <td><a href="">{{$brand->user->name}}</a></td>
                        <td><a href="">{{$brand->created_at}}</a></td>
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
        {{$brands->links('vendor.pagination.custom')}}
    </div>
</div>

@endsection