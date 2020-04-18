@extends('layout/layout')

@section('title', 'Halaman Login')

@section('content')
<div class="row justify-content-center">
	<div class="col-lg-4">
			<!-- Menampilkan pesan status -->
			@if(session('status'))
				<div class="alert alert-danger" style="position: absolute; margin-top: 100px; width: 95%">
					{{session('status')}}
				</div>
			@endif

			<div class="card border-1 text-center" id="daftar-form">
			<div class="card-header bg-dark">
        		<h3 class="font-weight-bold text-warning"><i class="fa-1x fas fa-user"></i> Login Admin</h3>
			</div>
			<div class="card-body">
				<form action="{{url('/admin/login')}}" method="post">
					@csrf
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-user"></i></div>
							</div>
							<input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
							</div>
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
					</div>
					<p class="text-left reg">Hubungi operator untuk mendapatkan username dan password</p>
					<button type="submit" class="btn btn-warning font-weight-bold w-50	">MASUK</button>
				</form>
			</div>
		</div>
	</div>
	</div>
@endsection