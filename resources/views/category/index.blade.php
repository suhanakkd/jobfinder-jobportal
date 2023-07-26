@extends('layout.layout')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <h4 class="card-title">JOB CATEGORY TABLE</h4></h4>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 heading">
                           <a href="{{URL::to('category/create')}}" class="newicon"><i class="mdi mdi-new-box"></i></a>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                 
                  <p class="card-description">
                
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover" id="value-table">
                      <thead>
                        <tr>
                        <th>SL.NO</th>
                          <th>Category</th>
                          <th>Category_image</th>
                           <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($category as $key=>$cat)
    <tr>
      <td scope="row">{{$key+1}}</td> 
      <td scope="row">{{$cat->name}}</td> 
      <td scope="row"><img src="{{url('')}}/uploads/{{$cat->category_image}}" width="60px" height="60px"></td>
      <td> 
                          <a href="{{URL::to('category/edit/'.$cat->id)}}" class="btn btnsmall  btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                        <a href="{{URL::to('delete/'.$cat->id)}}" class="btn btnsmall  btn-outline-secondary btn-icon-text">
                          Delete
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
</td>

                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
            
@endsection
