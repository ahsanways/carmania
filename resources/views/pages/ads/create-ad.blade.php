<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.links')
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/sidebar.css')}}">
	<style>
		form{
			width: 100%;
		}
	</style>
</head>
<body>
	
	<!-- Header -->

@include('includes.header')

<div id="wrapper" class="toggled">

        <!-- Sidebar -->
        @include('includes.sidebar')
       

        <!-- Page Content -->
        <a href="#menu-toggle" id="menu-toggle"><img src="{{URL::asset('images/icons/bars.png')}}" width="auto" height="30px"></a>

        <div id="page-content-wrapper">
            <div class="container-fluid">
            	<div class="row">
            		<br><br><br>
            		<h3>What do you want to sell?</h3>
            		<br><br><br>
            	</div>
                <div class="row">
             		<div class="col-md-4">
             			<div class="block1 wrap-pic-w">
						<img src="{{URL::asset('images/banner-01.jpg')}}" alt="IMG-BANNER">

						<a href="{{ route('sell-car') }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Sell Car
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
             		<div class="col-md-4">
             			<div class="block1 wrap-pic-w">
						<img src="{{URL::asset('images/banner-02.jpg')}}" alt="IMG-BANNER">

						<a href="{{ route('sell-bike') }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Sell Bike
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
             		<div class="col-md-4">
             			<div class="block1 wrap-pic-w">
						<img src="{{URL::asset('images/banner-03.jpg')}}" alt="IMG-BANNER">

						<a href="{{ route('sell-autopart') }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Sell AutoPart
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
        <!-- /#page-content-wrapper -->

    </div>
<!-- Footer -->
@include('includes.footer')

@include('includes.scripts')
<script>
	$("#menu-toggle").click(function(e) {
	  e.preventDefault();
	$("#wrapper").toggleClass("toggled");
	});
</script>

</body>
</html>