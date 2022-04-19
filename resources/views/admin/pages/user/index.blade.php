@extends('admin.layouts.master')
@section('title')
Manage user
@endsection
@section('block')
List user
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3" style="float: left">
        <h6 class="m-0 font-weight-bold text-primary" style="float: left">User</h6>
        <a href="{{route('admin.users.add')}}" style="float: right">Add</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Position</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td><a href="{{route('admin.users.edit', $user->slug)}}">{{$user->name}}</a></td>
                        <td><a href="{{route('admin.users.edit', $user->slug)}}">{{$user->email}}</a></td>
                        <td><a href="{{route('admin.users.edit', $user->slug)}}">{{$user->phone}}</a></td>
                        <td><a href="{{route('admin.users.edit', $user->slug)}}">{{$user->role->name}}</a></td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Position</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection