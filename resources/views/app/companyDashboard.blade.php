@extends('app.head')
@extends('app.navbar')
@section('content')
<br>
<div class="panel panel-default container">
<a href="/post/create">Post Job</a>
@if(count($posts)>0)
<table class="table table-striped">

    <tr>
        <th class="p-3 m-2 bg-success text-white h5"> Job Tittle</th>
        <th class="p-3 m-2 bg-success text-white h5"></th>
        <th class="p-3 m-2 bg-success text-white h5"></th>
    </tr>
    @foreach($posts as $post )
    <tr>
        <td> <a href="#"><br> {{$post->position}}</a> </td>
        <td><a href="/posts/{{$post->PID}}/edit" class="btn btn-default" style="margin-left: 90%">Edit</a></td>
        <td>
                {!! Form::open(['action'=> ['PostController@destroy', $post->PID], 'method'=>'POST', 'class'=>'pull-right']) !!}
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
        </td>

    </tr>
    @endforeach
</table>
</div>
@else
    <p>You have no post</p>
    @endif
</div>

@endsection


