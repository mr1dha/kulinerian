@extends('layout/layout')

@section('title','Kuliner')

@section('content')
	<div class="container" id="kuliner-container">
	    <div class="row">
	      <div class="col-md-6 col-sm-12">
	          <div class="card border-0">
	            <img src="{{asset('img/item1.jpg')}}" alt="" class="card-img mt-3">
	          </div>
	      </div>
	      <div class="col-md-6 col-sm-12">
	      	<h1 class="card-title mt-2">Sate Matang Bireuen</h1>
	        <hr class="garis-pemisah">
	      	<h5 class="mt-2 shadow"><i class="fas fa-info-circle mr-2"></i>Deskripsi</h5>
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque fugit, incidunt optio minima architecto illo, at molestias harum enim esse porro. Dolor quibusdam, doloribus quia quam. Est incidunt quibusdam doloremque!</p>
	        <h5 class="shadow"><i class="fas fa-list mr-2"></i>Rincian</h5>
	        <table class="ml-2 mb-2">
	          <tr>
	            <td  class="poin-rincian">Nama Kuliner</td>
	            <td>Sate Matang Bireuen</td>
	          </tr>
	          <tr>
	            <td  class="poin-rincian">Kategori</td>
	            <td>Makanan Utama</td>
	          </tr>
	          <tr>
	            <td  class="poin-rincian">Bahan Utama</td>
	            <td>Daging kambing</td>
	          </tr>
	          <tr>
	            <td  class="poin-rincian">Asal</td>
	            <td>Kab. Bireuen</td>
	          </tr> 
	        </table>
	      </div>
	    </div>
	     <div class="row">
	      <div class="col-md-6 col-sm-12">
	          <h5 class="shadow"><i class="fas fa-utensils mr-2"></i>Resep Memasak</h5>
	          <h6 class="mt-3 font-weight-bold">ALAT DAN BAHAN</h6>
	          <table class="table" width="100%">
	          	<thead>
	          	<tr>
	          		<th scope="col">Alat</th>
	          		<th scope="col">Bahan</th>
	          	</tr>
	          	</thead>
	          	<tbody>
	          	<tr>
	          		<td>Alat 1</td>
	          		<td>Bahan 1</td>
	          	</tr>
	          	<tr>
	          		<td>Alat 1</td>
	          		<td>Bahan 1</td>
	          	</tr>
	          	<tr>
	          		<td>Alat 1</td>
	          		<td>Bahan 1</td>
	          	</tr>
	          	<tr>
	          		<td>Alat 1</td>
	          		<td>Bahan 1</td>
	          	</tr>
	          	</tbody>
	          </table>

	          <h6 class="mt-3 font-weight-bold">CARA MEMASAK</h6>
	          <ol>
	          	<li>Ini adalah langkah 1</li>
	          	<li>Ini adalah langkah 2</li>
	          	<li>Ini adalah langkah 3</li>
	          	<li>Ini adalah langkah 4</li>
	          	<li>Ini adalah langkah 5</li>
	          	<li>Ini adalah langkah 6</li>
	          </ol>
	      </div>
	      <div class="col-md-6 col-sm-12">
	      	<h5 class="shadow"><i class="fas fa-map-marker-alt mr-2"></i>Rekomendasi tempat</h5>
	      	<div class="card shadow mt-3">
				<div class="row no-gutters">
					<div class="col-md-4">
						<div class="embed-responsive embed-responsive-1by1">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127084.21322303842!2d95.35839756038332!3d5.510227607960808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x64aca37c6e22a38c!2sSate%20Matang%20D&#39;Wan!5e0!3m2!1sid!2sid!4v1586607248509!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>			
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h6 class="card-title">Sate Matang D'Wan</h6>
							<p class="card-text">Jl. Mawar, No. 01, Darussalam, Kota Banda Aceh</p>
							<a href="https://goo.gl/maps/fLpcVRM8tqLDYta58" target="#blank" class="text-white btn btn-warning">Buka Peta</a>
						</div>
					</div>
				</div>
			</div>
			<div class="card shadow mt-3">
				<div class="row no-gutters">
					<div class="col-md-4">
						<div class="embed-responsive embed-responsive-1by1">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31768.810017540265!2d95.35140172943477!3d5.552005755689538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0e8365d1d136ffe!2sSate%20matang%20cek%20wan!5e0!3m2!1sid!2sid!4v1586608293567!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>			
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h6 class="card-title">Sate matang cek wan</h6>
							<p class="card-text">Jl. Mawar, No. 01, Darussalam, Kota Banda Aceh</p>
							<a href="https://goo.gl/maps/fjnaozVzwR9c8SnB6" target="#blank" class="text-white btn btn-warning">Buka Peta</a>
						</div>
					</div>
				</div>
			</div>
	      </div>
	</div>
</div>
@endsection