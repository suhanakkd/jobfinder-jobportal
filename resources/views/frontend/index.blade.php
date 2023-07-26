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
<div class="container-fluid ps-0 pe-0">
    <div class="row" id="relative" style="padding:0px;margin: 0px;">
        <img src="{{URL::to('/')}}/frontend/image/image1.jpg" class="" alt="...">
        <form action="{{URL('filter_indexjobs')}}" method="post">
                     {{ csrf_field() }}
        <div class="col" id="absolute">
          <h1 class="fw-bold">Find the<br>most exciting <br>startup jobs</h1>
        </div>
        <div class="col d-flex flex-row w-75 m-auto" id="absolute2">
          <input type="text" class="p-xl-3 p-lg-1 border-0 px-xl-3 px-lg-1  border-end fs-4" placeholder="Job Tittle or Keyword" name="tittle">
          <select class="p-3 border-0 px-4 bg-white text-secondary w-25 w-lg-auto" name="state">
            <option selected>Select Location</option>
@foreach($state as $state)
            <option value="">{{$state->name}}</option>
@endforeach
          </select>
          <a ahref=""><button type="submit" class="btn btn-danger p-4 border-0 rounded-0 px-5 ">Find Job</button></a>
</form>
        </div>
    </div>
</div>


<!-- categories section -->
<div class="container-fluid shadow p-3 bg-body-tertiary rounded pt-5">
  <div class="row mb-5">
    <div class="col-lg-12">
      <h6 class="text-danger text-center mb-3" style="font-family:sans-serif">FEATURED TOURS PACKAGES</h6>
      <h1 class="text-dark text-center fw-bold" id="browse">Browse Top Categories</h1>
    </div>
  </div>
  <div class="d-flex justify-content-center flex-wrap align-items-center mt-5">
@foreach($category as $jobcategory)
<?php $catagory=DB::table('job_postings')->where('job_category_id',$jobcategory->id)->count();?>

  <div class="card d-flex justify-content-center align-items-center shadow-sm p-3 mb-5 bg-body-tertiary rounded me-5" style="width: 18rem;">
  <img src="{{url('')}}/uploads/{{$jobcategory->category_image}}" width="35px" height="65px" class="card-img-top mt-5 " alt="...">
    <div class="card-body">
      <a href="" class="text-decoration-none text-dark"><h5 class="card-title">{{$jobcategory->name}}</h5></a>
      <span class="text-danger mb-5">({{$catagory}})</span>
    </div>
  </div>
@endforeach

  <!-- <div class="card d-flex justify-content-center align-items-center shadow-sm p-3 mb-5 bg-body-tertiary rounded me-5" style="width: 18rem;">
    <img src="{{URL::to('/')}}/frontend/image/icons/system.png" class="card-img-top mt-5 " alt="..." style="width: 60px;height: 60px;">
    <div class="card-body">
      <a href="" class="text-decoration-none text-dark"><h5 class="card-title">Design & Development</h5></a>
      <span class="text-danger mb-5">(654)</span>
    </div>
  </div> -->


  <!-- <div class="card d-flex justify-content-center align-items-center shadow-sm p-3 mb-5 bg-body-tertiary rounded me-5" style="width: 18rem;">
    <img src="{{URL::to('/')}}/frontend/image/icons/building.png" class="card-img-top mt-5 " alt="..." style="width: 60px;height: 60px;">
    <div class="card-body">
      <a href="" class="text-decoration-none text-dark"><h5 class="card-title">Sales & Marketing</h5></a>
      <span class="text-danger mb-5">(658)</span>
    </div>
  </div>


  <div class="card d-flex justify-content-center align-items-center shadow-sm p-3 mb-5 bg-body-tertiary rounded me-5" style="width: 18rem;">
    <img src="{{URL::to('/')}}/frontend/image/icons/mobile-app.png" class="card-img-top mt-5 " alt="..." style="width: 60px;height: 60px;">
    <div class="card-body">
      <a href="" class="text-decoration-none text-dark"><h5 class="card-title">Mobile Application</h5></a>
      <span class="text-danger mb-5">(653)</span>
    </div>
  </div> -->

<!-- </div>

