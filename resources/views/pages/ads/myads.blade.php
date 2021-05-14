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
            		<h3>All Ads</h3>
            		<br><br><br>
            	</div>
                <div class="row">
             		<div class="col-md-12">
             			@if(Session::has('message'))
		                    <div>
		                        <p class="alert alert-info">{{ Session::get('message') }}</p>
		                    </div>
		                @endif
             			<table class="table table-striped">
						    <thead>
						      <tr>
						        <th>Name</th>
						        <th>Type</th>
						        <th>Year</th>
						        <th>City</th>
						        <th>Condition</th>
						        <th>Image</th>
						        <th>Price</th>
						        <th>Actions</th>
						      </tr>
						    </thead>
						    <tbody>
						    	@foreach ($ads as $ad)
						    		<tr>
								        <td>{{$ad->product->name}}</td>
								        <td>{{$ad->product->type}}</td>
								        <td>{{$ad->product->year}}</td>
								        <td>{{$ad->product->city}}</td>
								        <td>{{$ad->product->condition}}</td>
										 <td><img src="{{URL::asset($ad->product->image)}}" alt="image" height="auto" width="150px"></td>


								        <td>{{$ad->price}}</td>
								        <td>
                                                <a class="btn btn-primary" href="{{ route('ad.edit',$ad) }}" style="padding-left: 12px;padding-right: 30px;"><i class="fa fa-edit"></i> Edit
                                            </a>  
                                                <form action="{{ route('ad.destroy',$ad) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                
                                                {{-- <a class="btn btn-danger" href="{{ route('vehicle.destroy',$vehicle) }}" ><i class="fa fa-trash"></i> Delete
                                                </a>   --}}
                                                 
                                                <button class="btn btn-danger" type="submit">
                                                        <i class="fa fa-trash"></i> Delete
                                                </button>   
                                                </form>
                                            </td>
							        </tr>
						    	@endforeach
						    </tbody>
						  </table>

		             		<div class="d-flex justify-content-center">
						      {{ $ads->links() }}
						    </div>
						    <br><br><br>
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