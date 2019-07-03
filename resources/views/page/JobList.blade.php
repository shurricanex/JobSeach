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


<!--	my design you can add more the laravel code because i don't know some code will do -->
	 <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" >
		<div class="container mt-3">
			<div class="row">
			{{--                        fetch data --}}
			   @if(count($posts)>0)
				   @foreach ($posts as $post)
					<div class="col-xl-6 float-left mt-4">
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
