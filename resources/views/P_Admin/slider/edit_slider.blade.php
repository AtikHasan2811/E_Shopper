@extends('admin.admin_layout')
@section('body')

    <div class="box-content">
        <form  action=" {{ url('admin/slider/update_slider/'.$row->slider_id) }}"  method="post" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset>


                <div class="control-group">
                    <label class="control-label" for="fileInput">Image</label>
                    <div class="controls">

                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Brand Logo" name="slider_image" >
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="fileInput">Old Image</label>
                    <div class="controls">
                        <img src="{{ url($row->slider_image) }}" style="height: 70px; width:90px ;">
                        <input type="hidden"   name="old_logo" value="{{ $row->slider_image }}" >
                    </div>
                </div>



                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Publication Status</label>
                    <div class="controls">

                        <label> <input type="radio" name="publication_status" {{ $row->slider_publication == 1 ? 'checked' : '' }} value="1">Published</label>
                        <label> <input type="radio" name="publication_status" {{ $row->slider_publication == 0 ? 'checked' : '' }}  value="0">UnPublished</label>
                    </div>
                </div>



                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save data</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>

    </div>

@endsection
