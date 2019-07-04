<p>hello company</p>




    {{-- <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
       Upload Image<input type="file">
    </form> --}}


    <div class="container">
        <h3  class="btn btn-default  bg-light"> <a href="/joblist">Back </a></h3>
    <h1>Create a new Post of job.</h1>
    {!! Form::open(['action'=>'ComController@store', 'Method'=>'POST']) !!}
        <div class="form-group">
            {!! Form::label('Name', 'Company name') !!}
            {!! Form::text('Name', '', ['class'=>'form-control', 'placeholder'=>'  ']) !!}
        </div>
        <div class="form-group">
                {!! Form::label('Description', 'Description of Job') !!}
                {!! Form::textarea('Description', '', ['class'=>'form-control', 'placeholder'=>' ']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('location', 'Location of job ') !!}
            {!! Form::text('location', '', ['class'=>'form-control', 'placeholder'=>' ']) !!}
         </div>
        {{-- <div class="form-group">
                {!! Form::label('Contact', 'Contact number or email') !!}
                {!! Form::text('contact', '', ['class'=>'form-control', 'placeholder'=>'Contact number or email']) !!}
        </div> --}}
        {!! Form::submit('Create post', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
    </div>
</div>




