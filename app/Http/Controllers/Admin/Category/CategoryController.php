<?php

namespace App\Http\Controllers\Admin\Category;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\Category;
use Auth;
use DB;

use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{


    public function category()
    {
        //$users = DB::table('users')->get();
        $category = Category::all();
        return view('admin.category.category', compact('category'));
    }


    public function storecategory(Request $request)
    {
//        ..........validation..........
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:55',
        ]);
//...........................................................
//        ......query builder......
//        $data=array();
//        $data['category_name']=$request->category_name;
//        DB::table('categories')->insert($data);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();

//        {{--............3/2.................code for success message.............................--}}

        $notification = array(
            'message' => 'Successfully Store data!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }



    public function editcategory($receiverdID)
    {
        //$category=DB::table('brands')->where('id',$receivedID)->first();
        $category = Category::find($receiverdID);
        return view('admin.category.editcategory', compact('category'));
    }



    public function deletecategory($receivedID)
    {
        //      DB::table('categories')->where('id',$receivedID)->delete();
        $category = Category::find($receivedID);
        $category->delete();
        return Redirect()->back()->with('m', 'delete successfully');

    }


//    public function updatecategory(Request $request)
    public function updatecategory(Request $request,$id)
    {
//        $category= Category:: find($request->Categ_id);
//        $category->category_name=$request->category_name;//$category theke ber kre db er colam e set kortiche ,request kito tabile er name onusare
//        $category ->save();
//        return redirect('admin/Categories');
        $data=array();
        $data['category_name']=$request->category_name;
         DB::table('categories')->where('id',$id)->update($data);
        return redirect('admin/Categories');



    }

}
