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
    $bestsale=  \App\Products::where('best_sale', '1')->get();
    print_r(count($bestsale));
    return view('trangchu.index', compact('bestsale'));
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

Route::post('basket/updatecard','IndexController@updateCard')->name('basket.updatecard');

Route::get('checkout/checkout1/{total?}', 'IndexController@getCheckout1')->name('checkout1.get');


Route::get('checkout/checkout2', 'IndexController@getCheckout2')->name('checkout2.get');
Route::get('checkout/checkout3', 'IndexController@getCheckout3')->name('checkout3.get');
Route::post('checkout/checkout2', 'IndexController@postCheckout2')->name('checkout2.post');
Route::post('checkout/checkout3', 'IndexController@postCheckout3')->name('checkout3.post');




Route::get('ajaxinvoice', 'IndexController@getdataInvoice')->name('checkout.save');

Route::get('save-invoice', 'IndexController@saveInvoice')->name('invoice.save');


Route::post('checkaccount','CustomerController@checkAccount')->name('customer.account');
//ham dang nhap, kiem tra tai khoan
Route::get('customer/info', 'CustomerController@InfoCustomer')->name('customer.info');
Route::get('customer/register','CustomerController@Register')->name('customer.register');
Route::post('post/info', 'CustomerController@postRegister')->name('register.post');
Route::get('index/', 'CustomerController@Logout')->name('customer.logout');

Route::post('customer/changepass','CustomerController@ChangePassword')->name('customer.changepass');
Route::post('customer/changeinfo','CustomerController@ChangeInfomation')->name('customer.changeinfo');
//ham dang ky


//        hàm lấy thông tin website
Route::get('contact/info','IndexController@getContact' )->name('contact.info');
Route::get('contact/faq', 'IndexController@getFaq' )->name('contact.faq');
Route::get('contact/text', 'IndexController@getText' )->name('contact.text');


//hamf lay san pham duoc mua nhieu nhat
Route::get('index/bestsale', 'IndexController@getBestSale')->name('index.bestsale');


//search
Route::post('search', 'IndexController@getDataSearch')->name('header.search');

Route::get('/autocomplete', 'AcerController@index');
Route::post('/autocomplete/fetch', 'AcerController@fetch')->name('autocomplete.fetch');



Route::get('admin/password', 'IndexController@getAdmin' )->name('admin.password');
Route::get('admin/product', 'IndexController@getProduct' )->name('admin.product');


Route::post('admin/product/addProduct','IndexController@uploadImages')->name('admin.uploadImages');


Route::get('acer/category_acer_nitro', 'IndexController@getCategory_acer_nitro')->name('acer.category_acer_nitro');
Route::get('admin/list_product_table','IndexController@get_list_product')->name('list_product');
Route::get('admin/list_product','IndexController@getList_product_page')->name('list_product_page');
Route::get('admin/detail_product/{id}','IndexController@get_detail_product')->name('detail_product');
Route::post('admin/update_detail_product/{id}','IndexController@update_detail_product')->name('update_detail_product');
Route::get('admin/delete_product/{id}','IndexController@delete_product')->name('delete_product');