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
	      	<h1 class="card-title mt-2">{{$kuliner->nama}}</h1>
	        <hr class="garis-pemisah">
	      	<h5 class="mt-2 shadow"><i class="fas fa-info-circle mr-2"></i>Deskripsi</h5>
	        <p>{{$kuliner->deskripsi}}</p>
	        <h5 class="shadow"><i class="fas fa-list mr-2"></i>Rincian</h5>
	        <table class="ml-2 mb-2">
	          <tr>
	            <td  class="poin-rincian">Nama Kuliner</td>
	            <td>{{$kuliner->nama}}</td>
	          </tr>
	          <tr>
	            <td  class="poin-rincian">Kategori</td>
	            <td><?php $kategori = explode(',', $kuliner->kategori) ; ?>
		            @foreach($kategori  as $item)
		            <span class="badge badge-primary">{{$item}}</span>
		            @endforeach</td>
	          </tr>
	          <tr>
	            <td  class="poin-rincian">Bahan Utama</td>
	            <td>{{$kuliner->bahan_utama}}</td>
	          </tr>
	          <tr>
	            <td  class="poin-rincian">Asal</td>
	            <td>{{$kuliner->asal}}</td>
	          </tr> 
	        </table>
	      </div>
	    </div>
	     <div class="row">
	      <div class="col-md-6 col-sm-12 mt-3">
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

	          <h5 class="shadow mt-3"><i class="fas fa-utensils mr-2"></i>Alat dan Bahan</h5>
	          <?php
	          	$bahan = explode(',', $kuliner->alat_bahan);?>
	          	
	          <table class="table" width="100%">
	          	<thead>
	          	<tr>
	          		<th scope="col" width="10%">No</th>
	          		<th scope="col">Alat dan Bahan</th>
	          	</tr>
	          	</thead>
	          	<tbody>
	          	@foreach($bahan as $i => $item)
	          	<tr>
	          		<td>{{++$i}}</td>
	          		<td>{{$item}}</td>
	          	</tr>
	          	@endforeach
	          	
	          	</tbody>
	          </table>
	      </div>
	      <?php  $steps = explode('.',  $kuliner->cara_masak) ?>
	      <div class="col-md-6 col-sm-12 mt-3">
	      	<h5 class="shadow"><i class="fas fa-utensils mr-2 "></i>Cara Memasak</h5>
	         <div class="list-group">
	         @foreach ($steps as $i => $step) 
			  <div class="list-group-item list-group-item-action">
			    <div class="d-flex w-100 justify-content-between">
			      <h6 class="mb-1">LANGKAH {{++$i}}</h6>
			    </div>
			    <p class="mb-1">{{$step}}.</p>
			  </div>
			  @endforeach
			</div>
	      </div>
	</div>
</div>
@endsection