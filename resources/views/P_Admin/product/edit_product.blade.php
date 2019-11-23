@extends('admin.admin_layout')
@section('body')

    <div class="box-content">
        <form  action=" {{ url('admin/product/update_product/'.$row->product_id) }}"  method="post" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Name </label>
                    <div class="controls">
                        <input type="text" class="input-xlarge span6" name="product_name" value="{{  $row->product_name }}" required>
                    </div>
                </div>




                <div class="control-group">
                    <label class="control-label" for="selectError3">Product Category</label>
                    <div class="controls">
                        <select id="selectError3" name="category_id">
                            <option>{{ $row->category_name  }}</option>

                            <?php
                            $data=DB::table('categoryadds')
                                ->where('publication_status',1)
                                ->get();
                            foreach ($data as $value){ ?>
                            <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                            <?php  }?>

                        </select>
                    </div>
                </div>



                <div class="control-group">
                    <label class="control-label" for="selectError3">Brand Name</label>
                    <div class="controls">
                        <select id="selectError3" name="manufacture_id">
                            <option>{{  $row->BrandName }}</option>
                            <?php
                            $data=DB::table('menufectures')
                            ->where('PublicationStatus',1)
                            ->get();
                            foreach ($data as $value){ ?>

                            <option value="{{ $value->id }}">{{ $value->BrandName }}</option>
                        <?php  } ?>


                        </select>
                    </div>
                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product short description</label>
                    <div class="controls ">
                        <textarea name="product_short_description" rows="3" class="input-xlarge span6"  >{{ $row->product_short_description  }}</textarea>
                    </div>
                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product long description</label>
                    <div class="controls">
                        <textarea name="product_long_description" rows="3" class="input-xlarge span6"  > {{ $row->product_long_description  }} </textarea>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Price </label>
                    <div class="controls">
                        <input type="text" class="input-xlarge span6" name="product_price" value="{{  $row->product_price   }}">
                    </div>
                </div>



                <div class="control-group">
                    <label class="control-label" for="fileInput">Image</label>
                    <div class="controls">

                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Brand Logo" name="product_image" >
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="fileInput">Old Image</label>
                    <div class="controls">
                    <img src="{{ url($row->product_image) }}" style="height: 70px; width:90px ;">
                    <input type="hidden"   name="old_logo" value="{{ $row->product_image }}" >
                </div>
                </div>



                <div class="control-group">
                    <label class="control-label" for="selectError3">Product size</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge span6" name="product_size" value="{{ $row->product_size }}">
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="selectError3">Product color</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge span6" name="product_color" value=" {{  $row->product_color }}">
                    </div>
                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Publication Status</label>
                    <div class="controls">
{{--                        <label> <input type="radio" name="publication_status" value="1">Published</label>--}}
{{--                        <label> <input type="radio" name="publication_status" value="0">UnPublished</label>--}}

                        <label> <input type="radio" name="publication_status" {{ $row->publication_st == 1 ? 'checked' : '' }} value="1">Published</label>
                        <label> <input type="radio" name="publication_status" {{ $row->publication_st == 0 ? 'checked' : '' }}  value="0">UnPublished</label>
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
