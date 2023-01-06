
@extends('layouts.theme')
@section('page_title')
View Item | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <h3 class="text-white bg-primary">View Item</h3>
            <div class="card card-preview">
              <div class="card-inner">
                <div class="preview-block">
<form action="" class="mt-2" method="POST">
                    @csrf
                <div class="row g-gs">   
                     <div class="col-md-8">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Item Name</label>
                                <div class="form-control-wrap">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            
                                <label class="form-label" for="designation_name">Category</label>
                                
                                <div class="form-control-wrap">
                                  
                                </div>
                            </div>
                         </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Fabric Name</label>
                                <div class="form-control-wrap">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                         <div class="form-group">
                                <label class="form-label" for="designation_name">Color</label>
                                
                                <div class="form-control-wrap">
                                 
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-4">
                         <div class="form-group">
                                <label class="form-label" for="designation_name">Color Type</label>
                               
                                <div class="form-control-wrap">
                                  
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-6">
                         <div class="form-group">
                                <label class="form-label" for="designation_name">Item Type</label>
                                
                                <div class="form-control-wrap">
                                  
                                </div>
                            </div>    
                        </div>
                         <div class="col-md-6">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Size</label>
                                
                                <div class="form-control-wrap">
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Item Description</label>
                                <div class="form-control-wrap">
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                
                    <div class="row g-gs">     
                        <div class="form-group">
                            
                             <a href="{{route('item.index')}}" class="btn btn-danger">Back</a>
                        </div>
                   </div>   
                </form>
</div> </div> </div> </div> </div> </div> 
@endsection