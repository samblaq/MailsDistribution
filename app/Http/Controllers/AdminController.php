<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;
use App\Transaction;
use App\DeliveryMode;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.request.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $delivery = DeliveryMode::pluck('name','id')->all();
        return view('admin.request.create' , compact('delivery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionRequest $request)
    {

        $input = $request->all();

        $Code = 'T'. date('d') . date('m') . date('Y');
        $TransactionCount = count(Transaction::all()) + 1;

        if($TransactionCount < 10){
            $transactionCode = $Code . "000" . $TransactionCount;
        }elseif($TransactionCount < 100){
            $transactionCode = $Code . "00" . $TransactionCount;
        }elseif($TransactionCount < 1000){
            $transactionCode = $Code . "0" . $TransactionCount;
        }else{
            $transactionCode = $Code . $TransactionCount;
        }

        $input['TransactionCode'] = $transactionCode;
        Transaction::create($input);
        
        return redirect('admin/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
