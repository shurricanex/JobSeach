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
					<!-- <a href="#" class="btn btn-success float-left" type="submit">Search</a> -->
                    <button class=" btn btn-success  iphone_input " type="submit">Search</button> <br><br>
                    {{-- <h1 class=" btn btn-success"> <a href="/posts/create"> Create </a></h1> --}}
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
		</div>
	</a>
<!--end of my design-->
</div>
@endsection
