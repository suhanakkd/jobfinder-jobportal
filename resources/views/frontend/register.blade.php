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


@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if (Session::has('success'))
<div class="alert alert-success text-center">
<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
<p>{{ Session::get('success') }}</p>
</div>
@endif
        <section class="vh-100">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100 ">
            
                        <div class="col-md-10 col-lg-4 col-xl-4 order-2 order-lg-1 border shadow p-3  bg-body rounded" >
                       
                            <div class="text-center py-2">
          <a href="{{URL::to('frontend.index')}}"><img src="{{URL::to('/')}}/frontend/image/logo.png"></a>
          </div>
     
                          <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4 text-primary">Sign up</p>
                          <!-- <form action="{{URL('registrationsave')}}" method="POST" class="mx-1 mx-md-4">
                     {{ csrf_field() }} -->
                     <form method="POST" action="{{ route('register') }}" class="mx-1 mx-md-4">
        @csrf

        <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="email" id="form3Example3c" class="form-control" name="name" />
                                <label class="form-label" for="form3Example3c">Enter Your Name</label>
                              </div>
                            </div>
                          
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="email" id="form3Example3c" class="form-control" name="email" />
                                <label class="form-label" for="form3Example3c">Your Email</label>
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="password" id="form3Example4c" class="form-control" name="password" />
                                <label class="form-label" for="form3Example4c">Password</label>
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="password" id="form3Example4cd" class="form-control" />
                                <label class="form-label" for="form3Example4cd" name="password_confirmation">Repeat your password</label>
                              </div>
                            </div>
          
                            <div class="form-check d-flex justify-content-center mb-5">
                              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                              <label class="form-check-label" for="form2Example3">
                                I agree all statements in <a href="#!">Terms of service</a>
                              </label>
                            </div>
          
                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                             <button type="submit" class="btn btn-primary btn-lg">Register</button>
                            </div>
                            <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
                            </form>
                            <div class="form-check d-flex justify-content-center">
                            
                                <label class="form-check-label" for="form2Example3">
                                  <a href="{{URL::to('frontend.login')}}">Already have an account?</a>
                                </label>
                              </div>
            

                          
          
                        
                      
                      </div>
                    </div>
                  </div>
                
          </section>


        
        
    

</body>
<script src="{{URL::to('/')}}/frontend\js\bootstrap.bundle.min.js"></script>

</body>
</html>
</html>