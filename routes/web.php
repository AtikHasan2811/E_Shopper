<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', function () {
//    return view('pages.index');
//});

Route::get('/','HomeController@productShow');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'PasswordController@index')->name('password_change');
Route::post('/password.update', 'PasswordController@password_update')->name('password.update');
Route::get('/home/dashboard', 'admin_controller@admin_home')->name('Dashboard');
Route::get('/abc', 'HomeController@abcd');



//.................................admin section.......................

//categories...................
Route::get('admin/Categories', 'Admin\Category\CategoryController@category')->name('categories');
Route::post('admin/store/Categories', 'Admin\Category\CategoryController@storecategory')->name('store.category');
Route::get('admin/store/edit/{ID}', 'Admin\Category\CategoryController@editcategory')->name('catagoryedit');
Route::get('admin/store/delete/{ID}', 'Admin\Category\CategoryController@deletecategory')->name('categorydelete');
Route::post('admin/Categories/{id}', 'Admin\Category\CategoryController@updatecategory');
//
//.......brands.............
Route::get('admin/brands', 'Admin\Brand\BrandController@storeBrand')->name('brands');
Route::post('admin/store/brands', 'Admin\Brand\BrandController@saveBrand')->name('store.brand');
//Route::get('admin/store/brands/delete/', 'Admin\Brand\BrandController@aaa');
Route::get('admin/store/delete/brand/{ID}', 'Admin\Brand\BrandController@deleteBrand')->name('branddelete');
Route::get('admin/store/edit/brand/{ID}', 'Admin\Brand\BrandController@editBrand')->name('edit');
Route::post('admin/brands/upload/{id}', 'Admin\Brand\BrandController@updateBrand');
//Route::get('admin/brands/update/{ID}', 'Admin\Brand\BrandController@updateBrand')->name('brand_update');


//  ''''''''''''''''''''''''''''''''''' project start''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''


//Add category..................................

Route::get('admin/add_category','ProjectAdmin\projectCategory\p_categoryController@addCategory')->name('add_category');
Route::post('admin/add_category/submit','ProjectAdmin\projectCategory\p_categoryController@saveCategory')->name('save_category');
Route::get('admin/all_category/show','ProjectAdmin\projectCategory\p_categoryController@allCategoryShow')->name('all_category');
Route::get('admin/all_category/edit/{ID}','ProjectAdmin\projectCategory\p_categoryController@allCategoryedit')->name('categoryEddit');
Route::post('admin/all_category/update/','ProjectAdmin\projectCategory\p_categoryController@allCategoryUpdate');
Route::get('admin/all_category/delete/{id}','ProjectAdmin\projectCategory\p_categoryController@allCategoryDelete');
Route::get('admin/all_category/activeStatus/{id}','ProjectAdmin\projectCategory\p_categoryController@ActiveCategory');
Route::get('admin/all_category/deactiveStatus/{id}','ProjectAdmin\projectCategory\p_categoryController@deActiveCategory');


// .............brands...................
Route::get('admin/Brand/Add_brand/','ProjectAdmin\projectBrand\p_BrandController@Add_brand');
Route::post('admin/Brand/save_brand/','ProjectAdmin\projectBrand\p_BrandController@save_brand');
Route::get('admin/Brand/All_brand/','ProjectAdmin\projectBrand\p_BrandController@All_brands');
Route::get('admin/Brand/edit_brand/{id}','ProjectAdmin\projectBrand\p_BrandController@edit_brand');
Route::post('admin/Brand/update_brand/{id}','ProjectAdmin\projectBrand\p_BrandController@update_brand');
Route::get('admin/Brand/delete_brand/{id}','ProjectAdmin\projectBrand\p_BrandController@delete_brand');
Route::get('admin/Brand/Publication_status/ActiveBrand/{id}','ProjectAdmin\projectBrand\p_BrandController@ActiveBrand');
Route::get('admin/Brand/Publication_status/DeActiveBrand/{id}','ProjectAdmin\projectBrand\p_BrandController@deActiveBrand');



//...................products...........................................

Route::get('admin/product/Add_product/','ProjectAdmin\projectProduct\productController@Add_product');
Route::post('admin/product/save_product/','ProjectAdmin\projectProduct\productController@Save_product');
Route::get('admin/product/all_product/','ProjectAdmin\projectProduct\productController@all_product');
Route::get('admin/product/edit_product/{id}','ProjectAdmin\projectProduct\productController@edit_product');
Route::post('admin/product/update_product/{id}','ProjectAdmin\projectProduct\productController@update_product');
Route::get('admin/product/delete_product/{id}','ProjectAdmin\projectProduct\productController@delete_product');
Route::get('admin/product/publication/Active_status/{id}','ProjectAdmin\projectProduct\productController@ActivePublication_product');
Route::get('admin/Brand/Publication_status/DeActiveBrand/{id}','ProjectAdmin\projectProduct\productController@deActivePublication');



//.....................slider................................
Route::get('admin/slider/Add_slider/','sliderController@Add_slider');
Route::post('admin/slider/save_slider/','sliderController@save_slider');
Route::get('admin/slider/all_slider/','sliderController@all_slider');
Route::get('admin/slider/edit_product/{id}','sliderController@edit_slider');
Route::post('admin/slider/update_slider/{id}','sliderController@update_slider');
Route::get('admin/slider/delete_slider/{id}','sliderController@delete_slider');
Route::get('admin/slider/publication/Active_status/{id}','sliderController@ActivePublication_product');
Route::get('admin/slider/Publication_status/DeActiveBrand/{id}','sliderController@deActivePublication');


