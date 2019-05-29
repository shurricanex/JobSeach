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
	//   to display jobcatagery
      root.on("child_added",snap=>{
        //var allData=[];
        $("#jobcategory").append(` <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" > <div class="col-xl-6 col-md-6 col-12">
        <div class="div2 p-2 mb-3 mx-auto shadow group">
            <div class="row">
                <div class="col-3 ">
                    <img src="${snap.val().img}">
                </div>
                <div class="col-9">
${snap.val().company}<br><span>${snap.val().position}</span>
                </div>
           
        </div>
		</div>	</a> 
		`)
      })
	  		//   to display only accounting job
		root.on("child_added", snap=>{
			
			if(snap.val().position=="Accounting " || snap.val().position=="Various Positiion"){
				$("#accounting").append(`  <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" ><div class="col-xl-6 col-md-6 col-12">
				<div class="div2 p-2 mb-3 mx-auto shadow group">
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
				//display only advisory job
				root.on("child_added", snap=>{
					var acc=[];
				  //  var index=[];
				   acc.push(snap.val());
				  if(snap.val().position=="Teacher"){
					  console.log(snap.val.position);
					$("#education").append(` <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" ><div class="col-xl-6 col-md-6 col-12">
					<div class="div2 p-2 mb-3 mx-auto ">
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
					  if(snap.val().position=="Various Positiion"){
						  console.log(snap.val.position);
						$("#add").append(`<a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" > <div class="col-xl-6 col-md-6 col-12">
						<div class="div2 p-2 mb-3 mx-auto">
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
						  if(snap.val().position=="Various Positiion"){
							  console.log(snap.val.position);
							$("#advocacy").append(` <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" ><div class="col-xl-6 col-md-6 col-12">
							<div class="div2 p-2 mb-3 mx-auto">
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
							  if(snap.val().position=="Various Positiion"){
								  console.log(snap.val.position);
								$("#engineer").append(` <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" ><div class="col-xl-6 col-md-6 col-12">
								<div class="div2 p-2 mb-3 mx-auto shadow group">
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
								  if(snap.val().position=="Various Positiion" || snap.val().position=="Manager"){
									  console.log(snap.val.position);
									$("#manager").append(` <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" ><div class="col-xl-6 col-md-6 col-12">
									<div class="div2 p-2 mb-3 mx-auto">
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

  }());


//jquery code
$(document).ready(function(){
			$('#bar').click(function(){
	//			var sub_nav=$('.sub_nav');
				$('.sub_nav').toggle();
			});
//			to hide accounting job
			$('#accounting').hide();
			$('#education').hide();
			$('#add').hide();
			$('#advocacy').hide();
			$('#engineer').hide();
			$('#manager').hide();

			$('#account').click(function(){
				$('#jobcategory').hide();
				$('#education').hide();
				$('#add').hide();
				$('#advocacy').hide();
				$('#engineer').hide();
				$('#manager').hide();
				$('#accounting').show();
			});
//			to display all job back
			$('#alljob').click(function(){
				$('#accounting').hide();
				$('#education').hide();
				$('#add').hide();
				$('#advocacy').hide();
				$('#engineer').hide();
				$('#manager').hide();
				$('#jobcategory').show();
			});
			//to diplay edu job
			$('#educat').click(function(){
				$('#accounting').hide();
				$('#jobcategory').hide();
				$('#add').hide();
				$('#advocacy').hide();
				$('#engineer').hide();
				$('#manager').hide();
				$('#education').show();
			});
			//ad job
			$('#ad').click(function(){
				$('#accounting').hide();
				$('#jobcategory').hide();
				$('#add').show();
				$('#advocacy').hide();
				$('#engineer').hide();
				$('#manager').hide();
				$('#education').hide();
			});
			//advocacy job
			$('#adv').click(function(){
				$('#accounting').hide();
				$('#jobcategory').hide();
				$('#add').hide();
				$('#advocacy').show();
				$('#engineer').hide();
				$('#manager').hide();
				$('#education').hide();
			});
			//engineer job
			$('#eng').click(function(){
				$('#accounting').hide();
				$('#jobcategory').hide();
				$('#add').hide();
				$('#advocacy').hide();
				$('#engineer').show();
				$('#manager').hide();
				$('#education').hide();
			});
			//manager job
			$('#mang').click(function(){
				$('#accounting').hide();
				$('#jobcategory').hide();
				$('#add').hide();
				$('#advocacy').hide();
				$('#engineer').hide();
				$('#manager').show();
				$('#education').hide();
			});

	});