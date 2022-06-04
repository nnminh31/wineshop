@extends('admin.layouts.master')
@section('title')
{{$brand->name}}
@endsection
@section('block')
{{$brand->name}}
@endsection
@section('content')
<script src="//code.jquery.com/jquery.js"></script>
<form action="{{route('admin.brands.edit', $brand->id)}}" method="Post" enctype="multipart/form-data">
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
                                <img src="{{asset('images/brands/'.$brand->icon)}}" alt="avatar" class="rounded-circle img-fluid" id="img-avatar" style="width: 250px; height: 250px">
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
                                            <input id="name" name="name" type="text" value="{{$brand->name}}" placeholder="" required>
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
                                                <option value="true" <?= $brand->status == 'true' ? "selected" : "" ?>>True</option>
                                                <option value="false" <?= $brand->status == 'false' ? "selected" : "" ?>>False</option>
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
                                            <textarea name="description" id="" style="width: 194px;" rows="10">{{$brand->description}}</textarea>
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
                                                <option value="Rượu mạnh" <?= $brand->type == 'Rượu mạnh' ? "selected" : "" ?>>Rượu mạnh</option>
                                                <option value="Rượu vang" <?= $brand->type == 'Rượu vang' ? "selected" : "" ?>>Rượu vang</option>
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
            <div class="container" style="padding: 0">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="p-4 text-left border-top mobile-hidden">
                            <button type="button" class="btn btn-link px-3 btn-danger" id="{{$brand->id}}" onclick="delete_brand(this)">
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
    function delete_brand(data) {
        // let id =  $(this).data('id')
        // let url =  $(this).data('url')
        if (confirm('Are you sure you want to delete this?')) {
            $.ajax({
                type: "Delete",
                url: "{{route('admin.brands.delete', $brand->id)}}",
                dataType: 'json',
                data: {
                    _token: $("input[name=_token]").val(),
                    id: data.id,
                },
                success: function(data) {
                    console.log(data)
                    // console.log(data.items)
                    return window.location.href = "{{route('admin.brands.index')}}";
                }
            })
        }
    }
</script>
@endsection