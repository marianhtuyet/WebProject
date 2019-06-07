<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        //khoi tao model customer
        $customer = new customer();
        //goi ham kiem tra quyen admin va gan vao bien
        $checkRole = $customer->checkRoleAdmin();
        //kiem tra neu khong la admin thi redirect sang trang khac
//        echo $checkRole;
        if ($checkRole == 0) {
            header("Location: ".route('trangchu.index'));
            die;
        }
    }

    public function testrole()
    {
       return redirect()->route('customer.invoice');
    }


}
