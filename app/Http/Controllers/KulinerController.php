<?php

namespace App\Http\Controllers;

use App\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Halaman Utama
        $kuliners = Kuliner::all();
        return view('home', compact('kuliners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Menambahkan kuliner baru
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kuliner::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function show(Kuliner $kuliner)
    {
        //Menampilkan data kuliner pada halaman kuliner
        return view('kuliner', compact('kuliner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function edit(Kuliner $kuliner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kuliner $kuliner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kuliner $kuliner)
    {
        //
    }



    public function search($keyword){
        //Qurey DB untuk mencari sesuai keyword dan langsung di return ke view
        return view('search', compact('keyword'));
    }

    public function kategori(){
        $kuliners = Kuliner::all();
        return view('kategori', compact('kuliners'));
    }

    public function admin(){
        $kuliners = Kuliner::all();
        return view('admin', compact('kuliners'));
    }
}
