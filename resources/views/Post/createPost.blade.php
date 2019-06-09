@extends('app.head')
@section('content')
    <div style="margin-top: 100px" class="container">
        <div class="container">
            <h1>Create a new Post of job.</h1>
            {!! Form::open(['action'=>'PostController@store', 'Method'=>'POST']) !!}
                <div class="form-group">
                    {!! Form::label('tittle', 'Position') !!}
                    {!! Form::text('Position', '', ['class'=>'form-control', 'placeholder'=>'position of job']) !!}
                </div>
                <div class="form-group">
                        {!! Form::label('jobtype', 'Job type') !!}
                        {!! Form::text('Job_type', '', ['class'=>'form-control', 'placeholder'=>'What kind of job u chose?']) !!}
                </div>
                <div class="form-group">
                        {!! Form::label('Description', 'Description of Job') !!}
                        {!! Form::textarea('Description', '', ['class'=>'form-control', 'placeholder'=>'Write your descriPtion of job here!!']) !!}
                </div>
                <div class="form-group">
                        {!! Form::label('Contact', 'Contact number or email') !!}
                        {!! Form::text('contact', '', ['class'=>'form-control', 'placeholder'=>'Contact number or email']) !!}
                </div>
                {!! Form::submit('Create post', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
            </div>
    </div>
@endsection
