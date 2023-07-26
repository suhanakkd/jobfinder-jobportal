<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobportal design</title>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/personal.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,300&family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
</head>
<body class="bg-body-tertiary">

<div class="row m-0" style="margin: 0;padding: 0;">
  


   
    <!-- navbar start -->
  
<nav class="navbar navbar-expand-lg navbar-light bg-white py-0 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{URL::to('frontend.index')}}">
        <img src="{{URL::to('/')}}/frontend/image/logo.png" alt="" width="150px" height="30px" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      
        <ul class="alig-div navbar-nav ms-auto" style="font-size: 12px;">
          
       
            <a class="nav-link active" aria-current="page" href="#"><li class="nav-item ">
              <div class="ps-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
              </svg>
           Help</div>
          </li></a>
        
          <a class="nav-link" href="#"><li class="nav-item">
           <div class="ps-3"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
              </svg>
           Notifications</div>
          </li></a>

          <a class="nav-link" href="#">
          <li class="nav-item">
           <div class="ps-3"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-fill" viewBox="0 0 16 16">
                <path d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
              </svg>
            Messages
          </div></li></a>
          <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">
          <li class="nav-item">
            <div class="border-start ps-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
                <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H3Zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Z"/>
              </svg> 
              
         {{$firmName->name}}
            <div class="ps-4" style="font-size: 10px;">owner:{{$user->name}}</div>
          </div></li></a>
          <!-- <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">
            <div class="border-start ps-3" style="height: 33.8px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
              </svg>
              shakkirpp@gmail.com
          
         </div> </li></a> -->
        
        
            <a href="#" class="nav-link d-flex align-items-center text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <li class="nav-item"> <div class="dropdown border-start ps-3 p-2">
                <img src="{{url('')}}/uploads/{{$profilepic->image}}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">{{$user->email}}</span></div>
            <ul class="dropdown-menu dropdown-menu-white text-small shadow">
                <li><a class="dropdown-item" href="">more</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="{{URL::to('frontend.personal-details')}}">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{URL::to('frontend.index')}}">Sign out</a></li>
            </ul>

            </li></a></ul>
        </div>


</div>
     
      
      </nav>
      </div>

   
 
    
  
<!-- navbar end -->
<!-- sidebar-start -->

<div class=" container-fluid px-0">
    <div class="row flex-nowrap" style="margin: 0;padding: 0;">
        <div class="sidebar col-auto col-md-2 col-xl-2 pt-2 bg-dark"  >
            <div class="d-flex flex-column align-items-center align-items-sm-start text-white min-vh-100 ">
               
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100 justify-content-center " id="menu">
                    <li class="nav-item w-100">
                        <a href="{{URL::to('frontend.postjob')}}" class="nav-link  px-0 text-black"><button type="button" class="btn btn-outline-secondary border-0 w-100 py-3 ps-2 pe-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                              </svg><span class="ms-1 d-none d-sm-inline px-2">Post a Job</span></button>
                        </a>
                    </li> 
                    <li class="nav-item w-100 ">
                        <a href="{{URL::to('frontend.jobs')}}"  class="nav-link px-0  text-black">
                            <button type="button" class="btn btn-outline-secondary border-0 w-100 py-3 ps-2 pe-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                              </svg> <span class="ms-1 d-none d-sm-inline px-2">Jobs</span></button> </a></li>
                            
                              <li class="nav-item w-100 ">
                                <a href="{{URL::to('frontend.candidates')}}"  class="nav-link px-0  text-black">
                                    <button type="button" class="btn btn-outline-secondary border-0 w-100 py-3 ps-2 pe-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                      </svg> <span class="ms-1 d-none d-sm-inline px-2">Candidates</span></button> </a></li>
                            
                            
                            </ul>
                        <!-- <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li>
                </ul>
                <hr> -->
                <!-- <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div> -->
            </div>
        </div>

<!-- sidebar end -->
        <!-- content area start -->
        <div class="content col-md-10 col-lg-10 text-black">

