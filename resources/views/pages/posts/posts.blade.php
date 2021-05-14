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
          height:400px;
          width: auto;
        }
  </style>
</head>
<body>
	
	<!-- Header -->
	
	@include('includes.header')
	
		
	 <nav class="navbar navbar-light bg-white">
        <a href="#" class="navbar-brand">Blog</a>
    </nav>


    <div class="container-fluid gedf-wrapper">
        <div class="row">
            
            <div class="col-md-9 gedf-main">

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">

                @if(Session::has('message'))
                    <div>
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    </div>
                @endif
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Create Post</a>
                            </li>
                        
                        </ul>
                    </div>
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                  <div class="form-group">
                                      <label for="title" class=" form-control-label">Title</label>
                                      <input class="form-control" type="text" name="title"><br>
                                      <label for="description"  class=" form-control-label">Description</label>
                                      <textarea name="description" class="form-control" id="message" rows="3" placeholder="Share or Ask anything?" required></textarea>
                                  </div>
                                  <div class="form-group"><label for="image" class=" form-control-label">Image</label>
                                  <input class="form-control" type="file" name="image">
                              </div>
                              </div>
                              
                          </div>
                          <div class="btn-toolbar justify-content-between">
                              <div class="btn-group">
                                  <button type="submit" class="btn btn-primary">share</button>
                              </div>
                              
                          </div>
                      </div>
                    </form>
                </div>

                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                @foreach($posts as $post)
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">{{$post->user->name}}</div>
                                    <div class="h7 text-muted">{{$post->user->email}}</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>{{$post->created_at->diffForHumans()}}</div>
                        @if($post->image)
                          <img src="{{URL::asset($post->image)}}">
                        @endif
                        <br><br>
                        <a class="card-link" href="#">
                            <h5 class="card-title">{{$post->title}}</h5>
                        </a>

                        <p class="card-text">
                            {{$post->description}}
                        </p>
                        
                        <br>

                        @if(count($post->comments)>0)
                        <br>
                        <div class="h5">Comments: </div>
                    <div class="card-text" style="border: 1px solid lightgrey; min-height:100px; padding: 1% 2%">
                          @foreach($post->comments as $comment)
                          <strong class="text-primary">{{ $comment->user->name }}:  </strong>
                          <p>{{$comment->comment}}</p>
                          <br>
                          @endforeach
                      </div>

                        @endif
                    </div>
                    <form action="{{ route('comment.store') }}" method="POST">
                      @csrf
                      <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">post</label>
                                    <textarea class="form-control" name="comment" id="message" rows="2" placeholder="Reply to {{$post->user->name}}'s Post"></textarea>
                                    <br>
                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                    <button type="submit" class="btn btn-primary card-link"><i class="fa fa-comment"></i> Reply</button>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                    </form>
                </div>
                @endforeach
                <!-- Post /////-->
                 
              
            </div>
            <div class="col-md-3">
                <div class="card gedf-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card gedf-card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
      {{ $posts->links() }}
    </div>
	<br><br><br>
	<!-- Footer -->
	@include('includes.footer')


	

	@include('includes.scripts')

</body>
</html>