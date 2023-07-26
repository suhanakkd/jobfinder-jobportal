@extends('layout.layout')
@section('content')
<link href="{{url('admin/css/owl.carousel.min.css')}}" rel="stylesheet">
        <script src="{{url('admin/js/jquery.min.js')}}"></script>
  <script src="{{url('admin/js/owl.carousel.min.js')}}"></script>
  <link rel="stylesheet" href="{{url('admin/css/owl.theme.default.min.css')}}"> 

<style>


   </style>

<div class="main-panel">
        <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Aamir</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Payments Waiting For Approvals</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Account<y/th>
                          <th>Price</th>
                          <th>Date</th>
                          <th>Status</th>
                        </tr>  
                      </thead>
                      <tbody>
                  
                      
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
       

         



          </div>
          <div class="row">
   
          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Transactions Waiting For Approvals</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Account</th>
                          <th>Price</th>
                          <th>Date</th>
                          <th>Status</th>
                        </tr>  
                      </thead>
                      <tbody>
                      
                   
                          
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
       
          </div>
      
       
    
   
        
        
      
      

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.   from Sysbreeze Technologies. All rights reserved.</span>
 
          </div>
         
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
      

    <script>
         $(".carousel").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 2000,
           autoplayHoverPause: true,
           responsive: {
             0:{
               items:1,
               nav: false
             },
             600:{
               items:1,
               nav: false
             },
           
           }
         });
      </script>
</body>
@endsection
@section('script')
@endsection