<!-- form start -->
        <form action="{{URL('savepostjob')}}" method="POST">
                     {{ csrf_field() }}
    <div class="container" style="  padding: 0px 166px;" >
    <div class="d-flex flex-column justify-content-center align-items-center post-division px-5">


      <div class="bg-white  w-100 py-5 px-5 rounded mb-5 d-flex">
       
        <div class=" col-lg-6 m-auto pe-2">
           <h4 class="text-black fw-bold" style="font-size: 60px;">Provide Basic Information</h4>
          </div>
          
        <div class=" col-lg-6 ">
           <img src="{{URL::to('/')}}/frontend/image/postjob1.avif" width="300px" height="300px">
        </div>
       
        </div>


    
  

        <div class="bg-white  w-100 py-5 px-5 rounded mb-5">

        <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-black fw-bold fs-6">Job Tittle<span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tittle">
  </div>
       
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-black fw-bold">Job Category<span class="text-danger">*</span></label>
                <select class="form-select form-control form-control-lg fs-6" name="job_category_id">
                            <option select>select your tittle</option>
                            @foreach($job as $jo)
  <option value="{{$jo->id}}">{{$jo->name}}</option>
  @endforeach
                            
                          </select>
              </div>
           
            </div>
            <div class="bg-white  w-100 py-5 px-5 rounded mb-5">
       

      

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-black fw-bold fs-6">Vacancy<span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="vacancy">
  </div>

  <h4 class="text-black fw-bold fs-6">Job Description<span class="text-danger">*</span></h4>
  <div class="form-floating mb-3">
                  <textarea class="form-control text-secondary" placeholder="Leave a comment here" id="floatingTextarea" name="job_description"></textarea>
                  <label for="floatingTextarea">Job Description</label>
                </div>
              
              
                <h4 class="text-black fw-bold fs-6">Company Description<span class="text-danger">*</span></h4>
                <div class="form-floating mb-3">
                  <textarea class="form-control text-secondary" placeholder="Leave a comment here" id="floatingTextarea" name="company_description"></textarea>
                  <label for="floatingTextarea">Comments</label>
                </div>

                <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-black fw-bold fs-6">Posting Date<span class="text-danger">*</span></label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="postdate">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-black fw-bold fs-6">Last date<span class="text-danger">*</span></label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="lastdate">
  </div>
               
             </div>
      
    
            


