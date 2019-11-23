<?php

namespace App\Http\Controllers\ProjectAdmin\projectCategory;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\categoryadd;
use Illuminate\Support\Facades\Redirect;

class p_categoryController extends Controller
{
public function addCategory(){
    return view('P_Admin.add_category');
}

public function saveCategory(Request $request){
    $validatedData = $request->validate([
        'category_name' => 'required|unique:categoryadds|max:55',
        'category_discription' => 'required|unique:categoryadds|max:555',
    ]);

    $data=new categoryadd();
    $data->category_name = $request->category_name;
    $data->category_discription=$request->category_discription;
    $data->publication_status=$request->publication_status;
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



public function allCategoryShow(){
    $data=categoryadd::all();
    return view('P_Admin.All_categoryShow',compact('data'));
}


public function allCategoryedit($receivedID){
    $data=categoryadd::find($receivedID);
    return view('P_Admin.All_categoryEdit',compact('data'));
}


public function allCategoryUpdate(Request $request){
    $data=categoryadd::find($request->category_id);
    $data->category_name = $request->category_name;
    $data->category_discription = $request->category_discription;
    $data->publication_status = $request->publication_status;
    $data->update();

    $notification = array(
        'message' => 'Successfully Store data!',
        'alert-type' => 'success'
    );
    return Redirect::to('admin/all_category/show')->with($notification);
}


public function allCategoryDelete($receivedID){
    $data=categoryadd::find($receivedID);
    $data->delete();
    $notification = array(
        'message' => 'Successfully Store data!',
        'alert-type' => 'success'
    );
    return Redirect()->back()->with($notification);
}

public function ActiveCategory($id){
    $data=categoryadd::find($id);
    $data->publication_status='0';
    $data->update();
    $notification = array(
        'message' => 'Successfully Store data!',
        'alert-type' => 'success'
    );
    return Redirect::to('admin/all_category/show')->with($notification);
}


    public function deActiveCategory($id){
        $data=categoryadd::find($id);
        $data->publication_status='1';
        $data->update();
        $notification = array(
            'message' => 'Successfully Store data!',
            'alert-type' => 'success'
        );
        return Redirect::to('admin/all_category/show')->with($notification);
    }





}
