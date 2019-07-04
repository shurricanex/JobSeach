@extends('app.head')

@section('content')
{{-- @extends('app.navbar') --}}

    <div style="margin-top: 100px" class="container">
        <h1>This is Company  pages</h1>
        <p>this is page of company of job</p>
    </div>
    
    @if(count($company)>0)
    @foreach ($company as $com)
    <p> Type of job : {{$com->Cname}} <br>
        Location : {{$com->location}}</p>
        @endforeach
        @else
            <p> Job not found</p>
        @endif


@endsection
