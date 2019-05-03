<?php

namespace App\Http\Controllers;
use App\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $id_product;
    public function  getList()
    {
        $index=product::all();
        return view('trangchu.index', compact('index'));
    }
    public function getcategory()
    {
        return view('category.category');
    }

    public function  getCategory_acer_nitro()
    {
        $product=Products::where('id_product', 'acer_1')->get();
        return view('acer.category_acer_nitro', compact('product'));
//        return view('acer.category_acer_nitro');
    }
    public function  getCategory_acer_predator()
    {
        $product=Products::where('id_product', 'acer_2')->get();
        return view('acer.category_acer_predator', compact('product'));
    }
    public function  getCategory_acer_swift()
{
    $product=Products::where('id_product', 'acer_3')->get();
    return view('acer.category_acer_swift', compact('product'));
}

    public function  getCategory_asus_fx()
    {
        $product=Products::where('id_product', 'asus_3')->get();
        return view('acer.category_acer_swift', compact('product'));
    }
    public function  getCategory_asus_rog()
    {
        $product=Products::where('id_product', 'asus_2')->get();
        return view('acer.category_acer_swift', compact('product'));
    }
    public function  getCategory_asus_vivo()
    {
        $product=Products::where('id_product', 'asus_1')->get();
        return view('acer.category_acer_swift', compact('product'));
    }

    public function  getCategory_hp_1()
    {
        $product=Products::where('id_product', 'hp_1')->get();
        return view('hp.category_hp_1', compact('product'));
    }
    public function  getCategory_hp_pavilion()
    {
        $product=Products::where('id_product', 'hp_3')->get();
        return view('hp.category_hp_pavilion', compact('product'));
    }
    public function  getCategory_hp_probook()
    {
        $product=Products::where('id_product', 'hp_2')->get();
        return view('hp.category_hp_probook', compact('product'));
    }
    public function  getListProduct()
    {
        $index=Products::where('id_product', 'acer_3')->get();
        return view('product.list_product', compact('index'));
    }

}