<div class="d-flex justify-content-center align-items-center mb-5 ">

  <div class="card d-flex justify-content-center align-items-center shadow-sm p-3 mb-5 rounded bg-body-tertiary me-5" style="width: 18rem;">
    <img src="{{URL::to('/')}}/frontend/image/icons/helmet.png" class="card-img-top mt-5 " alt="..." style="width: 60px;height: 60px;">
    <div class="card-body">
      <a href="" class="text-decoration-none text-dark"><h5 class="card-title">Construction</h5></a>
      <span class="text-danger mb-5">(653)</span>
    </div>
  </div>


  <div class="card d-flex justify-content-center align-items-center shadow-sm p-3 mb-5 bg-body-tertiary rounded me-5" style="width: 18rem;">
    <img src="{{URL::to('/')}}/frontend/image/icons/information-management.png" class="card-img-top mt-5 " alt="..." style="width: 60px;height: 60px;">
    <div class="card-body">
      <a href="" class="text-decoration-none text-dark"><h5 class="card-title">Information Technology</h5></a>
      <span class="text-danger mb-5">(654)</span>
    </div>
  </div>


  <div class="card d-flex justify-content-center align-items-center shadow-sm p-3 mb-5 bg-body-tertiary rounded me-5" style="width: 18rem;">
    <img src="{{URL::to('/')}}/frontend/image/icons/agreement.png" class="card-img-top mt-5 " alt="..." style="width: 60px;height: 60px;">
    <div class="card-body">
      <a href="" class="text-decoration-none text-dark"><h5 class="card-title">Real Estate</h5></a>
      <span class="text-danger mb-5">(658)</span>
    </div>
  </div>


  <div class="card d-flex justify-content-center align-items-center shadow-sm p-3 mb-5 bg-body-tertiary rounded me-5" style="width: 18rem;">
    <img src="{{URL::to('/')}}/frontend/image/icons/content.png" class="card-img-top mt-5 " alt="..." style="width: 60px;height: 60px;">
    <div class="card-body">
      <a href="" class="text-decoration-none text-dark"><h5 class="card-title">Content Writter</h5></a>
      <span class="text-danger mb-5">(653)</span>
    </div>
  </div>
</div>
<div class="w-25 m-auto">
<a ahref=""><button type="button" class="btn btn-outline-primary w-100 mb-5 py-xl-3 py-lg-2 py-md-1 py-sm-0 pe-xl-5 pe-md-2 pe-sm-0 ps-xl-5 ps-md-2 
  ps-sm-0" style="font-size: 14px;letter-spacing: 1px;" id="sectors">BROWSE ALL SECTORS</button>
</a>
</div> -->
</div>
<!-- categories section end -->

<!-- cv upload section start -->
 
  <div class=" container-fluid ps-0 pe-0 mt-0" id="relative-two" >
    <img src="{{URL::to('/')}}/frontend/image/cv.jpg" alt="..." class="img-fluid bg-primary" id="overlay" style="height: 490px;">
    <div class=" row d-flex justify-content-center" style="padding:0px;margin: 0px;"> 
        <div class=" text-center" id="absolute-two">
          <p class="para1 text-white" style="font-family:sans-serif;">FEATURED TOURS PACKAGES</p>
          <p class="para2 fw-bold">Make a Difference with Your<br>Online Resume!</p>
            <a ahref=""><button type="button" class="btn btn-outline-primary w-25 m-auto py-xl-3 py-lg-2 py-md-1 py-sm-0 pe-xl-5 pe-md-2 pe-sm-0 ps-xl-5 ps-md-2 
              ps-sm-0" style="font-size: 14px;letter-spacing: 1px;">UPLOAD YOUR CV</button>
            </a>
            <br>
        </div>
      </div>
    </div>

    <!-- featured jobs -->
    <div class="shadow p-3 bg-body-tertiary rounded">
    <div class="container">
      <div class="row mb-5" style="padding:0px;margin: 0px;">
        <div class="col-lg-12">
          <h6 class="text-danger text-center mb-3 mt-5" style="font-family:sans-serif">RECENT JOB</h6>
          <h1 class="text-dark text-center fw-bold" id="browse">Featured Jobs</h1>
        </div>
<!-- post company details start -->
<!-- 1st -->

@foreach($post as $po)
<div class="company-main d-flex flex-row w-auto m-auto mt-3 text-secondary p-5 mb-5">
@foreach($po->data as $cpny)
  <div class="company-logo d-flex flex-row">
    <a href=""><img src="{{url('')}}/uploads/{{$cpny->image}}" width="85px" height="85px"></a>
  </div>
  @endforeach
 
  <div class="company-details ps-4">
  
    <a href="" class="text-decoration-none"><h2 class="head" style="color: black;">{{$po->job_tittle}}</h2></a>
    
    <ul>
    @foreach($po->data as $cpny)
      <li>{{$cpny->name}}</li>
      @endforeach
      
      <li><img src="{{URL::to('/')}}/frontend/image/small-icons/pin.png" width="10.5px" height="14px"> @foreach($po->data1 as $state){{$state->name}} @endforeach,@foreach($po->data2 as $dis){{$dis->name}} @endforeach</li>
      
      <li>₹{{$po->min_salary}} - ₹{{$po->max_salary}}</li>
    </ul>
  </div>
  <div class="time d-flex flex-column">
  <a href="{{URL::to('frontend/jobdetails/'.$po->id)}}"><button type="button" class="btn btn-danger rounded-5 px-5 py-1 mb-4">View</button></a>
    <p>Date:{{$po->posting_date}}</p>
  </div>
  </div>
  @endforeach
  
  

