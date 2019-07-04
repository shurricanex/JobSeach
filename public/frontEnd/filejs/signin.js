(function(){

    var config = {
        apiKey: "AIzaSyCFW9avzV_qt3W2cARcLhMkdA5msELW2hk",
        authDomain: "jobsearch-78f44.firebaseapp.com",
        databaseURL: "https://jobsearch-78f44.firebaseio.com",
        projectId: "jobsearch-78f44",
        storageBucket: "jobsearch-78f44.appspot.com",
        messagingSenderId: "920751215712"
      };
      firebase.initializeApp(config);

      //get element by ID
      const emailText=document.getElementById('email');
      const passText=document.getElementById('password');
      const loginBtn=document.getElementById('login');
      const sign_upBtn=document.getElementById('sign_up');

      loginBtn.addEventListener('click', e =>{
          const email=emailText.value;
          const pass=passText.value;
          const auth=firebase.auth();

         const pro= auth.signInWithEmailAndPassword(email, pass);
         pro.catch(e=>Console.log(e.massage));

      });

     /* sign_upBtn.addEventListener('click', e=>{
        const email=emailText.value;
        const pass=passText.value;
        const auth=firebase.auth();

       const pro= auth.createUserWithEmailAndPassword(email, pass);
       pro.catch(e=>Console.log(e.massage));

    });*/
  /* firebase.auth().onAuthStateChanged(firebaseUser =>{
        if(firebaseUser){
            console.log(firebaseUser); 
            alert("login success")
        }else{
            console.log("not match user");
            
        }
    });*/





}());

