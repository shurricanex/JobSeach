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
     <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" >
        <div class="col-xl-6 col-md-6 col-12">
            @if(count($posts)>0)
                @foreach ($posts as $post)
                    <div class="div2 p-2 mb-3 mx-auto">
                        <div class="row">
                            <div class="col-9">
                                <div class="well">
                                    <h3> <a href="/posts/{{$post->PID}}"> {{$post->position}}</a></h3>
                                    <p>write on {{$post->created_at}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
           @else
               <p> Job not found</p>
           @endif
        </div>
    </a>
</div>
@endsection
