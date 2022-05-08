@extends('website.layouts.master')
@section('title')
Đăng ký
@endsection
@section('content')
<script src="//code.jquery.com/jquery.js"></script>
<main class="cd-main-content" style="min-height: auto;">
    <div class="banner">
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="row">

                <aside class="col-xs-6 col-md-6 col-lg-6" style="margin: 0 auto;">
                    <div class="card">
                        <article class="card-body">
                            <a href="{{route('login')}}" class="float-right btn btn-outline-primary">Sign in</a>
                            <h4 class="card-title mb-4 mt-1">Sign up</h4>
                            <p>
                                <a href="" class="btn btn-block btn-outline-info"> <i class="fa fa-twitter"></i> &nbsp; Login via Twitter</a>
                                <a href="" class="btn btn-block btn-outline-primary"> <i class="fa fa-facebook-f"></i> &nbsp; Login via facebook</a>
                            </p>
                            <hr>
                            <!-- <p class="text-success text-center">Some message goes here</p> -->
                            <div id="alert_success" class="alert alert-success alert-dismissible fade show text-center" style="display: none"  role="alert">
                                <p style="margin-bottom: 0">Chuyển sang trang <a style="color:red" href="{{route('login')}}">đăng nhập</a> sau <span id="time">3</span> s</p>
                                <button type="button" class="close" aria-label="Close" onclick="this.parentElement.style.display='none';">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div id="alert_error" class="alert alert-danger alert-dismissible fade text-center" style="display: none" role="alert">
                                <strong>Rất tiếc!</strong> Đã có người sử dụng email này.
                                <button type="button" class="close" aria-label="Close" onclick="this.parentElement.style.display='none';">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div id="alert_error1" class="alert alert-danger alert-dismissible fade text-center" style="display: none" role="alert">
                                <strong>Báo lỗi:</strong> Xác nhận mật khẩu phải giống với mật khẩu.
                                <button type="button" class="close" aria-label="Close" onclick="this.parentElement.style.display='none';">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form data-url="{{route('register')}}" method="post" id="register_form" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="padding: 0.375rem 0.93rem"> <i class="fa fa-user"></i> </span>
                                        </div>
                                        <input name="name" class="form-control" type="text" required>
                                    </div> <!-- input-group.// -->
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                        </div>
                                        <input name="email" class="form-control" type="email" required>
                                    </div> <!-- input-group.// -->
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="padding: 0.375rem 0.93rem"> <i class="fa fa-lock"></i> </span>
                                        </div>
                                        <input name="password" minlength="6" class="form-control" type="password" required>
                                    </div> <!-- input-group.// -->
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="padding: 0.375rem 0.93rem"> <i class="fa fa-lock" style="color:red"></i> </span>
                                        </div>
                                        <input name="confirm_password" class="form-control" type="password" required>
                                    </div> <!-- input-group.// -->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block"> Register </button>
                                        </div> <!-- form-group// -->
                                    </div>
                                </div> <!-- .row// -->
                            </form>
                        </article>
                    </div> <!-- card.// -->

                </aside>

            </div>
        </div>
    </div>
</main>
<script>
	function startTimer(duration, display) {
    var timer = duration, seconds;
    var downloadTimer =  setInterval(function () {
        seconds = parseInt(timer % 60, 10);

        display.textContent = seconds;

        if (--timer < 0) {
            timer = duration;
            clearInterval(downloadTimer);
            document.getElementById("register_form").reset()
            window.location.href = "{{route('login')}}"
            $("#alert_success").removeClass('show').css('display', 'none');
        }
    }, 1000);
}

</script>
<!-- <script>
    $('html, body').animate({
        scrollTop: $(".wrapper").offset().top
    }, 1000);
</script> -->
<script>
    $('#register_form').submit(function(e) {
        e.preventDefault()
        var url = $(this).attr('data-url')
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'json',
            data: {
                _token: $("input[name=_token]").val(),
                name: $("input[name=name]").val(),
                email: $("input[name=email]").val(),
                password: $("input[name=password]").val(),
                confirm_password: $("input[name=confirm_password]").val(),
            },
            success: function(response) {
                if (response.success) {
                    $("#alert_error").removeClass('show').css('display', 'none');
                    $("#alert_error1").removeClass('show').css('display', 'none');
                    $("#alert_success").addClass('show').css('display', 'block');
                    var seconds = 3;
                    display = document.querySelector('#time');
                    startTimer(seconds, display)
                } else if(response.email) {
                    $("#alert_error").addClass('show').css('display', 'block');
                    $("#alert_error1").removeClass('show').css('display', 'none');
                } else if(response.password) {
                    $("#alert_error1").addClass('show').css('display', 'block');
                    $("#alert_error").removeClass('show').css('display', 'none');
                }

            }
        })
    })
</script>

@endsection