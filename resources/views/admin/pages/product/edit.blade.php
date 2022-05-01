@extends('admin.layouts.master')
@section('title')
{{$product->name}}
@endsection
@section('block')
{{$product->name}}
@endsection
@section('content')
<script src="//code.jquery.com/jquery.js"></script>
<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<form action="{{route('admin.products.edit', $product->id)}}" method="Post" enctype="multipart/form-data">
    @csrf
    <section class="pb-4">
        <div class="bg-white border rounded-5">

            <section class="w-100 p-4" style="background-color: #eee; border-radius: .5rem .5rem 0 0;">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="{{asset('images/products/'.$product->image)}}" onerror="this.src='https://static2.yan.vn/YanNews/2167221/202102/facebook-cap-nhat-avatar-doi-voi-tai-khoan-khong-su-dung-anh-dai-dien-e4abd14d.jpg'" alt="avatar" class="rounded-circle img-fluid" id="img-avatar" style="width: 250px; height: 250px">
                                <h5 class="my-3" id="fix_name">Free Shipping</h5>
                                <input type="file" id="uploadProductImage" style="display:none;" accept="image/x-png,image/gif,image/jpeg" name="product_image" onchange="document.getElementById('img-avatar').src = window.URL.createObjectURL(this.files[0])">
                                <!-- <p class="text-muted mb-1" id="fix_email">example@example.com</p>
                                <p class="text-muted mb-2" id="fix_phone">0386334588</p> -->
                                <input type="button" value="Sửa ảnh" id="upload_product_image">
                                <script>
                                    $('#upload_product_image').click(function(e) {
                                        e.preventDefault();
                                        $("#uploadProductImage").trigger('click');
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body p-0">
                                <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <p class="mb-4"><span class="text-primary font-italic me-1">Category</span></p>
                                        <p class="text-muted mb-0">
                                            <select name="category_id" id="category_id" style="width: 100%;">
                                                @foreach($list_cat as $category)
                                                @if($category->parent_id != "")
                                                @if($product->category_id == $category->id))
                                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                                @else
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endif
                                                @endif
                                                @endforeach
                                            </select>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1">Brand</span></p>
                                <p class="text-muted mb-0">
                                    <select name="brand_id" id="brand_id" style="width: 100%;">
                                        @foreach($brands as $brand)
                                        @if($product->brand_id == $brand->id)
                                        <option value="{{$brand->id}}" selected>{{$brand->name}}</option>
                                        @else
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input id="product_name" name="product_name" type="text" value="{{$product->name}}" placeholder="">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Price</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input id="product_prỉce" name="product_prỉce" type="text" value="{{$product->price}}" placeholder="">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Capacity</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input id="product_capacity" name="product_capacity" type="text" value="{{$product->capacity}}" placeholder="">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Concentration</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input id="product_concentration" name="product_concentration" type="text" value="{{$product->concentration}}" placeholder="">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Country</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input id="product_country" name="product_country" type="text" value="{{$product->country}}" placeholder="">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Area</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input id="product_area" name="product_area" type="text" value="{{$product->area}}" placeholder="">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Status</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <select name="product_status" id="product_status" style="width: 194px;">
                                                <option value="true" <?= $product->status == 'true' ? "selected" : "" ?>>True</option>
                                                <option value="false" <?= $product->status == 'false' ? "selected" : "" ?>>False</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Password</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" id="password">
                                            <input id="password" name="password" type="password" value="" placeholder="Password">
                                        </p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <textarea name="product_description" id="product_description" rows="6">{{$product->description}}</textarea>
                                        </div>
                                        <script>
                                            CKEDITOR.replace('product_description', {
                                                height: "200px",
                                            })
                                            CKEDITOR.config.autoParagraph = false;
                                            CKEDITOR.on('instanceReady', function(e) {
                                                // First time
                                                // e.editor.document.getBody().setStyle('color', 'red');
                                                e.editor.document.getBody().setStyle('background-color', '#fff');
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <div class="p-4 text-right border-top mobile-hidden">
                <button type="submit" class="btn btn-link px-3 btn-success">
                    <!-- <i class="fas fa-code me-md-2"></i> -->
                    <span class="d-md-inline-block" style="color: #fff">
                        Submit
                    </span>
                </button>

            </div>

        </div>
    </section>
</form>
@endsection