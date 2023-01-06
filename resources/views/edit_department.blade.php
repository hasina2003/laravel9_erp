
@extends('layouts.theme')
@section('page_title')
Edit Department | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Edit Department</h4>
                                            </div>
                                        </div>
<div class="card card-preview">
<div class="card-inner">
<div class="preview-block">
 <form action="{{route('department.update',$departmentedt->id)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="row gy-4">
   <div class="col-sm-12">
   
     <div class="form-group">
        <label class="form-label" for="department_name">Department Name</label>
        <div class="form-control-wrap">
          <input type="text" class="form-control" name="department_name" value="{{ $departmentedt->department_name}}">
        </div>
     </div>

    </div>
                                                            
   </div>
                                                      
    <div class="row gy-4">
      <div class="col-sm-12">
        <div class="form-group">
          <input type="submit" class="btn btn-lg btn-primary" value="Update" />

         <a href="{{route('department.index')}}" class="btn btn-lg btn-danger">Back</a>
                                                                   
       </div>
     </div>
     </div>
    </div>
   </form>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div><!-- .nk-block -->
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
@endsection