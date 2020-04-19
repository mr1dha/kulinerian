@extends('layout/layout')

@section('title', 'Kategori')

@section('content')

<div class="container" id="search-container">
	<h1><i class="fas fa-list mr-2"></i>Kuliner di kategori "{{$keyword}}"</h1>
	<hr class="mb-4">
	    <div class="row">
    		@foreach($kuliners as $kuliner)
    		<div class="col-md-3 col-sm-6 mb-3">
				<a href="/kuliner/{{$kuliner->id}}">
					<div class="card border-0 shadow produk">
			          <img src="{{asset('img/'.$kuliner->gambar)}}" alt="" class="card-img-top">
			          <div class="card-body py-0 px-3">

			          	<!-- Mengambil data kategori dari DB -->
			            <?php $kategori = explode(';', $kuliner->kategori) ; ?>
			             <div class="tag-kategori">
			            	@foreach($kategori  as $i => $item)
			            		@if($i < 2)
			            		<span class="badge badge-primary">{{$item}}</span>
			            		@endif
			            	@endforeach
			            </div>
			            
			           <p class="card-title m-1">{{$kuliner->nama}}</p>
			            <p class="m-1 mb-2" id="deskripsi-kuliner">
			             {{$kuliner->deskripsi}}
			            </p>
							<a href="/kuliner/{{$kuliner->id}}"	class="w-100 btn btn-warning text-white">Lihat</a>
			           </div>
			          </div>
					</a>
			       </div>
		   		 @endforeach
		    </div>
		<div class="row justify-content-center mt-5">
			{{$kuliners->links()}}
		</div>
    	</div>
</div>
@endsection