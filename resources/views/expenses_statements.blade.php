@extends('layouts.theme')
@section('page_title')
Expense Statement | DashLite Admin Template
@endsection
@section('content')


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Expense Statement</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools justify-between g-3">
                                       <li>
                                       <div class="form-group">
                                <label class="form-label">Start Date </label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-calendar-alt"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" name="leave_from">
                                </div>
                            </div>  
                                        <div class="form-group">
                                <label class="form-label">End Date</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-calendar-alt"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" name="leave_from">
                                </div>
                            </div>
                                       <a href="{{route('expense.list')}}" class="btn btn-white btn-outline-light"><em class="icon ni ni-upload-cloud"></em><span>Expense List</span></a></li>
                                         <li> 
                                         	
                                         	<!-- <label class="form-label" for="designation_name">Head of Accounts</label>
			                                <div class="form-control-wrap">
			                                  <select name="cust_id" id="cust_id" class="form-control">
			                                     <option disabled="" selected="">select</option>
			                                     <option value="">Cash in hand</option>
			                                     <option value="">Bank Asia #345</option>
			                                     <option value="">Islami Bank #1234</option>
			                                     <option value="">Advance & Deposit</option>
			                                     <option value="">Computers & Accessories</option>
			                                     <option value="">Electrical Equipments</option>
			                                  </select>
			                                </div>
                                         	<a href="#" class="btn btn-white btn-outline-light">Search</a> -->
                                         </li>
                                        
                                        <!--<li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Waiting  Order List</span></a></li>  -->
                                       <!--  <li>
                                        	<a href="#" data-toggle="modal" data-target="#addDesignation" class="btn text-white bg-primary"><em class="icon ni ni-plus"></em><span>Add New</span></a>
                                        </li> -->
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
               <span class="tb-odr-total">Head of Accounts</span>
              </th>
              <th class="tb-odr-amount">
               <span class="tb-odr-total">Voucher No.</span>
              </th> 
              
              <th class="tb-odr-amount">
               <span class="tb-odr-total">Amount</span>
              </th> 
             <th class="tb-odr-action">&nbsp;</th>
          </tr>
         </thead>
         <tbody class="tb-odr-body">
          
        <tr class="tb-odr-item">
              <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">Bank Asia</span>
                </span>
               </td>
               <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">1234</span>
                </span>
               </td>
               <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">100000</span>
                </span>
               </td>
            
         </tr><!-- .tb-odr-item -->
          <tr class="tb-odr-item">
              <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">Total</span>
                </span>
               </td>
               <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount"></span>
                </span>
               </td>
               <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">100000</span>
                </span>
               </td>
            
         </tr><!-- .tb-odr-item -->
       </tbody>
      </table>
    </div><!-- .card-inner -->
   </div><!-- .card-inner-group -->
 


@endsection