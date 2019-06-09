@extends('app.head')
@section('content')
    <div style="margin-top: 100px" class="container">
        <div class="container">
			<div class="row ">
				<div class="col-md-2 col-2 "></div>
				<div class=" col-sm-6  col-12 mt-4 mb-2">
					<input class="form-control float-left  " type="search" placeholder="Input your interesting job" aria-label="Search">
				</div>
				<div class=" col-sm-2  col-12 mt-4 mb-0">
					<!-- <a href="#" class="btn btn-success float-left" type="submit">Search</a> -->
                    <button class=" btn btn-success  iphone_input " type="submit">Search</button> <br><br>

                    <h1 class=" btn btn-success"> <a href="/posts/create"> Create </a></h1>
                </div>
            </div>
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
    </div>
@endsection
