@extends('app.head')

@section('content')
{{-- @extends('app.navbar') --}}

<div class="container bg-light p4 mt-5">
<form action="/search3" method="get">
    <table class="btn_cata">
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
    </table>
</form>
<h3>All Job In All Place</h3>
</div>

<a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" >

		<div class="container mt-3">
			<div class="row">
			{{--  fetch data --}}

               @if(count($posts)>0)
               @foreach ($posts as $post)
               <div class="col-xl-6 float-left mt-4">
                   <div class="col-xl-12 list_box border border-warning">
                       <div class="col-xl-12 ">
                               <a href="/posts/{{$post->PID}}" class="h3 text-primary"> {{$post->position}}</a><br>
                               <small class="text-secondary" style="font-size:11px">post : {{$post->created_at}} </small>
                               <p>Location : {{$post->location}}</p>
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
