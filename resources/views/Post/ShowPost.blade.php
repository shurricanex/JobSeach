@extends('app.head')
{{-- //@extends('app.navbar') --}}
@section('content')
    {{-- <div style="margin-top: 100px" class="container">

            <h3  class="btn btn-info"> <a href="/joblist">Back </a></h3>
            <h2> {{$showPost->position}}</h2>
            <small>{{$showPost->description_job}}</small>
            <p>Written on  {{$showPost->created_at}}</p>
            <hr>

		</div>
    </div> --}}
    <br>
    <div class="container">
            <h3  class="btn btn-default  bg-light"> <a href="/joblist">Back </a></h3>
    <div class="container bg-light " >
        <div class="text-center">
            <h2>Please read carefully about the job detail <span class="text-info h1">!</span></h2>
            </div>
            <div class="p-3 m-2 bg-success text-white h5">Company description</div>
            <div class="mx-2  text-justify">${des}</div>
            <div class="p-3 m-2 bg-success text-white h5">Announcement Position</div>
            <div class="text-success h5 mx-2">{{$showPost->position}}<hr></div>
            <div class="mx-2"><i class="fas fa-map-marker-alt"></i> Location: ${location}</div>
            <div class="mx-2"><i class="far fa-calendar-alt"></i> Schedule: Full time</div>
            <div class="mx-2"><i class="fas fa-dollar-sign"></i> Salary: N/A</div>
            <div class="text-success h6 mx-2">Resposibilities</div>
            <div class="text-success h6 mx-2">Requirements</div>
            <div class="text-success h5 mx-2">Application Informations <hr></div>
            <div class="mx-2">
            </div>
            <div class="text-success h5 mx-2">Contact Information <hr></div>
        @if(!Auth::guest())
            <a href="/posts/{{$showPost->PID}}/edit" class="btn btn-default bg-secondary">Edit</a>

            {!! Form::open(['action'=> ['PostController@destroy', $showPost->PID], 'method'=>'POST', 'class'=>'pull-right']) !!}

            {!! Form::hidden('_method', 'DELETE') !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
            {!! Form::close() !!}
            <br>
         @endif
        </div>
@endsection
