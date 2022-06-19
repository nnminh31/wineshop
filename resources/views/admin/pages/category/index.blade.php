@extends('admin.layouts.master')
@section('title')
Manage category
@endsection
@section('block')
List category
@endsection
@section('content')
<script src="//code.jquery.com/jquery.js"></script>
<div class="card shadow mb-4">
    <div class="card-header py-3" style="float: left">
        <h6 class="m-0 font-weight-bold text-primary" style="float: left">Category</h6>
        <a href="{{route('admin.categories.add')}}" style="float: right">Add</a>
    </div>
    <div class="card-body">
        <div class="table-responsive" id="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Creator</th>
                        <th>Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td><a href="{{route('admin.categories.edit', $category->slug)}}">{{$category->name}}</a></td>
                        <td <?php
                            if ($category->description) {
                                echo 'class="text-center"';
                            }
                            ?> class="text-center"><a href="{{route('admin.categories.edit', $category->slug)}}">
                                <?php
                                if ($category->description) {
                                    echo $category->description;
                                } else {
                                    echo "----";
                                }
                                ?>
                            </a></td>
                        <td><a href="{{route('admin.categories.edit', $category->slug)}}">{{$category->name}}</a></td>
                        <td><a href="{{route('admin.categories.edit', $category->slug)}}">{{$category->created_at}}</a></td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Creator</th>
                        <th>Created_at</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        {{$categories->links('vendor.pagination.custom')}}
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "paging": false,
            "order": [
                [1, "desc"]
            ]
        });
    });
</script>
@endsection