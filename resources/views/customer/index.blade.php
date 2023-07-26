@extends('layout.layout')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <h4 class="card-title">Customer</h4></h4>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 heading">
                           <a href="{{URL::to('customer/create')}}" class="newicon"><i class="mdi mdi-new-box"></i></a>
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
                          <th>Name</th>
                          <th>Mobile</th>
                          <th>Address</th>
                          <th>Country</th>
                          <th>Status</th>
                           <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                            @if(count($customer))
                        @foreach($customer as $key=>$ce)
                        <tr>
                          <td>{{$ce->name}}</td>
                          <td>{{$ce->mobile }}</td>
                          <td >{{$ce->address}} </td>
                          @foreach($ce->country as $cntry)
                          <td>{{$cntry->country_name}} </td>
                          @endforeach
                          <td>@if($ce->status==0)<label class="badge badge-danger">Deactive</label>@else<label class="badge badge-success">Active</label>@endif</td>
                          
                        <td> 
                          <a href="customer/edit/{{$ce->id}}" class="btn btnsmall  btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                        @if($ce->status==0) <a href="customer/active/{{$ce->id}}" class="btn btnsmall btn-outline-secondary btn-icon-text">Enable<i class="mdi mdi-account"></i> </a> @else <a href="customer/deactive/{{$ce->id}}" class="btn  btnsmall btn-outline-secondary btn-icon-text">Disable<i class="mdi mdi-account-off"></i></a> @endif
                        </td>
                        </tr>
                         @endforeach
                          @endif
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
            
@endsection
@section('script')
<script>
    $(document).ready( function () {
    $('#value-table').DataTable();
} );
</script>
@endsection
