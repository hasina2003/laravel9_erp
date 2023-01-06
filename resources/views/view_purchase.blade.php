
@extends('layouts.theme')
@section('page_title')
View Purchase | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <h3 class="text-white bg-primary">View Purchase</h3>
            <div class="card card-preview">
              <div class="card-inner">
                <div class="preview-block">
<form action="" class="mt-2" method="POST">
                    @csrf
                <div class="row g-gs">   
                     <!-- <div class="col-md-6">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Purchase Id</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div> -->
                         <div class="col-md-6">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Supplier Name</label>
                                
                                <div class="form-control-wrap">
                                   Supplier-1
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
                                    200
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
                        <div class="col-md-2">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Unit Price</label>
                                <div class="form-control-wrap">
                                    100
                                </div>
                            </div>
                        </div>
                        
                          
                   
                        
                </div> 
                <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <a href="{{route('purchase.index')}}" class="btn btn-danger">Back</a>
                                </div>
                               
                            </div>
                        </div> 
                
                </form>
</div> </div> </div> </div> </div> </div> 
@endsection