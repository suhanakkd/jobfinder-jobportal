
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

    <section class="h-100 ">
        <div class="container h-100">
          
           
        <form action="{{URL('edit_personal_save')}}" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }} 
                  <div class="col-xl-6 m-auto">
                    <div class="text-center py-4"><a href="{{URL::to('frontend.index')}}"><img src="{{URL::to('/')}}/frontend/image/logo.png"></a></div>
                    <div class="card-body p-md-5 text-black border shadow p-3 mb-5 bg-body rounded">
                      <h3 class="mb-5 text-uppercase text-center">Personal Details</h3>

     
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1m" class="form-control form-control-lg" name="first_name" value="{{$editdata->first_name}}" />
                            <label class="form-label" for="form3Example1m">First Name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1n" class="form-control form-control-lg" name="last_name" value="{{$editdata->last_name}}" />
                            <label class="form-label" for="form3Example1n">Last Name</label>
                          </div>
                        </div>
                      </div>
      
                     
                        <div class="form-outline mb-4">
                            <input type="date" id="form3Example9" class="form-control form-control-lg" name="date_of_birth" value="{{$editdata->date_of_birth}}" />
                            <label class="form-label" for="form3Example9">DOB</label>
                          </div>
                       
                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example9" class="form-control form-control-lg" name="contact_number"  value="{{$editdata->contact_number}}" />
                            <label class="form-label" for="form3Example9"></label>
                          </div>
                      
                          <div class="form-outline mb-4">
                            <input type="file" id="form3Example9" class="form-control form-control-lg" name="file" />
                            <label class="form-label" for="form3Example9">Upload profile photo</label>
                          </div>
                     
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4">Gender: </h6>
                        @if($editdata->gender=='female')
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="female" checked />
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
                        @elseif($editdata->gender=='male')
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="female"  />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                            value="male" checked />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            value="others" />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
                        @else($editdata->gender=='others')
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="female"  />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                            value="male" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            value="others"  checked />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
                        @endif
                      </div>
     
    
      
                      <div class="d-flex justify-content-between pt-3">
                        
                        <a href="{{URL::to('frontend.postjob-first')}}" >Skip >></a>
                        <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                      </div>
      
                    </div>
</form>
                  </div>
                
              
            
        
      </section>
      
      


</body>
<script src="URL::to('/')}}/frontend\js\bootstrap.bundle.min.js"></script>
</body>
</html>
</html>