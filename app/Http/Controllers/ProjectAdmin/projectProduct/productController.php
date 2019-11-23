<?php

namespace App\Http\Controllers\ProjectAdmin\projectProduct;
use App\Http\Controllers\Controller;
use App\tbl_product;
use Illuminate\Http\Request;
use App\Model\admin\Category;
use Auth;
use DB;
use update;
use App\menufecture;
use Illuminate\Support\Facades\Redirect;
use delete;




class productController extends Controller
{
    public function Add_product(){
       return view('P_Admin.product.add_product');
    }




    public function Save_product(Request $request)
    {

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['category_id'] = $request->category_id;
        $data['manufacture_id'] = $request->manufacture_id;
        $data['product_short_description'] = $request->product_short_description;
        $data['product_long_description'] = $request->product_long_description;
        $data['product_price'] = $request->product_price;
        $data['product_size'] = $request->product_size;
        $data['product_color'] = $request->product_color;
        $data['publication_st'] = $request->publication_status;

        $image = $request->file('product_image');
        if ($image) {
            //  $image_name = str_random(5); //image er neme er jonno 5 character er random name jenerate korlam
            // $image_name=date('dmy_H_S_i');
            $image_name = rand();
            $ext = strtolower($image->getClientOriginalExtension()); //getclinetOriginatExtension mathod er madhome ext value te raklam
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/product/';  //image kothay upload hbe path create korlam
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name); //image e paoya image take move methode used kore transfer kore dilam
            if ($success) {
                $data['product_image'] = $image_url;
                $brand = DB::table('tbl_products')
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



 public function all_product(){


     $data=DB::table('tbl_products')
         ->join('categoryadds','tbl_products.category_id','=','categoryadds.id')
         ->join('menufectures','tbl_products.manufacture_id','=','menufectures.id')
        ->get();
          return view('P_Admin.product.all_product', compact('data'));
 }


 public function edit_product($id){
     $row=DB::table('tbl_products')
         ->where('product_id',$id)
         ->join('categoryadds','tbl_products.category_id','=','categoryadds.id')
         ->join('menufectures','tbl_products.manufacture_id','=','menufectures.id')
         ->first();
     return view('P_Admin.product.edit_product',compact('row'));
 }




    public function update_product(Request $request,$id)
    {
        $oldlogo = $request->old_logo;

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['category_id'] = $request->category_id;
        $data['manufacture_id'] = $request->manufacture_id;
        $data['product_short_description'] = $request->product_short_description;
        $data['product_long_description'] = $request->product_long_description;
        $data['product_price'] = $request->product_price;
        $data['product_size'] = $request->product_size;
        $data['product_color'] = $request->product_color;
        $data['publication_st'] = $request->publication_status;
        $image = $request->file('product_image');
        if ($image) {
            unlink($oldlogo);
            $image_name = rand();
            $ext = strtolower($image->getClientOriginalExtension()); //getclinetOriginatExtension mathod er madhome ext value te raklam
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/product/';  //image kothay upload hbe path create korlam
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name); //image e paoya image take move methode used kore transfer kore dilam
            if ($success) {
                $data['product_image'] = $image_url;
                $product = DB::table('tbl_products')
                    ->where('product_id', $id)
                    ->update($data);
                if ($product) {

                    $notification = array(
                        'message' => 'Successfully brand updated!',
                        'alert-type' => 'success'
                    );
                    return Redirect::to('admin/product/all_product');

                } else {

                    $notification = array(
                        'message' => 'error',
                        'alert-type' => 'success'
                    );
                    return Redirect()->back()->with($notification);
                }
            } else {
                $notification = array(
                    'message' => 'error',
                    'alert-type' => 'success'
                );
                return Redirect()->back()->with($notification);
            }
        } else {
            $product = DB::table('tbl_products')
                ->where('product_id', $id)
                ->update($data);

            $notification = array(
                'message' => 'Successfully product data update!',
                'alert-type' => 'success'
            );
            return Redirect::to('admin/product/all_product');


        }
    }




    public function delete_product($id){
//     $data = DB::table('tbl_products')
//         ->where('product_id', $id)
//         ->first();
//     echo '<pre>';
//     print_r($data);
     $data=DB::table('tbl_products')->where('product_id',$id)->first();
     $image=$data->product_image;
     unlink($image); //je path pabe tar data delete kore dibe
     $success=DB::table('tbl_products')->where('product_id',$id)->delete();
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





    public function ActivePublication_product($id)
    {
        $data = DB::table('tbl_products')
            ->where('product_id', $id)

        ->update(['publication_st' => 0]);
        $notification = array(
            'message' => 'Successfully Store data!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }


    public function deActivePublication($id)
    {
        $data = DB::table('tbl_products')
            ->where('product_id', $id)

            ->update(['publication_st' => 1]);
        $notification = array(
            'message' => 'Successfully Store data!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }



}
