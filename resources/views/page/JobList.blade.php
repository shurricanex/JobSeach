@extends('app.head')
@section('content')
<div style="margin-top: 100px" class="container">
        <div class="container">
			<div class="row ">
				<div class="col-md-2 col-2 "></div>
				<div class=" col-sm-6  col-12 mt-4 mb-2">
					<input class="form-control float-left  " type="search" placeholder="Input your interesting job" aria-label="Search">
				</div>
				<div class=" col-sm-2  col-12 mt-4 mb-0">
					<!-- <a href="#" class="btn btn-success float-left" type="submit">Search</a> -->
                    <button class=" btn btn-success  iphone_input " type="submit">Search</button> <br><br>
                    <h1 class=" btn btn-success"> <a href="/posts/create"> Create </a></h1>
                </div>
            </div>
			<div>
</div>
<div>
{{--    display data--}}
	<!--	my design you can add more the laravel code because i don't know some code will do -->
	
		<div class="container mt-3">
			<div class="row">
			{{--                        fetch data --}}
			   @if(count($posts)>0)
				   @foreach ($posts as $post)
					<!-- <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" > -->
						<div class="col-xl-6 float-left mt-4">
							<div class="col-xl-12 list_box"  data-toggle="modal" data-target=".bd-example-modal-lg" >
								<div class="col-xl-2 float-left">
									<img src="../../../public/img/AIALogo.JPG">
								</div>
								<div class="col-xl-10 float-left">
									<a href="/posts/{{$post->PID}}"> {{$post->position}}</a>
									<p>write on {{$post->created_at}}</p>
								</div>
							</div>
						</div>
					<!-- </a> -->
				   @endforeach
			   @else
				   <p> Job not found</p>
			   @endif
							
					
			</div>
		</div>

<!--		end of my design-->
	
<!--
     <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" >
         <div class="col-xl-6 col-md-6 col-12">
            <div class="div2 p-2 mb-3 mx-auto">
                <div class="row">
                    <div class="col-3 ">
                        <img src="">
                    </div>
                    <div class="col-9">
{{--                        fetch data --}}
                        @if(count($posts)>0)
                            @foreach ($posts as $post)
                                <div class="well">
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
         </div>
     </a>
-->
{{--    end display data--}}
</div>
<div class="container slide">
<div class="row" id="jobcategory"></div>
<div class="row" id="accounting"></div>
<div class="row" id="education"></div>
</div>

<div class=" box modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title " id="mine"> </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="text-center">
<h2>Please read carefully about the job detail <span class="text-info h1">!</span></h2>
</div>
<div class="p-3 m-2 bg-success text-white h5">Company description</div>
<div class="mx-2  text-justify">${des}</div>
<div class="p-3 m-2 bg-success text-white h5">Announcement Position</div>
<div class="text-success h5 mx-2">${position} <hr></div>
<div class="mx-2"><i class="fas fa-map-marker-alt"></i> Location: ${location}</div>
<div class="mx-2"><i class="far fa-calendar-alt"></i> Schedule: Full time</div>
<div class="mx-2"><i class="fas fa-dollar-sign"></i> Salary: N/A</div>
<div class="text-success h6 mx-2">Resposibilities</div>
<div>
<ul>
<li>Lead and manage team and accounting staff, including selection/hiring, objective setting, performance management, coaching and training.</li>
<li>Responsible for the monthly close as well as maintenance of all accounting ledgers including monthly review of all account reconciliations and journal entries.</li>
<li>Manage company tax declaration such as monthly tax return, personal tax on salary, withholding tax, VAT and deal with tax government officer.</li>
</ul>
</div>
<div class="text-success h6 mx-2">Requirements</div>
<div>
<ul>
<li>Bachelor degree or Master degree in Accounting or Finance.</li>
<li>At least three years experiences with accounting and financial field.</li>
<li>Strong supervisory, organizational skills and computer skills.</li>
<li>Must be PC proficient and have strong experience with Quick Books & Microsoft Office</li>
</ul>
</div>
<div class="text-success h5 mx-2">Application Informations <hr></div>
<div class="mx-2">
Interested candidate, Please submit you CV and Covering Letter with stating your expected salary via Email or office address below. Only shortlist candidates will be notified and contacted by phone for interview. The documents reveived will not be returned.
<br><br>Benefits and Condition <br><br>
<ul>
<li>Working Time 8:00 ~ 17:30, Lunch break: 12:00 ~ 13:30  </li>
<li>Working Days Monday ~ Friday, Saturday: Half day  </li>
<li>Holiday: Legal holiday  </li>
<li>Salary increasing & Bonus base on performance.  </li>
<li>Annual and Sick Leave: We follow by labor law in Cambodia  </li>
<li>Insurance: Hospital - Surgical Insurance and Personal Accident 24 hours Insurance</li>
</ul>
</div>
<div class="text-success h5 mx-2">Contact Information <hr></div>
<div class="mx-2">
THE GREAT DUKE HOTEL, 2nd Floor Regency Complex C, Unit No C2/6, Preah Monivong Blvd, Sangkat Tomnoub Teouk, Khan Chamkarmon, Phnom Penh
<div class="my-1">
<span class="h6 text-success">Contact <br></span>
<i class="far fa-building"></i> Nippon Express (Cambodia)Co.,Ltd
</div>
<div class="my-1">
<span class="h6 text-success">Phone <br></span>
<i class="fas fa-phone"></i> (+855) 010 896 863 <br>
<i class="fas fa-phone"></i> (+855) 085 766 180
</div>
<div my-1>
<span class="h6 text-success">Email <br></span>
<i class="fas fa-envelope"></i> dara.vivork@gmail.com
</div>
<div class="modal-footer">

</div>
</div>
</div>
</div>
</div>
</div>
@endsection
