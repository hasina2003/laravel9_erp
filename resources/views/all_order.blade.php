@extends('layouts.theme')
@section('page_title')
All Order | DashLite Admin Template
@endsection
@section('content')


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">All Order</h3>
                        </div><!-- .nk-block-head-content -->
                    <div class="nk-block-between g-3">
                        
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools justify-between g-3">
                                        <li>
                                            
                                         <div class="form-group">
                                        <label class="form-label">Order No. </label>
                                         <div class="form-control-wrap">
                                          <input type="text" class="form-control" name="leave_from">
                                        </div>
                                      </div>  
                                     
                                        </li>
                                        <li>
                                            <div class="form-group">
                                        <label class="form-label">Start Date </label>
                                         <div class="form-control-wrap">
                                           <div class="form-icon form-icon-right">
                                             <em class="icon ni ni-calendar-alt"></em>
                                          </div>
                                          <!-- <em class="icon ni ni-calendar-alt"></em>-->
                                            <input type="text" class="form-control date-picker" name="leave_from"> 
                                        </div>
                                      <!-- </div>   -->
                                     <div class="form-group">
                                      <label class="form-label">End Date</label>
                                       <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                         <em class="icon ni ni-calendar-alt"></em>
                                        </div>
                                        <!-- <em class="icon ni ni-calendar-alt"></em>-->
                                            <input type="text" class="form-control date-picker" name="leave_from"> 
                                     
                                      </div>
                                      
                                           
                                        </li>
                                        <li>
                                          <div class="form-group">
                                          <a href="{{route('order.list')}}" class="btn btn-white btn-outline-light"><em class="icon ni ni-upload-cloud"></em><span>Order List</span></a>
                                          </div> 
                                        </li>
                                        <!-- <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Processing  Order List</span></a></li>
                                        
                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Waiting  Order List</span></a></li>  -->
                                        <li><a href="#" data-toggle="modal" data-target="#addDesignation" class="btn text-white bg-primary"><em class="icon ni ni-plus"></em><span>Add New</span></a></li>
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
                <span class="amount">500</span>
                </span>
               </td>
               <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">Piece</span>
                </span>
               </td>
             <td class="tb-odr-action">
              <div class="tb-odr-btns d-none d-sm-inline">
               <a href="{{route('view.order')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-binoculars" viewBox="0 0 16 16">
                <path d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V2.5zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5h-1zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V4zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5V3zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14z"/>
                </svg>
                </a>||
                <a href="{{route('edit.order')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
               </svg>
                </a>||
               <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg>
               </a>
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
                                <a href="{{route('add.customer')}}"> <em class="icon ni ni-plus"></em><span></span></a>
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
                             <a href="{{route('order.index')}}" class="btn btn-danger">Back</a>
                        </div>
                   </div>   
                </form>
            </div>
        </div>
    </div>
</div><!-- .Add Modal-Content -->


@endsection