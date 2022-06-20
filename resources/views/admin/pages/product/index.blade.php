@extends('admin.layouts.master')
@section('title')
Manage product
@endsection
@section('block')
List product
@endsection
@section('content')
<script src="//code.jquery.com/jquery.js"></script>
<div class="card shadow mb-4">
    <div class="card-header py-3" style="float: left">
        <h6 class="m-0 font-weight-bold text-primary" style="float: left">Product</h6>
        <a href="{{route('admin.products.add')}}" style="float: right">Add</a>
    </div>
    <div class="card-body">
        <div class="table-responsive" id="table-responsive" style="overflow-x:auto;">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Category</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Creator</th>
                        <th scope="col">Created_at</th>
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
                                    // echo substr($product->description, 0, 210);
                                    echo substr_replace(strip_tags($product->description), "...", 110);
                                } else {
                                    echo "----";
                                }
                                ?>
                            </a></td>
                        <td><a href="{{route('admin.products.edit', $product->slug)}}">{{number_format($product->price, 0, ',', '.')}}</a></td>
                        <td><a href="{{route('admin.products.edit', $product->slug)}}">{{$product->quantity}}</a></td>
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
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Creator</th>
                        <th>Created_at</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        {{$products->links('vendor.pagination.custom')}}
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "paging": false,
            "order": [
                [1, "desc"]
            ]
        });
    });
</script>
@endsection