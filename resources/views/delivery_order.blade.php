@extends('layouts.theme')
@section('page_title')
All Delivery Order | DashLite Admin Template
@endsection
@section('content')


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">All Delivery Order</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools justify-between g-3">
                                        <li><a href="{{route('completed.order')}}" class="btn btn-white btn-outline-light"><em class="icon ni ni-upload-cloud"></em><span>Completed Order List</span></a></li>
                                        <li><a href="{{route('processing.order')}}" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Processing  Order List</span></a></li>
                                        
                                        <li><a href="{{route('waiting.order')}}" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Waiting  Order List</span></a></li> 
                                        <!-- <li><a href="#" data-toggle="modal" data-target="#addDesignation" class="btn text-white bg-primary"><em class="icon ni ni-plus"></em><span>Add New</span></a></li> -->
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
              
 <div class="card card-preview">
    <div class="card-inner">
      <table class="datatable-init nowrap table">
        <thead class="tb-odr-head">
          <tr class="tb-odr-item">
             <th class="tb-odr-amount">
               <span class="tb-odr-total">Order No.</span>
              </th>
             <th class="tb-odr-amount">
               <span class="tb-odr-total">Customer</span>
              </th>
              <th class="tb-odr-amount">
               <span class="tb-odr-total">Total Quantity</span>
              </th>  
              <th class="tb-odr-amount">
               <span class="tb-odr-total">Unit</span>
              </th> 
             <th class="tb-odr-action">&nbsp;</th>
          </tr>
         </thead>
         <tbody class="tb-odr-body">
             <tr class="tb-odr-item">
              <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">0000001</span>
                </span>
               </td>
               <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">Customer-1</span>
                </span>
               </td>
               <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">5000</span>
                </span>
               </td>
               <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">Piece</span>
                </span>
               </td>
             <td class="tb-odr-action">
              <div class="tb-odr-btns d-none d-sm-inline">
               <a href="{{ route('delivery.product') }}" class="btn btn-sm btn-success">Delivery Challan</a>
             </div>
                                                    
           </td>
         </tr><!-- .tb-odr-item -->
        
       </tbody>
      </table>
    </div><!-- .card-inner -->
   </div><!-- .card-inner-group -->
  
                

<div class="modal fade" id="addDesignation">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Add Order</h5>
                <form action="" class="mt-2" method="POST">
                    @csrf

                <div class="row g-gs">   
                     <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Order No.</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                          	
                                <label class="form-label" for="designation_name">Customer</label>
                                <div class="form-control-wrap">
                                  <select name="cust_id" id="cust_id" class="form-control">
                                     <option disabled="" selected="">select</option>
                                     <option value="">Customer-1</option>
                                     <option value="">Customer-2</option>
                                     <option value="">Customer-3</option>
                                     <option value="">Customer-4</option>
                                  </select>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Total Quantity</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                       <div class="col-md-4">
                         <div class="form-group">
                         	 
                                <label class="form-label" for="designation_name">Team</label>
                                <div class="form-control-wrap">
                                  <select name="cust_id" id="cust_id" class="form-control">
                                     <option disabled="" selected="">select</option>
                                     <option value="">Team-1</option>
                                     <option value="">Team-2</option>
                                     <option value="">Team-3</option>
                                  </select>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Order Date</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-calendar-alt"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" name="emp_dob">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Delivery Date</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-calendar-alt"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" name="emp_dob">
                                </div>
                            </div>
                        </div>
                        </div>
                <div class="row g-gs"> 
                   <div class="col-md-2">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Item Id</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-2">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Quantity</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Unit Price</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Unit</label>
                                <div class="form-control-wrap">
                                  <select name="cust_id" id="cust_id" class="form-control">
                                     <option disabled="" selected="">select</option>
                                     <option value="">Gallon</option>
                                     <option value="">Tin</option>
                                     <option value="">Liter</option>
                                     <option value="">Piece</option>
                                     <option value="">Miter</option>
                                     <option value="">Centimeter</option>
                                  </select>
                                </div>
                            </div>
                         </div>

                        <div class="col-md-2">
                            <div class="form-group">
                            	<div class="form-control-wrap">
                                    <button type="submit" name="submit" class="btn btn-primary"><em class="icon ni ni-plus"></em></button>
                                </div>
                               
                            </div>
                        </div> 
                </div>   
                
                    <div class="row g-gs">     
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                             <button type="submit" name="submit" class="btn btn-danger">Back</button>
                        </div>
                   </div>   
                </form>
            </div>
        </div>
    </div>
</div><!-- .Add Modal-Content -->


@endsection