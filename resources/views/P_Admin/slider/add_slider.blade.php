@extends('admin.admin_layout')
@section('body')

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider</h2>
            </div>
            <div class="box-content">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form class="form-horizontal" method="post" action="{{  url('admin/slider/save_slider/') }} " enctype="multipart/form-data">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Slider image</label>
                            <div class="controls">
                                <input type="file" class="input-xlarge" name="slider_image" required >
                            </div>
                        </div>



                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Publication Status</label>
                            <div class="controls">
                                <label> <input type="radio" name="slider_publication" value="1">Published</label>
                                <label> <input type="radio" name="slider_publication" value="0">UnPublished</label>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>


            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection
