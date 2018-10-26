<?php
use App\Branch;
Route::get('/admin/create', 'EmployeesController@getEmployeeProfileView');

Route::resource('/admin/dashboard' , 'AdminController');


Route::resource('/admin/request/apk' , 'ApkController');
Route::resource('/admin/request/dhl' , 'DHLController');
Route::resource('/admin/request/GhanaPost' , 'GhanaPostController');


 

Route::get('/' , 'AdminLoginController@create');
Route::get('Sessionlogout' ,'AdminLoginController@destroy');
Route::resource('sessions', 'AdminLoginController');

Route::resource('/APK/search' , 'APKSearchController');
Route::resource('/DHL/search' , 'DHLSearchController');



Route::resource('/Department' , 'InternalController');


Route::resource('/Acknowledgement' , 'ApkAcknowledgementController');

Route::Post('/Generic' , 'GenericApkController@acknowledge');
Route::Post('/Acknowledging' , 'GenericApkController@acknowledgeMails');
Route::resource('/External/Mails' , 'ExternalMailsController');



Route::resource('/Mails/Progress' , 'MailsProgressController' );
