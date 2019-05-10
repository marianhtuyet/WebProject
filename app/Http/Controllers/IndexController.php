<?php


namespace App\Http\Controllers;
//session_start();
use App\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $id_product;

    public function getList()
    {
        $index = product::all();
        return view('trangchu.index', compact('index'));
    }

    public function getcategory()
    {
        return view('category.category');
    }

    public function getCategory_acer_nitro()
    {
        $product = Products::where('id_product', 'acer_1')->get();
        return view('acer.category_acer_nitro', compact('product'));
//        return view('acer.category_acer_nitro');
    }

    public function getCategory_acer_predator()
    {
        $product = Products::where('id_product', 'acer_2')->get();
        return view('acer.category_acer_predator', compact('product'));
    }

    public function getCategory_acer_swift()
    {
        $product = Products::where('id_product', 'acer_3')->get();
        return view('acer.category_acer_swift', compact('product'));
    }

    public function getCategory_asus_fx()
    {
        $product = Products::where('id_product', 'asus_3')->get();
        return view('acer.category_acer_swift', compact('product'));
    }

    public function getCategory_asus_rog()
    {
        $product = Products::where('id_product', 'asus_2')->get();
        return view('acer.category_acer_swift', compact('product'));
    }

    public function getCategory_asus_vivo()
    {
        $product = Products::where('id_product', 'asus_1')->get();
        return view('acer.category_acer_swift', compact('product'));
    }

    public function getCategory_hp_1()
    {
        $product = Products::where('id_product', 'hp_1')->get();
        return view('hp.category_hp_1', compact('product'));
    }

    public function getCategory_hp_pavilion()
    {
        $product = Products::where('id_product', 'hp_3')->get();
        return view('hp.category_hp_pavilion', compact('product'));
    }

    public function getCategory_hp_probook()
    {
        $product = Products::where('id_product', 'hp_2')->get();
        return view('hp.category_hp_probook', compact('product'));
    }

    public function getListProduct()
    {
        $index = Products::where('id_product', 'acer_3')->get();
        return view('product.list_product', compact('index'));
    }


    public function getdetail(Request $request)
    {
        $detail = Products::where('id', $request->id)->first();
        return view('category.detail', compact('detail'));
    }

    public function addToCart(Request $request)
    {

//    khi nhân nút này nếu ko có thì nhảy xuống else
        session_start();
        $detail = Products::where('id', $request->id)->first();
        if (isset($_SESSION["shopping_cart"])) {

            $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
//		lấy danh sách id sản phẩm của $_SESSION["shopping_cart"]
//		tao mang gan vao bien $item_array_id;
            if (!in_array($request->id, $item_array_id)) {
//		    kiểm tra nếu sản phẩm chưa có trong giỏ hàng -> thêm vào mảng $_SESSION["shopping_cart"]
                $count = count($_SESSION["shopping_cart"]);

                $item_array = array(
                    'item_id' => $request->id,
                    'item_name' =>$detail->name,
                    'item_cost' => $detail->cost,
                    'item_quality'=>1,
                    'item_img'=> $detail->id_product.'_'.$detail->id_type,

                );
                $_SESSION["shopping_cart"][$count] = $item_array;

//			gán phần tử cuối cùng vào mảng $_SESSION["shopping_cart"]
            } else {
                echo '<script>alert("Item Already Added")</script>';
            }
        } else {
            $item_array = array(
                'item_id' => $request->id,
                'item_name' =>$detail->name,
                'item_cost' => $detail->cost,
                'item_quality'=>1,
                'item_img'=> $detail->id_product.'_'.$detail->id_type,
//			lấy id của sản phẩm

            );

            $_SESSION["shopping_cart"][0] = $item_array;
//		set phẩn tử đầu tiên của mảng tên là $_SESSION["shopping_cart"][0]
        }

        echo print_r($_SESSION["shopping_cart"]);

//        $detail = Products::where('id', $request->id)->first();
        return view('category.detail', compact('detail'));
    }
    public function getBasket()
    {
        session_start();
        echo print_r($_SESSION["shopping_cart"]);
//        session_destroy();
        return view('category.basket');
    }

}
