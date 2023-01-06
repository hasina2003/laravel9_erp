
@extends('layouts.theme')
@section('page_title')
Item Size | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <h3 class="text-white bg-primary">Item Size</h3>
            <div class="card card-preview">
              <div class="card-inner">
                <div class="preview-block">
<form action="" class="mt-2" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row g-gs">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label" for=" product_name">Size</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control" name=" product_name" required>
                </div>
            </div>
       </div>
       <div class="form-group">
            <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
            <button type="submit" name="submit" class="btn btn-danger">Back</button>
        </div>
</div>
        
     
    </form>
</div> </div> </div> </div> </div> </div> 
@endsection