
@extends('layouts.theme')
@section('page_title')
Edit Purchase | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <h3 class="text-white bg-primary">Edit Purchase</h3>
            <div class="card card-preview">
              <div class="card-inner">
                <div class="preview-block">
<form action="" class="mt-2" method="POST">
                    @csrf
                <div class="row g-gs">   
                     <!-- <div class="col-md-12">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Purchase Id</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div> -->
                        <!--  <div class="col-md-6">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Supplier Name</label>
                                <a href="{{route('add.supplier')}}"><em class="icon ni ni-plus"></em></a>
                                <div class="form-control-wrap">
                                  <select name="cust_id" id="cust_id" class="form-control">
                                     <option disabled="" selected="">select</option>
                                     <option value="">Supplier-1</option>
                                     <option value="">Supplier-2</option>
                                     <option value="">Supplier-3</option>
                                     <option value="">Supplier-4</option>
                                     <option value="">Supplier-5</option>
                                     <option value="">Supplier-6</option>
                                  </select>
                                </div>
                            </div>
                         </div> -->
                </div>
                 <div class="row g-gs"> 
                   <div class="col-md-2">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Item Id</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
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
                        <div class="col-md-2">
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
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                              <a href="{{route('purchase.index')}}" class="btn btn-danger">Back</a>

                        </div>
                   </div>   
                </form>
</div> </div> </div> </div> </div> </div> 
@endsection