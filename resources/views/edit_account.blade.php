
@extends('layouts.theme')
@section('page_title')
Edit Account | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <h3 class="text-white bg-primary">Edit Account</h3>
            <div class="card card-preview">
              <div class="card-inner">
                <div class="preview-block">
 <form action="" class="mt-2" method="POST">
                    @csrf
                <div class="row g-gs"> 
                     <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name"> Head of Accounts</label>
                                <a href="{{ route('head.account') }}"><em class="icon ni ni-plus"></em></a>
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
                            </div>
                     </div>
                        
                        <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Account Id</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            
                                <label class="form-label" for="designation_name">Account Type</label>
                                <a href="{{ route('account.type') }}"><em class="icon ni ni-plus"></em></a>
                                <div class="form-control-wrap">
                                  <select name="cust_id" id="cust_id" class="form-control">
                                     <option disabled="" selected="">select</option>
                                     <option value="">Assets</option>
                                     <option value="">Liability</option>
                                  </select>
                                </div>
                            </div>
                         </div>
                          <div class="col-md-12">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Particular</label>
                                
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>
                       
                </div>
                    <div class="row g-gs">     
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                             <a href="{{route('account.index')}}" class="btn btn-danger">Back</a>
                        </div>
                   </div>   
                </form>
</div> </div> </div> </div> </div> </div> 
@endsection