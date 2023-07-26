
@extends('layout.layout')
@section('content')
<style>
.newtable .form-control{
  background: #f7faff !important;
}
</style>
<div class="main-panel">
<div class="content-wrapper">
<div class="col-12 grid-margin createtable">
<div class="card">
                <div class="card-body">
    <div class="container">
        <form  action="{{url('store-input-fields') }}" method="POST">
                {{csrf_field()}}
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <p>{{ Session::get('success') }}</p>
            </div>
            @endif


            <div class="row">
                        
                        <div class="col-md-3">
                          <div class="form-group">
                            <label  style="color:#733dd9" class="pl-3">Date</label>
                            <div class="col-sm-12">
                              <input style="background: #f7faff;border-color:#733dd9;" type="date" class="form-control" placeholder="in_date" name="in_date" value="{{ now()->format('Y-m-d') }}"  required  />
                            </div>
                          </div>
                        </div>
  
  
                        <div class="col-md-3">
                          <div class="form-group ">
                            <label style="color:#733dd9" class="pl-3" >Invoice No</label>
                            <div class="col-sm-12">
                              <input style="background: #f7faff;border-color:#733dd9;" type="text" class="form-control" placeholder="invoice_no" name="invoice_no" value="{{$invoice_no}}" readonly  required  />
                            </div>
                          </div>
                        </div>
  
                        <div class="col-md-5">
                          <div class="form-group ">
                            <label style="color:#733dd9" class="pl-3">Customer</label>
                            <div class="col-sm-12">
                            <select style="background: #f7faff;border:1px solid #733dd9; border-color:#733dd9;!important" class="form-control"  name="customer_id" id="customer_id">
                               <option value="">Select</option>
                            @foreach($accounts as $acc)
                             <option value="{{$acc->id}}">{{$acc->name}}</option>
                            @endforeach
                             </select>
                             
                            </div>
                          </div>
                        </div>
  
                        
                       </div>
            <div class="table-responsive" style="padding: 1.25rem 1.25rem;">
            <table class="table table-hover" id="items">
                      <thead>
                        <tr style="background-color:#733dd9">
                        <th style="color:#fff">Item</th>
                            <th style="color:#fff">Quantity</th>
                            <th style="color:#fff">Price</th>
                            <th style="color:#fff">Amount</th>
                            <th style="color:#fff"></th>
                        </tr>
                      </thead>
                      <tbody>
                    
                        <tr style="background: #f7faff;">
 
                          <td style="width:40%"><input type="hidden" class="newtable form-control item-id" placeholder="Item" name="item_id0[0]"  required  />
                          <input style="background: #f7faff;border-color:#733dd9;" type="text" class="newtable form-control item" placeholder="Item" name="item_id[0]"  required  /></td>
                          <td> <input style="background: #f7faff;border-color:#733dd9;" type="number" class="form-control qty" placeholder="Quantity" name="quantity[0]" step="any"  required  /></td>
                          <td> <input style="background: #f7faff;border-color:#733dd9;" type="number" class="form-control mrp" placeholder="Price" name="mrp[0]" step="any"  required  /> </td>
                          <td> <input style="background: #f7faff;border-color:#733dd9;" type="number" class="form-control payable" placeholder="Amount" name="amount[0]" step="any"  required readonly /></td>
                          <td> 
                          &nbsp;
                        </td>
                               </tr>


                      </tbody>
                    </table>
                    <a href="" style="float:right;margin:20px 0px;border-radius:0px;padding:6px" class="pull-left btn btn-primary btn-minier" id="add_more_btn"><i class="fa fa-plus" aria-hidden="true"></i></a>
