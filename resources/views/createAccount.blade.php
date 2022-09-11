 
<style>
#header{
  display: block;
} 
        #RedPopup{
            display: none;
        }
        #GreenPopup{
            display: none;
        }
        .errorSpan{
            color:red;
            font-size:10px;
            margin:0px;
            font-weight: bold;
        }
        .errorInput{
            border:1px solid red;
        }
        .errorInput::-webkit-input-placeholder {
            color: red;
        }
        
</style>
 
<div id="GreenPopup"  > 
  <div  class="bg-image"style="background-image: url(https://mdbcdn.b-cdn.net/img/new/fluid/city/113.jpg);height: 100vh;">
    <div   style="background-color: rgba(0, 0, 0, 0.8)">
      <div class="GreenStatus container py-5 h-100"> 
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card  shadow-2-strong" style="border-radius: 1rem; box-shadow: gray 0 0 20px;">
        <div class="card-body p-5 text-center">
      <h2 class="mb-4"> Congratulations!!</h2>
      <h4 class="mb-4"> Your account is created</h4>
     <h4 class="mb-4">Log in here</h4>
  <a  onclick="RedirectMe()" class="btn btn-primary btn-lg btn-block">Log in</a>
  <hr class="my-4" > 
</div>
  </div>
</div>
</div>
</div>
  </div>
</div>
</div>

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
        @extends('checkinglayout2')
        @section('content')
        <div id="error"></div>
        <form id="form"> 
          @csrf 
         <div id="intro"class="bg-image"style="background-image: url(https://mdbcdn.b-cdn.net/img/new/fluid/city/113.jpg);height: 100vh;">
          <div  class="mask text-white" style="background-color: rgba(0, 0, 0, 0.8)">
            <div class="container  p-5 align-items-center  h-100">
          
            <div id="mainDiv"> 
              
              <h1>Create your Free Account</h1><br>
              <div class="form-group">
                  <label  for="email">Name:</label><br>
                  <input style="box-shadow: gray 0 0 10px;" type="text" class="form-control  " placeholder="Enter Name"    name="name" id="name"  required  >
                  <span class="errorSpan" id="nameSpan"></span>
                </div><br>
              <div class="form-group">
                <label for="email">Email address:</label><br>
                <input style="box-shadow: gray 0 0 10px;"  type="text" class="form-control" placeholder="Enter email" name="email" id="email" required  >
                <span class="errorSpan" id="emailSpan"></span>
              </div><br>
              <div class="form-group">
                <label for="">Password:</label><br>
                <input style="box-shadow: gray 0 0 10px;"  type="password" class="form-control" placeholder="Enter password" name="password" required  >
                <span class="errorSpan" id="passwordSpan"></span>
              </div><br>
             
              <div class="form-group"> 
                <label for="pwd">Select Gender:</label><br>
                
                  <select style="box-shadow: gray 0 0 10px;"  class="form-control" name="gender" id="search_categories"   aria-required="true" >
                    <option  selected value="" disabled>Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                  </select>
                </div><br>
                  <div class="form-group">
                <label for="">Phone:</label><br>
                <input style="box-shadow: gray 0 0 10px;"  type="phone" class="form-control" placeholder="Enter phone" name="phone"   required  >
                <span class="errorSpan" id="phoneSpan"></span>
              </div><br>
              
              <button type="submit" id="userRegistration" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>
            </form>
           
         
  </header>
 

 <script>
   function RedirectMe(){
    window.location= "/";
  }
const parentName = document.getElementsByName("name")[0];
const parentEmail = document.getElementsByName("email")[0];
const parentMobile = document.getElementsByName("phone")[0];
const emailSpan = document.getElementById('emailSpan');
const nameSpan = document.getElementById('nameSpan');
const phoneSpan = document.getElementById('phoneSpan');
function validateEmail(email){
    if(email == ""){
        emailSpan.innerText = "Your Email-id is required";
        parentEmail.classList.add("errorInput");
        return false;
    }else{
        if(!/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(email)){
            emailSpan.innerText = "Enter a valid emailid";
            parentEmail.classList.add("errorInput");
            return false;
        }
    }
    emailSpan.innerText = "";
    parentEmail.classList.remove("errorInput");
    return true;
}
//name validation
function validateName(name){
    if(name == ""){
        nameSpan.innerText = "Your Name is required";
        parentName.classList.add("errorInput");
        return false;
    }

    return true;
}
//phone validation
function validatePhone(phone){
    var phoneRegex = /^\d{10}$/;
    if(phone == ""){
        phoneSpan.innerText = "Your Mobile no. is required";
        parentMobile.classList.add("errorInput");
        return false;
    } else if (phone[0] == '0' || !phone.match(phoneRegex)) {
        phoneSpan.innerText = "Please enter valid 10 digit mobile number";
        parentMobile.classList.add("errorInput");
        return false;
    }

    return true;
}
// //age validation
// function validateAge(age){
//    if(age == -2){
//        ageSpan.innerText = "Baby's age is required";
//       babyAge.classList.add("errorInput");
//       return false;
//   }

//   return true;
    
// }

//email eventlisteners
parentEmail.addEventListener("focusout", function(){
    validateEmail(parentEmail.value);
});
parentEmail.addEventListener("keyup", function(){
    if(emailSpan.innerText != "" && validateEmail(parentEmail.value)){
        emailSpan.innerText = "";
        parentEmail.classList.remove("errorInput");
    }
});

//name eventlisteners
parentName.addEventListener("focusout", function(){
    validateName(parentName.value);
});
parentName.addEventListener("keyup", function(){
    if(nameSpan.innerText != "" && validateName(parentName.value)){
        nameSpan.innerText = "";
        parentName.classList.remove("errorInput");
    }
});

//mobile eventlisteners
parentMobile.addEventListener("focusout", function(){
    validatePhone(parentMobile.value);
});
parentMobile.addEventListener("keyup", function(){
    if(phoneSpan.innerText != "" && validatePhone(parentMobile.value)){
        phoneSpan.innerText = "";
        parentMobile.classList.remove("errorInput");
    }
});
 
  var userRegistration = document.getElementById('userRegistration');

 userRegistration.addEventListener('click',function(e){

 
 e.preventDefault();

 const _token = document.getElementsByName("_token")[0].value;
 const parantname = parentName;
 const parantemail = parentEmail;
 const password = document.getElementsByName("password")[0];
 const gender = document.getElementsByName("gender")[0];
 const parantphone = parentMobile;

 
if(parantname && parantemail && parantphone){ 
  xhttp = new XMLHttpRequest();
  xhttp.open("POST","/dataRegister",true);
  xhttp.setRequestHeader("Content-Type", "application/json");
  xhttp.setRequestHeader("X-CSRF-Token", _token);

  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
      var apiresponse = JSON.parse(this.responseText);
      document.getElementById("intro").style.display = "none";
      if(apiresponse.status =="error"){
        var error = document.getElementById('RedPopup');
        error.style.display = "block";
        var header = document.getElementById('header');
        header.style.display="none"
      }else{
        var success = document.getElementById('GreenPopup');
         success.style.display = "block";
          var header = document.getElementById('header');
        header.style.display="none";
      }
    }
  }
  var data = {name:parantname.value,
  email:parantemail.value,password:password.value, gender:gender.value, phone:parantphone.value};

  xhttp.send(JSON.stringify(data)); 

  }
});  
  </script> 
@endsection
 