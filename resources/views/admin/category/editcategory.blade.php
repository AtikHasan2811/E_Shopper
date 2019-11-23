
@extends('admin.admin_layout')
@section('body')
    <h2 class="text-center">Category Update</h2>
    <a href="#" style="float: right" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">Add New</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

{{--    <form method="post" action="{{ url('admin/Categories') }}">--}}
    <form method="post" action="{{ url('admin/Categories/'.$category->id) }}">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
{{--            <input type="hidden" name="Categ_id" class="form-control" value="{{$category->id}}">--}}
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $category->category_name }}" name="category_name">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>



@endsection
