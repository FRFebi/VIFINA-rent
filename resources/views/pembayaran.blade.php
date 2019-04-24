@extends('layouts.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Pembayaran			
				</h1>	
				<p class="text-white link-nav"><a href="{{ route('home') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Pemabayaran</a></p>
			</div>											
		</div>
	</div>
</section>
<!-- End banner Area -->


<div class="container my-5">
	<form action="" method="">
		@csrf
		<div class="row justify-content-between">
			<div class="col-md-5">
				<div class="form-group">
					<label for="name">Nama</label>
					<input type="text" class="form-control" name="name" disabled="" value="{{ $user->name }}">
				</div>
				<div class="form-group">
					<input id="datepicker" data-date-format="yyyy-mm-dd" class="dates form-control" name="tanggal_pinjam" placeholder="Tanggal Ambil" type="text">
				</div>
				<div class="form-group">
					<input id="datepicker2" class="dates form-control" name="tanggal_kembali" placeholder="Tanggal Kembali" type="text">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="total" disabled="" value="{{ $kendaraan->harga }}">
				</div>
				<div class="form-group">
					<input type="hidden" class="form-control" name="kendaraan_id" disabled="" value="{{ $kendaraan->id }}">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
			<div class="col-md-5">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="{{ asset($kendaraan->img) }}" alt="Card image cap">
					<div class="card-body">
						<p class="card-text">{{ $kendaraan->deskripsi }}</p>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

@endsection