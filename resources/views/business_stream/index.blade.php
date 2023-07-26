@extends('layout.layout')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <h4 class="card-title">BUSINESS STREAM TABLE</h4></h4>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 heading">
                           <a href="{{URL::to('business_stream/create')}}" class="newicon"><i class="mdi mdi-new-box"></i></a>
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
                          <th>Business stream</th>
                           <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($stream as $key=>$st)
    <tr>
      <td scope="row">{{$key+1}}</td> 
      <td scope="row">{{$st->name}}</td> 
      <td> 
                          <a href="{{URL::to('business_stream/edit/'.$st->id)}}" class="btn btnsmall  btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                        <a href="{{URL::to('delete/'.$st->id)}}" class="btn btnsmall  btn-outline-secondary btn-icon-text">
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
