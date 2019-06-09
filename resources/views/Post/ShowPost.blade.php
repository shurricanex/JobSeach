@extends('app.head')
{{-- //@extends('app.navbar') --}}
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
					<button class=" btn btn-success  iphone_input " type="submit">Search</button>
                </div>
            </div>
            <h3  class="btn btn-info"> <a href="/joblist">Back </a></h3>
            <h2> {{$showPost->position}}</h2>
            <small>{{$showPost->description_job}}</small>
            <p>Written on  {{$showPost->created_at}}</p>

		</div>
    </div>
@endsection
