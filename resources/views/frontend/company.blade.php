
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



    <section class=" ">
        <div class="container">
          
           
                 
                  <div class="col-xl-6 m-auto ">
                    <div class="text-center py-4"><a href="{{URL::to('frontend.index')}}"><img src="{{URL::to('/')}}/frontend/image/logo.png"></a></div>
                    

                    <form action="{{URL('companysave')}}" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="card-body p-md-5 text-black border shadow p-3 mb-5 bg-body rounded">

                      <h3 class="mb-5 text-uppercase text-center">Company Details</h3>
      
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <div class="form-outline">
                            <input type="text"  class="form-control form-control-lg" name="name"  />
                            <label class="form-label" for="form3Example1m">Company Name</label>
                          </div>
                        </div>
                       
                      </div>
      
                     
  <div class="form-outline mb-4">
  <select class="form-select py-2" aria-label="Default select example" name="business_stream_id">
  <option selected value="">select business stream</option>
  @foreach($bsnss as $bs)
  <option value="{{$bs->id}}">{{$bs->name}}</option>
  @endforeach
</select>
                           
                          </div>
                       
                          <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example9">Established Date</label>

                            <input type="date" id="form3Example9" class="form-control form-control-lg"  name="establishment_date"/>
                          </div>
                      
                          <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example9">Company Website url</label>

                            <input type="text" id="form3Example9" class="form-control form-control-lg"  name="website_url" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example9">Logo image</label>

                            <input type="file" id="form3Example9" class="form-control form-control-lg" name="image" />
                          </div>                    
                         <button type="submit" class="btn btn-warning btn-lg ms-2" style="float: right;">Submit form</button>
                    
      
                    </div>
                    </form>
                  </div>
                
              </div>
            
        
      </section>
      
      


</body>
<script src="js\bootstrap.bundle.min.js"></script>
</body>
</html>
</html>