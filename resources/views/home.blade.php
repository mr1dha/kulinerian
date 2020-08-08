<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
	<title>Home</title>
</head>
<body>
	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top navbar-home">
	<div class="container">
	  <a class="navbar-brand font-weight-bold text-white" href="#"><i class="text-warning fa-1x fas fa-cloud-meatball p-0"></i>&nbsp; KULINERIAN</a>
	  <button class="navbar-toggler border" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav ml-auto">
	       <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	         JENIS MAKANAN
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="{{url('/kategori/makanan berat')}}">Makanan Berat</a>
	          <a class="dropdown-item" href="{{url('/kategori/makanan ringan')}}">Makanan Ringan</a>
	          <a class="dropdown-item" href="{{url('/kategori/cemilan')}}">Cemilan</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          BAHAN UTAMA
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="{{url('/kategori/daging')}}">Daging</a>
	          <a class="dropdown-item" href="{{url('/kategori/seafood')}}">Seafood</a>
	          <a class="dropdown-item" href="{{url('/kategori/sayur')}}">Sayuran</a>
	          <a class="dropdown-item" href="{{url('/kategori/buah')}}">Buahan</a> 
	          <a class="dropdown-item" href="{{url('/kategori/tepung')}}">Tepung</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          RASA
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="{{url('/kategori/gurih')}}">Gurih</a>
	          <a class="dropdown-item" href="{{url('/kategori/manis')}}">Manis</a>
	          <a class="dropdown-item" href="{{url('/kategori/pedas')}}">Pedas</a>
	          <a class="dropdown-item" href="{{url('/kategori/asam')}}">Asam</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          LAINNYA
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="{{url('/kategori/gorengan')}}">Gorengan</a>
	          <a class="dropdown-item" href="{{url('/kategori/berkuah')}}">Berkuah</a>
	          <a class="dropdown-item" href="{{url('/kategori/minuman')}}">Minuman</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	  </div>
	</nav>

	<!-- JUMBOTRON -->
	<div class="welcome">
		  <h1 class="display-4">TEMUKAN SELERA KULINERMU DI <br></h1>
		  <hr class="my-4">
		  <span class="web-title">KULINERIAN</span>
		  	<form action="{{url('/pencarian')}}" method="post">
		  		@csrf
				<input type="text" class="search-bar" name="keyword" placeholder="contoh : 'sate', 'daging', 'kuah', 'pedas'">
			  	<button type="submit" class="btn btn-warning btn-lg">CARI</button>
			</form>
	</div>
	<!-- END JUMBOTRON -->

	<!-- SLIDE IMAGE -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="{{asset('img/bg1.png')}}" class="d-block" alt="...">
	      <div class="carousel-caption">
	        <h5>Kuliner di Aceh</h5>
	        <p>Kurang lebih terdapat XXX jenis kuliner di Aceh</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="{{asset('img/bg2.png')}}" class="d-block" alt="...">
	      	<div class="carousel-caption">
	      	<h5>Sate Matang</h5>
	        <p>Ini adalah deskripsi singkat sate matang</p>
	    	</div>
	    </div>
	    <div class="carousel-item">
	      <img src="{{asset('img/bg3.png')}}" class="d-block" alt="...">
	      	<div class="carousel-caption">
	      	<h5>Soto Aceh</h5>
	        <p>Ini adalah deskripsi singkat soto Aceh</p>
	    	</div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!-- END SLIDE IMAGE -->

	<!-- DAFTAR KULINER POPULER -->
	<h4 class="text-center font-weight-bold text-warning py-3 mb-3 bg-dark">
    <i class="fas fa-list mr-1" style="color: #ffc107; font-size: 21px;"></i> KULINER POPULER</h4>

    <div class="container">
    	<div class="row">
    		@foreach($kuliners as $kuliner)
    		<div class="col-md-3 col-sm-6 mb-3">
		        <a href="{{url('/kuliner/'.$kuliner->slug)}}">
		        	<div class="card border-0 shadow produk">
		          <img src="{{asset('img/'.$kuliner->gambar)}}" alt="" class="card-img-top">
		          <div class="card-body p-0 px-3">

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
		            <a href="{{ url('/kuliner/'.$kuliner->slug) }}"	class="w-100 btn btn-warning text-white">Lihat</a>
		          </div>
		        </div>
		        </a>
		    </div>
		    @endforeach
    	</div>
    </div>
    </div>
  </div>
  	<!-- END DAFTAR KULINER POPULER -->

  <!-- FOOOTER -->
  <div class="footer mt-3 bg-dark">
    <p class="mb-0">Made with <span style="color: red">&#9829 </span>by Programmer Indonesia</p>
    <small>&copy; kulinerian 2020</small>
  </div>
  
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="{{asset('js/script.js')}}"></script>
</body>
</html>