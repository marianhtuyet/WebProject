<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
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
