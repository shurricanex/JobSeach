@extends('app.head')
@extends('app.companyDashboard')
@section('content')
    <div style="margin-top: 100px" class="container">

    <div class="container">
        <div class="content">

            <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                <div class="containerpic">
                    <label for="file">

                        <img id="pic" src="{{asset('img/AIALogo.JPG')}}" height="100px" width="100px" alt="pictoupload">

                    </label>
                    <input type="file" name="file" id="file" onchange="readURL(this);" style="display: none">
                    <div class="imgOverlay"></div>
                    <input type="submit" class="uploadButton" value="upload" id ="upload" name="submit">
                </div>
                {{--            <input type="hidden" value="{{ csrf_token() }}" name="_token">--}}
            </form>

        </div>
        {{--    <img src="{{asset('img/AIALogo.JPG')}}" height="100px" width="100px" >--}}
    </div>
        <div class="container">
                <h3  class="btn btn-default  bg-light"> <a href="/joblist">Back </a></h3>
            <h1>Create a new Post of job.</h1>
            {!! Form::open(['action'=>'PostController@store', 'Method'=>'POST']) !!}
                <div class="form-group">
                    {!! Form::label('tittle', 'Position') !!}
                    {!! Form::text('Position', '', ['class'=>'form-control', 'placeholder'=>'position of job']) !!}
                </div>
                <div class="form-group">
                        {!! Form::label('jobtype', 'Job type') !!}
                        {!! Form::text('Job_type', '', ['class'=>'form-control', 'placeholder'=>'Full time or part time']) !!}
                </div>
                <div class="form-group">
                        {!! Form::label('Description', 'Description of Job') !!}
                        {!! Form::textarea('Description', '', ['class'=>'form-control', 'placeholder'=>'Write your descriPtion of job here!!']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('location', 'Location of job ') !!}
                    {!! Form::text('location', '', ['class'=>'form-control', 'placeholder'=>'Write the place of job or location!!']) !!}
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
