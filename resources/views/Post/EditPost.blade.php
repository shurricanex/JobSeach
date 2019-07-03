@extends('app.head')
@section('content')
    <div style="margin-top: 100px" class="container">
        <div class="container">
             <h3  class="btn btn-default  bg-light"> <a href="/joblist">Back </a></h3>

            <h1>Edit  a Post of job.</h1>
            {!! Form::open(['action'=>['PostController@update', $editPost->PID], 'Method'=>'POST']) !!}
                <div class="form-group">
                    {!! Form::label('tittle', 'Position') !!}
                    {!! Form::text('Position', $editPost->position, ['class'=>'form-control', 'placeholder'=>'position of job']) !!}
                </div>
                <div class="form-group">
                        {!! Form::label('jobtype', 'Job type') !!}
                        {!! Form::text('Job_type', $editPost->Job_type, ['class'=>'form-control', 'placeholder'=>'Full time or part time']) !!}
                </div>
                <div class="form-group">
                        {!! Form::label('Description', 'Description of Job') !!}
                        {!! Form::textarea('Description', $editPost->description_job, ['class'=>'form-control', 'placeholder'=>'Write your descriPtion of job here!!']) !!}
                </div>
                <div class="form-group">
                        {!! Form::label('location', 'Location of job') !!}
                        {!! Form::text('location', $editPost->location, ['class'=>'form-control', 'placeholder'=>'Where is the location of job?']) !!}
                </div>

                <div class="form-group">
                        {!! Form::label('Contact', 'Contact number or email') !!}
                        {!! Form::text('contact', $editPost->contact_num, ['class'=>'form-control', 'placeholder'=>'Contact number or email']) !!}
                </div>

                {!! Form::hidden('_method','PUT') !!}
                {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
            </div>
    </div>
@endsection
