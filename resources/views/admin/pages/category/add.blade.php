@extends('admin.layouts.master')
@section('title')
Create category
@endsection
@section('block')
Create category
@endsection
@section('content')
<form action="{{route('admin.categories.add')}}" method="Post">
    @csrf
    <section class="pb-4">
        <div class="bg-white border rounded-5">

            <section class="w-100 p-4" style="background-color: #eee; border-radius: .5rem .5rem 0 0;">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://evamom.com/wp-content/uploads/2019/02/siderbar-eva-mom-02-img.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 250px;">
                                <h5 class="my-3" id="fix_name">Free Shipping</h5>
                                <!-- <p class="text-muted mb-1" id="fix_email">example@example.com</p>
                                <p class="text-muted mb-2" id="fix_phone">0386334588</p> -->
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
                                        <p class="mb-0">Danh mục</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <select name="parent_id" id="parent_id" style="width: 194px;" required>
                                                <option value="">Chọn cấp bậc</option>
                                                @foreach($list_cat as $cat)
                                                    <option value="{{$cat->id}}">{{str_repeat('---', $cat->level).$cat->name}}</option>
                                                @endforeach
                                            </select>
                                        </p>
                                    </div>
                                </div>
                                <hr>
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