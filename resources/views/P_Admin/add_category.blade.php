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


                    <form class="form-horizontal" method="post" action="{{  route('save_category') }}">
                        {{csrf_field()}}
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="date01">Category Name</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" name="category_name" >
                                </div>
                            </div>

                            <div class="control-group hidden-phone">
                                <label class="control-label" for="textarea2">Category description</label>
                                <div class="controls">
                                    <textarea name="category_discription" rows="3" ></textarea>
                                </div>
                            </div>

                            <div class="control-group hidden-phone">
                                <label class="control-label" for="textarea2">Publication Status</label>
                                <div class="controls">
                                    <label> <input type="radio" name="publication_status" value="1">Published</label>
                                    <label> <input type="radio" name="publication_status" value="0">UnPublished</label>
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
