@extends('admin.admin_layout')
@section('body')

    <div class="box-content">
        <form  action=" {{ url('admin/product/save_product/') }}"  method="post" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Name </label>
                    <div class="controls">
                      <input type="text" class="input-xlarge span6" name="product_name" required>
                    </div>
                </div>



                <div class="control-group">
                    <label class="control-label" for="selectError3">Product Category</label>
                    <div class="controls">
                        <select id="selectError3" name="category_id">
                            <option>Select Category</option>
                            <?php
                            $data=DB::table('categoryadds')
                                    ->where('publication_status',1)
                                    ->get();
                            foreach ($data as $row){ ?>
                                <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                          <?php  }?>
                        </select>
                    </div>
                </div>



                <div class="control-group">
                    <label class="control-label" for="selectError3">Brand Name</label>
                    <div class="controls">
                        <select id="selectError3" name="manufacture_id">
                            <option>Select Brand</option>
                            <?php
                            $data=DB::table('menufectures')
                                ->where('PublicationStatus',1)
                                ->get();
                            foreach ($data as $row){ ?>
                            <option value="{{ $row->id }}">{{ $row->BrandName }}</option>
                            <?php  }?>
                        </select>
                    </div>
                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product short description</label>
                    <div class="controls ">
                        <textarea name="product_short_description" rows="3" class="input-xlarge span6"  ></textarea>
                    </div>
                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product long description</label>
                    <div class="controls">
                        <textarea name="product_long_description" rows="3" class="input-xlarge span6"  ></textarea>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Price </label>
                    <div class="controls">
                        <input type="text" class="input-xlarge span6" name="product_price">
                    </div>
                </div>



                <div class="control-group">
                    <label class="control-label" for="fileInput">Image</label>
                    <div class="controls">

                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Brand Logo" name="product_image" required>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="selectError3">Product size</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge span6" name="product_size">
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="selectError3">Product color</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge span6" name="product_color">
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
                    <button type="submit" class="btn btn-primary">Save data</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>

    </div>

@endsection
