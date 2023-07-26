@extends('layout.layout')
@section('content')

<div class="main-panel">
<div class="content-wrapper">
<div class="col-12 grid-margin createtable">
              <div class="card">
                <div class="card-body">
           
                  
                        <div class="row">
                        <div class="col-md-6">
                                 <h4 class="card-title">Customer</h4>
                        </div>
                           <div class="col-md-6 heading">
                             <a href="{{URL::to('customer')}}" class="backicon"><i class="mdi mdi-backburger"></i></a>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    
                    <div class="row">
                    <br>
                   </div>
                
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
           
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div><br />
          @endif
          
        </div>
                  <form class="form-sample"  action="{{url('customer/store')}}" method="post" enctype="multipart/form-data"  >
                          {{csrf_field()}}
                    <div class="row">
                        
                
                      
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Name" name="name"  required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Country </label>
                          <div class="col-sm-9">
                          <select class="form-control"  name="country_id" id="country_id">
                             <option value="">Select Country</option>
                          @foreach($country as $cntry)
                           <option value="{{$cntry->id}}">{{$cntry->name}}</option>
                          @endforeach
                           </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Mobile </label>
                          <div class="col-sm-3">
                          <input type="text" class="form-control" placeholder="Country Code " name="country_code" id="country_code"  required readonly />
                          </div>
                          <div class="col-sm-6">
                          <input type="text" class="form-control" placeholder="mobile " name="mobile"  required  />
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <textarea name="address" class="form-control" id="address" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                      </div>

             

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Postal Code</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Postal Code" name="post"  />
                          </div>
                        </div>
                      </div>


                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Town</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Town" name="town"   />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Whatsapp No</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Whatsapp No" name="whatsapp_no"  required  />
                          </div>
                        </div>
                      </div>


                        
                        
                        
                      </div>
              
                
                    
                    
                    
                
                <div class="submitbutton">
                    <button type="submit" class="btn btn-primary mb-2 submit">Submit<i class="fas fa-save"></i>


</button>
                    </div>
                    
                    
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
            </div>
               
@endsection
@section('script')
<script src="{{url('front-end/assets/js/jquery-3.3.1.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $(document).on('change','#country_id',function(){
          var country_id=$(this).val();
          $.ajax({
         type:"GET",
         url:"{{url('/getcountrycode')}}?country_id="+country_id,
         success:function(res){  

console.log(res);

 if(res){

  $('#country_code').val(res.code);
         }
        }
       });

        });
    });
      </script>
@endsection