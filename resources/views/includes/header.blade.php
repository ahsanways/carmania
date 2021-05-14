<!-- Header desktop -->
<header>
		<div class="container-menu-desktop">

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="{{ route('index') }}" class="logo">
						<img src="{{URL::asset('images/icons/logo-01.png')}}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="{{ route('product.search','car') }}">Cars</a>
							</li>

							<li>
								<a href="{{ route('product.search','bike') }}">Bikes</a>
							</li>

							<li>
								<a href="{{ route('product.search','autopart') }}">AutoParts</a>
							</li>

							<li>
								<a href="{{ route('post.index') }}">Blog</a>
							</li>

							{{-- <li>
								<a href="{{ route('about') }}">About</a>
							</li> --}}

							<li>
								<a href="{{ route('contact') }}">Contact</a>
							</li>

							<li>
								<a href="{{ route('buyerrequest.index') }}"> Requests</a>
							</li>

							<li>
								<a href="{{ route('products.compare') }}"> Compare </a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						@if(Auth::guest())
						<div class="menu-desktop">
							<ul class="main-menu">
								<li>
									<a href="{{ route('login') }}">Login</a>
								</li> | 
								<li>
									<a href="{{ route('register') }}">Sign Up</a>
								</li>
							</ul>
						</div>
						@else
						<div style="margin-right: 20px">
							<a href="{{ route('ad.create') }}"><button class="btn btn-danger">
								Post an Ad
							</button></a>
						</div>
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    {{Auth::user()->name}}
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						  	@if (Auth::user()->reward)
						  		<a class="dropdown-item">Reward pts: {{ Auth::user()->reward->reward_points }}</a>
						  	@endif
						    <a class="dropdown-item" href="{{ route('profile.update') }}">Edit Profile</a>
						    <a class="dropdown-item" href="{{ route('ad.index') }}">My Ads</a>
						    <a class="dropdown-item" href="{{ route('ad.create') }}">Post an Ad</a>
						    <a class="dropdown-item" href="{{ route('buyerrequest.create') }}">Post a request</a>
						    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>				    	
						  </div>
						</div>
						<div style="margin-left: 20px">
							<a href="{{ route('wishlist.index') }}" id="wishlist-icon" ><i class="fa fa-shopping-bag fa-2x"></i></a>
						</div>
						@endif
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="{{ route('index') }}"><img src="{{URL::asset('images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				@if(Auth::guest())
						<div class="menu-desktop">
							<ul class="main-menu">
								<li>
									<a href="{{ route('login') }}">Login</a>
								</li> | 
								<li>
									<a href="{{ route('register') }}">Sign Up</a>
								</li>
							</ul>
						</div>
						@else
						<div style="margin-right: 10px">
							<button class="btn btn-danger">
								Post an Ad
							</button>
						</div>
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    {{Auth::user()->name}}
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						  	@if (Auth::user()->reward)
						  		<a class="dropdown-item">Reward pts: {{ Auth::user()->reward->reward_points }}</a>
						  	@endif
						    <a class="dropdown-item" href="{{ route('profile.update') }}">Edit Profile</a>
						    <a class="dropdown-item" href="{{ route('ad.index') }}">My Ads</a>
						    <a class="dropdown-item" href="{{ route('ad.create') }}">Post an Ad</a>
						    <a class="dropdown-item" href="{{ route('buyerrequest.create') }}">Post a request</a>
						    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>				    	
						  </div>
						</div>
						<div style="margin-left: 10px">
							<a href="{{ route('wishlist.index') }}" id="wishlist-icon"><i class="fa fa-shopping-bag fa-2x"></i></a>
						</div>
						@endif
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">

			<ul class="main-menu-m">
							<li>
								<a href="#">Cars</a>
								<ul class="sub-menu">
									<li><a href="#">New Cars</a></li>
									<li><a href="#">Used Cars</a></li>
								</ul>
							</li>

							<li>
								<a href="#">Bikes</a>
								<ul class="sub-menu">
									<li><a href="#">New Bikes</a></li>
									<li><a href="#">Used Bikes</a></li>
								</ul>
							</li>

							<li>
								<a href="#">AutoParts</a>
							</li>

							<li>
								<a href="{{ route('post.index') }}">Blog</a>
							</li>

							<li>
								<a href="#">About</a>
							</li>

							<li>
								<a href="#">Contact</a>
							</li>
						</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>