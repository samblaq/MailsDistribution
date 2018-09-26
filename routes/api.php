<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('employee/profile', 'EmployeesController@findEmployee');