</div>
    <div class="row">
                     <div class="col-md-4 p-0">
                          <div class="form-group">
                            <label  style="color:#733dd9" class="pl-3">Sub total</label>
                            <div class="col-sm-12">
                              <input style="background: #f7faff;border-color:#733dd9;" type="number" class="form-control" placeholder="Grand Total" name="sub_total" id="sub_total" step="any"  value="0"  />
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 p-0">
                          <div class="form-group">
                            <label  style="color:#733dd9" class="pl-3">Discount</label>
                            <div class="col-sm-12">
                              <input style="background: #f7faff;border-color:#733dd9;" type="number" class="form-control" placeholder="Grand Total" name="discount" id="discount" step="any"  value="0"  />
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 p-0">
                          <div class="form-group">
                            <label  style="color:#733dd9" class="pl-3">Grand Total</label>
                            <div class="col-sm-12">
                              <input style="background: #f7faff;border-color:#733dd9;" type="number" class="form-control" placeholder="sub Total" name="grand_total" id="grand_total" step="any"  required readonly  />
                            </div>
                          </div>
                        </div>
    </div>
    <div class="row">
                        <div class="col-md-4 p-0">
                          <div class="form-group">
                            <label  style="color:#733dd9" class="pl-3">Receipt</label>
                            <div class="col-sm-12">
                              <input style="background: #f7faff;border-color:#733dd9;" type="number" class="form-control" placeholder="Grand Total" name="receipt" id="receipt" step="any"  value="0"  />
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 p-0">
                          <div class="form-group">
                            <label  style="color:#733dd9" class="pl-3">Balance</label>
                            <div class="col-sm-12">
                              <input style="background: #f7faff;border-color:#733dd9;" type="number" class="form-control" placeholder="Balance" name="balance" id="balance" step="any"  value="0"  />
                            </div>
                          </div>
                        </div>

          
   </div>
        
   <div class="" style="text-align:right">
                       <button  style="float:right;margin:20px 0px;border-radius:0px;padding:12px" type="submit" class="btn btn-primary mb-2 submit">Submit<i class="fas fa-save"></i>


                        </button>
                    </div>
            <!-- <table class="table table-bordered" id="dynamicAddRemove">
                <tr>
                    <th>Subject</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><input type="text" name="addMoreInputFields[0]" placeholder="Enter subject" class="form-control" />
                    </td>
                    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject</button></td>
                </tr>
            </table> -->
            <!-- <button type="submit" class="btn btn-outline-success btn-block">Save</button> -->
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

<!-- JavaScript -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> -->
@endsection
@section('script')
<script>
      var path = "{{ route('autocompleteproduct') }}";
    $('body').on('focus','.item',function(){
  $( ".item" ).autocomplete({

      source: function( request, response ) {
        $.ajax({
          url: path,
          type: 'GET',
          dataType: "json",
          data: {
             search: request.term
          },
          success: function( data ) {
             response( data );
          }
        });
      },
      select: function (event, ui) {
        $(this).parent().parent().find('.item').val(ui.item.label);
        $(this).parent().parent().find('.item-id').val(ui.item.id);
         console.log(ui.item); 
         return false;
      }
    });
  });
  function items(delete_btn=false){


var cont = '<tr style="background: #f7faff;">'
                     +'<td style="width:40%"><input type="hidden" class="form-control item-id" placeholder="Item" name="item_id0[]"  required  /> <input  style="background: #f7faff;border-color:#733dd9;" type="text" class="newtable form-control item" placeholder="Item" name="item_id[]"  required  /></td>'
                    +'<td><input style="background: #f7faff;border-color:#733dd9;" type="number" class="form-control qty" placeholder="Quantity" name="quantity[]"  required  /></td>'
                    +'<td><input style="background: #f7faff;border-color:#733dd9;" type="number" class="form-control mrp" placeholder="Price" name="mrp[]"  required  /> </td>'
                    +'<td><input style="background: #f7faff;border-color:#733dd9;" type="number" class="form-control payable" placeholder="Amount" name="amount[]"  required readonly /></td>'
                    +'<td><a class="delete_btn" href="#"><i class="fa fa-trash"></i> </a></td>'
                +'</tr>';
return cont;
}
$('#add_more_btn').click(function(){

$('#items').append(items(true));

return false;
});
$(document).on('click','.delete_btn',function(){
        $(this).parent().parent().remove();
        var no=0;

         grand_total();
        return false;

    });
    $('form').submit(function(){
    $(this).find('button[type="submit"]').attr('disabled','disabled');
    var error=0;
        });

        $(document).on('keyup','.qty',function(){
        var mrp=$(this).parent().parent().find('.mrp').val();
        var payable=$(this).parent().parent().find('.payable');
        var qty=$(this).val();
        var amount = qty*mrp;
        payable.val(amount.toFixed(2));
        grand_total();
        });

        $(document).on('keyup','.mrp',function(){
        var mrp=$(this).val();
        var payable=$(this).parent().parent().find('.payable');
        var qty=$(this).parent().parent().find('.qty').val();
        var amount = qty*mrp;
        payable.val(amount.toFixed(2));
        grand_total();
        });
        $(document).on('keyup','#discount',function(){
          grand_total();
        });
        $('#receipt').blur(function(){

if($(this).val()){
    var grand_total = parseFloat($('#grand_total').val());
    balance = grand_total - parseFloat($(this).val());
    $('#balance').val(balance.toFixed(2));
}
});

  
        function grand_total($nochange=null){
        var total = 0.00;  var balance = 0.00;
        $('.payable').each(function(){
            total+= parseFloat($(this).val());
        });
        $('#sub_total').val(total.toFixed(2));
        if ($('#discount').val()){
            total=total - parseFloat($('#discount').val());
        }
        $('#grand_total').val(total.toFixed(2));
        if($nochange==null){
          $('#receipt').val(total.toFixed(2));
         }
        $('#balance').val(($('#grand_total').val() - $('#receipt').val()).toFixed(2));
     
       
       

    }






</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
            ']" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
@endsection