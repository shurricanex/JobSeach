@extends('app.head')
{{-- //@extends('app.navbar') --}}
@section('content')
    <div style="margin-top: 100px">
        <h1>This is job list page</h1>
        <p>here is some example of the page</p>
        {{--  @if(count($posts)>0)
            @foreach ($posts as $post)
                <div class="well">
                <h3> {{$post->position}}</h3>
                <small>write on {{$post->created_at}}</small>
                </div>
           @endforeach
      @else
        <p> No post found</p>
      @endif  --}}
                


    </div>
@endsection
