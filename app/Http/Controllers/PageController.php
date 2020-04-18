<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
    	return view('home');
    }

    public function login(){
    	return view('login');
    }

    public function validasi(Request $request){
    	if($request->username === 'pbwmachu' && $request->password === 'kulinersejati')
    		 return redirect('/admin') ;
    	else
    		 return redirect('/admin/login') ->with('status', 'LOGIN GAGAL, Username atau password salah');
    }

}
