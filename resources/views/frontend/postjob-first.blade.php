<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobportal design</title>
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,300&family=Roboto&display=swap" rel="stylesheet">
</head>
<body class="bg-body-tertiary">
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="margin-bottom: 100px;">
        <div class="container">
            <a class="navbar-brand" href="{{URL::to('frontend.index')}}">
                <img src="{{URL::to('/')}}/frontend/image/logo.png" alt="" width="199" height="64" class="ms-xl-5 ms-lg-0" id="logo">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-xl-2 mb-lg-0 mx-xl-5 mx-lg-0" id="list">
              <li class="nav-item">
                <a class="nav-link mx-xl-3 mx-lg-1 " aria-current="page" href="{{URL::to('frontend.index')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-xl-3 mx-lg-1 " href="{{URL::to('frontend.findjobs')}}">Find a Jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-xl-3 mx-lg-1 " href="#">About</a>
              </li>
            
              <li class="nav-item">
               
                <div class="dropdown">
                    <a class="nav-link mx-xl-3 mx-lg-1  dropbtn">Post a Job</a>
                    <div class="dropdown-content">
                    <a class="nav-link mx-xl-3 mx-lg-1 " href="{{URL::to('frontend.postjob-first')}}">Post Job</a>
                    <a class="nav-link mx-xl-3 mx-lg-1 " href="#">Blog</a>
                    <a class="nav-link mx-xl-3 mx-lg-1 " href="#">Blog Details</a>
                    <a class="nav-link mx-xl-3 mx-lg-1 " href="#">Elements</a>
                    <a class="nav-link mx-xl-3 mx-lg-1 " href="{{URL::to('frontend.jobdetails')}}">Job Details</a>
                    </div>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-xl-3 mx-lg-1  " href="#">Contact</a>
              </li>
            </ul>
            @if(Auth::user())
           
           <div class="dropdown">
 <button class="btn btn-secondary dropdown-toggle border-0 bg-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle text-black" viewBox="0 0 16 16">
 <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
 <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></span>
 </button>
 <ul class="dropdown-menu">
   <li><a class="dropdown-item" href="{{URL::to('frontend.personal-details')}}">Profile</a></li>
   <li><a class="dropdown-item" href="{{URL::to('logout')}}">Log out</a></li>
 </ul>
</div>
           @else
          <div class="d-flex flex-shrink-1 ms-xl-5 ms-lg-0" > 
             
               <a href="{{URL::to('register')}}"><button type="button" class="btn btn-danger rounded-0 p-lg-1 px-lg-2 me-lg-1 p-xl-3 px-xl-5 me-xl-1" id="register">Register</button></a>
               <a href="{{URL::to('login')}}"><button type="button" class="btn btn-outline-danger rounded-0 p-lg-1 px-lg-2 me-lg-0 p-xl-3 px-xl-5 me-xl-1" id="login">Login</button></a>
           </div>
           @endif
          </div>
        </div>
      </nav> 

<!-- end nav bar -->

<!-- body part -->
<div class="container" style="margin-top: 90px;">
    <div class="row">
        <div class="col-lg-6 m-auto text-center">
            <h4 class="text-black text-center" style="font-size: 64px;">Let's Make Your Next Great Hire.Fast</h4>
            <a href="{{URL::to('frontend.company')}}"><button type="button" class="btn btn-primary py-2 px-5 fs-4 mt-3">Post a Job</button></a>   
         </div>
        <div class="col-lg-6">
            <img src="{{URL::to('/')}}/frontend/image/hiring-concept-with-empty-chair.jpg" width="650px" height="640px">
        </div>
    </div>
</div>



