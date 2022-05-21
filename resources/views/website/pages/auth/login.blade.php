@extends('website.layouts.master')
@section('title')
Đăng nhập
@endsection
@section('content')
<script src="//code.jquery.com/jquery.js"></script>
<main class="cd-main-content" style="min-height: auto;">
    <div class="spinner" style="z-index: 9999"></div>
    <div class="login-popup-content-wrap"></div>
    <div class="banner">
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <aside class="col-xs-6 col-md-6 col-lg-6" style="margin: 0 auto;">
                    <div class="card">
                        <article class="card-body">
                            <a href="{{route('register')}}" class="float-right btn btn-outline-primary">Sign up</a>
                            <h4 class="card-title mb-4 mt-1">Sign in</h4>
                            <p>
                                <a href="" class="btn btn-block btn-outline-info"> <i class="fa fa-twitter"></i> &nbsp; Login via Twitter</a>
                                <a href="" class="btn btn-block btn-outline-primary"> <i class="fa fa-facebook-f"></i> &nbsp; Login via facebook</a>
                            </p>
                            <hr>
                            <!-- <p class="text-success text-center">Some message goes here</p> -->
                            <div id="alert_error" class="alert alert-danger alert-dismissible fade text-center" style="display: none" role="alert">
                                <strong>Báo lỗi:</strong> Tài khoản hoặc Mật khẩu không đúng. Vui lòng thử lại.
                                <button type="button" class="close" aria-label="Close" onclick="this.parentElement.style.display='none';">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form data-url="{{route('login')}}" method="post" id="login_form">
                                @csrf
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
                                        <input class="form-control" name="password" type="password" required>
                                    </div> <!-- input-group.// -->
                                </div>
                                <input type="hidden" name="returnUrl" value="{{isset($_GET['returnUrl']) ? $_GET['returnUrl'] : ''}}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block"> Login </button>
                                        </div> <!-- form-group// -->
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a class="small" href="#">Forgot password?</a>
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
    $(document).ready(function() {
        $('#login_form').submit(function(e) {
            e.preventDefault()
            var url = $(this).attr('data-url')
            $.ajax({
                type: 'POST',
                url: url,
                dataType: 'json',
                data: {
                    _token: $("input[name=_token]").val(),
                    email: $("input[name=email]").val(),
                    password: $("input[name=password]").val(),
                    returnUrl: $("input[name=returnUrl]").val(),
                },
                success: function(response) {
                    if (response.success) {
                        var seconds = 1;
                        if (response.check) {
                            document.getElementById("login_form").reset()
                            window.location.href = "{{route('checkout')}}"
                        }
                        startTimer(seconds)
                    } else {
                        $("#alert_error").addClass('show').css('display', 'block');
                    }

                }
            })
        })
    })
</script>
<script>
    $('html, body').animate({
        scrollTop: $(".wrapper").offset().top
    }, 1000);
</script>
<!-- <script>
    $('input[name=email]').on('keyup', function() {
        $("#alert_error").removeClass('show').css('display', 'none');
    })
</script> -->
<script>
    function startTimer(duration) {
        var timer = duration,
            seconds;
        var downloadTimer = setInterval(function() {
            seconds = parseInt(timer % 60, 10);

            if (--timer < 0) {
                timer = duration;
                clearInterval(downloadTimer);
                document.getElementById("login_form").reset()
                window.location.href = "{{route('home')}}"
            }
        }, 400);
    }
</script>
@endsection