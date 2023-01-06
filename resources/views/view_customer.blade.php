
@extends('layouts.theme')
@section('page_title')
View Order | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <h3 class="text-white bg-primary">View Customer</h3>
            <div class="card card-preview">
              <div class="card-inner">
                <div class="preview-block">
 <form action="" class="mt-2" method="POST">
                    @csrf
                <div class="row g-gs">   
                     <div class="col-md-3">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Customer Name</label>
                                <div class="form-control-wrap">
                                    Customer-1
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Email</label>
                                <div class="form-control-wrap">
                                    c@gmail.com
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Phone</label>
                                <div class="form-control-wrap">
                                    +02-000000
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Contact Person</label>
                                <div class="form-control-wrap">
                                    adc sss
                                </div>
                            </div>
                        </div>
                        
                
                <div class="col-md-12">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Address</label>
                                <div class="form-control-wrap">
                                   fg  fthft  ftyr tyr
                                </div>
                            </div>
                </div>

                 <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Account No.</label>
                                <div class="form-control-wrap">
                                    1000
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Account Type</label>
                                <div class="form-control-wrap">
                                    Debit 
                                </div>
                            </div>
                        </div>
                     <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name"> Bank Name</label>
                                <div class="form-control-wrap">
                                   <div class="form-control-wrap">
                                    Islami Bank
                                </div>
                                 </div>
                            </div>
                     </div>
                       <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Branch Name</label>
                                <div class="form-control-wrap">
                                    Panthpath
                                </div>
                            </div>
                        </div>  
                       <!-- <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Address</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="designation_name" >
                                </div>
                            </div>
                        </div>   -->
                        <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Bank Phone No.</label>
                                <div class="form-control-wrap">
                                   1233
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                                <label class="form-label" for="designation_name">Bank Fax No.</label>
                                <div class="form-control-wrap">
                                    +1234(011)
                                </div>
                            </div>
                        </div> 
              </div>  
                
                
             </form>
</div> </div> </div> </div> </div> </div> 
@endsection