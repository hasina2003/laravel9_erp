
@extends('layouts.theme')
@section('page_title')
Edit Item | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <h3 class="text-white bg-primary">Edit Item</h3>
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
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            
                                <label class="form-label" for="designation_name">Category</label>
                               
                                <div class="form-control-wrap">
                                  <select name="cust_id" id="cust_id" class="form-control">
                                     <option disabled="" selected="">select</option>
                                     <option value="">Sales</option>
                                     <option value="">Purchase</option>
                                    </select>
                                </div>
                            </div>
                         </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Fabric Id</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                         <div class="form-group">
                                <label class="form-label" for="designation_name">Color</label>
                                
                                <div class="form-control-wrap">
                                  <select name="cust_id" id="cust_id" class="form-control">
                                     <option disabled="" selected="">select</option>
                                     <option value="">Black</option>
                                     <option value="">Cyan</option>
                                     <option value="">Blue</option>
                                     <option value="">White</option>
                                  </select>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-4">
                         <div class="form-group">
                                <label class="form-label" for="designation_name">Color Type</label>
                               
                                <div class="form-control-wrap">
                                  <select name="cust_id" id="cust_id" class="form-control">
                                     <option disabled="" selected="">select</option>
                                     <option value="">Pestal</option>
                                     <option value="">Dry</option>
                                     <option value="">Water Color</option>
                                  </select>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-6">
                         <div class="form-group">
                                <label class="form-label" for="designation_name">Item Type</label>
                               
                                <div class="form-control-wrap">
                                  <select name="cust_id" id="cust_id" class="form-control">
                                     <option disabled="" selected="">select</option>
                                     <option value="">Print</option>
                                     <option value="">Embroidery</option>
                                     <option value="">Stiker</option>
                                  </select>
                                </div>
                            </div>    
                        </div>
                         <div class="col-md-6">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Size</label>
                               
                                <div class="form-control-wrap">
                                    <select name="cust_id" id="cust_id" class="form-control">
                                     <option disabled="" selected="">select</option>
                                     <option value="">L</option>
                                     <option value="">M</option>
                                     <option value="">S</option>
                                  </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Item Description</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        </div>
                
                    <div class="row g-gs">     
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                             <a href="{{route('item.index')}}" class="btn btn-danger">Back</a>
                        </div>
                   </div>   
                </form>
</div> </div> </div> </div> </div> </div> 
@endsection