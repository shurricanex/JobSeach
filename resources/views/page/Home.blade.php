@extends('app.head')

@extends('app.navbar')
@section('content')
<!-- first-section -->
<div class="site-blocks-cover overlay aos-init aos-animate" style="background-image: url('img/work5.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100%;" data-aos="fade" data-stellar-background-ratio="0.5">

<div class="container" >
        <div class="row align-items-center">
            <div class="col-12" data-aos="fade">

                <div style="text-align: center; margin-top: -5em; mvargin-left:5em;">
                        <h1 class="text-light"> <span class="h1">Find an awesome Job!</span></h1>
                         <h5  id="grad"><b>Our website provides you the information about the job offers.</b></h5>
                       <div style="height:3em"></div>
                               <div class="row" >

                                              <div class="col-xl-3 col-md-6 col-12 mb-3 mr-0">
                                                  <form action="/search" method="get">
                                                   <input class="form-control iphone_input shadow" type="search " placeholder="Input the major name" aria-label="Search" name="search" >
                                               </div>
                                                     <div class="col-xl-3 col-md-6 col-12 mb-3">
                                                           <select name="catagories" class="form-control iphone_input2 shadow" >
                                                                  <option value="accounting">Accouting</option>
                                                                         <option value="it">Information Technology</option>
                                                                         <option value="it">Accountant</option>
                                                                         <option value="it">Electrician</option>
                                                                         <option value="it">Software Engineer</option>
                                                                         <option value="it">Mobile Developer</option>
                                                                         <option value="it">Web Developer</option>
                                                                         <option value="it">Teacher</option>
                                                                         <option value="it">Lawyer</option>
                                                                         <option value="it">Cahier</option>

                                                             </select></div>
                                                             <div class="col-xl-3 col-md-6 col-12 mb-3 ">
                                                                  <select name="location" class="form-control iphone_input2 shadow">
                                                                         <option value="accounting">Kampot</option>
                                                                                 <option value="it">Phnom Penh</option>
                                                                                 <option value="it">Pursat</option>
                                                                                 <option value="it">Kandal</option>
                                                                                 <option value="it">Poipet</option>
                                                                                 <option value="it">Svay Rieng</option>
                                                                                 <option value="it">Koh Kong</option>
                                                                                 <option value="it">Battam Bang</option>
                                                                                 <option value="it">Kompong Cham</option>
                                                                                 <option value="it">Kompong Chhnang</option>
                                                                    </select></div>

                                                                  <div class="col-xl-2 col-md-6 col-12   ">
                                                                          <button class=" btn btn-success btn-block iphone_input2 shadow" type="submit">Search</button></div>
                                               </form>
                               </div>


                   </div>

              </div>

          </div>
    <div class="scroll-down"></div>
       </div>
</div>
<!-- end of first section -->

<!-- second section -->
<div class="site-section">
<div class="container">
<h3 class="text-info" style="text-align: center;margin: 50px">Popular Catagories</h3>
<div class="row">
<div class=" mx-auto">
<div class="col-xl-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="100">

    <a  class="btn myHover btn2" id="educat"><span><img src="img/engineer.png" class="img3" ></span><br><br> Engineering</a>

</div>
</div>
<div class=" mx-auto">
<div class="col-xl-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                <a  class="btn myHover btn2" id="account"><span><img src="img/acc.jpg" class="img3" ></span><br><br> Accounting</a>
            </div>
            </div>
            <div class=" mx-auto">
            <div class="col-xl-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                <a href="#" class="btn myHover btn2"><span><img src="img/it.jpg" class="img3"></span><br><br> Information Technology</a>
            </div>
            </div>
            <div class=" mx-auto">
            <div class="col-xl-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                <a href="#" class="btn myHover btn2"><span><img src="img/design.png" class="img3"></span><br><br> Designer</a>
            </div>
            </div>

</div></div></div>
{{--section for job data--}}
<div>
{{--    display data--}}
	<!--	my design you can add more the laravel code because i don't know some code will do -->
	 <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" >
		<div class="container mt-3">
			<div class="row">
			{{--                        fetch data --}}
			   @if(count($posts)>0)
				   @foreach ($posts as $post)
					<div class="col-xl-6 float-left mt-4">
						<div class="col-xl-12 list_box">
							<div class="col-xl-2 float-left">
                        		<img src="../../../public/img/AIALogo.JPG">
                   			 </div>
							<div class="col-xl-10 float-left">
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
     <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" >
         <div class="col-xl-6 col-md-6 col-12">
             @if(count($posts)>0)
                @foreach ($posts as $post)
                    <div class="div2 p-2 mb-3 mx-auto">
                        <div class="row">
                            <div class="col-3 ">
                                <img src="">
                            </div>
                            <div class="col-9">
                                <div class="well">
                                    <h3> <a href="/posts/{{$post->PID}}"> {{$post->position}}</a></h3>
                                    <p>write on {{$post->created_at}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                 @endforeach
            @else
                <p> Job not found</p>
            @endif
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
<div style="height: 450px;"></div>

<footer class="site-footer">
<div class="container">


  <div class="row">
    <div class="col-md-4">
      <h3 class="footer-heading mb-4 text-white">About</h3>
      <p>We are from department of information and Communication Engineering. <br>
         We are in Year IV and This is our Project of Internet Programming Subject.
    </p>
      <!-- <p><a href="#" class="btn btn-primary pill text-white px-4">Read More</a></p> -->
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-6">
          <h3 class="footer-heading mb-4 text-white">Contact Us</h3>
          <p>Russian Conf. Bvld.Pnhom Penh
            Tel:086 25 85 30<br>
            Fax: <br>
            Email:
          </p>

        </div>
        <!-- <div class="col-md-6">
          <h3 class="footer-heading mb-4 text-white">Categories</h3>
            <ul class="list-unstyled">
              <li><a href="#">Full Time</a></li>
              <li><a href="#">Freelance</a></li>
              <li><a href="#">Temporary</a></li>
              <li><a href="#">Internship</a></li>
            </ul>
        </div> -->
      </div>
    </div>


    <div class="col-md-2">
      <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
        <div class="col-md-12">

            <a href="https://www.facebook.com/Rokangea-387912198668175/?modal=admin_todo_tour" class="pb-2 pr-2 pl-0 icon-facebook"></a>
            <a href="https://twitter.com/rokangea" class="p-2 icon-twitter"></a>
            <a href="https://www.instagram.com/shootingstarteam/" class="p-2 icon-instagram"></a>
            <a href="#" class="p-2 icon-vimeo"></a>


        </div>
    </div>
  </div>

</div>
</footer>

</script>
<div id="hello"></div>
 <script src="filejs/index.js"></script>
<!-- <script>
$(document).ready(function(){
$('#bar').click(function(){
//			var sub_nav=$('.sub_nav');
    $('.sub_nav').toggle();
//			alert();
});
});


</script> -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>

@endsection
