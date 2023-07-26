<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('dashboard')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#staff" aria-expanded="false" aria-controls="charts">
            
              <i class="mdi mdi-note-outline menu-icon"></i>
              <span class="menu-title">Graduation Details</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="staff">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('degree/index')}}">Add degree</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('stream/index')}}">Add Stream</a></li>
               
            
              </ul>
            </div>
     
          </li> 
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#staff" aria-expanded="false" aria-controls="charts">
            
              <i class="mdi mdi-note-outline menu-icon"></i>
              <span class="menu-title">State Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="staff">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('state/index')}}">Add State</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('district/index')}}">Add District</a></li>
               
            
              </ul>
            </div>
     
          </li> 
          <li class="nav-item">
            <a class="nav-link"  href="{{URL::to('business_stream/index')}}" aria-expanded="false" aria-controls="charts">
              <!-- <i class="icon-bar-graph menu-icon"></i> -->
              <i class="mdi mdi-account-outline menu-icon"></i>
              <span class="menu-title">Business Stream</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#staff" aria-expanded="false" aria-controls="charts">
            
              <i class="mdi mdi-note-outline menu-icon"></i>
              <span class="menu-title">Job Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="staff">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('category/index')}}">Job category</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('jobtype/index')}}">job-type</a></li>
               
            
              </ul>
            </div>
     
          </li>
          

<!-- 
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#staff" aria-expanded="false" aria-controls="charts">
            
              <i class="mdi mdi-note-outline menu-icon"></i>
              <span class="menu-title">Joining Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="staff">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('today-joining')}}">Today</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('this-week-joining')}}">This Week</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('this-month-joining')}}">This Month</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('this-year-joining')}}">This Year</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('scheme-wise-joining')}}">Scheme Wise</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('day-wise-joining')}}">Day Wise</a></li>
            
              </ul>
            </div>
     
          </li> -->
          <li class="nav-item">
            <a class="nav-link"  href="{{URL::to('packing_list')}}" aria-expanded="false" aria-controls="charts">
              <!-- <i class="icon-bar-graph menu-icon"></i> -->
              <i class="mdi mdi-account-outline menu-icon"></i>
              <span class="menu-title">Packing</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{URL::to('sales_order')}}" aria-expanded="false" aria-controls="charts">
              <!-- <i class="icon-bar-graph menu-icon"></i> -->
              <i class="mdi mdi-account-outline menu-icon"></i>
              <span class="menu-title">Sales Order</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{URL::to('goods_out')}}" aria-expanded="false" aria-controls="charts">
              <!-- <i class="icon-bar-graph menu-icon"></i> -->
              <i class="mdi mdi-account-outline menu-icon"></i>
              <span class="menu-title">Sales</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{URL::to('purchase_order')}}" aria-expanded="false" aria-controls="charts">
            <i class="mdi mdi-routes menu-icon"></i>
              <span class="menu-title">Purchase Order</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{URL::to('goods_in')}}" aria-expanded="false" aria-controls="charts">
            <i class="mdi mdi-routes menu-icon"></i>
              <span class="menu-title">Purchase</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{URL::to('vendors')}}" aria-expanded="false" aria-controls="charts">
            <i class="mdi mdi-stop-circle-outline menu-icon"></i> 
              <span class="menu-title">Vendors</span>
           
            </a>
   
     
          </li>
<!--    
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#route" aria-expanded="false" aria-controls="charts">
              <i class="mdi mdi-routes menu-icon"></i>
              <span class="menu-title">Place</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="route">
              <ul class="nav flex-column sub-menu">
            
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('route-place')}}">Place</a></li> 
              </ul>
            </div>
     
          </li> -->
        
          <li class="nav-item">
            <a class="nav-link"  href="{{URL::to('staff-register')}}" aria-expanded="false" aria-controls="charts">
            <i class="mdi mdi-cash-usd  menu-icon"></i>
              <span class="menu-title">Staff Register</span>
      
            </a>
          </li>
     
          <li class="nav-item">
            <a class="nav-link"  href="{{URL::to('receipts')}}" aria-expanded="false" aria-controls="charts">
              <i class="mdi mdi-call-received menu-icon"></i>
              <span class="menu-title">Reciept Genration</span>
      
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{URL::to('payments')}}" aria-expanded="false" aria-controls="charts">
              <i class="mdi mdi-certificate menu-icon"></i>
              <span class="menu-title">Payment Genration</span>
      
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('setting')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Settings</span>
            </a>
          </li>

                    <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#referral" aria-expanded="false" aria-controls="charts">
               <i class="icon-bar-graph menu-icon"></i> 
              <span class="menu-title">Referral Report</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="referral">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('reffral_report')}}">This Month</a></li> 
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('reffral_report_datewise')}}">Date Wise</a></li> 
              </ul>
            </div>
     
          </li> -->
           <!-- <li class="nav-item">
            <a class="nav-link"  href="{{URL::to('otp-list')}}" aria-expanded="false" aria-controls="charts">
          
              <i class="mdi mdi-account-outline menu-icon"></i>
              <span class="menu-title">Otp List</span>
            </a>
          </li> -->
        </ul>
      </nav>