@extends('app.head')

@section('content')
{{-- @extends('app.navbar') --}}
    <div style="margin-top: 100px" class="container">
        <h1>All Company </h1>
    </div>
    <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" >
        <div class="container mt-3">
            <div class="row">
            {{--fetch data --}}
                @if(count($company)>0)
                    @foreach ($company as $com)
                    <div class="col-xl-6 float-left mt-4">
                        <div class="col-xl-12 list_box border border-warning">
                            <div class="col-xl-12 ">
                                    <a href="#" class="h3 text-primary"> {{$com->Cname}}</a><br>
                                    <small class="text-secondary" style="font-size:11px">post : {{$com->created_at}} </small>
                                    <p>Location : {{$com->location}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p> Job not found</p>
                @endif
            </div>
        </div>
    </a>

@endsection
