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
    return view('trangchu.index');
}); //bien dau tien ddos laf duong dan

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


Route::get('dell/category_dell_inspiron', 'IndexController@getCategory_dell_inspiron')->name('dell.category_dell_inspiron');
Route::get('dell/category_dell_vostro', 'IndexController@getCategory_dell_vostro')->name('dell.category_dell_vostro');


Route::get('lenovo/category_lenovo_ideapad', 'IndexController@getCategory_lenovo_ideapad')->name('lenovo.category_lenovo_ideapad');
Route::get('lenovo/category_lenovo_legion', 'IndexController@getCategory_lenovo_legion')->name('lenovo.category_lenovo_legion');
Route::get('lenovo/category_lenovo_thinkpad', 'IndexController@getCategory_lenovo_thinkpad')->name('lenovo.category_lenovo_thinkpad');

Route::get('macbook/category_macbook_pro', 'IndexController@getCategory_macbook_pro')->name('macbook.category_macbook_pro');
Route::get('macbook/category_macbook_nomal', 'IndexController@getCategory_macbook_normal')->name('macbook.category_macbook_nomal');
Route::get('macbook/category_macbook_air', 'IndexController@getCategory_macbook_air')->name('macbook.category_macbook_air');



Route::get('hp/category_hp_probook', 'IndexController@getCategory_hp_probook')->name('hp.category_hp_probook');


Route::get('product/list_product', 'IndexController@getListProduct')->name('product.list_product');



Route::get('trangchu/demo', function (){
    return view('trangchu/demo');
});


Route::get('category/detail/{id}', 'IndexController@getdetail')->name('category.detail');

Route::get('category/basket/{id}', 'IndexController@addToCart')->name('category.basket');

Route::get('category/basket','IndexController@getBasket')->name('basket.get');
//
Route::get('basket/remove/{id}', 'IndexController@RemoveProduct')->name('basket.remove');