<!-- footer -->
<div class="bg-dark">
    <div class="container bg-dark ">
    
      <div class="row   d-flex flex-row w-auto m-auto">
    
            <div class="col-md-3  text-white mt-5 "><h4 class="mb-5">ABOUT US</h4>
              <div class="text-secondary " id="footer-column">
             <p style="font-size: 16px;">Heaven frucvitful doesn't<br> cover lesser dvsays appear<br> creeping seasons so behold.</p>
            </div>
            </div>
    
    
            <div class="col-md-3 text-white mt-5"><h4 class="mb-5">CONTACT INFO</h4>
              <div class="d-flex flex-column text-secondary" id="footer-column" style="font-size: 16px;">
                <p>Address :Your address goes here,<br> your demo address.</p>
                <p>Phone: <a class="text-decoration-none text-secondary mb-0" href="#">+8880 44338899</a></p>
                <a>Email : info@colorlib.com</a>
              </div>
            </div>
    
    
    
            <div class="col-md-3 text-white mt-5"><h4 class="mb-5">IMPORTANT LINK</h4>
              <div class="d-flex flex-column text-secondary" id="footer-column">
                <a href="#" class="text-secondary"> View Project</a>
                <a href="#" class="text-secondary">Contact Us</a>
                <a href="#" class="text-secondary"> Testimonial</a>
                <a href="#" class="text-secondary">  Proparties</a>
                <a href="#" class="text-secondary">  Support</a>
              </div>
            </div>
    
            <div class="col-md-2 text-white mt-5"><h4 class="mb-5">NEWSLETTER</h4>
              <div class="d-flex flex-column text-secondary" id="footer-column">
               <p>
    
                Heaven fruitful doesn't over lesser in days. Appear creeping.
                </p>
              </div>
              <div> 
                <form >
                  <div class="col-auto d-flex flex-row mt-5 mb-5" style="height: 40px;">
                    <input type="text" class="form-control w-auto pt-0 pb-0 rounded-0 rounded-start h-100" placeholder="Email-Address" >
                    <a>    <button type="submit" class="btn btn-danger mb-3 h-100 rounded-0 rounded-end px-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
                    </svg></button></a>
                  </div>
              </div>
            </div>
          </form>
          </div>
        
       <!-- footer next row -->
       <div class="row   d-flex flex-row w-auto m-auto pb-5">
    
        <div class="col-md-3 mt-5 ">
          <a href=""><img src="{{URL::to('/')}}/frontend/image/logo-footer.png"></a>
        </div>
    
    
        <div class="col-md-3 text-white mt-5 d-flex flex-row">
          <h3 class="fw-bold">5000+</h3>
          <span class="ms-2 mt-2">Talented Hunter</span>
          </div>
    
    
    
          <div class="col-md-3 text-white mt-5 d-flex flex-row">
            <h3 class="fw-bold">451</h3>
            <span class="ms-2 mt-2">Talented Hunter</span>
            </div>
    
            <div class="col-md-3 text-white mt-5 d-flex flex-row">
              <h3 class="fw-bold">568</h3>
              <span class="ms-2 mt-2">Talented Hunter</span>
              </div>
    
       
        
      </div>
      <div class="text-secondary mb-5">
      <hr>
      </div>
      <div class="d-flex flex-row w-auto m-auto pb-5 justify-content-between">
    
      <div class="text-secondary">
        <h6>Copyright ©2023 All rights reserved | This template is made with <img src="/image/small-icons/heart.png" height="20px" width="20px"> by <span class="text-danger">Colorlib</span></h6>
      </div>
    <div class="d-flex flex-row">
    <a href=""><img src="{{URL::to('/')}}/frontend/image/social-media-icons/facebook.png" height="16px" width="16px" class="me-2"></a>
    <a herf=""><img src="{{URL::to('/')}}/frontend/image/social-media-icons/twitter.png" height="16px" width="16px" class="me-2"></a>
    <a href=""><img src="{{URL::to('/')}}/frontend/image/social-media-icons/internet.png" height="16px" width="16px" class="me-2"></a>
    <a href="" class="text-decoration-none"><h5 class="bw-bold text-primary me-2" class="me-1">Be</h5></a>
    </div>
      </div>
      </div>
      </div>
      <!-- row end -->
      
    <!-- footer end -->
    
      
      
      
    
        <script src="{{URL::to('/')}}/frontend\js\bootstrap.bundle.min.js"></script>
    </body>
    </html>