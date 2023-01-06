
@extends('layouts.theme')

@section('page_title')
ADD Product | DashLite Admin Template
@endsection

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <h3 class="text-white bg-primary">ADD Product</h3>
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        
                         
<form action="{{ route('product.store') }}" class="mt-2" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row g-gs">
        <div class="col-md-4">
           
            <div class="form-group">
                <label class="form-label" for=" product_name">Product Name</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control" name=" product_name" required>
                </div>
            </div>
       </div>
       <div class="col-md-4">
            <div class="form-group">
                <label class="form-label" for="product_code">Product Code</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control" name="product_code" required>
                </div>
            </div>
        </div>
         <div class="col-md-4">
            <div class="form-group">
                <label class="form-label" for="quantity">quantity</label>
                <div class="form-control-wrap">
                    <input type="number" class="form-control" name="quantity" required>
                </div>
            </div>
          </div>
           <div class="col-md-3">
            <div class="form-group">
                <label class="form-label" for="price">Price</label>
                <div class="form-control-wrap">
                    <input type="number" class="form-control" name="price" required>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <label class="form-label" for="brand">Brand</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control" name="brand" required>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <label class="form-label" for="price">Product Image</label>
                <div class="form-control-wrap">
                    <div class="custom-file">
                <input type="file" multiple="" class="custom-file-input" id="product_image" name="product_image" />
                <label class="custom-file-label" for="product_image">Choose file</label>
             </div>
                </div>
            </div>
            </div>
          
            <!-- <div class="form-group">
                <label class="form-label" for="alert_stock">alert_stock</label>
                <div class="form-control-wrap">
                    <input type="number" class="form-control" name="alert_stock" required>
                </div>
            </div> -->
            <div class="col-md-12">
            <div class="form-group">
                <label class="form-label" for="description">Description</label>
                <div class="form-control-wrap">
                    <textarea class="form-control" name="description"></textarea>
                </div>
            </div>
           </div>

            

            
</div>
        <div class="form-group">
            <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
        </div>
     
    </form>
</div> </div> </div> </div> </div> </div> 
@endsection