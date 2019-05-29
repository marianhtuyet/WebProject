<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class AcerController extends Controller
{
//    public function  getListProductAcer()
//    {
//        $product=Products::where('id_product', $id_product)->get();
//        return view('product.list_product', compact('product'));
//    }
//    public function getListAcer_2(){
//        $acer=Products::where('id_product', 'acer_2')->get()
//            return view();
//}
    public function compose(View $view)
    {

    }
    function index()
    {
        return view('trangchu.demosearch');
    }

    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = Products::where('name', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
                $output .= '
       <li><a href="#">'.$row->name.'</a></li>
       ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }



}
