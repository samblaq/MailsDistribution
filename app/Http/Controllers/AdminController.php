<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;
use App\Transaction;
use App\DeliveryMode;
use App\ApkModel;
use App\DHLModel;
use App\GhanaPostModel;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    { 
        $countApk = count(ApkModel::all());
        $countDhl = count(DHLModel::all());
        $countGhanaPost = count(GhanaPostModel::all());


        return view('admin.request.index' , compact('countApk' , 'countDhl' , 'countGhanaPost'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$delivery = DeliveryMode::pluck('name','id')->all();
        return view('admin.request.create');
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
        $input['Staff_ID'] = $request->searchInput;
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
        $transact = Transaction::findOrFail($id);
        return view('admin.request.edit', compact('transact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionRequest $request, $id)
    {
        $editRequest = Transaction::findOrFail($id);

        $input = $request->all();
        
        $editRequest->update($input);
        
        return redirect('admin/dashboard');
        // return $request->all();
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
