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
	  <a class="navbar-brand font-weight-bold text-white mb-3" href="#"><i class="text-warning fa-2x fas fa-cloud-meatball p-0"></i>&nbsp; KULINERIAN</a>
	  <button class="navbar-toggler border" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav ml-auto">
	       <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          KATEGORI 1
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="{{url('/kategori')}}">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          KATEGORI 2
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          KATEGORI 3
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          KATEGORI 4
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <a class="dropdown-item" href="#">Something else here</a>
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
			<input type="text" class="search-bar" name="cari" placeholder="Mau cari kuliner apa?">
		  	<a class="btn btn-warning btn-lg" href="{{url('/search')}}" role="button">CARI</a>
			
			<!-- Jika ingin mencari data dari DB pakai form di bawah ini hapus anker dan input di -->
		  	<!-- <form action="" method="post">
				<input type="text" class="search-bar" name="cari" placeholder="Mau cari kuliner apa?">
			  	<button type="submit" class="btn btn-warning btn-lg" href="{{url('/search')}}" role="button">CARI</button>
			</form> -->
	</div>

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

	<!-- DAFTAR KULINER POPULER -->
	<h4 class="text-center font-weight-bold text-warning py-3 mb-3 bg-dark">
    <i class="fas fa-list mr-1" style="color: #ffc107; font-size: 21px;"></i> KULINER POPULER</h4>

    <div class="container">
    	<div class="row">
    		<div class="col-md-3 col-sm-6 mb-3">
		        <div class="card border-0 shadow">
		          <img src="{{asset('img/item1.jpg')}}" alt="" class="card-img-top">
		          <div class="card-body">
		           <h5 class="card-title m-1">Sate Matang</h5>
		            <p class="m-1 mb-2">
		              Disini akan ditampilkan deskripsi singkat dari makanan di atas yang diambil dari database
		            </p>
		            <button class="btn btn-secondary">Menu Utama</button>
		            <button class="btn btn-warning text-white">Lihat</button>
		          </div>
		        </div>
		    </div>
		    <div class="col-md-3 col-sm-6 mb-3">
		        <div class="card border-0 shadow">
		          <img src="{{asset('img/item2.jpg')}}" alt="" class="card-img-top">
		          <div class="card-body">
		           <h5 class="card-title m-1">Soto Aceh</h5>
		            <p class="m-1 mb-2">
		              Disini akan ditampilkan deskripsi singkat dari makanan di atas yang diambil dari database
		            </p>
		            <button class="btn btn-secondary">Menu Utama</button>
		            <button class="btn btn-warning text-white">Lihat</button>
		          </div>
		        </div>
		    </div>
		   <div class="col-md-3 col-sm-6 mb-3">
		        <div class="card border-0 shadow">
		          <img src="{{asset('img/item1.jpg')}}" alt="" class="card-img-top">
		          <div class="card-body">
		           <h5 class="card-title m-1">Sate Matang</h5>
		            <p class="m-1 mb-2">
		              Disini akan ditampilkan deskripsi singkat dari makanan di atas yang diambil dari database
		            </p>
		            <button class="btn btn-secondary">Menu Utama</button>
		            <button class="btn btn-warning text-white">Lihat</button>
		          </div>
		        </div>
		    </div>
		    <div class="col-md-3 col-sm-6 mb-3">
		        <div class="card border-0 shadow">
		          <img src="{{asset('img/item2.jpg')}}" alt="" class="card-img-top">
		          <div class="card-body">
		           <h5 class="card-title m-1">Soto Aceh</h5>
		            <p class="m-1 mb-2">
		              Disini akan ditampilkan deskripsi singkat dari makanan di atas yang diambil dari database
		            </p>
		            <button class="btn btn-secondary">Menu Utama</button>
		            <button class="btn btn-warning text-white">Lihat</button>
		          </div>
		        </div>
		    </div>
    	</div>
    </div>
      <div class="col-sm-12 mb-4 text-right">
        <button class="btn btn-warning mt-3 font-weight-bold">Selengkapnya</button>
      </div>
    </div>
  </div>

  <!-- FOOOTER -->
  <div class="footer mt-3 bg-dark">
    <p class="mb-0">Made with <span style="color: red">&#9829 </span>by: Aisyah, Lia, Ridha, Zikri</p>
  </div>
  
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="{{asset('js/script.js')}}"></script>
</body>
</html>