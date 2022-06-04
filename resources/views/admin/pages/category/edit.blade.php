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
                                            <input id="name" name="name" type="text" value="{{$category->name}}" placeholder="" required>
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
                                                <option value="true" <?= $category->status == 'true' ? "selected" : "" ?>>True</option>
                                                <option value="false" <?= $category->status == 'false' ? "selected" : "" ?>>False</option>
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
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <div class="container" style="padding: 0">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="p-4 text-left border-top mobile-hidden">
                            <button type="button" class="btn btn-link px-3 btn-danger" id="{{$category->id}}" route="" onclick="delete_category(this)">
                                <!-- <i class="fas fa-code me-md-2"></i> -->
                                <span class="d-md-inline-block" style="color: #fff">
                                    Delete
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="p-4 text-right border-top mobile-hidden">
                            <button type="submit" class="btn btn-link px-3 btn-success">
                                <!-- <i class="fas fa-code me-md-2"></i> -->
                                <span class="d-md-inline-block" style="color: #fff">
                                    Submit
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<script>
    function delete_category(data) {
        // let id =  $(this).data('id')
        // let url =  $(this).data('url')
        if (confirm('Are you sure you want to delete this?')) {
            $.ajax({
                type: "Delete",
                url: "{{route('admin.categories.delete', $category->id)}}",
                dataType: 'json',
                data: {
                    _token: $("input[name=_token]").val(),
                    id: data.id,
                },
                success: function(data) {
                    console.log(data)
                    // console.log(data.items)
                    return window.location.href = "{{route('admin.categories.index')}}";
                }
            })
        }
    }
</script>
@endsection