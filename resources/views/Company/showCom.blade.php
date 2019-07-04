@extends('app.head')
{{-- //@extends('app.navbar') --}}
@section('content')

    <br><br><br>
    <div class="container" style="width: 50%">

         <div class="container bg-light ">
                <h4  class="btn btn-default  bg-light" style="margin-left: 95%"> <a href="/company">X</a></h4>
             <div class="text-center">
            <h2>{{$showPost->Cname}}</h2>
            </div>
            <div class="p-3 m-2 bg-success text-white h5">Company description</div>
            <div class="mx-2  text-justify">{{$showPost->C_description}}</div>
            <div class="p-3 m-2 bg-success text-white h5">Location of the company</div>
            <div class="mx-2"><i class="fas fa-map-marker-alt"></i> Location: : {{$showPost->location}}</div>
            <hr>
        </div>
@endsection
