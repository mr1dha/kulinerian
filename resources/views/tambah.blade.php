@extends('layout/layout')

@section('title','Tambah Kuliner')

@section('content')
<div class="container" id="search-container">
	<div class="row">
		<div class="col-lg-7">
			<h1>Tambah Kuliner Baru</h1>
			<form action="/admin/tambah" method="post">
			@csrf
			  <div class="form-group">
			    <h5 >Nama kuliner</h5>
			    <input type="text" class="form-control" name="nama"  required>
			  </div>

			  <div class="form-group">
			    <h5 >Deskripsi</h5>
			    <small  class="form-text" id="desHelp">deskripsi singkat tentang kuliner</small>
			    <input type="text" class="form-control" name="deskripsi" aria-describedby="desHelp" required>
			  </div>

		    <div class="form-group">
			    <h5 >Kategori kuliner</h5>
				<small  class="form-text">Pisahkan dengan titik koma (ex: Makanan utama; daging; gurih)</small>
			    <input type="text" class="form-control" name="kategori" aria-describedby="emailHelp" required>
			  </div>

			  <div class="form-group">
			    <h5 >Bahan utama</h5>
				<small  class="form-text">contoh : daging</small>
			    <input type="text" class="form-control" name="bahan_utama" aria-describedby="emailHelp" required>
			  </div>
				
				<div class="form-group">
			    <h5 >Asal kuliner</h5>
				<small  class="form-text">contoh : Pidie jaya, Aceh</small>
			    <input type="text" class="form-control" name="asal" aria-describedby="emailHelp" required>
			  </div>

			  	<div class="form-group">
			    <h5 >Alat dan Bahan</h5>
				<small  class="form-text">Pisahkan dengan titik koma (ex : 1 kg daging ayam; 1 sendok teh garam; 2 L air)</small>
			    <textarea rows="5" type="text" class="form-control" name="alat_bahan" aria-describedby="emailHelp" required></textarea>
			  </div>

			  <div class="form-group">
			    <h5 >Cara memasak</h5>
				<small  class="form-text">Pisahkan dengan titk koma(ex : Rebus air selama 20 menit; Iris halus bawang merah)</small>
			    <textarea rows="5" type="text" class="form-control" name="cara_masak" aria-describedby="emailHelp" required></textarea>
			  </div>

			  <div class="form-group">
			    <h5 >Nama tempat</h5>
			    <input type="text" class="form-control" name="nama_tempat" aria-describedby="emailHelp" required>
			  </div>

			  <div class="form-group">
			    <h5 >Link Embed HTML maps</h5>
				<small  class="form-text">kunjungi tempat di google maps -> Klik bagikan -> klik sematkan HTML -> copy src link yang ada dalam tag iframe  dan paste di bawah ini</small>
			    <textarea rows="3" type="text" class="form-control" name="url_tempat" aria-describedby="emailHelp" required></textarea>
			  </div>

			   <div class="form-group">
			    <h5 >Gambar Kuliner</h5>
			    <input type="file" class="form-control" name="gambar" aria-describedby="emailHelp" required>
			  </div>

			  <button type="submit" class="mt-4 btn btn-primary"> <i class="fas fa-plus"></i> Tambahkan</button>
			</form>
		</div>
	</div>
</div>
@endsection
