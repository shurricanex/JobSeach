@extends('app.head')

@section('content')
{{-- @extends('app.navbar') --}}

<div class="container job_ca">
<form action="/search3" method="get">
    <table class="table table-hover">
        <tr>
            <td><a class="h1 text-success">Job Location</a></td>
            <td></td>
        </tr>
        <tr>
            <td><input class="btn btn-light" type="submit" name="search" id="" value="phnom penh"></td>
            <td><input class="btn btn-light" type="submit" name="search" id="" value="kampot"></td>
        </tr>
        <tr>
            <td><input class="btn btn-light" type="submit" name="search" id="" value="battambang"></td>
            <td><input class="btn btn-light" type="submit" name="search" id="" value="kampong cham"></td>
        </tr>
        <tr>
            <td><input class="btn btn-light" type="submit" name="search" id="" value="sihaknuk ville"></td>
            <td><input class="btn btn-light" type="submit" name="search" id="" value="kondal"></td>
        </tr>
        <tr>
            <td>	<a href="#"  class="h3" id="locationjob">All Places: </a></td>
        </tr>
    </table>
</form>
    
        <h1>This is Location   pages</h1>
        <p>this is page of Location of job</p>
</div>

<a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" >
		<div class="container mt-3">
			<div class="row">
			{{--                        fetch data --}}
			   @if(count($posts)>0)
				   @foreach ($posts as $post)
					<div class="col-xl-6 float-left mt-4">
						<div class="col-xl-12 list_box">
							<div class="col-xl-10 float-left">
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
@endsection
