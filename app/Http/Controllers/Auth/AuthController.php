<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return redirect(Auth::user()->level_user.'/dashboard');
        }
        return view('login.index'); 
    }

    public function login(Request $request){
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect(Auth::user()->level_user.'/dashboard');
        }
        return redirect('/')->with('error', 'Alamat Email atau Kata Sandi Salah');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function error_401(){
        return view('errors.401');
    }
}
