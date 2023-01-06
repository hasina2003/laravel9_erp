
@extends('layouts.theme')
@section('page_title')
Edit Order | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <h3 class="text-white bg-primary">Edit Order</h3>
            <div class="card card-preview">
              <div class="card-inner">
                <div class="preview-block">
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
                        <!-- <div class="col-md-4">
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
                         </div> -->
                         <!-- <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Total Quantity</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div> -->
                       <!-- <div class="col-md-4">
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
                        </div> -->
                        <!-- <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Order Date</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-calendar-alt"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" name="emp_dob">
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-4">
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
 -->

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
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                             <a href="{{route('order.index')}}" class="btn btn-danger">Back</a>
                        </div>
                   </div>   
                </form>
</div> </div> </div> </div> </div> </div> 
@endsection