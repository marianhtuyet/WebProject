<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ChartController extends Controller
{
    //
    public function orderByYear()
    {
        $range = \Carbon\Carbon::now()->subYears(1);
        $orderYear = DB::table('invoices')
            ->select(DB::raw('create_date as getDate'), DB::raw('SUM(total) as value'))
            ->where('create_date', '>=', $range)
            ->groupBy('getDate')
            ->get();

        return view('chart', compact('orderYear'));
    }
    public function chartByDate(Request $request){
        $fromDate = $request->fromDate;
        $toDate = $request->toDate;
        $orderDate = DB::table('invoices')
            ->select(DB::raw('create_date as getDate'), DB::raw('SUM(total) as value'))
            ->whereBetween('create_date',[$fromDate,$toDate])
            ->groupBy('getDate')
            ->get();
        return response()->json(array('msg'=>$orderDate), 200);
    }
}
