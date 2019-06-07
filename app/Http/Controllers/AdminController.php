<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
//    public function __construct()
//    {
//        //khoi tao model customer
//        $customer = new customer();
//        //goi ham kiem tra quyen admin va gan vao bien
//        $checkRole = $customer->checkRoleAdmin();
//        //kiem tra neu khong la admin thi redirect sang trang khac
////        echo $checkRole;
//        if ($checkRole == 0) {
//            header("Location: ".route('trangchu.index'));
//            die;
//        }
//    }
    public function ConfirmInvoice(Request $request)
    {
        if ($request->ajax()) {
            $invoice = Invoice::find($request->_id);

            $invoice->state = 1;
//            print_r($invoice);
            $invoice->save();
        }
    }
//    public function testrole()
//    {
//       return redirect()->route('customer.invoice');
//    }
    public function CancelInvoice(Request $request)
    {
        if ($request->ajax()) {

            $invoice = Invoice::find($request->_id);
            echo ",fsgvm,sdbfm";
            $invoice->state = 2;
//            print_r($invoice);
            $invoice->save();
        }
    }


}
