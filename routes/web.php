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

Route::get('/admin/create', 'EmployeesController@getEmployeeProfileView');

Route::resource('/admin/dashboard' , 'AdminController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/pending' , 'TransactionStatusController@getPending');
Route::get('/admin/APK' , 'TransactionStatusController@getAPK');
Route::get('/admin/DHL' , 'TransactionStatusController@getDHL');
Route::get('/admin/GhanaPost' , 'TransactionStatusController@getGhanaPost');

// Route::resource('/admin' , 'AdminController');
// Route::resource('/vendors' , 'ApkController');

// Route::post('/register' , function(){
//     if(Request::ajax()){
//         return Response::json(Request::all());
//     }  
// });


// Route::get('/' , 'AdminLoginController@index');
// Route::post('/login' ,'AdminLoginController@checkLogin');
// Route::get('/dashboard' , 'AdminLoginController@successLogin');
// Route::get('/logout' , 'AdminLoginController@logout'); 