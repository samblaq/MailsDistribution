<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DHLModel;

class DHLSearchController extends Controller
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
        $input = $request->get('table_search');

        if($input != ''){
            $DHLTransactions = DHLModel::where('TransactionCode' , 'LIKE' , '%' .$input. '%')
                                // ->orwhere('searchInput	' , 'LIKE' , '%'.$input.'%')
                                ->orwhere('recieverFullName' , 'LIKE' , '%'.$input.'%')
                                ->orwhere('recieverBranch' , 'LIKE' , '%'.$input.'%')
                                ->orwhere('recieverDepartment' , 'LIKE' , '%'.$input.'%')
                                ->paginate(5)
                                ->setpath('');

             $DHLTransactions->appends(array(
                'table_search' => $request->get('table_search'),
            ));

            if(count($DHLTransactions) > 0){
                return view('admin.vendor.dhlView' , compact('DHLTransactions'));
            }
            return view('admin.vendor.dhlView')->withMessage("No Records Found");
        }
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
