<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function checkAccount(Request $request)
    {

        $customer = customer::where('email', $request->email_modal)->first();
//        echo "$customer";

        if (isset($customer)) {
            if ($customer->password == $request->password_modal) {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $item_array = array(
                    'cus_id' => $customer->id,
                    'cus_name' => $customer->name,
                    'cus_phone_number' => $customer->phone_number,
                    'cus_house_number' => $customer->house_number,
                    'cus_street' => $customer->street,
                    'cus_city' => $customer->city,
                    'cus_email' => $customer->email,
                    'cus_password' => $customer->password,
                );
//            echo '<script>alert("chhuaw có session")</script>';
                $_SESSION["customer"][0] = $item_array;
            }
        }

        return view('trangchu.index');
    }

    public function Logout()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        return view('trangchu.index');
    }


    public function Register()
    {
        return view('customer.register');
    }

    public function postRegister(Request $request)
    {
        $customer = new customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = $request->password;
//        echo "$customer";
        $customer->save();
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $item_array = array(
            'cus_id' => $customer->id,
            'cus_name' => $customer->name,
            'cus_phone_number' => $customer->phone_number,
            'cus_house_number' => $customer->house_number,
            'cus_street' => $customer->street,
            'cus_city' => $customer->city,
            'cus_email' => $customer->email,
            'cus_password' => $customer->password,
        );
//            echo '<script>alert("chhuaw có session")</script>';
        $_SESSION["customer"][0] = $item_array;
        return view('trangchu.index');
    }

    public function InfoCustomer()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        // print_r($_SESSION["customer"][0]) ;
        return view('customer.infomation');
    }

    public function ChangePassword(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $id = $_SESSION["customer"][0]["cus_id"];
        $customer = customer::find($id);
        $customer->password = $request->password_2;
        $customer->save();
        echo "<script>alert('Đã đổi mật khẩu')</script>";
        $_SESSION["customer"][0]["cus_password"] = $request->password_2;
//        print_r( $_SESSION["customer"][0]);
        return view('customer.infomation');
    }

    public function ChangeInfomation(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION["customer"][0]["cus_password"] = $request->password_2;
        $id = $_SESSION["customer"][0]["cus_id"];
        $customer = customer::find($id);
        $customer->name = $request->fullname;
        $customer->house_number = $request->house_number;
        $customer->street = $request->street;
        $customer->city = $request->city;
        $customer->phonenumber = $request->phone;
        $customer->email = $request->email;
        $customer->save();
        $_SESSION["customer"][0]["cus_name"] = $request->fullname;
        $_SESSION["customer"][0]["cus_phone_number"] = $request->phone;
        $_SESSION["customer"][0]["cus_house_number"] = $request->house_number;
        $_SESSION["customer"][0]["cus_street"] = $request->street;
        $_SESSION["customer"][0]["cus_city"] = $request->city;
        $_SESSION["customer"][0]["cus_email"] = $request->email;
        $_SESSION["customer"][0]["cus_password"] = $customer->password;
//        print_r($_SESSION["customer"][0]);
        return view('customer.infomation');

    }


}
