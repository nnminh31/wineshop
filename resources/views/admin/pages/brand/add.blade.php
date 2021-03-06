@extends('admin.layouts.master')
@section('title')
Create brand
@endsection
@section('block')
Create brand
@endsection
@section('content')
<script src="//code.jquery.com/jquery.js"></script>
<form action="{{route('admin.brands.add')}}" method="Post" enctype="multipart/form-data">
    @csrf
    <section class="pb-4">
        @if(session()->has('message'))
            <div style="color:red; margin-bottom: 20px; text-align: center">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="bg-white border rounded-5">

            <section class="w-100 p-4" style="background-color: #eee; border-radius: .5rem .5rem 0 0;">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                        <div class="card-body text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Flag_of_None_%28square%29.svg/768px-Flag_of_None_%28square%29.svg.png" onerror="this.src='https://static2.yan.vn/YanNews/2167221/202102/facebook-cap-nhat-avatar-doi-voi-tai-khoan-khong-su-dung-anh-dai-dien-e4abd14d.jpg'" alt="avatar" class="rounded-circle img-fluid" id="img-avatar" style="width: 250px; height: 250px">
                                <h5 class="my-3" id="fix_name">Free Shipping</h5>
                                <input type="file" id="uploadProductImage" style="display:none;" accept="image/x-png,image/gif,image/jpeg" name="icon" onchange="document.getElementById('img-avatar').src = window.URL.createObjectURL(this.files[0])">
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
                                            <input id="name" name="name" type="text" value="" placeholder="" required>
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
                                            <select name="status" id="status" style="width: 194px;" required>
                                                <option value="true" selected>True</option>
                                                <option value="false">False</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Description</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <textarea name="description" id="" style="width: 194px;" rows="10" ></textarea>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Type</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <select name="type" id="type" style="width: 194px;" required>
                                                <option value="Rượu mạnh">Rượu mạnh</option>
                                                <option value="Rượu vang" selected>Rượu vang</option>
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
                                <hr>
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