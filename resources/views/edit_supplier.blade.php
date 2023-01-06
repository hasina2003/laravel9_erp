
@extends('layouts.theme')
@section('page_title')
Edit Supplier | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <h3 class="text-white bg-primary">Edit Supplier</h3>
            <div class="card card-preview">
              <div class="card-inner">
                <div class="preview-block">
 <form action="" class="mt-2" method="POST">
                    @csrf
                <div class="row g-gs">   
                     <div class="col-md-3">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Supplier Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Email</label>
                                <div class="form-control-wrap">
                                    <input type="email" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Phone</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Contact Person</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                        
                
                <div class="col-md-12">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Address</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                            </div>
                </div>

                 <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Account No.</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Account Type</label>
                               
                                <div class="form-control-wrap">
                                     <select name="cust_id" id="cust_id" class="form-control">
                                     <option disabled="" selected="">select</option>
                                     <option value="">Debit</option>
                                     <option value="">Credit</option>
                                   </select>
                                </div>
                            </div>
                        </div>
                     <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name"> Bank Name</label>
                                
                                <div class="form-control-wrap">
                                   <select name="cust_id" id="cust_id" class="form-control">
                                     <option disabled="" selected="">select</option>
                                     <option value="">Bank Asia</option>
                                     <option value="">Islami Bank</option>
                                   </select>
                                 </div>
                            </div>
                     </div>
                       <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Branch Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>  
                       
                        <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Bank Phone No.</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Bank Fax No.</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div> 
              </div>  
                
                <div class="row g-gs">     
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                             <a href="{{route('all.supplier')}}" class="btn btn-danger">Back</a>
                        </div>
                   </div>   
             </form>
</div> </div> </div> </div> </div> </div> 
@endsection