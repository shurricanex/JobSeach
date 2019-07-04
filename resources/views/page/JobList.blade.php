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
					<!-- <a href="#" class="btn btn-success float-left" type="submit">Search</a> -->
                    <button class=" btn btn-success  iphone_input " type="submit">Search</button> <br><br>
                    {{-- <h1 class=" btn btn-success"> <a href="/posts/create"> Create </a></h1> --}}
                </div>
            </div>

		</div>

{{--            display data--}}
		</div>
<!-- {{--            display data--}}
    {{--  <div class="row">
        <div class="col-xl-12">

            @if(count($posts)>0)
                 @foreach ($posts as $post)
                <div class="well">
                    <h3> <a href="/posts/{{$post->PID}}"> {{$post->position}}</a></h3>
                    <p>write on {{$post->created_at}}</p>
                </div>
           @endforeach
      @else

        <p> No post found</p>
      @endif
        </div>
     </div>  --}}


     </div>  --}} -->
<!--	my design you can add more the laravel code because i don't know some code will do -->
	 <a data-toggle="modal" data-target=".bd-example-modal-lg" >

<!--	my design you can add more the laravel code because i don't know some code will do -->
	 <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" >
		<div class="container mt-3">
			<div class="row">
			{{--                        fetch data --}}
			   @if(count($posts)>0)
				   @foreach ($posts as $post)
					<div class="col-xl-6 float-left mt-4">
						<div class="col-xl-12 list_box">
							<div class="col-xl-12 ">
								   <!-- <a href="/posts/{{$post->PID}}"> {{$post->position}}</a> -->
								   <p class="h3">{{$post->position}}</p>
								   <p>write on {{$post->created_at}}</p>


						<div class="col-xl-12 list_box border border-warning">
							<div class="col-xl-12 ">
								   <a href="/posts/{{$post->PID}}"> {{$post->position}}</a>
								   <p>write on {{$post->created_at}}</p>
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

	<!-- popup style -->
	@foreach($posts as $showPost)
		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Job Detail</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="text-center">
						<h2>Please read carefully about the job detail <span class="text-info h1">!</span></h2>
					</div>
					<div class="p-3 m-2 bg-success text-white h5">Company description</div>
					<div class="mx-2  text-justify">
						{{$showPost->description_job}}
					</div>
					<div class="p-3 m-2 bg-success text-white h5">Announcement Position</div>
					<div class="text-success h5 mx-2">{{$showPost->position}} <hr></div>
					<div class="mx-2"><i class="fas fa-map-marker-alt"></i> Location: {{$showPost->location}}</div>
					<div class="mx-2"><i class="far fa-calendar-alt"></i> Schedule: {{$showPost->Job_type}}</div>
					<div class="mx-2"><i class="fas fa-dollar-sign"></i> Salary: N/A</div>
					<div class="text-success h5 mx-2">Contact Information <hr></div>
					<div class="mx-2">
						<div class="my-1">
							<span class="h6 text-success">Phone <br></span>
							<i class="fas fa-phone"></i> {{$showPost->contact_num}} <br>
						</div>
						<div my-1>
							<span class="h6 text-success">Email <br></span>
							<i class="fas fa-envelope"></i> {{$showPost->email}}
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach


	</a>
<!--		end of my design-->
<!--
			   <div class="">
				   <div class="row">
					   <div class="col-9">
	{{--                        fetch data --}}
						   @if(count($posts)>0)
							   @foreach ($posts as $post)
								   <div class="list_box">
									   <h3> <a href="/posts/{{$post->PID}}"> {{$post->position}}</a></h3>
									   <p>write on {{$post->created_at}}</p>
								   </div>
							   @endforeach
						   @else
							   <p> Job not found</p>
						   @endif

					   </div>

				   </div>
			   </div>
-->
<!--			</div>-->
	<!--    </a>-->
<!--	</div>-->

</div>
<a href="/Post/attachfile" class="btn btn-success">APPLY</a>

@endsection
