@extends('layout/layout')

@section('title', 'Kategori')

@section('content')

<div class="container" id="search-container">
	<h1><i class="fas fa-list mr-2"></i>Kuliner di kategori 'kategori 1'</h1>
	<hr class="mb-4">
	    <div class="row"`>
    		    		@foreach($kuliners as $kuliner)
    		<div class="col-md-3 col-sm-6 mb-3">
		        <div class="card border-0 shadow produk">
		          <img src="{{asset('img/'.$kuliner->gambar)}}" alt="" class="card-img-top">
		          <div class="card-body">

		          	<!-- Mengambil data kategori dari DB -->
		            <?php $kategori = explode(';', $kuliner->kategori) ; ?>
		            
		            @foreach($kategori  as $item)
		            	<span class="badge badge-info">{{$item}}</span>
		            @endforeach

		           <h5 class="card-title m-1">{{$kuliner->nama}}</h5>
		            <p class="m-1 mb-2" id="deskripsi-kuliner">
		             {{$kuliner->deskripsi}}
		            </p>
		            <a href="/kuliner/{{$kuliner->id}}"	class="btn btn-warning text-white">Lihat</a>
		          </div>
		        </div>
		    </div>
		    @endforeach
    	</div>
</div>
@endsection