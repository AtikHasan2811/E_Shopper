@extends('admin.admin_layout')
@section('body')

    <h2 class="text-center">Category Table</h2>

    <a href="#" style="float: right" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">Add New</a>

    <table id="dt-basic-checkbox" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th class="th-sm">ID
            </th>
            <th class="th-sm">Category Name
            </th>
            <th class="th-sm">Action
            </th>

        </tr>
        </thead>
        <tbody>
        @foreach($category as $row)
            <tr>

                <td>{{ $row->id }}</td>
                <td>{{ $row->category_name }}</td>
                <td>
                    <a href="{{route('catagoryedit',['ID'=>$row->id])}}" class="btn btn-sm btn-info">edit</a>
                    <a href="{{ route('categorydelete',['ID'=>$row->id]) }}" class="btn btn-sm btn-danger" id="delete" onclick="sweet()">delete</a>


                </td>

            </tr>
        @endforeach
        </tbody>

    </table>



    {{--    for model.................--}}

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif




                <form method="post" action="{{ route('store.category') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Category" name="category_name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--..........................end for model........................--}}

@endsection
