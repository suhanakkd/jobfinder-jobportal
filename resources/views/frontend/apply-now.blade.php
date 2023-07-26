
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

    <section class="h-100 ">
        <div class="container h-100">
          
           
                 
                  <div class="col-xl-6 m-auto">
                  <div class="text-center py-4"><a href="{{URL::to('frontend.index')}}"><img src="{{URL::to('/')}}/frontend/image/logo.png"></a></div>

                  <form action="{{URL('applynow_save')}}" method="POST"  enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="p-md-5 text-black border shadow p-3 mb-5 bg-body rounded">
                      <h3 class="mb-5 text-uppercase text-center">Application Form</h3>
      
                      <input type="hidden" value="{{$apply->id}}" name="id">

                          <div class="form-outline">
                            <input type="text" id="form3Example1m" class="form-control form-control-lg" name="first_name" />
                            <label class="form-label" for="form3Example1m">First name</label>
                          </div>
                      
                       
                          <div class="form-outline">
                            <input type="text" id="form3Example1n" class="form-control form-control-lg" name="last_name" />
                            <label class="form-label" for="form3Example1n">Last name</label>
                          </div>
                      
                      
      
                     
                        <div class="form-outline mb-4">
                            <input type="date" id="form3Example9" class="form-control form-control-lg"  name="date_of_birth" />
                            <label class="form-label" for="form3Example9">DOB</label>
                          </div>
                       
                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example9" class="form-control form-control-lg" name="contact_number" />
                            <label class="form-label" for="form3Example9">contact number</label>
                          </div>
                      
                          <div class="form-outline mb-4">
                            <input type="file" id="form3Example9" class="form-control form-control-lg" name="image" />
                            <label class="form-label" for="form3Example9">Your Profile Photo</label>
                          </div>
                     
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4">Gender: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="female" />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                            value="male" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            value="others" />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
      
                     </div>
      <!-- <div class="form-outline mb-5">
                      <select class="form-select form-control form-control-lg fs-6" name="state_id" id="state_th">
                        <option select>State</option>
                        @foreach($state as $state)
                        <option value="{{$state->id}}">{{$state->name}}</option>
                      @endforeach
                      </select>
                 </div>  -->
                 
                 <!-- <div class="form-outline mb-4">
                        <select class="form-select form-control form-control-lg fs-6" name="district_id" id="districtr">
    
                           
                        <option value="">district</option>
                 
                          </select>
                      </div> -->
                     
                      <div class="form-outline mb-4">
                            <input type="text" id="form3Example9" class="form-control form-control-lg" name="experience" />
                            <label class="form-label" for="form3Example9">Add Experience</label>
                          </div>
                      
                     
                     
                       
                
                           <label for="exampleInputEmail1" class="form-label text-black fw-bold">Minimum Egucation Level:</label>
                    <div class="form-check form-outline mb-3 border py-2 rounded">
                     
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Secondary 10th pass">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Secondary 10th pass
                        </label>
                    </div>
                      
                      <div class="form-check mb-3 border py-2 rounded">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value=" Higher secondary">
                        <label class="form-check-label" for="flexRadioDefault1">
                         Higher secondary(12th pass)
                        </label>
                      </div>
        
                      <div class="form-check mb-3 border py-2 rounded">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Diploma">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Diploma
                        </label>
                      </div>
        
                      <div class="form-check mb-3 border py-2 rounded">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Bachelors">
                        <label class="form-check-label" for="flexRadioDefault1">
                      Bachelor's
                        </label>
                      </div>
                      
                      <div class="form-check mb-3 border py-2 rounded">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Masters">
                        <label class="form-check-label" for="flexRadioDefault1">
                     Master's
                        </label>
                      </div>
        
                      <div class="form-check mb-3 border py-2 rounded">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Doctorat">
                        <label class="form-check-label" for="flexRadioDefault1">
                      Doctorat
                        </label>
                      </div>
                     
                    
                 <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example9">Skill</label>

                  <input type="text" id="form3Example9" class="form-control form-control-lg" name="skill" />
                </div>  

                <div class="form-outline mb-4">
                            <input type="file" id="form3Example9" class="form-control form-control-lg" name="resume" />
                            <label class="form-label" for="form3Example9">Upload Your CV</label>
                          </div>
                   

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example9">Submission Date</label>

                        <input type="date" id="form3Example9" class="form-control form-control-lg" name="apply_date" />
                      </div>  
                       <!-- <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example9">upload your cv</label>

                        <input type="file" id="form3Example9" class="form-control form-control-lg" name="upload_cv" />
                      </div> -->
                     
      
                      <div class="text-center pt-3">
                        
                        
                        <button type="submit" class="btn btn-primary btn-lg ms-2">Submit form</button>
                      </div>
    
                   </div>
                  </form>
                  </div>
                  </div>
              
       
        
      </section>
      
      


      <!-- <script type="text/javascript">

$(document).ready(function(){

    $('#state_th').on('change', function () {
        var id=$(this).val();

        $.ajax({
            url: "{{url('get_district_id')}}?id="+id,
            type: "get",
            success: function (result) {
              // console.log(result);
                $("#districtr").empty();
                $.each(result, function (key, value) {
                    $("#districtr").append('<option value="' + value
                        .id + '">' + value.name + '</option>');
                });
            }
        });
    });
 }); -->


</script>
<script src="js\bootstrap.bundle.min.js"></script>
</body>
</html>
