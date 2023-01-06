
@extends('layouts.theme')
@section('page_title')
Edit Production | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <h3 class="text-white bg-primary">Edit Production</h3>
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
                        
               <div class="col-md-7">
                <div class="form-group">
                  <label class="form-label" for="designation_name">Item Name</label>
                  <div class="form-control-wrap">
                   <select name="cust_id" id="cust_id" class="form-control">
                     <option disabled="" selected="">select</option>
                     <option value="">T-Shirt</option>
                     <option value="">Hat</option>
                     </select>
                  </div>
               </div>
                </div>
                       
                <div class="col-md-3">
                 <div class="form-group">
                   <label class="form-label" for="designation_name">Quantity</label>
                   <div class="form-control-wrap">
                    <input type="number" class="form-control" name="designation_name" >
                   </div>
                 </div>
                </div>

               
                  
               </div> 
               <div class="row g-gs"> 
                <div class="col-md-12">
                 <div class="form-group">
                   <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('view.production')}}" class="btn btn-danger">Back</a>
                    </div>
                 </div>
               </div>   
            </form>
</div> </div> </div> </div> </div> </div> 
@endsection