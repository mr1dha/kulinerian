<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
    	return view('home');
    }

    public function login(Request $request){
        if($request->session()->has('login')){
            return redirect('/admin') ;
        }
    	return view('login');
    }

    public function validasi(Request $request){
    	if($request->username === 'pbwmachu' && $request->password === 'kulinersejati'){
    		 $request->session()->put('login', true);
             return redirect('/admin') ;
        }
    	 return redirect('/admin/login') ->with('status', 'LOGIN GAGAL, Username atau password salah');
    }

    public function logout(Request $request){
        $request->session()->forget('login');
        return view('login');
    }
}
