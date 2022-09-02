<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 
</head>
<body>


<div class="header"> 
@section('header')
<header class="">
    <!-- Animated navbar-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-scroll">
      <div class="container-fluid">
        <button
                class="navbar-toggler ps-0"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
          <span
                class="navbar-toggler-icon d-flex justify-content-start align-items-center"
                >
            <i class="fas fa-bars"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
            <li class="nav-item active">
              <a class="nav-link text-white fs-4" aria-current="page" href="">UpTodd</a>
            </li>  
          </ul>
              <div class="navbar-nav ms-5">
                    <a href="/adminlogout" class=" text-white nav-item nav-link btn btn-primary ">Log Out</a>
             </div>
        </div>
      </div>
    </nav>
    <!-- Animated navbar -->
  
    
@show
</div>
<div class="content">
    @section('content')
    @show
</div>
 
</body>
</html>