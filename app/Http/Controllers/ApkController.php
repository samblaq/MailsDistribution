<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;
use App\ApkModel;
use App\ApkAcknowledgement;
use App\Http\Requests\EditRequest;

class ApkController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ApkTransactions = ApkModel::paginate(5);
        return view('admin.vendor.apkView' , compact('ApkTransactions'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.vendor.apk');
        
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

        $Code =  "APK".date('d').date('m').date('Y').str_random(5);
        // $TransactionCount = count(ApkModel::all()) + 1;

        // if($TransactionCount < 10){
        //     $transactionCode = $Code . "000" . $TransactionCount;
        // }elseif($TransactionCount < 100){
        //     $transactionCode = $Code . "00" . $TransactionCount;
        // }elseif($TransactionCount < 1000){
        //     $transactionCode = $Code . "0" . $TransactionCount;
        // }else{
        //     $transactionCode = $Code . $TransactionCount;
        // }

        $input['TransactionCode'] = $Code;
        $input['Staff_ID'] = $request->searchInput;
       
        ApkModel::create($input);
        
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
        $transact = ApkModel::findOrFail($id);
        
        return view('admin.edit.apkEdit', compact('transact'));
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        $editRequest = ApkModel::findOrFail($id);

        $input = $request->all();
        
        $editRequest->update($input);
        
        return redirect('admin/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ApkModel::findOrFail($id);
        $delete->delete();

        return redirect('admin/request/apk');
    }
    
}
 