<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@extends('app.head')
@section('content')
 <div style="margin-top: 100px" class="container">
        <div class="container">
            <form action="/search1" method="get" >
			<div class="row ">
				<div class="col-md-2 col-2 "></div>
                    <div class=" col-sm-6  col-12 mt-4 mb-2">
					<input class="form-control float-left  " name="search" type="search" placeholder="Input your interesting job" aria-label="Search">
                    </div>
				<div class=" col-sm-2  col-12 mt-4 mb-0">
                    <button class=" btn btn-success  iphone_input " type="submit">Search</button> <br><br>
                </div>
            </div>

		</div>

</div>
	 <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" >
		<div class="container mt-3">
			<div class="row">
			{{--fetch data --}}
			   @if(count($posts)>0)
				   @foreach ($posts as $post)
					<div class="col-xl-6 float-left mt-4">
						<!-- <div class="col-xl-12 list_box">
							<div class="col-xl-12 ">
								   <a href="/posts/[{{$post->PID}}, "HELLO" "> {{$post->position}}</a>
								   <p class="h3">{{$post->position}}</p>
								   <p>write on {{$post->created_at}}</p> -->
						<div class="col-xl-12 list_box border border-warning">
							<div class="col-xl-12 ">
                                   <a href="/posts/{{$post->PID}}" class="h2 text-primary"> {{$post->position}}</a><br>
                                   <small class="text-secondary" style="font-size:11px">post : {{$post->created_at}} </small>
                                   <p> Type of job : {{$post->Job_type}} <br>
                                          Location : {{$post->location}}</p>
								    <!-- <p>write on {{$post->created_at}}</p>   -->
							</div>
						</div>
					</div>
                   @endforeach

			   @else
				   <p> Job not found</p>
			   @endif
            </div>
            <br>
            {{$posts->links()}}
        </div>
    </a>
</div>
@endsection
