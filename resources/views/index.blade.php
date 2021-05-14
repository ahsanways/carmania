<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.links')
	<style type="text/css">
		.form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
	</style>
</head>
<body class="animsition">
	<!-- Header -->
	@include('includes.header')
	@if(Auth::check())
		@if (Auth::user()->reward)
			@if(Auth::user()->reward->free_ads > 0)
				<div class="alert alert-success text-center">You have been awarded with {{ Auth::user()->reward->free_ads }} free featured ad. Create a featured ad to redeem it </div>
			@endif
		@endif
	@endif
	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(images/slide-01.jpg);">
					<div class="container h-full">
						
						@if(count($errors) > 0)
		                    @foreach($errors->all() as $error)
		                    <div class="alert alert-danger">{{$error}}</div>
		                    @endforeach
		                @endif
		                <br><br>
		                <div class="row">
		                	<div class="col-md-2"></div>
							<div class="col-md-8">
	                            <form class="card card-sm">
	                                <div class="card-body row no-gutters align-items-center">
	                                    <div class="col-auto">
	                                        <i class="fas fa-search h4 text-body"></i>
	                                    </div>
	                                    <!--end of col-->
	                                    <div class="col">
	                                        <input class="form-control form-control-lg form-control-borderless" id="search_by" name="search" type="search" placeholder="Search by Keywords">
	                                    </div>
	                                    <div><button type="submit" class="btn btn-default" onclick="location.href='http://localhost:8000/product/search/'+ document.getElementById('search_by').value"> 
											<a href="#" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
												Search
											</a>
											</button>
										</div>
	                                    <!--end of col-->
	                                </div>
	                            </form>
	                        </div>
                        </div>
						<div class="flex-col-l-m  p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2" style="color: white">
									Welcome!
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="color: white">
									Latest Automobiles
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="{{ route('product.search','car') }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Search
								</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{URL::asset('images/banner-01.jpg')}}" alt="IMG-BANNER">

						<a href="{{ route('product.search','car') }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Cars
								</span>

								<span class="block1-info stext-102 trans-04">
									New & Used
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Continue
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{URL::asset('images/banner-02.jpg')}}" alt="IMG-BANNER">

						<a href="{{ route('product.search','bike') }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Bikes
								</span>

								<span class="block1-info stext-102 trans-04">
									New & Used
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Continue
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{URL::asset('images/banner-03.jpg')}}" alt="IMG-BANNER">

						<a href="{{ route('product.search','autopart') }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									AutoParts
								</span>

								<span class="block1-info stext-102 trans-04">
									New & Used
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Continue
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	
<section class="bg0">
	<div class="container">
		<div class="p-b-10">
			<h3 class="ltext-103 cl5">
				Featured Automobiles
			</h3>
		</div>
	</div>
</section>	
<section class="carousel slide" data-ride="carousel" id="postsCarousel">
    <div class="container">
        <div class="row">
        	<div class="col-md-10"></div>
            <div class="col-md-2 lead" style="padding-left: 70px">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        	@php
        		$counter = 4;
        		$times = 0;
        	@endphp
         
			@foreach ($ads as $ad)
			@php	
			
			if($counter == 4 && $times == 0){
			echo '<div class="row row-equal carousel-item active m-t-0">';
			$counter = 0;
			$times= 1;
			}
			elseif($counter == 4 && $times == 1){
				echo '<div class="row row-equal carousel-item m-t-0">';
				$counter = 0;
			}

			@endphp
			    
			    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{URL::asset($ad->product->image)}}" alt="IMG-PRODUCT">

							<a href="{{ route('product.show',$ad->product) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{ $ad->product->name }}
								</a>

								<span class="stext-105 cl3">
									{{$ad->price}}
								</span>
							</div>

						</div>
					</div>
				</div>

			@php
			$counter = $counter + 1;
			if($counter == 4){
				echo "</div>";
			}
			@endphp
			
			@endforeach
    </div>
</section>

@if(Auth::check())
	@if(count($searches)>0)
		<!-- Product -->
		<section class="bg0">
			<div class="container">
				<div class="p-b-10">
					<h3 class="ltext-103 cl5">
						Recently Viewed Ads
					</h3>
				</div>
			</div>
		</section>
		<section class="carousel slide" data-ride="carousel" id="postsCarousel">
		    <div class="container p-t-0 m-t-2 carousel-inner">
	         	<div class="row row-equal carousel-item active m-t-0">
				@foreach ($searches as $search)
				@foreach ($search->product->ads as $ad)
				    
			    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{URL::asset($ad->product->image)}}" alt="IMG-PRODUCT">

							<a href="{{ route('product.show',$ad->product) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{ $ad->product->name }}
								</a>

								<span class="stext-105 cl3">
									{{$ad->price}}
								</span>
							</div>

						</div>
					</div>
				</div>
				@endforeach
				@endforeach
				</div>
		    </div>
		</section>
	@endif
@endif



	<!-- Footer -->
	@include('includes.footer')

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>


@include('includes.scripts')
</body>
</html>