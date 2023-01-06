@extends('layouts.theme')
@section('page_title')
All Delivery Challan | DashLite Admin Template
@endsection
@section('content')


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">All Delivery Challan</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools justify-between g-3">
                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-upload-cloud"></em><span>Challan List</span></a></li>
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
               <span class="tb-odr-total">Item Id</span>
              </th>
              <th class="tb-odr-amount">
               <span class="tb-odr-total">Customer</span>
              </th>
              <th class="tb-odr-amount">
               <span class="tb-odr-total">Total Quantity</span>
              </th>
             <th class="tb-odr-action">&nbsp;</th>
          </tr>
         </thead>
         <tbody class="tb-odr-body">
          <tr class="tb-odr-item">
              <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">1000</span>
                </span>
               </td>
               <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">Customer-1</span>
                </span>
               </td>
               <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">1000</span>
                </span>
               </td>
             <td class="tb-odr-action">
              <div class="tb-odr-btns d-none d-sm-inline">
               <a href="{{ route('delivery.product') }}" class="btn btn-sm btn-success">Challan</a>
             </div>
                                                    
           </td>
          </tr><!-- .tb-odr-item -->
           <tr class="tb-odr-item">
              <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">2</span>
                </span>
               </td>
               <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">1</span>
                </span>
               </td>
               <td class="tb-odr-amount">
               <span class="tb-odr-total">
                <span class="amount">500</span>
                </span>
               </td>
             <td class="tb-odr-action">
              <div class="tb-odr-btns d-none d-sm-inline">
               <a href="{{ route('delivery.product') }}" class="btn btn-sm btn-success">Challan</a>
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
                <h5 class="modal-title">Add Production</h5>
                <form action="" class="mt-2" method="POST">
                    @csrf

                <div class="row g-gs">   
                  <div class="col-md-12">
                   <div class="form-group">
                    <label class="form-label" for="designation_name">Order No.</label>
                    <div class="form-control-wrap">
                      <input type="text" class="form-control" name="designation_name" >
                    </div>
                   </div>
                  </div>
                        
               <div class="col-md-7">
                <div class="form-group">
                  <label class="form-label" for="designation_name">Item Name</label>
                  <div class="form-control-wrap">
                   <select name="cust_id" id="cust_id" class="form-control">
                     <option disabled="" selected="">select</option>
                     <option value="">T-Shirt</option>
                     <option value="">Hat</option>
                     </select>
                  </div>
               </div>
                </div>
                       
                <div class="col-md-3">
                 <div class="form-group">
                   <label class="form-label" for="designation_name">Quantity</label>
                   <div class="form-control-wrap">
                    <input type="number" class="form-control" name="designation_name" >
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
                <div class="col-md-12">
                 <div class="form-group">
                   <button type="submit" name="submit" class="btn btn-primary">Save</button>
                   <button type="submit" name="submit" class="btn btn-danger">Back</button>
                    </div>
                 </div>
               </div>   
            </form>
            </div>
        </div>
    </div>
</div><!-- .Add Modal-Content -->


@endsection