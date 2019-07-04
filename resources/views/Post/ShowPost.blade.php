@extends('app.head')
{{-- //@extends('app.navbar') --}}
@section('content')
    <br>
    <div class="container">

    <div class="container bg-light "     >
        <h3  class="btn btn-default  bg-light" style="margin-left: 98%"> <a href="/joblist">X </a></h3>
        <div class="text-center">
            <h2>Please read carefully about the job detail <span class="text-info h1">!</span></h2>
            </div>
            <div class="p-3 m-2 bg-success text-white h5">Job description</div>
            <div class="mx-2  text-justify">{{$showPost->description_job}}</div>
            <div class="p-3 m-2 bg-success text-white h5">Announcement Position</div>
            <div class="text-success h5 mx-2">{{$showPost->position}}<hr></div>
            <div class="mx-2"><i class="fas fa-map-marker-alt"></i> Location: : {{$showPost->location}}</div>
            <div class="mx-2"><i class="far fa-calendar-alt"></i> Schedule:  {{$showPost->Job_type}} </div>
            <div class="mx-2"><i class="fas fa-dollar-sign"></i> Salary: N/A</div>
            <div class="mx-2">
            </div>
            <div class="text-success h5 mx-2">Contact Information</div>
            <div class="mx-2  text-justify">{{$showPost->contact_num}} <hr></div>

            {{--  Edit btn  --}}
            <a href="/posts/{{$showPost->PID}}/edit" class="btn btn-default bg-secondary">Edit</a>

            {{--  delete btn  --}}
            {!! Form::open(['action'=> ['PostController@destroy', $showPost->PID], 'method'=>'POST', 'class'=>'pull-right']) !!}
            {!! Form::hidden('_method', 'DELETE') !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
            {!! Form::close() !!}
            <br>
            <hr>

        </div>
@endsection
