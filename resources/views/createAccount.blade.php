 
<html lang="en">
<head>
</head>
<body>
  
 

@extends('checkinglayout2')

@section('content')
<div id="intro"class="bg-image"style="background-image: url(https://mdbcdn.b-cdn.net/img/new/fluid/city/113.jpg);height: 100vh;">
      <div class="mask text-white" style="background-color: rgba(0, 0, 0, 0.8)">
        <div class="container  p-5 align-items-center  h-100">
 
          <form action="/dataRegister" method="POST">
            @csrf 
             <h1>Create your Free Account</h1><br>
            <div id="mainDiv"> 
            
              <div class="form-group">
                  <label  for="email">Name:</label><br>
                  <input type="text" class="form-control  " placeholder="Enter Name"    name="name" id="name"    >
                  <span style="color:rgb(241, 18, 18)">@error('name'){{$message}}@enderror</span>
                </div><br>
              <div class="form-group">
                <label for="email">Email address:</label><br>
                <input type="text" class="form-control" placeholder="Enter email" name="email" id="email"   >
                <span style="color:rgb(233, 10, 10)">@error('email'){{$message}}@enderror</span>
              </div><br>
              <div class="form-group">
                <label for="">Password:</label><br>
                <input type="password" class="form-control" placeholder="Enter password" name="password" id=""   >
                <span style="color:rgb(255, 0, 0)">@error('password'){{$message}}@enderror</span>
              </div><br>
             
              <div class="form-group"> 
                <label for="pwd">Select Gender:</label><br>
                
                  <select class="form-control" name="gender" id="search_categories"    >
                    <option  selected value="" disabled>Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                  </select>
                </div><br>
                  <div class="form-group">
                <label for="">Phone:</label><br>
                <input type="phone" class="form-control" placeholder="Enter phone" name="phone" id="pwd" required  >
                <span style="color:rgb(255, 0, 0)">@error('phone'){{$message}}@enderror</span>
              </div><br>
              
              <button type="submit" id="userRegistration" class="btn btn-primary">Submit</button>
            </div>
            </form>

        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
 

{{-- <script>
  var userRegistration = document.getElementById('userRegistration');

 userRegistration.addEventListener('click',function(e){

  // $table = "Hello From Console";
  // console.log($table);
 e.preventDefault();

 const _token = document.getElementsByName("_token")[0].value;
 const name = document.getElementsByName("name")[0];
 const email = document.getElementsByName("email")[0];
 const password = document.getElementsByName("password")[0];
 const gender = document.getElementsByName("gender")[0];
 const phone = document.getElementsByName("phone")[0];

  xhttp = new XMLHttpRequest();
  xhttp.open("POST","/dataRegister",true);
  xhttp.setRequestHeader("Content-Type", "application/json");
  xhttp.setRequestHeader("X-CSRF-Token", _token);

  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
      var apiresponse = JSON.parse(this.responseText);
      if(apiresponse=="error"){
        console.log('success');
      }else{
        console.log('error');
      }
    }
  }
  var data = {
    name:name.value,
  email:email.value,password:password.value, gender:gender.value, phone:phone.value};

  // console.log(JSON.stringify(data))
  xhttp.send(JSON.stringify(data)); 

});  --}}
 {{-- </script>  --}}
@endsection
 </body>
 </html>