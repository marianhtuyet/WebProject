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

Route::get('/', function () {
    return view('trangchu/index');
}); //bien dau tien ddos laf duong dan

//Route::get('customer/list','CustomerController@getList')->name('customer.list');
 Route::get('trangchu/index', 'IndexController@getList')->name('trangchu.index');
 Route::get('category/category', 'IndexController@getcategory')->name('category.category');

 Route::get('acer/category_acer_nitro', 'IndexController@getCategory_acer_nitro')->name('acer.category_acer_nitro');
Route::get('acer/category_acer_predator', 'IndexController@getCategory_acer_predator')->name('acer.category_acer_predator');
Route::get('acer/category_acer_swift', 'IndexController@getCategory_acer_swift')->name('acer.category_acer_swift');

Route::get('asus/category_asus_fx', 'IndexController@getCategory_asus_fx')->name('asus.category_asus_fx');
Route::get('asus/category_asus_rog', 'IndexController@getCategory_asus_rog')->name('asus.category_asus_rog');
Route::get('asus/category_asus_vivo', 'IndexController@getCategory_asus_vivo')->name('asus.category_asus_vivo');

Route::get('hp/category_hp_1', 'IndexController@getCategory_hp_1')->name('hp.category_hp_1');
Route::get('hp/category_hp_pavilion', 'IndexController@getCategory_hp_pavilion')->name('hp.category_hp_pavilion');
Route::get('hp/category_hp_probook', 'IndexController@getCategory_hp_probook')->name('hp.category_hp_probook');


Route::get('product/list_product', 'IndexController@getListProduct')->name('product.list_product');



Route::get('trangchu/demo', function (){
    return view('trangchu/demo');
});


Route::get('category/detail/{id}', 'IndexController@getdetail')->name('category.detail');
