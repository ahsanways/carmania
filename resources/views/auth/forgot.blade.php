<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.links')
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		@include('includes.header')
	</header>


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md" style="margin:0 auto">
					<form method="POST" action="{{ route('forgot.password') }}">
						@if(count($errors) > 0)
		                    @foreach($errors->all() as $error)
		                    <div class="alert alert-danger">{{$error}}</div>
		                    @endforeach
		                @endif
		                @if(Session::has('message'))
		                    <div>
		                        <p class="alert alert-info">{{ Session::get('message') }}</p>
		                    </div>
		                @endif
						@csrf
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Reset Password
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address" required>
							<img class="how-pos4 pointer-none" src="{{ asset('images/icons/icon-email.png') }}" alt="ICON">
						</div>
						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Submit
						</button>
					</form>
				</div>
				

			</div>
		</div>
	</section>	
	
	
	{{-- <!-- Map -->
	<div class="map">
		<div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
	</div> --}}



	<!-- Footer -->
	@include('includes.footer')


	@include('includes.scripts')
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6OKj0X2LwaAwqhFSKuZ22NI2lEyCCjvo"></script>
	<script src="js/map-custom.js"></script>

</body>
</html>