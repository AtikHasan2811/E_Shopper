<?php

namespace App\Http\Controllers\Admin\Brand;
use App\Model\admin\Brand;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function storeBrand()
    {
        $brand = Brand::all();
        return view('admin.Brand.brand_add', compact('brand'));
    }





    public function saveBrand(Request $request)
    {
        $validatedData = $request->validate([
            'brand_name' => 'required|unique:Brands|max:55',
        ]);
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $image = $request->file('brand_logo');
        if ($image) {
          //  $image_name = str_random(5); //image er neme er jonno 5 character er random name jenerate korlam
           // $image_name=date('dmy_H_S_i');
            $image_name = rand();
            $ext = strtolower($image->getClientOriginalExtension()); //getclinetOriginatExtension mathod er madhome ext value te raklam
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/brand/';  //image kothay upload hbe path create korlam
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name); //image e paoya image take move methode used kore transfer kore dilam
            if ($success) {
                $data['brand_logo'] = $image_url;
                $brand = DB::table('brands')
                    ->insert($data);
                if ($brand) {

                    $notification = array(
                        'message' => 'Successfully Store data!',
                        'alert-type' => 'success'
                    );
                    return Redirect()->back()->with($notification);
                }else{
                    $notification = array(
                        'message' => 'error',
                        'alert-type' => 'success'
                    );
                    return Redirect()->back()->with($notification);
                }
            }else{
                $notification = array(
                    'message' => 'error',
                    'alert-type' => 'success'
                );
                return Redirect()->back()->with($notification);
            }
        }
    }



    public function deleteBrand($id){
        $data=DB::table('brands')->where('id',$id)->first();
        $image=$data->brand_logo;
        unlink($image); //je path pabe tar data delete kore dibe
        $success=DB::table('brands')->where('id',$id)->delete();
        if($success) {
            $notification = array(
                'message' => 'Successfully Delete',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'error',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);

        }

    }




    public function editBrand($id){

        $brand = Brand:: find($id);
        return view('admin.Brand.editbrand', compact('brand'));
    }


    public function updateBrand(Request $request,$id){
        $oldlogo=$request->old_logo;
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $image = $request->file('brand_logo');
        if ($image) {
            unlink($oldlogo);
            //  $image_name = str_random(5); //image er neme er jonno 5 character er random name jenerate korlam
            // $image_name=date('dmy_H_S_i');
            $image_name = rand();
            $ext = strtolower($image->getClientOriginalExtension()); //getclinetOriginatExtension mathod er madhome ext value te raklam
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/brand/';  //image kothay upload hbe path create korlam
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name); //image e paoya image take move methode used kore transfer kore dilam
            if ($success) {
                $data['brand_logo'] = $image_url;
                $brand = DB::table('brands')
                    ->where('id', $id)
                    ->update($data);
                if ($brand) {

                    $notification = array(
                        'message' => 'Successfully brand updated!',
                        'alert-type' => 'success'
                    );
                    return Redirect()->route("brands")->with($notification);

                } else {

                    $notification = array(
                        'message' => 'error',
                        'alert-type' => 'success'
                    );
                    return Redirect()->back()->with($notification);
                }
            }  else{
                    $notification = array(
                        'message' => 'error',
                        'alert-type' => 'success'
                    );
                    return Redirect()->back()->with($notification);
                }
            }else{
                $brand = DB::table('brands')
                    ->where('id',$id)
                    ->update($data);

                $notification = array(
                    'message' => 'Successfully brand data update!',
                    'alert-type' => 'success'
                );
                return Redirect()->route('brands')->with($notification);


            }


        }









}
