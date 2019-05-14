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
        $index = Products::all();
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
        return view('asus.category_asus_fx', compact('product'));
    }

    public function getCategory_asus_rog()
    {
        $product = Products::where('id_product', 'asus_2')->get();
        return view('asus.category_asus_rog', compact('product'));
    }

    public function getCategory_asus_vivo()
    {
        $product = Products::where('id_product', 'asus_1')->get();
        return view('asus.category_asus_vivo', compact('product'));
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

    public function getCategory_dell_inspiron()
{
    $product = Products::where('id_product', 'Dell_1')->get();
    return view('dell.category_dell_inspiron', compact('product'));
}
    public function getCategory_dell_vostro()
    {
        $product = Products::where('id_product', 'Dell_2')->get();
        return view('dell.category_dell_vostro', compact('product'));
    }
    public function getCategory_lenovo_ideapad()
    {
        $product = Products::where('id_product', 'lenovo_3')->get();
        return view('lenovo.category_lenovo_ideapad', compact('product'));
    }
    public function getCategory_lenovo_legion()
    {
        $product = Products::where('id_product', 'lenovo_1')->get();
        return view('lenovo.category_lenovo_legion', compact('product'));
    }
    public function getCategory_lenovo_thinkpad()
    {
        $product = Products::where('id_product', 'lenovo_2')->get();
        return view('lenovo.category_lenovo_thinkpad', compact('product'));
    }

    public function getCategory_macbook_pro()
    {
        $product = Products::where('id_product', 'macbook_1')->get();
        return view('macbook.category_macbook_pro', compact('product'));
    }
    public function getCategory_macbook_normal()
    {
        $product = Products::where('id_product', 'macbook_2')->get();
        return view('macbook.category_macbook_nomal', compact('product'));
    }
    public function getCategory_macbook_air()
    {
        $product = Products::where('id_product', 'macbook_3')->get();
        return view('macbook.category_macbook_air', compact('product'));
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
            if (!in_array($request->id, $item_array_id)) {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'item_id' => $request->id,
                    'item_name' => $detail->name,
                    'item_cost' => $detail->cost,
                    'item_quality' => 1,
                    'item_img' => $detail->id_product . '_' . $detail->id_type,

                );
                $_SESSION["shopping_cart"][$count] = $item_array;
                echo '<script>alert("Đã thêm sản phẩm")</script>';
            } else {

                foreach ($_SESSION["shopping_cart"] as $key => $values) {
                    if ($values["item_id"] == $request->id) {
                        $_SESSION["shopping_cart"][$key]["item_quality"] = $values["item_quality"] + 1;
                        echo '<script>alert("so luog :  ")' . $values["item_quality"] . '</script>';
                    }
                }
                echo '<script>alert("Sản phẩm đã thêm")</script>';
            }
        } else {
            $item_array = array(
                'item_id' => $request->id,
                'item_name' => $detail->name,
                'item_cost' => $detail->cost,
                'item_quality' => 1,
                'item_img' => $detail->id_product . '_' . $detail->id_type,
            );
//            echo '<script>alert("chhuaw có session")</script>';
            $_SESSION["shopping_cart"][0] = $item_array;
        }
        return redirect()->back();
//        return view('category.detail', compact('detail'));
    }

    public function getBasket()
    {
        session_start();
        if (isset($_SESSION["shopping_cart"])) {
//                echo print_r($_SESSION["shopping_cart"]);
        }
//        session_destroy();
        return view('category.basket');
    }

    public function RemoveProduct(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            //session has not started
            session_start();
        }
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $request->id) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';

//                echo '<script>window.location="index.php"</script>';
            }
        }
        return view('category.basket');
    }
    public function updateCard(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            //session has not started
            session_start();
        }
        if($request->ajax())
        {
            $key= $request->key;


        }
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {


                echo '<script>alert("'.$request->get('quality').'")</script>';
        }
        return view('category.basket');
    }
    public function getCheckout1()
    {
        return view('checkout.checkout1');
    }
    public function getCheckout2()
    {
        return view('checkout.checkout2');
    }
    public function getCheckout3()
    {
        return view('checkout.checkout3');
    }
}





//public function AddToCardCategory(Request $request)
//{
//
//}