@extends('checkinglayout2')


<style>
  #RedPopup{
    display: none;
  }
</style>
@section('content')
<div id="RedPopup"> 
  <div  class="bg-image"style="background-image: url(https://mdbcdn.b-cdn.net/img/new/fluid/city/113.jpg);height: 100vh;">
    <div   style="background-color: rgba(0, 0, 0, 0.8)">
<div  class="container py-5 h-100" >
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card  shadow-2-strong" style="border-radius: 1rem; box-shadow: gray 0 0 20px;">
        <div class="card-body m-2 text-center">
      <h2 class="mb-3">Acoount is already created</h2>
      <h2 class="mb-3">With This email or Number</h2>
     <h4 class="mb-3">Please Try to Login</h4>
  <a class="btn btn-primary btn-lg btn-block" onclick="RedirectMe()" > Log in</a>
  <hr class="my-4" > 
</div>
</div>
</div> 
</div>
  </div>   
</div>
</div>
</div>


<div id="intro"class="bg-image" style=" background-image: url(https://mdbcdn.b-cdn.net/img/new/fluid/city/113.jpg);height: 100vh;">
      <div class="mask text-white" style="background-color: rgba(0, 0, 0, 0.8)">
        <div class="container  p-5 align-items-center  h-100">
          <div >
           <br><br><br><br> <br><h1>Login Page</h1><br> 
<form action="/loginsubmit" method="POST">
    @csrf
    <div class="form-group">
      <label for="email">Email address:</label><br><br>
      <input type="text" class="form-control "  style="box-shadow: gray 0 0 20px;" placeholder="Enter email" name="email" required><br>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label><br><br> 
      <input type="password" class="form-control"  style="box-shadow: gray 0 0 20px;" placeholder="Enter password" name="password"  required><br>
    </div>
    
    <button type="submit" id="userchecking" style="box-shadow: gray 0 0 20px;" class="btn btn-primary">Submit</button>
  </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
   
 <script>
  function RedirectMe(){
    window.location = '/';
  }
  

//   var userchecking = document.getElementById('userchecking');

//   userchecking.addEventListener('click',function(e){
//     e.preventDefault();
//     // console.log("working");
//     const _token = document.getElementsByName("_token")[0].value;
//     const  email = document.getElementsByName('email')[0];
//   const  password = document.getElementsByName('password')[0];

//   xhttp = new XMLHttpRequest();
//   xhttp.open("POST","/logindata",true);
//   xhttp.setRequestHeader("Content-Type", "application/json");
//   xhttp.setRequestHeader("X-CSRF-Token", _token);

//   xhttp.onreadystatechange = function(){
//     if (this.readyState == 4 && this.status == 200){
//       var apiresponse = JSON.parse(this.responseText);
//       // document.getElementById("intro").style.display = "none";
//       // if(apiresponse.status =="error"){
//       //   var error = document.getElementById('RedPopup');
//       //   error.style.display = "block";
//       // }else{
        
//       //   var error = document.getElementById('RedPopup');
//       //   error.style.display = "block";
        
        
//       }
//     }
  
//   var data = {
//   email:email.value,password:password.value };
// // console.log(data);
//   xhttp.send(JSON.stringify(data)); 

  // });
 </script>
 
@endsection