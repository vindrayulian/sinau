<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthControlller extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginuser(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('index');
        }
        return redirect('')->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
