<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('includes.links')
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- Pe-icon-7-stroke CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/pe-icon-7-stroke.css') }}">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css') }}">
    <!-- Slick slider css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
    <!-- Nice Select css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <!-- jquery UI css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jqueryui.min.css') }}">
    <!-- main style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    
    <style type="text/css">
        .btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .5rem .75rem;
    font-size: 1rem;
    line-height: 1.25;
    border-radius: .25rem;
    transition: all .15s ease-in-out;
}

.btn-secondary {
    color: #fff;
    background-color: #868e96;
    border-color: #868e96;
}

    </style>
    <!-- CSS
	============================================ -->

</head>

<body>
    <!-- Start Header Area -->
    @include('includes.header')

    <main>
        <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="alert alert-success col-md-12" id="message" hidden=>
                        Product has been added to Wishlist
                    </div>
                    <!-- sidebar area start -->
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside class="sidebar-wrapper">
                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <h5 class="sidebar-title">categories</h5>
                                <div class="sidebar-body">
                                    <ul class="shop-categories">
                                        <li><a href="{{ route('product.search',"all") }}">All</a></li>
                                        <li><a href="{{ route('product.search',"car") }}">Cars</a></li>
                                        <li><a href="{{ route('product.search',"bike") }}">Bikes</a></li><li><a href="{{ route('product.search',"autopart") }}">Autopart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <h5 class="sidebar-title">Year & City
                                    <button class="filter-btn float-right" onclick="getFilteredData()">filter</button>
                                </h5>
                                <div class="sidebar-body">
                                    <select class="nice-select" id="year" name="year">
                                            <option value="">Select Year</option>
                                            @for ($i = 1998; $i <= 2019; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                    </select>
                                    <br><br>
                                </div>
                                <div class="sidebar-body">
                                    <select class="nice-select" id="city" name="city">
                                            <option value="">Select City</option>
                                            @foreach($cities as $city)
                                                <option value="{{ $city->name }}">{{ $city->name }}</option>
                                            @endforeach
                                    </select>
                                    <br><br>
                                </div>
                            </div>
                            <div class="sidebar-single">
                                <h5 class="sidebar-title">Price Range
                                </h5>
                                <div class="sidebar-body">
                                    <select class="nice-select" id="price" name="price">
                                            <option value="">Select Price Range</option>
                                            <option value="1000000">Rs. 0 - Rs. 1000000</option>
                                            <option value="2000000">Rs. 1000000 - Rs. 2000000</option>
                                            <option value="3000000">Rs. 2000000 - Rs. 3000000</option>
                                            <option value="4000000">Rs. 3000000 - Rs. 4000000</option>
                                            <option value="5000000">Rs. 4000000 - Rs. 5000000</option>
                                            <option value="6000000">Rs. 5000000 - Rs. 6000000</option>
                                            <option value="7000000">Rs. 6000000 - Rs. 7000000</option>
                                            <option value="8000000">Rs. 7000000 - Rs. 8000000</option>
                                            <option value="9000000">Rs. 8000000 - Rs. 9000000</option>
                                            <option value="10000000">Rs. 9000000 - Rs. 10000000</option>
                                    </select>
                                    <br><br>
                                </div>
                            </div>
                            
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <h5 class="sidebar-title">Transmission</h5>
                                <div class="sidebar-body">
                                    <ul class="checkbox-container categories-list">
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="transmission" value="any" id="customCheck1" checked="checked">
                                                <label class="custom-control-label" for="customCheck1">Any</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="transmission" value="Manual" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Manual</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="transmission" value="Automatic" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">Automatic</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <h5 class="sidebar-title">Condition</h5>
                                <div class="sidebar-body">
                                    <ul class="checkbox-container categories-list">
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="condition" value="any" id="customCheck4" checked="checked">
                                                <label class="custom-control-label" for="customCheck4">Any</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="condition" value="new" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">New</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="condition" value="used" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">Used</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- single sidebar end -->
                        </aside>
                    </div>
                    <!-- sidebar area end -->

                    <!-- shop main wrapper start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="shop-product-wrapper">
                            <!-- shop product top wrap start -->
                            <div class="shop-top-bar">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                        <div class="top-bar-left">
                                            <div class="product-view-mode">
                                                <a href="#" class="active" data-target="grid-view" data-toggle="tooltip" title="Grid View"><i class="fa fa-th"></i></a>
                                                <a href="#" data-target="list-view" data-toggle="tooltip" title="List View"><i class="fa fa-list"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                        <div class="top-bar-right">
                                            <div class="product-short">
                                                <p>Sort By : </p>
                                                <select class="nice-select" id="sortby" name="sortby" onchange="getData(this)" data-type="{{ $name }}">
                                                    <option value="">Select</option>
                                                    <option value="city">City</option>
                                                    <option value="year">Year</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop product top wrap start -->

                            <!-- product item list wrapper start -->
                            <div class="shop-product-wrap grid-view row mbn-30" id="products">
                                <!-- product single item start -->
                                @if(count($products)>0)
                                @foreach ($products as $product)
                                    @foreach($product->ads as $ad)
                                        @if($ad->approved == 1)

                                            <div class="col-md-4 col-sm-6">
                                            <!-- product grid start -->
                                            <div class="product-item">
                                                <figure class="product-thumb">
                                                    <a href="#">
                                                        <img class="pri-img" src="{{URL::asset($product->image)}}" alt="product">
                                                        <img class="sec-img" src="{{URL::asset($product->image)}}" alt="product">
                                                    </a>
                                                    <div class="product-badge">
                                                        @if($product->condition =="New")
                                                        <div class="product-label new">
                                                                <span>New</span>
                                                        </div>
                                                        @endif
                                                        @foreach($product->ads as $ad)
                                                            @if($ad->featured == 1)
                                                                <div class="product-label discount">
                                                                    <span>Featured</span>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="button-group">
                                                        <a onclick="addtowishlist({{ $product->id }})" data-toggle="tooltip" data-placement="left" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                    </div>
                                                    <div class="cart-hover">
                                                        <a href="{{ route('product.show',$product) }}" class="btn btn-cart">View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-caption text-center">
                                                    <div class="product-identity">
                                                        <p class="manufacturer-name"><a href="#">{{ $product->transmission }}</a></p>
                                                    </div>
                                                    <h6 class="product-name">
                                                        <a href="#">{{$product->name}} 
                                                        <span class="price-old">({{ $product->year }})</span></a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-regular">Rs. {{$ad->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product grid end -->

                                            <!-- product list item end -->
                                            <div class="product-list-item">
                                                <figure class="product-thumb">
                                                    <a href="#">
                                                        <img class="pri-img" src="{{URL::asset($product->image)}}" alt="product">
                                                        <img class="sec-img" src="{{URL::asset($product->image)}}" alt="product">
                                                    </a>
                                                    <div class="product-badge">
                                                        @if($product->condition =="New")
                                                        <div class="product-label new">
                                                                <span>New</span>
                                                        </div>
                                                        @endif
                                                        @foreach($product->ads as $ad)
                                                            @if($ad->featured == 1)
                                                                <div class="product-label discount">
                                                                    <span>Featured</span>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="button-group">
                                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                    </div>
                                                    <div class="cart-hover">
                                                        <a href="{{ route('product.show',$product) }}" class="btn btn-cart">View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-content-list">
                                                    <div class="manufacturer-name">
                                                        <a href="#">{{ $product->transmission }}</a>
                                                    </div>

                                                    <h5 class="product-name"><a href="#">{{$product->name}}<span class="price-old">({{ $product->year }})</span></a></a></h5>
                                                    <div class="price-box">
                                                        @foreach ($product->ads as $ad)
                                                            <span class="price-regular">Rs. {{$ad->price}}</span>
                                                        @endforeach
                                                    </div>
                                                    <p>{{$product->description}}</p>
                                                </div>
                                            </div>
                                            <!-- product list item end -->
                                        </div>
                                        @endif
                                    @endforeach
                                @endforeach
                                @else
                                    <div class="alert alert-warning col-md-12">
                                        <strong>Sorry!</strong> No Records found matching your search query.
                                    </div> 
                                @endif
                                <!-- product single item start -->

                            </div>
                            <!-- product item list wrapper end -->

                            <!-- start pagination area -->
                        </div>
                    </div>
                    <!-- shop main wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->
    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->
    @include('includes.footer')   
    <!-- footer area end -->
    

    <!-- JS
============================================ -->
    <script type="text/javascript">
        
        function getData(ele) {
            var type = $(ele).attr("data-type");
            var filter = $(ele).children("option:selected").val();
            var base_url = $('meta[name=base_url]').attr("content");
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            $.ajax({
                type: "GET",
                url: "/sortby",
                data:{
                    type: type,
                    filter: filter
                },
                dataType: 'json',
                beforeSend: function(){
                  $('.ajax-loader').css("visibility", "visible");
                }, 
                success: function (data) {
                    console.log("filter");
                    var products = '';
                    var i =0;
                    data['products'].forEach(function(item){
                        if(item.transmission == null){
                            item.transmission = "";
                        }
                        products+='<div class="col-md-4 col-sm-6"><div class="product-item"><figure class="product-thumb"><a href="#"><img class="pri-img" src="'+base_url+'/'+item.image+'" alt="product"><img class="sec-img" src="'+base_url+'/'+item.image+'" alt="product"></a><div class="button-group"><a onclick="addtowishlist('+item.id+')" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a></div><div class="cart-hover"><a href="'+base_url+'/product/'+item.id+'" class="btn btn-cart">View</a></div></figure><div class="product-caption text-center"><div class="product-identity"><p class="manufacturer-name"><a href="#">'+item.transmission+'</a></p></div><h6 class="product-name"><a href="#">'+item.name+'<span class="price-old">('+item.year+')</span></a></h6><div class="price-box"><span class="price-regular">Rs. '+data['price'][i]+'</span></div></div></div><div class="product-list-item"><figure class="product-thumb"><a href="#"><img class="pri-img" src="'+base_url+'/'+item.image+'" alt="product"><img class="sec-img" src="'+base_url+'/'+item.image+'" alt="product"></a><div class="button-group"><a onclick="addtowishlist('+item.id+')" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a></div><div class="cart-hover"><a href="'+base_url+'/product/'+item.id+'" class="btn btn-cart">View</a></div></figure><div class="product-content-list"><div class="manufacturer-name"><a href="#">'+item.transmission+'</a></div><h5 class="product-name"><a href="#">'+item.name+'<span class="price-old">('+item.year+')</span></a></a></h5><div class="price-box"><span class="price-regular">Rs. '+data['price'][i]+'</span></div><p>'+item.description+'</p></div></div></div>';
                            i++;
                    });
                    $('#products').html(products);
                },
                complete: function(){
                  $('.ajax-loader').css("visibility", "hidden");
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log("Error retrieving records!");
                }
            }); 
        }

        function getFilteredData(){
            var transmission = $("input[name='transmission']:checked").val();
            var condition = $("input[name='condition']:checked").val();
            var year = $("#year").val();
            var city = $("#city").val();
            var price = $("#price").val();
            var base_url = $('meta[name=base_url]').attr("content");
            console.log(year);
            var type = $('#sortby').attr("data-type");
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            $.ajax({
                type: "GET",
                url: "/filter",
                data:{
                    type: type,
                    transmission:transmission,
                    condition:condition,
                    year:year,
                    city:city,
                    price:price
                },
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    var products = '';
                    var i =0;
                    data['products'].forEach(function(item){
                        if(item.transmission == null){
                            item.transmission = "";
                        }
                        products+='<div class="col-md-4 col-sm-6"><div class="product-item"><figure class="product-thumb"><a href="#"><img class="pri-img" src="'+base_url+'/'+item.image+'" alt="product"><img class="sec-img" src="'+base_url+'/'+item.image+'" alt="product"></a><div class="button-group"><a onclick="addtowishlist('+item.id+')" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a></div><div class="cart-hover"><a href="'+base_url+'/product/'+item.id+'" class="btn btn-cart">View</a></div></figure><div class="product-caption text-center"><div class="product-identity"><p class="manufacturer-name"><a href="#">'+item.transmission+'</a></p></div><h6 class="product-name"><a href="#">'+item.name+'<span class="price-old">('+item.year+')</span></a></h6><div class="price-box"><span class="price-regular">Rs. '+data['price'][i]+'</span></div></div></div><div class="product-list-item"><figure class="product-thumb"><a href="#"><img class="pri-img" src="'+base_url+'/'+item.image+'" alt="product"><img class="sec-img" src="'+base_url+'/'+item.image+'" alt="product"></a><div class="button-group"><a onclick="addtowishlist('+item.id+')" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a></div><div class="cart-hover"><a href="'+base_url+'/product/'+item.id+'" class="btn btn-cart">View</a></div></figure><div class="product-content-list"><div class="manufacturer-name"><a href="#">'+item.transmission+'</a></div><h5 class="product-name"><a href="#">'+item.name+'<span class="price-old">('+item.year+')</span></a></a></h5><div class="price-box"><span class="price-regular">Rs. '+data['price'][i]+'</span></div><p>'+item.description+'</p></div></div></div>';
                            i++;
                    });
                    $('#products').html(products);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log("Error retrieving records!");
                }
            });
        }
        
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
                    $('#message').removeAttr('hidden');
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log("Error");
                }
            });
        }

    </script>
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <!-- slick Slider JS -->
    <script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
    <!-- Countdown JS -->
    <script src="{{ asset('assets/js/plugins/countdown.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
    <!-- jquery UI JS -->
    <script src="{{ asset('assets/js/plugins/jqueryui.min.js') }}"></script>
    <!-- Image zoom JS -->
    <script src="{{ asset('assets/js/plugins/image-zoom.min.js') }}"></script>
    <!-- Imagesloaded JS -->
    <script src="{{ asset('assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Instagram feed JS -->
    <script src="{{ asset('assets/js/plugins/instagramfeed.min.js') }}"></script>
    <!-- mailchimp active js -->
    <script src="{{ asset('assets/js/plugins/ajaxchimp.js') }}"></script>
    <!-- contact form dynamic js -->
    <script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8"></script>
    <!-- google map active js -->
    <script src="{{ asset('assets/js/plugins/google-map.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>