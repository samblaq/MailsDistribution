<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Package;
use App\DeliveryMode;
use App\Http\Requests\ExternalMailsRequest;
use App\ExternalMails;
use Illuminate\Support\Facades\Auth;

class ExternalMailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $externalmail = ExternalMails::all();

        return view('admin.External.index', compact('externalmail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $code = ExternalMails::all();

        $source = Branch::pluck('name', 'name')->all();

        $package = Package::pluck('Package_Type', 'Package_Type')->all();

        $deliverymode = DeliveryMode::pluck('Delivery_Type' , 'Delivery_Type')->all();

        return view('admin.External.create' , compact('source', 'package' , 'deliverymode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExternalMailsRequest $request)
    {
        $input = $request->all();

        $code = "MD".date('d').date('m').date('Y').strtoupper(str_random(5));

        $input['TransactionCode'] = $code;
        $input['ReceivedBy'] = Auth::user()->username;

        ExternalMails::create($input);

        return redirect('External/Mails/create');
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
        $external = ExternalMails::findOrFail($id);

        $source = Branch::pluck('name', 'name')->all();

        $package = Package::pluck('Package_Type', 'Package_Type')->all();

        $deliverymode = DeliveryMode::pluck('Delivery_Type' , 'Delivery_Type')->all();

        return view('admin.External.edit' , compact('source', 'package' , 'deliverymode', 'external'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExternalMailsRequest $request, $id)
    {
        //return $request->all();
        $editRequest = ExternalMails::findOrFail($id);

        $input = $request->all();
        
        $code = "MD".date('d').date('m').date('Y').str_random(5);

        $input['TransactionCode'] = $code;
        
        $editRequest->update($input);
        
        return redirect('External/Mails/create');
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
