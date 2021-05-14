<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.links')
  <style>
    body {
            background-color: #eeeeee;
        }

        .h7 {
            font-size: 0.8rem;
        }

        .gedf-wrapper {
            margin-top: 0.97rem;
        }

        @media (min-width: 992px) {
            .gedf-main {
                padding-left: 4rem;
                padding-right: 4rem;
            }
            .gedf-card {
                margin-bottom: 2.77rem;
            }
        }

        /**Reset Bootstrap*/
        .dropdown-toggle::after {
            content: none;
            display: none;
        }

        .card-body img{
          height:auto;
          width: 230px;
        }
  </style>
</head>
<body>
    
    <!-- Header -->
    
    @include('includes.header')
    
        
     <nav class="navbar navbar-light bg-white">
        <a href="#" class="navbar-brand">Buyers Requests</a>
    </nav>


    <div class="container-fluid gedf-wrapper">
        <div class="row">
            
            <div class="col-md-12 gedf-main">

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">

                @if(Session::has('message'))
                    <div>
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    </div>
                @endif
                <!-- Post /////-->
                
                <!--- \\\\\\\Post-->
                @foreach($requests as $request)
                <div class="card">
                  <div class="card-header">
                    <h5>{{$request->name}} ({{$request->type}})</h5>
                  </div>
                  <div class="card-body">
                        <div class="row">
                            <div class="col-md-9"> 
                                <h5 class='card-title'><a href='#'>{{$request->name}}</a></h5>
                                <h5 class='card-subtitle mb-2 text-muted'>{{$request->type}}</h5>
                      
                                <dl>
                                    <dt class="">Posted By</dt>
                                    <dd class="">{{$request->user->name}}</dd>
                                    <dt class="">Contact</dt>
                                    <dd class="">{{$request->user->phone_number}}</dd>
                                    <dt class="">City</dt>
                                    <dd class="">{{ $request->city }}</dd>
                                    <dt class="">Posted at</dt>
                                    <dd class="">{{$request->created_at->diffforhumans()}}</dd>
                                    <dt class="">Budget</dt>
                                    <dd class="">{{$request->budget}}</dd>
                                    <p class="card-text">{{$request->description}}</p>
                                </dl>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                     <div class="card-header">
                                         <h5>Posted by</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="card mb-4 bg-light text-center">
                                <img class="" src="https://icon-library.net/images/avatar-icon-png/avatar-icon-png-8.jpg">
                                {{-- https://i.ytimg.com/vi/J4CGBddKEPM/maxresdefault.jpg --}}
                                {{-- https://scontent.fkhi12-1.fna.fbcdn.net/v/t1.0-9/15032646_1173436092741872_1004744158864431989_n.jpg?_nc_cat=104&_nc_oc=AQlf_i0o0n7S2Xt7QZxBUST42qA46MG59N_BoQASLECYMPyLBqBpZqrrITCkNiiAkkI&_nc_ht=scontent.fkhi12-1.fna&oh=7d676a451daefcf99ede0311e1915858&oe=5E62A2D5 --}}{{-- https://picsum.photos/230/230 --}}
                                <div class="card-body">
                                    <div>
                                        <h4 class="card-title">
                                            {{$request->user->name}}<br/>
                                        </h4>

                                        <p class="card-text">
                                            <small>
                                                <strong>Email:</strong> {{$request->user->email}}<br/>
                                                <strong>Contact:</strong> +92{{$request->user->phone_number}}<br/>
                                                <strong>Joined on: </strong>{{ $request->user->created_at }}
                                            </small>
                                        </p>

                                        <p class="card-text">

                                            <a href="#" class="btn btn-success btn-sm mb-1">Contact
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
                </div>
                <br><br>
                @endforeach
                <!-- Post /////-->
              </div>
            </div>
    </div>
</div>

<div class="text-center d-flex justify-content-center">
    {{ $requests->links() }}
</div>

    <br><br><br>
    <!-- Footer -->
    @include('includes.footer')


    

    @include('includes.scripts')

</body>
</html>