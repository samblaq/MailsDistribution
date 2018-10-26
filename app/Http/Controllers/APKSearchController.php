<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApkModel;

class APKSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $input = $request->get('table_search');

        if($input != ''){
            $ApkTransactions = ApkModel::where('TransactionCode' , 'LIKE' , '%' .$input. '%')
                                // ->orwhere('searchInput	' , 'LIKE' , '%'.$input.'%')
                                ->orwhere('recieverFullName' , 'LIKE' , '%'.$input.'%')
                                ->orwhere('recieverBranch' , 'LIKE' , '%'.$input.'%')
                                ->orwhere('recieverDepartment' , 'LIKE' , '%'.$input.'%')
                                ->paginate(5)
                                ->setpath('');

             $ApkTransactions->appends(array(
                'table_search' => $request->get('table_search'),
            ));

            if(count($ApkTransactions) > 0){
                return view('admin.vendor.apkView' , compact('ApkTransactions'));
            }
            return view('admin.vendor.apkView')->withMessage("No Records Found");
        }
        //return view('admin.vendor.apkView');
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
