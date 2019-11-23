<?php

namespace App\Http\Controllers\ProjectAdmin\projectBrand;

use App\Http\Controllers\Controller;
use App\menufecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use delete;

class p_BrandController extends Controller
{
    public  function Add_brand(){
        return view('P_Admin.addBrand');
    }


    public function save_brand(Request $request){

        $data=new menufecture();
        $data->BrandName = $request->BrandName;
        $data->BrandDiscription=$request->BrandDiscription;
        $data->PublicationStatus=$request->PublicationStatus;
        $data->save();

        $notification = array(
            'message' => 'Successfully Store data!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

//        $data=array();
//        $data['category_name']=$request->category_name;
//        $data['category_discription']=$request->category_discription;
//        $data['publication_status']=$request->publication_status;
//        DB::table('pcategorys')->insert($data);


    }



    public function All_brands(){
        $data=menufecture::all();
        return view('P_Admin.allBrandShow',compact('data'));
    }




    public function edit_brand($receivedID){
        $data=menufecture::find($receivedID);
        return view('P_Admin.allBrandEdit',compact('data'));
    }



    public function update_brand(Request $request,$id){
        $data=menufecture::find($id);
        $data->BrandName = $request->BrandName;
        $data->BrandDiscription = $request->BrandDiscription;
        $data->PublicationStatus = $request->PublicationStatus;
        $data->update();

        $notification = array(
            'message' => 'Successfully Store data!',
            'alert-type' => 'success'
        );
        return Redirect::to('admin/Brand/All_brand')->with('$notification');
    }




    public function delete_brand($receivedID){
        echo 'atik';
        $data=menufecture::find($receivedID);
        $data->delete();
        $notification = array(
            'message' => 'Successfully Store data!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }



    public function ActiveBrand($id){
        $data=menufecture::find($id);
        $data->PublicationStatus='0';
        $data->update();
        $notification = array(
            'message' => 'Successfully Store data!',
            'alert-type' => 'success'
        );
        return Redirect::to('admin/Brand/All_brand')->with('$notification');
    }

    public function deActiveBrand($id){
        $data=menufecture::find($id);
        $data->PublicationStatus='1';
        $data->update();
        $notification = array(
            'message' => 'Successfully Store data!',
            'alert-type' => 'success'
        );
        return Redirect::to('admin/Brand/All_brand')->with('$notification');
    }





}
