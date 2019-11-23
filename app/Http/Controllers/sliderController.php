<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class sliderController extends Controller
{
    public function Add_slider()
    {
        return view('P_Admin.slider.add_slider');
    }

    public function save_slider(Request $request)
    {
        $data = array();
        $data['slider_publication'] = $request->slider_publication;
        $image = $request->file('slider_image');
        if ($image) {
            //  $image_name = str_random(5); //image er neme er jonno 5 character er random name jenerate korlam
            // $image_name=date('dmy_H_S_i');
            $image_name = rand();
            $ext = strtolower($image->getClientOriginalExtension()); //getclinetOriginatExtension mathod er madhome ext value te raklam
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/slider/';  //image kothay upload hbe path create korlam
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name); //image e paoya image take move methode used kore transfer kore dilam
            if ($success) {
                $data['slider_image'] = $image_url;
                $value = DB::table('sliders')
                    ->insert($data);
                if ($value) {

                    $notification = array(
                        'message' => 'Successfully Store data!',
                        'alert-type' => 'success'
                    );
                    return Redirect()->back()->with($notification);
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
        }

    }


    public function all_slider()
    {
        //$data = slider::all();
        $data = DB::table('sliders')->get();


        return view('P_Admin.slider.all_slider', compact('data'));
    }


    public function ActivePublication_product($id)
    {
        $data = DB::table('sliders')
            ->where('slider_id', $id)
            ->update(['slider_publication' => 0]);
        $notification = array(
            'message' => 'Successfully Store data!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function deActivePublication($id)
    {
        $data = DB::table('sliders')
            ->where('slider_id', $id)
            ->update(['slider_publication' => 1]);
        $notification = array(
            'message' => 'Successfully Store data!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }


    public function edit_slider($receivedid)
    {
        $row = DB::table('sliders')
            ->where('slider_id', $receivedid)
            ->first();
        return view('P_Admin.slider.edit_slider', compact('row'));
    }


    public function delete_slider($id)
    {

        $data = DB::table('sliders')->where('slider_id', $id)->first();
        $image = $data->slider_image;
        unlink($image); //je path pabe tar data delete kore dibe
        $success = DB::table('sliders')->where('slider_id', $id)->delete();
        if ($success) {
            $notification = array(
                'message' => 'Successfully Delete',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);

        }


    }


    public function update_slider(Request $request, $id)
    {
        $oldlogo = $request->old_logo;

        $data = array();

        $data['slider_publication'] = $request->publication_status;
        $image = $request->file('slider_image');
        if ($image) {
            unlink($oldlogo);
            $image_name = rand();
            $ext = strtolower($image->getClientOriginalExtension()); //getclinetOriginatExtension mathod er madhome ext value te raklam
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/slider/';  //image kothay upload hbe path create korlam
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name); //image e paoya image take move methode used kore transfer kore dilam
            if ($success) {
                $data['slider_image'] = $image_url;
                $product = DB::table('sliders')
                    ->where('slider_id', $id)
                    ->update($data);
                if ($product) {

                    $notification = array(
                        'message' => 'Successfully brand updated!',
                        'alert-type' => 'success'
                    );
                    return Redirect::to('admin/slider/all_slider')->with($notification);

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
            $product = DB::table('sliders')
                ->where('slider_id', $id)
                ->update($data);

            $notification = array(
                'message' => 'Successfully product data update!',
                'alert-type' => 'success'
            );

            return Redirect::to('admin/slider/all_slider')->with($notification);
        }
    }

}
