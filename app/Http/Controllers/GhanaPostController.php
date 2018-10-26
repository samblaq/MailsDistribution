<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;
use App\GhanaPostModel;

class GhanaPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $GhanaPostTransactions = GhanaPostModel::paginate(1);

        return view('admin.vendor.GhanaPostView' , compact('GhanaPostTransactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vendor.ghanapost');
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

        $Code = 'GP'. date('d') . date('m') . date('Y');
        $TransactionCount = count(GhanaPostModel::all()) + 1;

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
        GhanaPostModel::create($input);
        
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $transact = GhanaPostModel::findOrFail($id);
        
        return view('admin.edit.GhanaPostEdit', compact('transact'));
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
        $editRequest = GhanaPostModel::findOrFail($id);

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
        $delete = GhanaPostModel::findOrFail($id);
        $delete->delete();

        return redirect('admin/request/GhanaPost');
    }
}
