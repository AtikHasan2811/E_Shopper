<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

//        $data=DB::table('tbl_products')
//            ->join('categoryadds','tbl_products.category_id','=','categoryadds.id')
//            ->join('menufectures','tbl_products.manufacture_id','=','menufectures.id')
//            ->get();
//        return view('P_Admin.product.all_product', compact('data'));
    }

    public function productShow(){
        $data=DB::table('tbl_products')
            ->join('categoryadds','tbl_products.category_id','=','categoryadds.id')
            ->join('menufectures','tbl_products.manufacture_id','=','menufectures.id')
            ->where('publication_st','=','1')
            ->limit(6)
            ->get();
       // return view('P_Admin.product.all_product', compact('data'));
        return view('pages.index',compact('data'));
    }


    public function sliderShow(){
        $info=DB::table('sliders')
            ->get();
        return view('P_Admin.pages.pages_master',compact('info'));

    }


}
