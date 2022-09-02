@extends('checkinglayout2')

@section('content')
<div
         id="intro"
         class="bg-image"
         style=" background-image: url(https://mdbcdn.b-cdn.net/img/new/fluid/city/113.jpg);height: 100vh;">
      <div class="mask text-white" style="background-color: rgba(0, 0, 0, 0.8)">
        <div class="container  p-5 align-items-center  h-100">
          <div class="">
           <br><br><br><br> <br><h1>Login Page</h1><br> 
<form action="/loginsubmit" method="POST">
    @csrf
    <div class="form-group">
      <label for="email">Email address:</label><br><br>
      <input type="text" class="form-control " placeholder="Enter email" name="email" id="email" required><br>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label><br><br> 
      <input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd" required><br>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
   
 
@endsection