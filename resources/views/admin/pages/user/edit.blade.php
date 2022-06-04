@extends('admin.layouts.master')
@section('title')
{{$user->name}}
@endsection
@section('block')
{{$user->name}}
@endsection
@section('content')
<form action="{{route('admin.users.edit', $user->id)}}" method="Post">
    @csrf
    <section class="pb-4">
        <div class="bg-white border rounded-5">

            <section class="w-100 p-4" style="background-color: #eee; border-radius: .5rem .5rem 0 0;">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <h5 class="my-3" id="fix_name">{{$user->name}}</h5>
                                <p class="text-muted mb-1" id="fix_email">{{$user->email}}</p>
                                <p class="text-muted mb-2" id="fix_phone">{{$user->phone}}</p>
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
                                            <input id="name" name="name" type="text" value="{{$user->name}}" placeholder="" onkeyup="edValueNamePress()" required>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input id="email" name="fix_email" type="text" value="{{$user->email}}" placeholder="" onkeyup="edValueEmailPress()" disabled="disabled">
                                            <input id="email" name="email" type="hidden" value="{{$user->email}}" placeholder="">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input id="phone" name="phone" type="text" value="{{$user->phone}}" placeholder="" onkeyup="edValuePhonePress()" required>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Password</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" id="password">
                                            <input id="password" disabled name="password" type="password" value="{{$user->password}}" placeholder="Password">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Role</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <select name="role" id="role" style="width: 194px" required>
                                                @foreach($roles as $role)
                                                @if($user->role->id == $role->id)
                                                <option value="{{$role->id}}" selected>{{$role->name}}</option>
                                                @else
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </p>
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
    <script>
        function edValueNamePress() {
            var edValue = document.getElementById("name");
            var s = edValue.value;

            var lblValue = document.getElementById("fix_name");
            lblValue.innerText = s
        }

        function edValueEmailPress() {
            var edValue = document.getElementById("email");
            var s = edValue.value;

            var lblValue = document.getElementById("fix_email");
            lblValue.innerText = s
        }

        function edValuePhonePress() {
            var edValue = document.getElementById("phone");
            var s = edValue.value;

            var lblValue = document.getElementById("fix_phone");
            lblValue.innerText = s
        }
    </script>
</form>
@endsection