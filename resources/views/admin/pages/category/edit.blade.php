@extends('admin.layouts.master')
@section('title')
{{$category->name}}
@endsection
@section('block')
{{$category->name}}
@endsection
@section('content')
<form action="{{route('admin.categories.edit', $category->id)}}" method="Post">
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
                        <div class="card mb-4 mb-lg-0">
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush rounded-3">
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fas fa-globe fa-lg text-warning"></i>
                                        <p class="mb-0">https://mdbootstrap.com</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                        <p class="mb-0">mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                        <p class="mb-0">@mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                        <p class="mb-0">mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                        <p class="mb-0">mdbootstrap</p>
                                    </li>
                                </ul>
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
                                            <input id="name" name="name" type="text" value="{{$category->name}}" placeholder="">
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
                                            <select name="status" id="status" style="width: 194px;">
                                                <option value="true" <?= $category->status == 'true' ? "selected" : ""?> >True</option>
                                                <option value="false" <?= $category->status == 'false' ? "selected" : "" ?> >False</option>
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
                                            <select name="parent_id" id="parent_id" style="width: 194px;">
                                                <option value="">Chọn cấp bậc</option>
                                                @foreach($list_cat as $cat)
                                                    @if (!empty($category->parent_id) && $category->parent_id == $cat->id)
                                                        <option value="{{$cat->id}}" selected>{{str_repeat('---', $cat->level).$cat->name}}</option>
                                                    @else
                                                        <option value="{{$cat->id}}">{{str_repeat('---', $cat->level).$cat->name}}</option>
                                                    @endif
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
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">ordinal</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input type="text" value="1">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status</p>
                                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                        <div class="progress rounded mb-2" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status</p>
                                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                        <div class="progress rounded mb-2" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
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