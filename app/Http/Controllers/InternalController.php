<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InternalRequest;
use App\Branch;
use App\Internal;

class InternalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delivers = Internal::paginate(5);
        return view('admin.internal.pendingDelivers' , compact('delivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch = Branch::pluck('name' , 'name')->all();
        return view('admin.internal.department', compact('branch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InternalRequest $request)
    {
        $input = $request->all();

        $Code = 'M'. date('d') . date('m') . date('Y');
        $TransactionCount = count(Internal::all()) + 1;

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
        Internal::create($input);
        
        return redirect('Department');
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
        $deliver = Internal::findOrFail($id);
        
        $branch = Branch::pluck('name' , 'name')->all();

        return view('admin.internal.edit', compact('deliver' , 'branch'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InternalRequest $request, $id)
    {
        $editRequest = Internal::findOrFail($id);

        $input = $request->all();
        
        $editRequest->update($input);
        
        return redirect('Department');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Internal::findOrFail($id);
        $delete->delete();

        return redirect('Department');
    }
}
