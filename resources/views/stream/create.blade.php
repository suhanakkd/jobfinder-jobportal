@extends('layout.layout')
@section('content')

<div class="main-panel">
<div class="content-wrapper">
<div class="col-12 grid-margin createtable">
              <div class="card">
                <div class="card-body">
           
                  
                        <div class="row">
                        <div class="col-md-6">
                                 <h4 class="card-title">Degree Stream</h4>
                        </div>
                           <div class="col-md-6 heading">
                             <a href="{{URL::to('stream/index')}}" class="backicon"><i class="mdi mdi-backburger"></i></a>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    
                    <div class="row">
                    <br>
                   </div>
                
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
           
        </div>
                  <form class="form-sample"  action="{{url('savedata')}}" method="post"   >
                          {{csrf_field()}}
                    <div class="row">
                      
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Select Stream</label>
                          <div class="col-sm-9">
                          <select class="form-control"  name="degree_id" id="degree_id">
                             <option value="">Select Stream</option>
                          @foreach($degree as $deg)
                           <option value="{{$deg->id}}">{{$deg->name}}</option>
                          @endforeach
                           </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Stream</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="Name" name="name"  required/>
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