<!-- job type start -->

                        <div class="bg-white w-100 py-5 px-5 rounded mb-5">
                          <label for="exampleInputEmail1" class="form-label text-black fw-bold">What is the job type?
                            <span class="text-danger">*</span></label><br>

                        <div class=" btn-group d-flex flex-wrap" role="group" aria-label="Basic checkbox toggle button group">
                        @foreach($type as $ty)
                          <div class="m-2">
                          <input type="checkbox" class="btn-check" id="btncheck{{$ty->id}}" autocomplete="off" name="job_type_id[]" value="{{$ty->id}}">
                          <label class="btn btn-outline-primary" for="btncheck{{$ty->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                          </svg>{{$ty->name}}</label>
                        </div>
                    @endforeach

                        
                        </div>
              </div>
                       



         



                      <div class="bg-white w-100 py-5 px-5 rounded mb-5">
                        <label for="exampleInputEmail1" class="form-label text-black fw-bold">What is the pay rate or Range?<span class="text-danger">*</span></label>
                        <label for="exampleInputEmail1" class="form-label text-secondary">Review the pay we estimated for your job and make adjestments if needed</label>
                        <br><label for="exampleInputEmail1" class="form-label text-secondary">show pay by</label>
                        <div class="row" style="margin: 0;padding: 0;">
                          
                         </div>
                         <div class="row mt-3" style="margin: 0;padding: 0;">
                            <div class="col-lg-4">
                            <label for="exampleInputEmail1" class="form-label text-secondary" >Minimum</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rs:75000" name="minimum">
                            </div>
                           
                            <div class="col-lg-4">
                                <label for="exampleInputEmail1" class="form-label text-secondary">Maximum</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rs:45000" name="maximum">
                            </div>
                            <div class="col-lg-4">
                             
                                <label for="exampleInputEmail1" class="form-label text-secondary mb-4  fw-bold " style="padding-top: 34px;" >/monthly</label>

                               
                            </div>
                        </div>   
                     </div>






                    <div class="bg-white  w-100 py-5 px-5 rounded mb-5 h-100">
                      <label for="exampleInputEmail1" class="form-label text-black fw-bold fs-4">Required Knowledge, Skills, and Abilities
                      </label>
                        <textarea class="form-control" name="description1"  id="summernote1" ></textarea> 
                    </div>

                    <div class="bg-white  w-100 py-5 px-5 rounded mb-5 h-100">
                      <label for="exampleInputEmail1" class="form-label text-black fw-bold fs-4">Experience Details
                      </label>
                        <textarea class="form-control" name="description2"  id="summernote2" ></textarea> 
                    </div>



                    <div class="bg-white  w-100 py-5 px-5 rounded mb-5">                
                        <label for="exampleInputEmail1" class="form-label text-black fw-bold fs-4">Communication Settings
                            </label><br>
                            <label for="exampleInputEmail1" class="form-label text-black fw-bold">Send daily updates about this job and send application to:
                                <span class="text-danger ">*</span>
                                <input type="text" class="form-control mt-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Shakkirpp@gmail.com" name="email">
                                  </div>


                            <div class="bg-white  w-100 py-5 px-5 rounded mb-5">                
                                <label for="exampleInputEmail1" class="form-label text-black fw-bold ">Let applicants call you directly for this job
                                    </label><br>
                                    <label for="exampleInputEmail1" class="form-label text-black fw-bold">Mobile Number
                                        <span class="text-danger ">*</span>
                                        <input type="text" class="form-control mt-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="XXXXXXXXXXX" name="mobile">
       
        
         </div>


            <div class="bg-white  w-100 pb-5 rounded mb-5"> 
                <div class="bg-secondary py-4 mb-3">              
            <label for="exampleInputEmail1" class="form-label text-black fw-bold ">Application Questions:What is the highest level of application
                you have completed?
          
            </label>
        </div> 
        <div class="px-4 mt-2">
        <label for="exampleInputEmail1" class="form-label text-black fw-bold">Minimum Egucation Level:<br><br>
            <div class="form-check mb-3 border py-2 rounded">
                <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="secondary 10th pass">
                <label class="form-check-label" for="flexRadioDefault1">
                  Secondary 10th pass
                </label>
              </div>
              
              <div class="form-check mb-3 border py-2 rounded">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="higher secondary">
                <label class="form-check-label" for="flexRadioDefault1">
                 Higher secondary(12th pass)
                </label>
              </div>

              <div class="form-check mb-3 border py-2 rounded">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="diploma">
                <label class="form-check-label" for="flexRadioDefault1">
                Diploma
                </label>
              </div>

              <div class="form-check mb-3 border py-2 rounded">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="bachelor's">
                <label class="form-check-label" for="flexRadioDefault1">
              Bachelor's
                </label>
              </div>
              
              <div class="form-check mb-3 border py-2 rounded">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="master's">
                <label class="form-check-label" for="flexRadioDefault1">
             Master's
                </label>
              </div>

              <div class="form-check mb-3 border py-2 rounded">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="doctorate">
                <label class="form-check-label" for="flexRadioDefault1">
              Doctorat
                </label>
              </div>
             

            
            </div>
            <div class="">
              <label for="exampleInputEmail1" class="form-label text-secondary text-black fw-bold">Graduation</label>

              <select class="Add your experience w-100 mb-3" aria-label="Default select example" name="degree_id" id="degree_id">
                <option selected>Brows qualification</option>
                @foreach($degree as $deg)
  <option value="{{$deg->id}}">{{$deg->name}}</option>
  @endforeach 
              </select>
              <div>
              <label for="exampleInputEmail1" class="form-label text-secondary text-black fw-bold">Stream</label>
              <select class="Add your experience w-100 mb-3" aria-label="Default select example" name="stream" id="stream">
                <option value="">Brows stream</option>
              </select>
          </div>
                            </div>
            </div>



            <div class="bg-white  w-100 pb-5 rounded mb-5"> 
              <div class="bg-secondary py-4 mb-3">              
                <label for="exampleInputEmail1" class="form-label text-black fw-bold ">How many years of experience do you have?
                </label>
            </div> 
            <div class="px-5">
            <div class="form-check mb-3">
              <input class="form-check-input " type="checkbox" value="0-1 years" id="flexCheckDefault" name="experience1">
              <label class="form-check-label" for="flexCheckDefault">
              0-1 Years
              </label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input " type="checkbox" value="1-2 years" id="flexCheckDefault" name="experience2">
              <label class="form-check-label" for="flexCheckDefault">
                1-2 Years
              </label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" value="2-3 years" id="flexCheckChecked" name="experience3">
              <label class="form-check-label" for="flexCheckChecked">
                2-3 Years
              </label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input " type="checkbox" value="3-6 years" id="flexCheckDefault" name="experience4">
              <label class="form-check-label" for="flexCheckDefault">
                3-6 Years
              </label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" value="6 more" id="flexCheckChecked" name="experience5">
              <label class="form-check-label" for="flexCheckChecked">
                6 More..
              </label>
            </div>
            </div>
            </div>

            <div class="bg-white  w-100 pb-5 rounded mb-5"> 
            <div class="px-5">
              <label for="exampleInputEmail1" class="form-label text-secondary text-black fw-bold py-3">Location</label>

              <select class="Add your experience w-100 mb-5" aria-label="Default select example" name="state_id" id="state_id">
                @foreach($state as $st)
                <option value="{{$st->id}}">{{$st->name}}</option>
                @endforeach
              </select>

              <select class="Add your experience w-100 mb-3" aria-label="Default select example" name="district" id="district">
                <option value="">District</option>

              </select>
                            </div>
                            </div>

            <div class="bg-white  w-100 py-5 px-5 rounded mb-5 text-center w-100">
             <button type="submit" class="btn btn-success w-75 py-3 fs-4">Submit</button>
            </div>


                </div>
                
            </div> 
                </form>
    </div>

        </div>
    </div>









 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
    $(document).ready(function() {
       
         $('#summernote1').summernote();
        
    });
  </script>
  <script>
    $(document).ready(function() {
       
         $('#summernote2').summernote();
        
    });
  </script>

<script type="text/javascript">

    $(document).ready(function(){

        $('#degree_id').on('change', function () {
            var id=$(this).val();

            $.ajax({
                url: "{{url('get_stream')}}?id="+id,
                type: "get",
                success: function (result) {
                  // console.log(result);
                    $("#stream").empty();
                    $.each(result, function (key, value) {
                        $("#stream").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });


</script>

<script type="text/javascript">

    $(document).ready(function(){

        $('#state_id').on('change', function () {
            var id=$(this).val();

            $.ajax({
                url: "{{url('get_district')}}?id="+id,
                type: "get",
                success: function (result) {
                  // console.log(result);
                    $("#district").empty();
                    $.each(result, function (key, value) {
                        $("#district").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });


</script>


<script src="{{URL::to('/')}}/frontend\js\bootstrap.bundle.min.js"></script>
</body>
</html>
