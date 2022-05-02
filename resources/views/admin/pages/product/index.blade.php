@extends('admin.layouts.master')
@section('title')
Manage product
@endsection
@section('block')
List product
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3" style="float: left">
        <h6 class="m-0 font-weight-bold text-primary" style="float: left">Category</h6>
        <a href="{{route('admin.products.add')}}" style="float: right">Add</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Creator</th>
                        <th>Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td><a href="{{route('admin.products.edit', $product->slug)}}">{{$product->name}}</a></td>
                        <td><a href="{{route('admin.products.edit', $product->slug)}}" class="text-center">
                            <img src="{{asset('images/products/'.$product->image)}}" alt="{{$product->name}}" width="100px" height="auto" style=" margin-left: auto; margin-right: auto; display: block;">
                        </a></td>
                        <td <?php
                            if ($product->description == null) {
                                echo 'class="text-center"';
                            }
                            ?>><a href="{{route('admin.products.edit', $product->slug)}}">
                                <?php
                                if ($product->description != null) {
                                    echo $product->description;
                                } else {
                                    echo "----";
                                }
                                ?>
                            </a></td>
                        <td><a href="{{route('admin.products.edit', $product->slug)}}">{{number_format($product->price, 0, ',', '.')}}</a></td>
                        <td <?php
                            if (!isset($product->category->name)) {
                                echo 'class="text-center"';
                            } ?>><a href="{{route('admin.products.edit', $product->slug)}}">{{$product->category->name ?? '----'}}</a></td>
                        <td <?php
                            if (!isset($product->brand->name)) {
                                echo 'class="text-center"';
                            } ?>><a href="{{route('admin.products.edit', $product->slug)}}">{{$product->brand->name ?? '----'}}</a></td>
                        <td <?php
                            if (!isset($product->user->name)) {
                                echo 'class="text-center"';
                            } ?>><a href="{{route('admin.products.edit', $product->slug)}}">{{$product->user->name ?? '----'}}</a></td>
                        <td><a href="{{route('admin.products.edit', $product->slug)}}">{{$product->created_at}}</a></td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                    <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Creator</th>
                        <th>Created_at</th>
                    </tr>
                </tfoot>
            </table>
            {{$products->links('vendor.pagination.custom')}}
        </div>
    </div>
</div>

@endsection