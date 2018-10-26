<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExternalMails;
use App\Branch;
use App\DeliveryMode;
use App\Package;
use App\PendingMailsModel;
use Illuminate\Support\Facades\Auth;
use App\AcknowledgedMails;

class MailsProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $acknowlegde = AcknowledgedMails::paginate(20); 
       
       return view('admin.External.Acknowledge' , compact('acknowlegde'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $Pending = PendingMailsModel::all();

        return view('admin.External.progress' ,  compact('Pending'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $code = "MD".date('d').date('m').date('Y').str_random(5);

        $input['TransactionCode'] = $request->code;
        $input['IssuedBy'] = Auth::user()->username;

        PendingMailsModel::create($input);

        return redirect('Mails/Progress/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $external = ExternalMails::findOrFail($id);

        $source = Branch::pluck('name', 'name')->all();

        $package = Package::pluck('Package_Type', 'Package_Type')->all();

        $deliverymode = DeliveryMode::pluck('Delivery_Type' , 'Delivery_Type')->all();

        return view('admin.External.post' , compact('source', 'package' , 'deliverymode', 'external'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
