<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.links')
</head>
<body class="animsition">
	
	<!-- Header -->

@include('includes.header')

<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md" style="margin:0 auto">
					<form method="POST" action="{{ route('profileUpdate',$user->id) }}">
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
							Update Profile
						</h4>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name"  id="input-field" value="{{ $user->name }}" onkeypress="return (event.charCode > 64 && 
							event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" title="Name must not contain any numbers" placeholder="Full Name" required>
							<img class="how-pos4 pointer-none" src="{{ asset('images/icons/person.png') }}" alt="ICON">
						</div>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="phone_number" value="{{ $user->phone_number}}" placeholder="Phone Number" required>
							<img class="how-pos4 pointer-none" src="{{ asset('images/icons/phone.png') }}" alt="ICON">
						</div>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="address" value="{{ $user->address }}" placeholder="Your Complete Address" required>
							<img class="how-pos4 pointer-none" src="{{ asset('images/icons/address.png') }}" alt="ICON">
						</div>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" placeholder="password">
							<img class="how-pos4 pointer-none" src="{{ asset('images/icons/icon-pwd.png') }}" alt="ICON">
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Update
						</button>
					</form>
				</div>

			</div>
		</div>
	</section>		
	
	
	<!-- Map -->
	<div class="map">
		<div class="size-303" id="google_map" data-map-x="31.40058349" data-map-y="74.2110239" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="15"></div>
	</div>
<!-- Footer -->
@include('includes.footer')

@include('includes.scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6OKj0X2LwaAwqhFSKuZ22NI2lEyCCjvo"></script>
	<script src="js/map-custom.js"></script>

</body>
</html>