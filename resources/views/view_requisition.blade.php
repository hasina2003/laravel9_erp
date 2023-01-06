
@extends('layouts.theme')
@section('page_title')
View Requisition | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <h3 class="text-white bg-primary">View Requisition</h3>
            <div class="card card-preview">
              <div class="card-inner">
                <div class="preview-block">
<form action="" class="mt-2" method="POST">
                    @csrf
                <div class="row g-gs">   
                     <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Requisition No.</label>
                                <div class="form-control-wrap">
                                    1
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Requisition Date</label>
                                <div class="form-control-wrap">
                                    3rd Jan,2023
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                         <div class="form-group">
                                <label class="form-label" for="designation_name">Requisition Type</label>
                                <div class="form-control-wrap">
                                 General
                                </div>
                            </div>    
                        </div>
                       
                    </div>
                <div class="row g-gs"> 
                   <div class="col-md-2">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Item Name</label>
                                <div class="form-control-wrap">
                                    Pestal Color
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Quantity</label>
                                <div class="form-control-wrap">
                                    100
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Unit</label>
                                <div class="form-control-wrap">
                                  Pieces
                                </div>
                            </div>
                         </div>
                        
                        <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Remarks</label>
                                <div class="form-control-wrap">
                                     
                                </div>
                            </div>
                        </div>
                   
                </div>   
                
                    <div class="row g-gs">     
                        <div class="form-group">
                           
                              <a href="{{route('purchase.requisition')}}" class="btn btn-danger">Back</a>
                        </div>
                   </div>   
                </form>
</div> </div> </div> </div> </div> </div> 
@endsection