<!-- post company details end -->

      </div>
      <!-- {!! $post->links() !!} -->
    <div class="text-center">  </div>
      </div>
     
</div>
</div>
  <!-- featured jobs end-->
<!-- apply process start -->

<div class="parent-div container-fluid ps-0 pe-0 mt-0 mb-xl-5 mb-lg-4 mb-md-2 md-sm-0">
  <img src="{{URL::to('/')}}/frontend/image/bg.png" alt="..." class="bg-primary">
  <div class="d-flex justify-content-center " style="padding:0px;margin: 0px;"> 
      <div class="child-div text-center">
        <p class="para1 text-danger" style="font-family:sans-serif;letter-spacing: 1px;">APPLY PROCESS</p>
        <p class="para2 fw-bold">How it works</p>
      </div>
    </div>


    <div class="grant-child d-flex justify-content-center flex-wrap mt-xl-5 mt-lg-4 mt-md-2 mt-sm-0 me-5">


      <div class="card d-flex justify-content-center align-items-center me-5" style="width: 18rem; background: #303881;">
        <img src="{{URL::to('/')}}/frontend/image/icons/search.png" class="card-img-top mt-xl-5 mt-lg-4 mt-md-2 mt-sm-0 mb-xl-3 mb-lg-3 mb-md-2 mb-sm-2" alt="..." style="width: 78px;height: 75px;">
        <div class="card-body text-white">
          <h2 class="mb-lg-4 mb-md-2 mb-sm-0">1. Search a Job</h2>
          <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur hic voluptas </p>
        </div>
      </div>





  <div class="card d-flex justify-content-center align-items-center me-5" style="width: 18rem; background: #303881;">
    <img src="{{URL::to('/')}}/frontend/image/icons/approve.png" class="card-img-top mt-xl-5 mt-lg-4 mt-md-2 mt-sm-0 mb-xl-3 mb-lg-3 mb-md-2 mb-sm-2" alt="..." style="width: 78px;height: 75px;">
    <div class="card-body text-white">
      <h2 class="mb-lg-4 mb-md-2 mb-sm-0">2. Apply for job</h2>
      <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur hic voluptas </p>
    </div>
  </div>





  <div class="card d-flex justify-content-center align-items-center me-5" style="width: 18rem; background: #303881;">
    <img src="{{URL::to('/')}}/frontend/image/icons/manager.png" class="card-img-top mt-xl-5 mt-lg-4 mt-md-2 mt-sm-0 mb-xl-3 mb-lg-3 mb-md-2 mb-sm-2" alt="..." style="width: 78px;height: 75px;">
    <div class="card-body text-white">
      <h2 class="mb-lg-4 mb-md-2 mb-sm-0">3. Get your job</h2>
      <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur hic voluptas </p>
    </div>
  </div>


  </div>
</div>
<!-- owl corousel start -->

<div id="carouselExampleCaptions" class="carousel slide bg-body-tertiary" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bg-danger" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="bg-danger"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"class="bg-danger" ></button>
  </div>
  <div class="carousel-inner" style="width: 100%; height: 450px;">
    <div class="carousel-item active">
      <img src="{{URL::to('/')}}/frontend/image/kids.jpg" class="d-block mb-5" alt="..." style="width: 130px;height: 132px;border-radius: 65px;margin: auto;">
      <div class="carousel-caption d-none d-md-block text-dark mt-5">
        <h5 class="fw-bold">Margeret lawson</h5>
        <p class="text-secondary">Creative Director</p>
        <p class="para-divi">“I am at an age where I just want to be fit and healthy our bodies are<br> our responsibility!
           So start caring for your body and it will care for you.<br> Eat clean it will care for you and workout hard."</p>
      </div>
    </div>
    <div class="carousel-item active">
      <img src="{{URL::to('/')}}/frontend/image/kids.jpg" class="d-block mb-5" alt="..." style="width: 130px;height: 132px;border-radius: 65px;margin: auto;">
      <div class="carousel-caption d-none d-md-block text-dark mt-5">
        <h5 class="fw-bold">Margeret lawson</h5>
        <p class="text-secondary">Creative Director</p>
        <p class="para-divi">“I am at an age where I just want to be fit and healthy our bodies are<br> our responsibility!
           So start caring for your body and it will care for you.<br> Eat clean it will care for you and workout hard."</p>
      </div>
    </div>
    <div class="carousel-item active">
      <img src="{{URL::to('/')}}/frontend/image/kids.jpg" class="d-block mb-5" alt="..." style="width: 130px;height: 132px;border-radius: 65px;margin: auto;">
      <div class="carousel-caption d-none d-md-block text-dark mt-5">
        <h5 class="fw-bold">Margeret lawson</h5>
        <p class="text-secondary">Creative Director</p>
        <p class="para-divi">“I am at an age where I just want to be fit and healthy our bodies are<br> our responsibility!
           So start caring for your body and it will care for you.<br> Eat clean it will care for you and workout hard."</p>
      </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!-- owl carousel end -->
