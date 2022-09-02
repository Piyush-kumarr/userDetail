 <!-- Section: Design Block -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<section class="vh-100" style="background-color: #508bfc;">
   
   
    <div class="container py-5 h-100">
      
        <div class="row d-flex justify-content-center align-items-center h-100">
       
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
           
                    <div class="card-body p-5 text-center">
  
           
                        <h3 class="mb-5">Admin Login</h3>
           
                        <form action="/adminsubmit" method="POST"> 
              
                            @csrf
                                <div class="form-outline mb-4">
                                    <input type="email" id="typeEmailX-2" placeholder="Email" class="form-control form-control-lg" required />
                                </div>
                    
                                <div class="form-outline mb-4">
                                    <input type="password" id="typePasswordX-2" placeholder="Password" class="form-control form-control-lg" required/>
                                </div>
  
              
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        
                    <hr class="my-4">
  
            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>