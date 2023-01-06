
@extends('layouts.theme')
@section('page_title')
Edit Employee | DashLite Admin Template
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
                                                <h4 class="title nk-block-title">Edit Employee</h4>
                                            </div>
                                        </div>
<div class="card card-preview">
<div class="card-inner">
<div class="preview-block">
 <form action="{{route('employee.update',$employeeedit->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="row gy-4">
    <div class="row g-gs">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_name">Full Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_name" value="{{$employeeedit->emp_name}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_father_name">Father's Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_father_name" value="{{$employeeedit->emp_father_name}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_mother_name">Mother's Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_mother_name" value="{{$employeeedit->emp_mother_name}}">
                                </div>
                            </div>
                        </div>
                         <!-- <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Gender</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control" name="emp_gender" value="{{$employeeedit->emp_gender}}" data-placeholder="Select">
                                        <option value=""></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                         <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="emp_photo">Employee's Photo</label>
                                <div class="form-control-wrap">
                                     <div class="custom-file">
                                        <input type="file" multiple="" class="custom-file-input" id="emp_photo" name="emp_photo" value="{{$employeeedit->emp_photo}}" />
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Date of Birth</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-calendar-alt"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" name="emp_dob" value="{{$employeeedit->emp_dob}}">
                                </div>
                            </div>
                        </div>
                       <!--  <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Nationality</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control" name="emp_nationality" value="{{$employeeedit->emp_nationality}}" data-placeholder="Select">
                                        <option value="">Select</option>
                                        <option value="Bangladesh">Bangladeshi</option>
                                        <option value="India">Indian</option>
                                        <option value="Srilanka">Srilankan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-2">
                            <div class="form-group">
                                <label class="form-label">Blood Group</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control" name="emp_blood_group" value="{{$employeeedit->emp_blood_group}}"  data-placeholder="Select">
                                        <option value="">Select</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="emp_permanent_house">Permanent Address</label>
                                
                            </div>
                        </div> -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_permanent_house">Permanent vill/state</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_permanent_house" value="{{$employeeedit->emp_permanent_house}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_permanent_ps"> police station</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_permanent_ps" value="{{$employeeedit->emp_permanent_ps}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_permanent_po"> post office</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_permanent_po" value="{{$employeeedit->emp_permanent_po}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_permanent_district">district</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_permanent_district" value="{{$employeeedit->emp_permanent_district}}">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="emp_present_house">Present Address</label>
                                
                            </div>
                        </div> -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_present_house">Present Road/House</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_present_house" value="{{$employeeedit->emp_present_house}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_present_ps">Present police station</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_present_ps" value="{{$employeeedit->emp_present_ps}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_present_po">Present post office</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_present_po" value="{{$employeeedit->emp_present_po}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_present_district">Present district</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_present_district" value="{{$employeeedit->emp_present_district}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Department</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control" name="emp_department" data-placeholder="Select">
                                        <option value="{{ $employeeedit->dept_id }}">{{ $employeeedit->department->department_name }}</option>
                                        @foreach($departments as $department)
                                                <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Designation</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control" name="emp_designation" data-placeholder="Select">
                                         <option value="{{ $employeeedit->desig_id }}">{{ $employeeedit->designation->designation_name }}</option>
                                        @foreach($designations as $designation)
                                                <option value="{{ $designation->id }}">{{ $designation->designation_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="invoice-date">Joining Date</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-calendar-alt"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" name="emp_joining_date" value="{{$employeeedit->emp_joining_date}}">
                                </div>
                            </div>
                        </div>
                        
                       <!--  <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Employee's Salary</label>
                            </div>
                        </div> -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_basic">Basic Salary</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="emp_basic" value="{{$employeeedit->emp_basic}}">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_house_rent">House Rent</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="emp_house_rent">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_medical_allowance">Medical Allowance</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="emp_medical_allowance">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_overtime_allowance">Overtime Allowance</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="emp_overtime_allowance">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_holiday_allowance">Holiday Allowance</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="emp_holiday_allowance">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_offday_allowance">Offday Allowance</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="emp_offday_allowance">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_leave_allowance">Leave Allowance</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="emp_leave_allowance">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_special_allowance">Special Allowance</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="emp_special_allowance">
                                </div>
                            </div>
                        </div> -->
                        
                        
                       <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control" name="emp_status" value="{{$employeeedit->emp_status}}">
                                        <option value="{{$employeeedit->emp_status}}">{{$employeeedit->emp_status}}</option>
                                        <option value="Active">Active</option>
                                        <option value="InActive">InActive</option>
                                        <option value="Sack">Sack</option>
                                        <option value="Resign">Resign</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                                                            
   </div>
                                                      
    <div class="row gy-4">
      <div class="col-sm-12">
        <div class="form-group">
          <input type="submit" class="btn btn-lg btn-primary" value="Update" />

         <a href="{{route('employee.index')}}" class="btn btn-lg btn-danger">Back</a>
                                                                   
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