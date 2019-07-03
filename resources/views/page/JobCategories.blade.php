@extends('app.head')

@section('content')
{{-- @extends('app.navbar') --}}
<div class="container job_ca">
<table class="table table-hover">
    <tr>
        <td><a class="h1 text-success">Job Category</a></td>
        <td></td>
    </tr>
    <tr>
        <td><a href="#"  class="h4" id="account">Accounting</a></td>
        <td><a href="#" class="h4" id="educat">Education Job</a></td>
    </tr>
    <tr>
        <td><a href="#" class="h4">Advisory</a></td>
        <td><a href="#" class="h4">Advocacy</a></td>
    </tr>
    <tr>
        <td><a href="#" class="h4">Engineer</a></td>
        <td><a href="#" class="h4">Manager</a></td>
    </tr>
</table>
    <h1>This is Category  pages</h1>
    <p>this is page of category of job</p>
</div>

@endsection
