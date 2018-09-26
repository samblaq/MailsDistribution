<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class AdminLoginController extends Controller
{
    function index(){
        return view('welcome');
    }

    function checkLogin(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ); 
        
        if(Auth::attempt($user_data)){
            return redirect('/');
        }else{
            return back()->with('error' , 'Wrond Details');
        }
    }

    function successLogin(){
          return view('admin.index'); 
    }

    function logout(){
        Auth::logout();
        return redirect ('/'); 
    }
}
