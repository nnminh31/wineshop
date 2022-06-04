@extends('admin.layouts.master')
@section('title')
Create product
@endsection
@section('block')
Create product
@endsection
@section('content')
<script src="//code.jquery.com/jquery.js"></script>
<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<form action="{{route('admin.products.add')}}" method="Post" enctype="multipart/form-data">
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
                                <input type="file" id="uploadProductImage" style="display:none;" accept="image/x-png,image/gif,image/jpeg" name="product_image" onchange="document.getElementById('img-avatar').src = window.URL.createObjectURL(this.files[0])">
                                <!-- <p class="text-muted mb-1" id="fix_email">example@example.com</p>
                                <p class="text-muted mb-2" id="fix_phone">0386334588</p> -->
                                <input type="button" value="Sửa ảnh" id="upload_product_image" required>
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
                                                <option value="{{$category->id}}">{{$category->name}}</option>
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
                                        <option value="" selected>No brand</option>
                                        @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
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
                                            <input id="product_name" name="product_name" type="text" value="" placeholder="" required>
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
                                            <input id="product_prỉce" name="product_prỉce" type="text" value="" placeholder="" required>
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
                                            <input id="product_capacity" name="product_capacity" type="number" value="" placeholder="">
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
                                            <input id="product_concentration" name="product_concentration" type="number" value="" placeholder="">
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
                                            <input id="product_country" name="product_country" type="text" value="" placeholder="">
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
                                            <input id="product_area" name="product_area" type="text" value="" placeholder="">
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
                                                <option value="true" selected>True</option>
                                                <option value="false">False</option>
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
                                        <textarea name="product_description" id="product_description" rows="6"></textarea>
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
<script>
             $("#product_prỉce").on({
                keyup: function() {
                  formatCurrency($(this));
                },
                blur: function() { 
                  formatCurrency($(this), "blur");
                }
            });

            function formatNumber(n) {
              let t = n;
              try{
                t = parseFloat(n.replace(/\D/g, "")).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              }
              catch(e){
                t='';
              }
              // format number 1000000 to 1,234,567
              return t
            }


            function formatCurrency(input, blur) {
              // appends $ to value, validates decimal side
              // and puts cursor back in right position.
              
              // get input value
              var input_val = input.val();
              
              // don't validate empty input
              if (input_val === "") { return; }
              
              // original length
              var original_len = input_val.length;

              // initial caret position 
              var caret_pos = input.prop("selectionStart");
                
              // check for decimal
              if (input_val.indexOf(".") >= 0) {

                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(".");

                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);

                // add commas to left side of number
                left_side = formatNumber(left_side);

                // validate right side
                right_side = formatNumber(right_side);
                
                // On blur make sure 2 numbers after decimal
                
                // Limit decimal to only 2 digits
                right_side = right_side.substring(0, 2);

                // join number by .
                input_val = left_side + "." + right_side;

              } else {
                // no decimal entered
                // add commas to number
                // remove all non-digits
                input_val = formatNumber(input_val);
                input_val = input_val;
                
              }
              
              // send updated string to input
              input.val(input_val);

              // put caret back in the right position
              var updated_len = input_val.length;
              caret_pos = updated_len - original_len + caret_pos;
              input[0].setSelectionRange(caret_pos, caret_pos);
            }

</script>
@endsection