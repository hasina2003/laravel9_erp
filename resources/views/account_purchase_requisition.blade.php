@extends('layouts.theme')
@section('page_title')
All Purchase Product Requisition| DashLite Admin Template
@endsection
@section('content')


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Waiting for  Purchase Product</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools justify-between g-3">
                                        <!-- <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-upload-cloud"></em><span>Purchase List</span></a></li> -->
                                       <!--  <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Item Category List</span></a></li>
                                        
                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Item Color List</span></a></li> 
                                        <li><a href="#" class="btn btn-white  btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Item Size  List</span></a></li>  -->
                                        
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
          <tr>
             <th>Requisition Id</th>
             <th>Type</th>
             <th>Date</th> 
             <!-- <th>Required For</th> -->
             <th>Item Name</th> 
             <th>Quantity</th> 
             <th>&nbsp;</th>
          </tr>
         </thead>
         <tbody class="tb-odr-body">
             <tr>
              <td>1</td>
               <td>General</td>
               <td>04/01/2022</td>
               <!-- <td>Production</td> -->
               <td>Pestal Color</td>
               <td>100</td>
             <td>
              <div class="tb-odr-btns d-none d-sm-inline">
              
               <a href="" class="btn btn-sm btn-success">Accept</a>
               <a href="" class="btn btn-sm btn-danger">Reject</a>
               <a href="{{route('change.requisition')}}" class="btn btn-sm btn-info">Change</a>
             </div>
                                                    
           </td>
         </tr><!-- .tb-odr-item -->
       </tbody>
      </table>
    </div><!-- .card-inner -->
   </div><!-- .card-inner-group -->
  


@endsection