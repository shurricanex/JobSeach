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
        <td><a href="/search2"  class="h4" name="account" id="account">Accounting</a></td>
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
  <div>
      <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" >
          <div class="container mt-3">
              <div class="row">
                  {{--                        fetch data --}}
                  @if(count($posts)>0)
                      @foreach ($posts as $post)
                          <div class="col-xl-6 float-left mt-4">
                              <div class="col-xl-12 list_box border border-warning">
                                  <div class="col-xl-12 ">
                                      <a href="/posts/{{$post->PID}}"> {{$post->position}}</a>
                                      <p>write on {{$post->created_at}}</p>
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
      <!--		end of my design-->
  <!--
			   <div class="">
				   <div class="row">
					   <div class="col-9">
	{{--                        fetch data --}}
  @if(count($posts)>0)
      @foreach ($posts as $post)
          <div class="list_box">
              <h3> <a href="/posts/{{$post->PID}}"> {{$post->position}}</a></h3>
									   <p>write on {{$post->created_at}}</p>
								   </div>
							   @endforeach
  @else
      <p> Job not found</p>
@endif

      </div>

  </div>
</div>
-->
      <!--			</div>-->
      <!--    </a>-->
      <!--	</div>-->
  </div>
        </div>

@endsection
