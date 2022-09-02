 
<html lang="en">
    <head>
    </head>
    <body>
      
     
    
    @extends('editpageheader')
    
    @section('content')
    <div id="intro"class="bg-image"style="background-image: url(https://mdbcdn.b-cdn.net/img/new/fluid/city/113.jpg);height: 100vh;">
          <div class="mask text-white" style="background-color: rgba(0, 0, 0, 0.8)">
            <div class="container  p-5 align-items-center  h-100">
     
              <form action="{{ url('update-user/'.$user->id)}}" method="POST">
                @csrf 
                @method('PUT')
                 <h1>Edit Your Details</h1><br>
                <div id="mainDiv"> 
                
                  <div class="form-group">
                      <label  for="email">Name:</label><br>
                      <input type="text" class="form-control  "    value="{{$user->name}}"  name="name" id="name"    >
                      <span style="color:rgb(241, 18, 18)">@error('name'){{$message}}@enderror</span>
                    </div><br>
                  <div class="form-group">
                    <label for="email">Email address:</label><br>
                    <input type="text" class="form-control" value="{{$user->email}}"   name="email" id="email"   >
                    <span style="color:rgb(233, 10, 10)">@error('email'){{$message}}@enderror</span>
                  </div><br>
                  {{-- <div class="form-group">
                    <label for="">Password:</label><br>
                    <input type="password" class="form-control" placeholder="Enter password" name="password" id=""   >
                    <span style="color:rgb(255, 0, 0)">@error('password'){{$message}}@enderror</span>
                  </div><br> --}}
                 
                  <div class="form-group"> 
                    <label for="pwd">Select Gender:</label><br>
                    
                      <select class="form-control" name="gender" value="{{$user->gender}}"   id="search_categories"    >
                        <option  selected value=""  value="{{$user->gender}}" disabled>Select Gender</option>
                          <option value="{{$user->gender}}" value="Male">Male</option>
                          <option value="{{$user->gender}}" value="Female">Female</option>
                          <option value="{{$user->gender}}" value="Other">Other</option>
                      </select>
                    </div><br>
                      <div class="form-group">
                    <label for="">Phone:</label><br>
                    <input type="phone" class="form-control" value="{{$user->phone}}" name="phone" id="pwd" required  >
                    <span style="color:rgb(255, 0, 0)">@error('phone'){{$message}}@enderror</span>
                  </div><br>
                  
                  <button type="submit" id="userRegistration" class="btn btn-primary">Update</button>
                </div>
                </form>
    
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>
    @endsection
     </body>
     </html>