@extends("layout/layout")

@section('title', 'Search Page')

@section('content')
<div class="container" id="search-container">
	<h1><i class="fas fa-search mr-1"></i>Hasil pencarian untuk "{{$keyword}}"</h1>
	<hr class="mb-4">

	@foreach($kuliners as $kuliner)
	<div class="card shadow">
		<div class="row no-gutters">
			<div class="col-md-4">
				<img class="card-img" src="{{asset('img/'.$kuliner->gambar)}}" alt="kuliner">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h4 class="card-title">{{$kuliner->nama}}</h5>
					 <?php $kategori = explode(';', $kuliner->kategori) ; ?>
						@foreach($kategori  as $i => $item)
		            		<!-- @if($i < 2) -->
		            		<span class="badge badge-primary">{{$item}}</span>
		            		<!-- @endif -->
		            	@endforeach
					<p class="card-text">{{$kuliner->deskripsi}}</p>
					<a href="{{url('/kuliner/'.$kuliner->id)}}" class="text-white btn btn-warning">Lihat kuliner ini</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach

	<div class="row justify-content-center mt-5">
		{{$kuliners->links()}}
	</div>
</div>

@endsection