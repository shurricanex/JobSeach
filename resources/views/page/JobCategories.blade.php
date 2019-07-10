@extends('app.head')

@section('content')
{{-- @extends('app.navbar') --}}
<div class="container bg-light p4 mt-5">
    <form action="/search2" method="get">
        <table class=" btn_cata" >
            <tr >
                <td><a class="h1 text-success">Job Category</a></td>
                 <td></td>
            </tr>
            <tr>
                <td ><input class="btn btn-light" type="submit" name="search" id="" value="account"> </td>
                <td><input  class="btn btn-light" type="submit" name="search" id="" value="engineer"></td>
            </tr>
            <tr>
                <td> <input class="btn btn-light" type="submit" name="search" id="" value="teacher"></td>
                <td> <input class="btn btn-light" type="submit" name="search" id="" value="project manager">
                   
               
            </tr> 
        </table> 
    </form> 
    <h1>All Job in Category</h1>

    </div>
  <div>
  <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" >
		<div class="container mt-3">
			<div class="row">
			{{--                        fetch data --}}
			   @if(count($posts)>0)
				   @foreach ($posts as $post)
					<div class="col-xl-6 float-left mt-4">
						<!-- <div class="col-xl-12 list_box">
							<div class="col-xl-12 ">
								   {{-- <a href="/posts/{{$post->PID}}"> {{$post->position}}</a> --}}
								   {{-- <p class="h3">{{$post->position}}</p> --}}
								   <p>write on {{$post->created_at}}</p> -->
						<div class="col-xl-12 list_box border border-warning">
							<div class="col-xl-12 ">
                                   <a href="/posts/{{$post->PID}}" class="h2 text-primary"> {{$post->position}}</a><br>
                                   {{-- <small class="text-secondary" style="font-size:11px">post : {{$post->created_at}} </small> --}}
                                   <small> Type of job : {{$post->Job_type}} <br>
                                        Location : {{$post->location}}</small>
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
