var config = {
    apiKey: "AIzaSyCFW9avzV_qt3W2cARcLhMkdA5msELW2hk",
    authDomain: "jobsearch-78f44.firebaseapp.com",
    databaseURL: "https://jobsearch-78f44.firebaseio.com",
    projectId: "jobsearch-78f44",
    storageBucket: "jobsearch-78f44.appspot.com",
    messagingSenderId: "920751215712"
  };
  firebase.initializeApp(config);
  const root=firebase.database().ref().child("Job");
  
  (function(){
	//   to display all location
      root.on("child_added",snap=>{
        //var allData=[];
        $("#location1").append(`  <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" > <div class="col-xl-6 col-md-6 col-12">
        <div class="div2 p-2 mb-3 mx-auto shadow grow">
            <div class="row">
                <div class="col-3 ">
                    <img src="${snap.val().img}">
                </div>
                <div class="col-9">
                  ${snap.val().company}<br><span>${snap.val().location}</span>
                </div>
            </div>
        
    </div>	</a> `)
      })
	  		 // to display only pp
		root.on("child_added", snap=>{
			
			if(snap.val().location=="Phnom Penh" ){
				$("#p-p").append(`   <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" ><div class="col-xl-6 col-md-6 col-12">
				<div class="div2 p-2 mb-3 mx-auto shadow grow">
					<div class="row">
						<div class="col-3 ">
							<img src="${snap.val().img}">
						</div>
						<div class="col-9">
							${snap.val().company}<br><span>${snap.val().position}</span>
						</div>
					</div>
			
			</div>	 </a>`)
			}
		})
				//display only advisory job
				root.on("child_added", snap=>{
					var acc=[];
				  //  var index=[];
				   acc.push(snap.val());
				  if(snap.val().location=="kompot"){
					  console.log(snap.val.location);
					$("#kom").append(`   <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" ><div class="col-xl-6 col-md-6 col-12">
					<div class="div2 p-2 mb-3 mx-auto shadow grow">
						<div class="row">
							<div class="col-3 ">
								<img src="${snap.val().img}">
							</div>
							<div class="col-9">
								${snap.val().company}<br><span>${snap.val().position}</span>
							</div>
						</div>
					
				</div>	</a> `)
					 }
					})

					root.on("child_added", snap=>{
						var acc=[];
					  //  var index=[];
					   acc.push(snap.val());
					  if(snap.val().location=="Battambong"){
						  console.log(snap.val.location);
						$("#btb").append(`   <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" ><div class="col-xl-6 col-md-6 col-12">
						<div class="div2 p-2 mb-3 mx-auto shadow grow">
							<div class="row">
								<div class="col-3 ">
									<img src="${snap.val().img}">
								</div>
								<div class="col-9">
									${snap.val().company}<br><span>${snap.val().position}</span>
								</div>
							
						</div>
					</div></a>	 `)
						 }
						})
						root.on("child_added", snap=>{
							var acc=[];
						  //  var index=[];
						   acc.push(snap.val());
						  if(snap.val().location=="kompong cham"){
							  console.log(snap.val.location);
							$("#KPC").append(`   <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" ><div class="col-xl-6 col-md-6 col-12">
							<div class="div2 p-2 mb-3 mx-auto shadow grow">
								<div class="row">
									<div class="col-3 ">
										<img src="${snap.val().img}">
									</div>
									<div class="col-9">
										${snap.val().company}<br><span>${snap.val().position}</span>
									</div>
								</div>
							
						</div>	 </a>`)
							 }
							})
							root.on("child_added", snap=>{
								var acc=[];
							  //  var index=[];
							   acc.push(snap.val());
							  if(snap.val().location=="kompong som"){
								  console.log(snap.val.location);
								$("#KPS").append(`  <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" > <div class="col-xl-6 col-md-6 col-12">
								<div class="div2 p-2 mb-3 mx-auto shadow grow">
									<div class="row">
										<div class="col-3 ">
											<img src="${snap.val().img}">
										</div>
										<div class="col-9">
											${snap.val().company}<br><span>${snap.val().position}</span>
										</div>
									</div>
								
							</div>	 </a>`)
								 }
								})
								root.on("child_added", snap=>{
									var acc=[];
								  //  var index=[];
								   acc.push(snap.val());
								  if(snap.val().location=="Siem Reap"){
									  console.log(snap.val.location);
									$("#SR").append(`   <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" ><div class="col-xl-6 col-md-6 col-12">
									<div class="div2 p-2 mb-3 mx-auto shadow grow">
										<div class="row">
											<div class="col-3 ">
												<img src="${snap.val().img}">
											</div>
											<div class="col-9">
												${snap.val().company}<br><span>${snap.val().position}</span>
											</div>
										
									</div>
								</div>	 </a>`)
									 }
									})
						
  }());


//jquery code
$(document).ready(function(){
	// 		$('#bar').click(function(){
	// //			var sub_nav=$('.sub_nav');
	// 			$('.sub_nav').toggle();
	// 		});
//			to hide accounting job
			$('#p-p').hide();
			$('#kom').hide();
			$('#btb').hide();
			$('#KPC').hide();
			$('#KPS').hide();
			$('#SR').hide();
			
			

			$('#pp').click(function(){
				$('#p-p').show();
				$('#kom').hide();
				$('#btb').hide();
				$('#KPC').hide();
				$('#KPS').hide();
				$('#SR').hide();
				$('#location1').hide();
			
			});
//			to display all job back
			$('#kp').click(function(){
				$('#p-p').hide();
				$('#kom').show();
				$('#btb').hide();
				$('#KPC').hide();
				$('#KPS').hide();
				$('#SR').hide();
				$('#location1').hide();
			
			});
			//to diplay edu job
		
			$('#bat').click(function(){
				$('#p-p').hide();
				$('#kom').hide();
				$('#btb').show();
				$('#KPC').hide();
				$('#KPS').hide();
				$('#SR').hide();
				$('#location1').hide();
			
			});
			$('#kpc').click(function(){
				$('#p-p').hide();
				$('#kom').hide();
				$('#btb').hide();
				$('#KPC').show();
				$('#KPS').hide();
				$('#SR').hide();
				$('#location1').hide();
			
			});
			$('#kps').click(function(){
				$('#p-p').hide();
				$('#kom').hide();
				$('#btb').hide();
				$('#KPC').hide();
				$('#KPS').show();
				$('#SR').hide();
				$('#location1').hide();
			
			});
			$('#sr').click(function(){
				$('#p-p').hide();
				$('#kom').hide();
				$('#btb').hide();
				$('#KPC').hide();
				$('#KPS').hide();
				$('#SR').show();
				$('#location1').hide();
			
			});
	});
	