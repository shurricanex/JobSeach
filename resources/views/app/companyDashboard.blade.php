@extends('app.head')
@extends('app.navbar')
@section('content')
<div style="height: 100px"></div>
<div class="container">
    <div class="content">

        <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
{{--            <div class="containerpic">--}}
            <label for="file">

                <img id="pic" src="{{asset('img/AIALogo.JPG')}}" height="100px" width="100px" alt="pictoupload">

            </label>
            <input type="file" name="file" id="file" onchange="readURL(this);" style="display: none">
{{--                <div class="imgOverlay"></div>--}}
            <input type="submit" class="uploadButton" value="upload" id ="upload" name="submit">
{{--    </div>--}}
{{--            <input type="hidden" value="{{ csrf_token() }}" name="_token">--}}
        </form>

    </div>
{{--    <img src="{{asset('img/AIALogo.JPG')}}" height="100px" width="100px" >--}}
</div>
<div class="panel panel-default">
<a href="/post/create">Post Job</a>
@if(count($posts)>0)
<table class="table table-striped">

    <tr>
        <th>Job Title</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($posts as $post )
    <tr>

        <td>{{$post->position}}</td>
        <td><a href="/posts/{{$post->PID}}/edit" class="btn btn-default"></a></td>
        <td></td>

    </tr>
    @endforeach
</table>
</div>
@else
    <p>You have no post</p>
    @endif
</div>

@endsection


