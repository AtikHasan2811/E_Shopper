@extends('admin.admin_layout')
@section('body')

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
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


                <form class="form-horizontal" method="post" action="{{  url('admin/Brand/save_brand/') }}">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Brand Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="BrandName" >
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Brand description</label>
                            <div class="controls">
                                <textarea name="BrandDiscription" rows="3" ></textarea>
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Publication Status</label>
                            <div class="controls">
                                <label> <input type="radio" name="PublicationStatus" value="1">Published</label>
                                <label> <input type="radio" name="PublicationStatus" value="0">UnPublished</label>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Brand</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection
