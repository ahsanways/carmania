<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.links')
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/profile-card.css')}}">
	<style type="text/css">
		/*.card-body img{
          height:auto;
          width: 100%;
        }*/
		
		
	</style>
</head>
<body>
	
	<!-- Header -->

@include('includes.header')

<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="alert alert-success col-md-12" id="message" hidden=>
                    Product has been added to Wishlist
                </div>
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="{{URL::asset($ad->product->image)}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{URL::asset($ad->product->image)}}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{URL::asset($ad->product->image)}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							{{ $ad->product->name }}
							@if(Auth::check())
							<button class="btn btn-danger float-right" onclick="addtowishlist({{ $ad->product->id }})">
							<i class="fa fa-heart"></i> 
							</button>
							@endif
						</h4>			
						<span class="mtext-106 cl2">
							Rs. {{ $ad->price }}
						</span>
						<div class="mtext-106 cl2 float-right">
							<i class="fa fa-eye"></i> Views: {{ $ad->views }}
						</div>
					
						<p class="stext-102 cl3 p-t-23">
							<table class="table table-borderless">
                                                      <tbody>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: center;" scope="row">Year</th>
                                                          <td class="align-middle" id="year1" style="text-align: left;">{{ $ad->product->year }}</td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: center;" scope="row">Mileage</th>
                                                          <td class="align-middle" id="mileage1" style="text-align: left;">{{ $ad->product->mileage }}</td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: center;" scope="row">Color</th>
                                                          <td class="align-middle" id="color1" style="text-align: left;">{{ $ad->product->color }}</td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: center;" scope="row">City</th>
                                                          <td class="align-middle" id="city1" style="text-align: left;">{{ $ad->product->city }}</td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: center;" scope="row">Condition</th>
                                                          <td class="align-middle" id="condition1" style="text-align: left;">{{ $ad->product->condition }}</td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: center;" scope="row">Transmission</th>
                                                          <td class="align-middle" id="transmission1" style="text-align: left;">{{ $ad->product->transmission }}</td>
                                                        </tr>
                                                        {{-- <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Description</th>
                                                          <td class="align-middle" id="description1" style="text-align: left;"></td>
                                                        </tr> --}}
                                                      </tbody>
                                                    </table>
						</p>
						
						<!--  -->
						<div class="p-t-33">
							
                <div class="row d-flex justify-content-center">
                    
                    <div class="col-sm-6 col-md-8" id="map_1">
                    	<div class="card text-center">
                                     <div class="card-header">
                                         <h5>Location Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="card mb-4 bg-light text-center">
                                        	<div class="col-md-12">
                                				{{-- <img class="" src="http://simpleicon.com/wp-content/uploads/user1.png"> --}}
                                				<div class="map">
													<div class="size-303" id="google_map" data-map-x="31.40058349" data-map-y="74.2110239" data-pin="{{ asset('images/icons/pin.png') }}" data-scrollwhell="0" data-draggable="1" data-zoom="15"></div>
												</div>
                                			</div>
                                {{-- https://i.ytimg.com/vi/J4CGBddKEPM/maxresdefault.jpg --}}
                                <div class="card-body">
                                    <div>
                                        <h4 class="card-title">
                                            {{$ad->user->name}}<br/>
                                        </h4>

                                        <p class="card-text">
                                            	
                                            	<ul style="list-style-type:circle;">
												  <li>{{$ad->user->email}}</li>
												  <li>+92-{{$ad->user->phone_number}}</li>
												  <li>{{ $ad->user->created_at }}</li>
												</ul> 
                                                {{-- <strong>Email:</strong> {{$ad->user->email}}<br/>
                                                <strong>Contact:</strong> +92{{$ad->user->phone_number}}<br/>
                                                <strong>Joined on: </strong>{{ $ad->user->created_at }} --}}
                                            
                                        </p>

                                        <p class="card-text">

                                            <a href="mailto:{{$ad->user->email}}?Subject=Hello%20There" target="_top" class="btn btn-success btn-sm mb-1">Contact
                                            </a>
                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    	
                    </div>
                
					</div>

						</div>

						<!--  -->
						
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews ({{ $count }})</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
								</p>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<ul class="p-lr-28 p-lr-15-sm">
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Mileage
											</span>

											<span class="stext-102 cl6 size-206">
												 -{{ $ad->product->mileage }}
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												City
											</span>

											<span class="stext-102 cl6 size-206">
												-{{ $ad->product->city }}
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Transmission
											</span>

											<span class="stext-102 cl6 size-206">
												-{{ $ad->product->transmission }}
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Color
											</span>

											<span class="stext-102 cl6 size-206">
												-{{ $ad->product->color }}
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Condition
											</span>

											<span class="stext-102 cl6 size-206">
												-{{ $ad->product->condition }}
											</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										<!-- Review -->
										@foreach ($ad->product->reviews as $review)
											<div class="flex-w flex-t p-b-68">
											<div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
												<img src="https://icon-library.net/images/avatar-icon-png/avatar-icon-png-8.jpg" alt="AVATAR">
											</div>

											<div class="size-207" >
												<div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														{{ $review->user->name }}
													</span>

													<span class="fs-18 cl11">
														@for ($i = 0; $i < 5; $i++)
															@if($i < $review->rating)
																<i class="zmdi zmdi-star"></i>
															@else
																<i class="zmdi zmdi-star-outline"></i>
															@endif
														@endfor
													</span>
												</div>

												<p class="stext-102 cl6">
													{{ $review->review }}
												</p>
											</div>
										</div>
										@endforeach
										
										
										<!-- Add review -->
										<form class="w-full" action="{{ route('review.store') }}" method="POST">
											@csrf
											<h5 class="mtext-108 cl2 p-b-7">
												Add a review
											</h5>

											<p class="stext-102 cl6">
												Your email address will not be published. Required fields are marked *
											</p>

											<div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Your Rating
												</span>

												<span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating" required>
												</span>
											</div>

											<div class="row p-b-25">
												<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review" required></textarea>
												</div>

												{{-- <div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="name">Name</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name" required>
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="email">Email</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email" required>
												</div> --}}
												
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="product_id" value="{{ $ad->product->id }}" type="number" name="product_id" hidden>
												
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
												Submit
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				CarMania
			</span>
		</div>
	</section>
<!-- Footer -->
@include('includes.footer')

@include('includes.scripts')
<script type="text/javascript">
	function addtowishlist(id){

            var base_url = $('meta[name=base_url]').attr("content");
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            $.ajax({
                type: "GET",
                url: "/addtowishlist",
                data:{
                    product_id: id,
                },
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    if(data['status']==0){

                    }
                    else{
                    	$('#message').removeAttr('hidden');
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log("Error");
                }
            });
        }
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6OKj0X2LwaAwqhFSKuZ22NI2lEyCCjvo"></script>
	<script src="{{ asset('js/map-custom.js') }}"></script>

</body>
</html>
