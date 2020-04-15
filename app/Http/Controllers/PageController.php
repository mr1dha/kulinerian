<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
    	return view('home');
    }

    public function search(){
    	$kuliner = \DB::table('kuliners')-> get();
    	return view('search', compact('kuliner'));
    }

    public function kategori(){
    	return view('kategori');
    }

    public function kuliner(){
    	return view('kuliner');
    }

}
