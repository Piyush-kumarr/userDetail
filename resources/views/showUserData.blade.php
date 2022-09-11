@extends('userlistheader')

@section('content')

<div id="intro" class="bg-image" style="background-image: url(https://mdbcdn.b-cdn.net/img/new/fluid/city/113.jpg);height: 100vh;">
<div class="mask text-white" style="background-color: rgba(0, 0, 0, 0.8)">
<div class="container  p-5 align-items-center  h-100">
    <style>
         .container{
    display: table;
    
}

#resp-table-header{
    display: table-header-group;
     
}

#table-header-cell{
    display: table-cell;
   
     padding: 20px 30px 20px 0px; 
} 

 #resp-table-body{
    display: table-row-group;
    
}

.resp-table-row{
    display: table-row;
    
} 
 
 

.table-body-cell{
    display: table-cell;
      

}
    </style>
<br><br><h1>Your Details</h1><br>

<div>
     
    <div class="Customerdetails">
             <div class="container">
                     <div id="resp-table-header">
                         <div id="table-header-cell">Id</div> 
                         <div id="table-header-cell">Name</div>
                         <div id="table-header-cell">Email</div>
                         <div id="table-header-cell"> Gender</div>
                         <div id="table-header-cell">Phone No.</div>
                         <div id="table-header-cell">Edit</div>
                     </div>
               <div id="resp-table-body">
                 <div class="resp-table-row">
                     <div class="table-body-cell">
                        {{$data['user']['id']}}
                     </div>
                     <div class="table-body-cell"> 
                        {{$data['user']['name']}}
                     </div>
                     <div class="table-body-cell">
                        {{$data['user']['email']}}
                     </div>
                     <div class="table-body-cell">
                        {{$data['user']['gender']}}
                     </div>
                     <div class="table-body-cell">
                        {{$data['user']['phone']}}
                     </div>
                     <div>
                         <a href="{{ url('edituser/'.$data['user']['id']) }}" class="btn btn-primary" >Edit</a>
                     </div>
                 </div>
             </div> 
         </div> 
     </div>
       

</div>
</div>
</div>
<!-- Background image -->
</header>

@endsection