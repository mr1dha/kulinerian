@extends('layout/layout')

@section('title', $kuliner->nama.' - Resep dan Informasi')

@section('content')
	<div class="container" id="kuliner-container">
	    <div class="row">
	      <div class="col-md-6 col-sm-12">
	          <div class="card border-0">
	            <img src="{{asset('img/'.$kuliner->gambar)}}" alt="" class="card-img mt-3 img" height="340px">
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
	            <td><?php $kategori = explode(';', $kuliner->kategori) ; ?>
		            @foreach($kategori  as $item)
		            <span class="badge badge-primary p-1">{{$item}}</span>
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
							{!!$kuliner->url_tempat!!}
						</div>			
					</div>
					<div class="col-md-8">
						<div class="card-body pb-1">
							<h6 class="card-title font-weight-bold">{{$kuliner->nama_tempat}}</h6>
							<p class="card-text mb-1">{{$kuliner->nama_tempat}} adalah tempat yang direkomendasikan oleh kulinerian untuk mencicipi {{$kuliner->nama}} </p>
							<!-- <p class="card-text">Jl. Mawar, No. 01, Darussalam, Kota Banda Aceh</p> -->
							<a href="{!! $kuliner->googlemaps !!}" target="#blank" class="text-white btn btn-warning">Buka Peta</a>
						</div>
					</div>
				</div>
			</div>

	          <h5 class="shadow mt-3"><i class="fas fa-utensils mr-2"></i>Alat dan Bahan</h5>
	          <?php
	          	$bahan = explode(';', $kuliner->alat_bahan);?>
	          	
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
	      <?php  $steps = explode(';',  $kuliner->cara_masak) ?>
	      <div class="col-md-6 col-sm-12 mt-3">
	      	<h5 class="shadow"><i class="fas fa-utensils mr-2 "></i>Cara Memasak</h5>
	         <div class="list-group">
	         @foreach ($steps as $i => $step) 
			  <div class="list-group-item list-group-item-action">
			    <div class="d-flex w-100 justify-content-between">
			      <h6 class="mb-1 font">LANGKAH {{++$i}}</h6>
			    </div>
			    <p class="mb-1">{{$step}}.</p>
			  </div>
			  @endforeach
			</div>
	      </div>
	</div>
</div>
@endsection