<!-- about us what we are doing start-->
<div class="container">
  <div class="row mt-5" style="padding:0px;margin: 0px;">

      <div class="col-lg-6 col-sm-12 mb-5 mt-5">
        <h6 class="text-danger mb-5" style="letter-spacing: 1px;">WHAT WE ARE DOING</h6>
        <h1 class="fw-bold mb-5">24k Talented people are getting Jobs</h1>
        <p class="para-bolder mb-5 text-dark" style="text-align: justify;">Mollit anim laborum duis au dolor in voluptate velit ess cillum
           dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillum.</p>
           <p class="para-slim text-secondary mb-5">Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur.
             Excghcepteur signjnt occa cupidatat non inulpadeserunt mollit aboru.
             temnthp incididbnt ut labore mollit anim laborum suis aute.</p>
             <a><button type="button" class="btn btn-danger px-5 py-3">Post A Job</button></a>
             


      </div>

      <div class="col-lg-6 col-sm-12 parent-class">
        <img src="{{URL::to('/')}}/frontend/image/support-img.jpg" class="img-fluid">
        <div class="position-box text-white text-center d-flex align-items-center flex-column justify-content-center">
          <p class="mb-0" style="font-size: 20px;">Since</p>
          <h1 class="fw-bold" style="font-size: 60px;">1994</h1>
        </div>

        

      </div>

  
  </div>
</div>

<!-- about us what we are doing end-->
<!-- our latest blog news start -->
<div class="container " style="margin-top:150px;margin-bottom: 150px;" >
 
   <div class="text-center mt-5">
          <p class="para1 text-danger" style="font-family:sans-serif;">FEATURED TOURS PACKAGES</p>
          <p class="para2 fw-bold" style="font-size: 50px; color: #28395a;">Our recent news</p>
    </div>
     <div class="row w-auto m-auto" style="padding:0px;margin: 0px;">
    <div class="d-flex mt-5 mb-5 flex-wrap">
      <div class="col-lg-6">
        <div class="parent-news">
<img src="{{URL::to('/')}}/frontend/image/news1.jpg" class="img-fluid" >
<div class="position-news text-white text-center d-flex align-items-center justify-content-center">
  <p class="mb-0 fw-bold" style="font-size: 25px;">24</p>
  <h1 style="font-size: 16px;">now</h1>
</div>
</div> 
<!-- new -->
<div class="news-div me-5" style="text-align: justify;">
  <div class="border-start border-3 text-secondary mt-4 mb-4"><p class="ps-2">Properties</p></div>
  <h4 class="news-txt fw-bold mb-4 " style="font-size: 24px;">Footprints in Time is perfect House in Kurashiki</h4>
  <h5 class="text-dark mb-4">Read more »</h5>
</div>


      </div>
 <div class="col-lg-6">
  <div class="parent-news">
        <img src="{{URL::to('/')}}/frontend/image/news2.jpg" class="img-fluid">
        
        <div class="position-news text-white text-center d-flex align-items-center justify-content-center">
          <p class="mb-0 fw-bold" style="font-size: 25px;">24</p>
          <h1 style="font-size: 16px;">now</h1>
        </div>
        </div>
<!-- new -->
<div class="news-div me-5" style="text-align: justify;">
  <div class="border-start border-3 text-secondary mt-4 mb-4"><p class="ps-2">Properties</p></div>
  <h4 class="news-txt fw-bold mb-4 " style="font-size: 24px;">Footprints in Time is perfect House in Kurashiki</h4>
  <h5 class="text-dark mb-4">Read more »</h5>
</div>


      </div>
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
    <h6>Copyright ©2023 All rights reserved | This template is made with <img src="{{URL::to('/')}}/frontend/image/small-icons/heart.png" height="20px" width="20px"> by <span class="text-danger">Colorlib</span></h6>
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