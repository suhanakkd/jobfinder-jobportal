<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobportal Sign Up</title>
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,300&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

   
       
        <section class="vh-100">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100 ">
            
                        <div class="col-md-10 col-lg-4 col-xl-4 order-2 order-lg-1 border shadow p-3  bg-body rounded" >
                            <div class="text-center py-2">
         <a href="{{URL::to('frontend.index')}}"> <img src="{{URL::to('/')}}/frontend/image/logo.png"></a>
          </div>
                          <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-2 text-primary">Sign in</p>
          
    <form method="POST" action="{{ route('login') }}" class="mx-1 mx-md-4">
        @csrf
                          
          
                          
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="email" id="form3Example3c" name="email" class="form-control" />
                                <label class="form-label" for="form3Example3c">Your Email</label>
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="password" id="form3Example4c" name="password" class="form-control" />
                                <label class="form-label" for="form3Example4c">Password</label>
                              </div>
                            </div>
          
                           
          

                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                              
                              <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
                            </div>
           
                            <div class="form-check d-flex justify-content-center mt-2">
                            
                                <label class="form-check-label" for="form2Example3">
                                  <a href="{{URL::to('frontend.register')}}">Create Account!</a>
                                </label>
                              </div>
            

                          </form>
          
                        
                      
                      </div>
                    </div>
                  </div>
                
          </section>


        
        
    

</body>
<script src="{{URL::to('/')}}/frontend\js\bootstrap.bundle.min.js"></script>
</body>
</html>
</html>