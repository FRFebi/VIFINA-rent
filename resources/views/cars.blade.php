@extends('layouts.app')

@section('content')
<!-- start banner Area -->
{{-- <section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Cars			
				</h1>	
				<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="cars.html"> Cars</a></p>
			</div>											
		</div>
	</div>
</section> --}}
<!-- End banner Area -->	

<!-- Start model Area -->
<section class="model-area section-gap" id="cars">
	<div class="container">
		<div class="row d-flex justify-content-center pb-40">
			<div class="col-md-8 pb-40 header-text">
				<h1 class="text-center pb-10">Choose your Desired Car Model</h1>
				<p class="text-center">
					Who are in extremely love with eco friendly system.
				</p>
			</div>
		</div>
		@foreach($rentals as $rental)
		<h2 class="text-center pb-10">{{ $rental->nama }}</h2>
		<div class="active-model-carusel">
			@foreach($rental->kendaraans as $kendaraan)
			<div class="row align-items-center single-model item">
				<div class="col-lg-6 model-left">
					<div class="title justify-content-between d-flex">
						<h4 class="mt-20">{{ $kendaraan->nama }}</h4>
						<h2>IDR {{ $kendaraan->harga }}k<span>/day</span></h2>
					</div>
					<p>
						{{ $kendaraan->deskripsi }}
					</p>
					<p>
							Kapasitas		: {{ isset($kendaraan->kapasitas) ? $kendaraan->kapasitas : "--" }} Orang<br>
							Transmisi 		: {{ isset($kendaraan->transmisi) ? $kendaraan->transmisi : "-" }}<br> 
							{{ $kendaraan->jenis_id == 2 ? "Pintu : ".$kendaraan->pintu : " "}}
					</p>
					<a class="text-uppercase primary-btn" href="{{ route('transaksi.edit',['kendaraan_id'=>$kendaraan->id]) }}">Book This Car Now</a>
				</div>
				<div class="col-lg-6 model-right">
					<img class="img-fluid" src="{{ asset($kendaraan->img) }}" alt="">
				</div>
			</div>
			@endforeach										
		</div>
		@endforeach
	</section>
	<!-- End model Area -->	



	<!-- Start callaction Area -->
	<section class="callaction-area relative section-gap">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<h1 class="text-white">Keep In Touch With Us</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
					</p>
					<a class="callaction-btn text-uppercase" href="#">Reach Our Team</a>	
				</div>
			</div>
		</div>	
	</section>
	<!-- End callaction Area -->

	<!-- Start feature Area -->
	<section class="feature-area section-gap" id="service">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text">
					<h1>What Services we offer to our clients</h1>
					<p>
						Who are in extremely love with eco friendly system.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-license"></span>Professional Service</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>								
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-phone"></span>Great Support</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>								
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>				
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>								
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>									
					</div>
				</div>						
			</div>
		</div>	
	</section>
	<!-- End feature Area -->	

	@endsection