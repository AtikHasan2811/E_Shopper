@extends('admin.admin_layout')
@section('body')

                <form method="post" action="{{ url('admin/brands/upload/'.$brand->id)  }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Brand Name</label>
                            <input type="text" class="form-control"  placeholder="Brand Name" name="brand_name" value="{{$brand->brand_name}}" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Brand Logo</label>
                            <input type="file" class="form-control"   name="brand_logo" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">old Logo</label>
                           <img src="{{ url($brand->brand_logo) }}" style="height: 70px; width:90px ;">
                            <input type="hidden"   name="old_logo" value="{{ $brand->brand_logo }}" >
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </form>

    {{--..........................end for model........................--}}

@endsection

