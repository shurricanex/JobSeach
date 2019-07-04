var config = {
    apiKey: "AIzaSyCFW9avzV_qt3W2cARcLhMkdA5msELW2hk",
    authDomain: "jobsearch-78f44.firebaseapp.com",
    databaseURL: "https://jobsearch-78f44.firebaseio.com",
    projectId: "jobsearch-78f44",
    storageBucket: "jobsearch-78f44.appspot.com",
    messagingSenderId: "920751215712"
  };
  firebase.initializeApp(config);
//   arrayObject = [];
    
//   function search (inputedString){
//         firebase.database().ref().child("Job").on("child_added" , snap=>{
//             // console.log(snap.val().position);
//            arrayObject.push(snap.val());
//            var i;
//            for( i=0;i<arrayObject.length; i++){
//             if(arrayObject.position.match(inputedString)){
//                 console.log(arrayObject.position.match(inputedString));
//             }
//            }
//            console.log(arrayObject)
//             console.log("You have fetched data.")
//         })
//  }
// search("Teacher");
// console.log(arrayObject.length);


//  function accountingShow(){
    //      root.on("child_added", snap=>{
        //        var acc=[];
        //      //  var index=[];
        //       acc.push(snap.val());
        //      if(snap.val().position=="Teacher"){
            //        $("#jobcategory").append(` <div class="col-xl-6 col-md-6 col-12">
            //        <div class="div2 p-2 mb-3 mx-auto">
            //            <div class="row">
            //                <div class="col-3 ">
            //                    <img src="${snap.val().img}">
            //                </div>
            //                <div class="col-9">
            //                    <a href="#">${snap.val().company}</a><br><span>${snap.val().position}</span>
            //                </div>
            //            </div>
            //        </div>
            //    </div>	 `)
            ////         console.log(acc);
            // }
            //    
            //    //   for(i=0;i<acc.length;i++){
                //    //     $("#jobcategory").append(` <div class="col-xl-6 col-md-6 col-12">
                //    //     <div class="div2 p-2 mb-3 mx-auto">
                //    //         <div class="row">
                //    //             <div class="col-3 ">
                //    //                 <img src="${snap.val("img")}">
                //    //             </div>
                //    //             <div class="col-9">
                //    //                 <a href="#">${snap.val("company")}</a><br><span>${snap.val("position")}</span>
                //    //             </div>
                //    //         </div>
                //    //     </div>
                //    // </div>	 `)
                //    //   }
                //     
                //       
                //      })
                //  }
                
                
                const root=firebase.database().ref().child("Job");


                (function(){
                    //   to display jobcatagery
                      root.on("child_added",snap=>{
                        //var allData=[];
                        $("#jobcategory").append(` <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" ><div class="col-xl-6 col-md-6 col-12">
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
                      })
                              //   to display only accounting job
                        root.on("child_added", snap=>{
                            
                            if(snap.val().position=="Accounting " || snap.val().position=="Various Positiion"){
                                $("#accounting").append(`  <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" ><div class="col-xl-6 col-md-6 col-12">
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
                                //display only advisory job
                                root.on("child_added", snap=>{
                                    var acc=[];
                                  //  var index=[];
                                   acc.push(snap.val());
                                  if(snap.val().position=="Various Positiion"){
                                      console.log(snap.val.position);
                                    $("#education").append(`  <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" ><div class="col-xl-6 col-md-6 col-12">
                                    <div class="div2 p-2 mb-3 mx-auto">
                                        <div class="row">
                                            <div class="col-3 ">
                                                <img src="${snap.val().img}">
                                            </div>
                                            <div class="col-9">
${snap.val().company}<br><span>${snap.val().position}</span>
                                            </div>
                                        </div>
                                    
                                </div>	 
                               </a> `)
                                     }
                                    })
                  }());
                
                
                //jquery code
                $(document).ready(function(){
                      $('#bar').click(function(){
                    		var sub_nav=$('.sub_nav');
                             $('.sub_nav').toggle();
                            });
                //			to hide accounting job
                            $('#accounting').hide();
                            $('#education').hide();
                
                            $('#account').click(function(){
                                $('#jobcategory').hide();
                                $('#education').hide();
                                $('#accounting').show();
                            });
                //			to display all job back
                            $('#alljob').click(function(){
                                $('#accounting').hide();
                                $('#education').hide();
                                $('#jobcategory').show();
                            });
                            //to diplay edu job
                            $('#educat').click(function(){
                                $('#accounting').hide();
                                $('#jobcategory').hide();
                                $('#education').show();
                            });
                    });