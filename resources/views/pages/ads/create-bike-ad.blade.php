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

            <div class="col-md-2"></div>
            <div class="col-md-8">
             <form method="POST" action="{{ route('ad.store') }}" enctype="multipart/form-data">
                @if(Session::has('message'))
                    <div>
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    </div>
                @endif
            @csrf
            <!-- Animated -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Post your Bike's Information</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Bike Name/Company/version</label><input type="text" name="name" id="vehicle_no" placeholder="Eg. Honda CD 70" class="form-control" required>
                            </div>
                            
                            <div class="form-group"><label for="select" class=" form-control-label">Select Bike's Model / Year</label>

                            <select name="year" id="select" class="form-control" required>
                                <option value="">Choose Model / Year</option>
                                @for ($i = 1990; $i < 2020; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            </div>

                            <div class="form-group">
                                <label for="mileage" class=" form-control-label">Mileage</label><input type ="number" name="mileage" id="mileage" placeholder="Enter Vehicle's Mileage in (KM)" class="form-control" required>
                            </div>


                            <div class="form-group"><label for="select" class=" form-control-label">Select City</label>

                            <select name="city" id="select" class="form-control" required>
                                <option value="">Choose your City</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->name}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                            </div>

                            <div class="form-group">
                                <label for="condition" class=" form-control-label">Condition</label>
                                <div class="form-check-inline">
                                  <label class="form-check-label" for="radio1">
                                    <input type="radio" class="form-check-input" id="radio1" name="condition" value="New" checked>New
                                  </label>
                                </div>
                                <div class="form-check-inline">
                                  <label class="form-check-label" for="radio2">
                                    <input type="radio" class="form-check-input" id="radio2" name="condition" value="Used">Used
                                  </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="featured" class=" form-control-label">Featured Ad</label>
                                <div class="form-check-inline">
                                  <label class="form-check-label" for="radio1">
                                    <input type="radio" class="form-check-input" id="radio1" name="featured" value="1" >Yes
                                  </label>
                                </div>
                                <div class="form-check-inline">
                                  <label class="form-check-label" for="radio2">
                                    <input type="radio" class="form-check-input" id="radio2" name="featured" value="0" checked>No
                                  </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="price" class=" form-control-label">Price</label><input type ="number" name="price" id="price" min="0" placeholder="Enter Price" class="form-control" required>
                            </div>

                            <div class="form-group"><label for="image" class=" form-control-label">Vehicle Image</label>
                                <input class="form-control" type="file" name="img" required>
                            </div>

                            <div class="form-group"><label for="details" class=" form-control-label">Enter Description</label>
                                <textarea name="description" id="details" rows="4" placeholder="Enter here..." class="form-control" required></textarea>
                            </div>

                            <div class="form-actions form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-md-2"></div>
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