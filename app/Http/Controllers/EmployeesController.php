<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeDetail;

class EmployeesController extends Controller
{
    public function getEmployeeProfileView(){
        return view('admin.create');
    }
    public function findEmployee(Request $request){

        $employee = EmployeeDetail::find($request['id']);
        if(empty($employee)){
            return response()->json(['error' => 'There is no employee with ID of ' + $request['id']]);
        }
        return response()->json([$employee]);
    }
}
