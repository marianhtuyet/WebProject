<?php


namespace App\Http\Controllers;
//session_start();
use App\detail_invoice;
use App\Invoice;
use App\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
//    public $id_product;

    public function getList()
    {
            $bestsale = Products::where('best_sale', '1')->get();
        return view('trangchu.index', compact('bestsale'));
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
//        echo "$request->id";
        $detail = Products::where('id', $request->id)->first();
        $price= $detail->cost;

        if($detail->discount > 1)
        {
            $price = $detail->discount;

        }
//        echo $price;
        if (isset($_SESSION["shopping_cart"])) {
            $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
            if (!in_array($request->id, $item_array_id)) {
                $count = count($_SESSION["shopping_cart"]);

                echo $price;
                $item_array = array(
                    'item_id' => $request->id,
                    'item_name' => $detail->name,
                    'item_cost' => $price,
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
                'item_cost' => $price,
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
//        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
//            if ($values["item_id"] == $request->id) {
//                $_SESSION["shopping_cart"][$keys]["item_quality"] = $request->quality;
//            }
//        }
        return view('category.basket');
    }

    public function getCheckout1(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_SESSION["invoice"]))
            $g_total = $_SESSION["invoice"][0]["invoice_total"];
        else
        $g_total = $request->total;
//        print_r($_SESSION["invoice"][0]["invoice_name"]);
//        lay gia tri tong hoa don
        return view('checkout.checkout1', compact('g_total'));
    }


    public function getCheckout2(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // $total = $request->grand_total;
//        lay gia tri tong hoa don
//        print_r($_SESSION["invoice"]);
        return view('checkout.checkout2');
    }

    public function getCheckout3(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // $total = $request->grand_total;
//        lay gia tri tong hoa don
        return view('checkout.checkout3');
    }

    public function postCheckout2(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $item_array = array(
            'invoice_name' => $request->name,
            'invoice_house_number' => $request->house_number,
            'invoice_street' => $request->street,
            'invoice_city' => $request->city,
            'invoice_create_date' => date('Y-m-d'),
            'invoice_total' => $request->total,
            'invoice_state' => 1,
            'invoice_id_customer' => 1,
            'invoice_method_delivery' => 1,
            'invoice_ship' => 200000,
            'invoice_district' => null,
            'invoice_phone_number' => $request->phone_number,
        );
        $_SESSION["invoice"][0] = $item_array;

//
//        print_r($_SESSION["invoice"][0]);
        return view('checkout.checkout2');
    }

    public function postCheckout3(Request $request)

    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION["invoice"][0]["invoice_method_delivery"] = $request->delivery;

        return view('checkout.checkout3');
    }

    public function getdataInvoice(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if ($request->ajax()) {
            $key = $request->_key;
            $quality = $request->_quality;
            $_SESSION["shopping_cart"][$key]["item_quality"] = $quality;
            // print_r($_SESSION["shopping_cart"]);
            $total = 0;
            foreach ($_SESSION["shopping_cart"] as $value) {
                $total = $total + $value["item_cost"] * $value["item_quality"];
            }
//            $request->_grand_total = $total;
//            return $total;
        };

    }

    public function saveInvoice(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        // print_r($_SESSION["invoice"][0]);
        if (empty($_SESSION["invoice"][0]["invoice_name"]) || empty($_SESSION["invoice"][0]["invoice_phone_number"])) {

            $total = $_SESSION["invoice"][0]["invoice_total"];
            echo "<script>alert('Vui lòng nhập thông tin khách hàng')</script>";
            return view('checkout.checkout1', compact('total'));
        } else {
            $invoice_new = new Invoice();
            $invoice_new->name_customer = $_SESSION["invoice"][0]["invoice_name"];
            $invoice_new->house_number = $_SESSION["invoice"][0]["invoice_house_number"];
            $invoice_new->street = $_SESSION["invoice"][0]["invoice_street"];
            $invoice_new->city = $_SESSION["invoice"][0]["invoice_city"];
            $invoice_new->create_date = date('Y-m-d');
            $invoice_new->total = $_SESSION["invoice"][0]["invoice_total"];
            $invoice_new->state = 0;
            if (isset($_SESSION["customer"])) {
                $invoice_new->id_customer = $_SESSION["customer"][0]["cus_id"];
            }
            $invoice_new->id_customer = 0;

            $invoice_new->method_delivery = $_SESSION["invoice"][0]["invoice_method_delivery"];
            $invoice_new->ship = 20000;
            $invoice_new->district = 'null';
            $invoice_new->phone_number = $_SESSION["invoice"][0]["invoice_phone_number"];
            $invoice_new->save();

        }
//        print_r($_SESSION["invoice"][0]);
        echo "<script>alert('Đã lưu đơn hàng. Xin cảm ơn!')</script>";
        $bestsale = \App\Products::where('best_sale', '1')->get();
        unset($_SESSION['shopping_cart']);
        unset($_SESSION['invoice']);

        return view('trangchu.index', compact('bestsale'));


    }

    public function getContact()
    {
        return view('contact.contact');
    }

    public function getFaq()
    {
        return view('contact.faq');
    }

    public function getText()
    {
        return view('contact.text');
    }

    public function getBestSale()
    {

}
    public function getAdmin()
    {
        return view('admin.password');
    }
    public function getProduct()
    {
        return view('admin.product');
    }


    public function getDataSearch(Request $request)
    {
        if($request->get('query'))
        {

            $query = $request->get('query');
            $data = Products::where('name', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display: inline ;height: 250px;overflow: auto ">';
            foreach($data as $row)
            {

                $output .= '
       <li><a href="'.route('category.detail', [$row->id]).'">'.$row->name.'</a></li>
       ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }
    //// upload single file





// upload multiple files
    function uploadImages(){
        if (isset($_POST["submit"])) {
            // image mime to be checked
            $imagetype = array(image_type_to_mime_type(IMAGETYPE_GIF), image_type_to_mime_type(IMAGETYPE_JPEG),
                image_type_to_mime_type(IMAGETYPE_PNG), image_type_to_mime_type(IMAGETYPE_UNKNOWN));
            $FOLDER = "../public/assets/img/";
            $myfile = $_FILES["file"];
            $select_val = $_POST['select-nho'];
            $max = Products::where('id_product',$select_val )->max('id_type');
            $max +=1;
//            echo "$max";
//            echo "$select_val";
            $keepName = false; // change this for file name.
            $response = array();
            $k=1;
            for ($i = 0; $i < count($_FILES["file"]["name"]); $i++) {
                if ($myfile["name"][$i] <> "" && $myfile["error"][$i] == 0) {
                    // file is ok
                    if (in_array($myfile["type"][$i],$imagetype)) {
                        //Set file name
                        if ($keepName) {
                            $file_name = $myfile["name"][$i];
                        } else {
                            // get extention and set unique name
//                            $file_extention = @strtolower(@end(@explode(".", $myfile["name"][$i])));
                            $file_name =$select_val.'_'.$max.'_'.$k . '.' . 'jpg'; // Thư mục sẽ lưu file
                        }
                        if (move_uploaded_file($myfile["tmp_name"][$i], $FOLDER . $file_name) === FALSE) {
                            //Set Original File Name if Upload Error
                            $response[] = array('error' => true, 'msg' => "Error While Uploading the File", 'fileName' => $myfile["name"][$i]);

                        }
//                        else {
//                            // Set Name Used to Store file on Server
////                            echo "File Uploaded: ".$file_name."<br/>";
//                        }
                    } else {
                        //Set Original File Name if Invalid Image Type
                        $response[] = array('error' => true, 'msg' => " Invalid Image Type.", 'fileType' => $myfile["type"][$i]);
                    }
                    $k++;
                }
            }
            //echo json_encode($response);
            $product = new Products();
            $product->name = $_POST['nameproduct'];
            $product->cost = $_POST['price'];
            $product->quantity = $_POST['quantity'];
            $product->description =$_POST['describe'];
            $product->id_type = $max;
            $product->id_product = $select_val;
//            echo "$product";
            $product->save();

        }
        echo "<script>alert('Đã thêm sản phẩm')</script>";
        return view('admin.product');
    }


    public function getList_product_page()
    {
        return view('admin.list_product');
    }

    public function get_list_product()
    {
        $var = $_GET['_id_type'];
        $product = Products::where('id_product', $var)->get();
        echo "<thead>";
        echo "<tr>
                  <th>ID</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
              </tr>
              </thead>
              <tbody>";
        foreach ($product as $key => $value) {
            echo "<tr>";
            echo "<td>";
            echo $value->id;
            echo "</td>";
            echo "<td>";
            echo $value->name;
            echo "</td>";
            echo "<td>";
            echo $value->cost;
            echo "</td>";
            echo "<td class=\"btnConfirm\">";
            echo '<a  class="btn btn-primary btn-sm" href="' . route('detail_product', [$value->id]) . '" >';
            echo "Sửa";
            echo "</a>";
            echo "</td>";
            echo "<td class=\"btnConfirm\">";
            echo '<a class="btn btn-primary btn-sm" href="' . route('delete_product', [$value->id]) . '" >';
            echo "Xóa";
            echo "</a>";
            echo "</td>";
        }
        echo "</tbody>";

    }

    public function get_detail_product($id)
    {
        $product = Products::find($id);
        return view('admin.detail_product', compact('product'));
    }

    public function update_detail_product($id)
    {
        if (isset($_POST["submit"])) {
            // image mime to be checked
            $imagetype = array(image_type_to_mime_type(IMAGETYPE_GIF), image_type_to_mime_type(IMAGETYPE_JPEG),
                image_type_to_mime_type(IMAGETYPE_PNG), image_type_to_mime_type(IMAGETYPE_UNKNOWN));
            $FOLDER = "../public/assets/img/";
            $myfile = $_FILES["file"];
            $product = Products::find($id);

            $select_val = $product->id_product;

            $keepName = false; // change this for file name.
            $response = array();
            $k = 1;
            if (count($_FILES["file"]["name"]) > 0) {
                for ($i = 0; $i < count($_FILES["file"]["name"]); $i++) {
                    if ($myfile["name"][$i] <> "" && $myfile["error"][$i] == 0) {
                        // file is ok
                        if (in_array($myfile["type"][$i], $imagetype)) {
                            //Set file name
                            if ($keepName) {
                                $file_name = $myfile["name"][$i];
                            } else {
                                // get extention and set unique name
//                            $file_extention = @strtolower(@end(@explode(".", $myfile["name"][$i])));
                                $file_name = $product->id_product . '_' . $product->id_type . '_' . $k . '.' . 'jpg'; // Thư mục sẽ lưu file
                            }
                            if (move_uploaded_file($myfile["tmp_name"][$i], $FOLDER . $file_name) === FALSE) {
                                //Set Original File Name if Upload Error
                                $response[] = array('error' => true, 'msg' => "Error While Uploading the File", 'fileName' => $myfile["name"][$i]);

                            }
                        } else {
                            $response[] = array('error' => true, 'msg' => " Invalid Image Type.", 'fileType' => $myfile["type"][$i]);
                        }
                        $k++;
                    }
                }

            }

            $product->name = $_POST['nameproduct'];
            $product->cost = $_POST['price'];
            $product->quantity = $_POST['quantity'];
            $product->description = $_POST['describe'];
            $product->save();
            echo '<script>alert("Sửa thành công")</script>';
            return view('admin.list_product');
        }
    }
    public function delete_product($id){
        Products::find($id)->delete();

       return redirect()->back();

    }
}



