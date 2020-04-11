@extends("layout/layout")

@section('title', 'Search Page')

@section('content')
<div class="container" id="search-container">
	<h1>Hasil pencarian untuk 'Sate matang'</h1>
	<hr class="mb-4">

	<div class="card shadow">
		<div class="row no-gutters">
			<div class="col-md-4">
				<img class="card-img" src="{{asset('img/item1.jpg')}}" alt="">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title">Sate matang Bireuen</h5>
					<p class="card-text">Teks ini akan berisi tentang deskripsi kuliner di atas yang akan diambil langsung dari database dan akan ditampilkan di sini untuk dibaca oleh pengguna web</p>
					<a href="{{url('/kuliner')}}" class="text-white btn btn-warning">Lihat kuliner ini</a>
				</div>

			</div>
		</div>
	</div>
	<!-- <h1>Hasil pencarian untuk 'Sate matang'</h1>
	<hr class="mb-4">
	<div class="media p-2 shadow">
		<img src="{{asset('img/item1.jpg')}}" alt="" class="mr-3">
		<div class="media-body">
			<h5>Sate Matang Bireuen</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis repellat at dolorem officia corrupti culpa, voluptas assumenda optio voluptates doloremque.</p>
		</div>
		<a href="{{url('/kuliner')}}" class="btn btn-warning">Lihat kuliner ini</a>
	</div> -->
</div>

@endsection