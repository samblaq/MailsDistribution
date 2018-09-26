<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\DeliveryMode;

class TransactionStatusController extends Controller
{
    public function getPending(){

        // $input = $request->all();

        // $input['TransactionCode'] = $request->TransactionCode;

        // $delivery = DeliveryMode::all();
        $transacts = Transaction::all();
        return view('admin.vendor.pending' , compact('transacts'));
    }

    public function getAPK(){
        return view ('admin.vendor.apk');
    }

    public function getDHL(){
        return view('admin.vendor.dhl');

    }

    public function getGhanaPost(){
        return view('admin.vendor.GhanaPost');
    }
}
