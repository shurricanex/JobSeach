@extends('app.head')

@section('content')
{{-- @extends('app.navbar') --}}

<div class="container job_ca">
    <table class="table table-hover">
        <tr>
            <td><a class="h1 text-success">Job Location</a></td>
            <td></td>
        </tr>
        <tr>
            <td><a href="#" class="h4" id="pp">Phnom Penh</a></td>
            <td><a href="#" class="h4" id="bat">Battambong</a></td>
        </tr>
        <tr>
            <td><a href="#" class="h4" id="kp">Kompot</a></td>
            <td><a href="#" class="h4">Kampong Cham</a></td>
        </tr>
        <tr>
            <td><a href="#" class="h4">Kompong Som</a></td>
            <td><a href="#" class="h4">Siem Reap</a></td>
        </tr>
        <tr>
            <td>	<a href="#"  class="h3" id="locationjob">All Places: </a></td>
        </tr>
    </table>
        <h1>This is Location   pages</h1>
        <p>this is page of Location of job</p>
</div>

@endsection
