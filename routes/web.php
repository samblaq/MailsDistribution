<?php
Use App\Branch;
Use App\EmployeeDetail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/admin' , 'AdminController');
Route::resource('/vendors' , 'ApkController');

Route::post('/register' , function(){
    if(Request::ajax()){
        return Response::json(Request::all());
    }
});

// Route::get('/branch' , function(){
    
//     $employee = new EmployeeDetail;
//     $employee->staff_id = '9514';
//     $employee->name = 'Dennis Moore';
//     $employee->branch = 'Opeibea';
//     $employee->department = 'Sales';
//     $employee->unit = 'Customer Service';
//     $employee->email = 'dennis@gmail.com';
//     $employee->save();

//     $employee = new EmployeeDetail;
//     $employee->staff_id = '9413';
//     $employee->name = 'Parker Moore';
//     $employee->branch = 'Achimota';
//     $employee->department = 'Security';
//     $employee->unit = 'logistics';
//     $employee->email = 'moorepaker@gmail.com';
//     $employee->save();

//     $employee = new EmployeeDetail;
//     $employee->staff_id = '9544';
//     $employee->name = 'Philemon Jobs';
//     $employee->branch = 'Tudu';
//     $employee->department = 'Information Technology';
//     $employee->unit = 'ATM';
//     $employee->email = 'philejobs@gmail.com';
//     $employee->save();

//     $employee = new EmployeeDetail;
//     $employee->staff_id = '9464';
//     $employee->name = 'Andrews Davidson';
//     $employee->branch = 'Tarkwa';
//     $employee->department = 'Operations';
//     $employee->unit = 'Lending';
//     $employee->email = 'harley@gmail.com';
//     $employee->save();

//     $employee = new EmployeeDetail;
//     $employee->staff_id = '1542';
//     $employee->name = 'Michael Edwards';
//     $employee->branch = 'Head office';
//     $employee->department = 'Human Resource';
//     $employee->unit = 'Welfare';
//     $employee->email = 'eddys@gmail.com';
//     $employee->save();
// });
