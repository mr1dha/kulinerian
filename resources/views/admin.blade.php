@extends('layout/layout')

@section('title', 'Halaman Admin')

@section('content')

<div class="container" id="search-container">
	<h1 class=""><i class="fas fa-user"></i> Selamat datang Admin!</h1>
		<!-- Menampilkan pesan status -->
		@if(session('status'))
			<div class="alert alert-success">
				{{session('status')}} <i class="fa fa-thumbs-up"></i>
			</div>
		@endif
	<hr> 	
	<div class="row">

	{{$kuliners->links()}}
	
	<a href="{{url('/admin/tambah')}}" class="btn btn-primary mb-4 ml-auto mr-3"><i class="fas fa-plus"></i> Tambah Kuliner</a>
	<a href="{{url('/admin/logout')}}" class="btn btn-danger mb-4 mr-3"><i class="fas fa-sign-out-alt"></i> Logout</a>
	</div>
	    <div class="row" >
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
			           <div class="nasvigasi-admin">
				           	 <a href="{{url('/kuliner/'.$kuliner->id)}}"	class="btn btn-warning text-white">Lihat</a>
				            <a href="{{url('/admin/edit/'.$kuliner->id)}}"	class="btn btn-primary text-white">Edit</a>
				            <form action="{{url('/admin/delete/'.$kuliner->id)}}" method="post" class="d-inline">
				            	@method('delete')
				            	@csrf
				            	<button type="submit" class="btn btn-danger" onclick=" return confirm('Yakin mau dihapus?')">Hapus</button>
				            </form>
			           </div>
			          </div>
			        </div>
				</a>
		    </div>
		    @endforeach
    	</div>
</div>
@endsection