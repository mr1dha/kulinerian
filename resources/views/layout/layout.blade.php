<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
	<title>@yield("title","Kulinerian")</title>
</head>

<body>
	<!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow text-warning fixed-top nav-layout">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">
        <i class="fa-1x fas fa-cloud-meatball text-warning"></i>
        <span class="font-weight-bold text-warning">KULINERIAN</span>
      </a>
  	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
	    <form action="{{url('/pencarian')}}" method="post" class="form-inline my-2 my-lg-0">
	    	@csrf
	      <input class="form-control mr-sm-2" type="text" placeholder="pencarian" aria-label="Search" name="keyword">
	      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Cari</button>
	    </form>
	  </div>
    </div>
  </nav>
  <!-- END NAVBAR -->

  @yield('content')

<!-- FOOTER -->
  <div class="footer mt-3 bg-dark">
    <p class="mb-0">Made with <span style="color: red">&#9829 </span>by: Aisyah, Lia, Ridha, Zikri</p>
  </div>
<!-- END FOOTER -->
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	
	<!-- <script src="{{asset('js/jquery-3.5.0.min.js')}}"></script> -->
<!--     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>
</body>
</html>