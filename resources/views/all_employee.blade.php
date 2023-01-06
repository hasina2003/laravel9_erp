
@extends('layouts.theme')
@section('page_title')
All Employee | DashLite Admin Template
@endsection
@section('content')


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Employee Information</h3>
                            <!-- <div class="nk-block-des text-soft">
                                <p>You have total 937 Employees Information.</p>
                            </div> -->
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools justify-between g-3">
                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-upload-cloud"></em><span>PDF</span></a></li>
                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>CSV</span></a></li>
                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-upload-cloud"></em><span>Import</span></a></li>
                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#addEmployee" class="btn text-white bg-primary"><em class="icon ni ni-plus"></em><span>Add New</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
               <div class="card card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init nowrap table">
                                                    
                                    <thead class="tb-odr-head">
                                       
                                        <tr class="tb-odr-item">
                                            <th class="tb-odr-info">
                                                <span class="tb-odr-id">Emp ID</span>
                                            </th>
                                            <th class="tb-odr-info">
                                                <span class="tb-odr-id">Photo</span>
                                                <span class="tb-odr-date d-none d-md-inline-block">Emp Name</span>
                                            </th>
                                            <th class="tb-odr-amount">
                                                <span class="tb-odr-total">Department</span>
                                                <span class="tb-odr-status d-none d-md-inline-block">Designation</span>
                                            </th>
                                            
                                            <th class="tb-odr-action">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tb-odr-body">
                                       @foreach ($employee as $employeedata)
                                            <tr class="tb-odr-item">
                                                <td class="tb-odr-info">
                                                    <span class="tb-odr-id"><a href="html/crm/invoice-details.html">{{ $employeedata-> id}}</a></span>
                                                </td>
                                                <td class="tb-odr-info">
                                                    <span class="tb-odr-id"><img src="{{asset('uploads/employee/'.$employeedata->emp_photo)}}"  style="height: 40px;width:40px;"alt=""></span>
                                                    <span class="tb-odr-date">{{ $employeedata-> emp_name}}</span>
                                                </td>
                                                <td class="tb-odr-amount">
                                                    <span class="tb-odr-total">
                                                     
                                                      {{$employeedata->department->department_name}}
                                                    </span>
                                                    <span class="tb-odr-status">
                                                       {{$employeedata->designation->designation_name}}
                                                    </span>
                                                </td>
                                            
                                                <td class="tb-odr-action">
                                                    <div class="tb-odr-btns d-none d-sm-inline">
                                                        
   <a href="{{route('employee.show',$employeedata->id)}}" class="btn btn-dim btn-sm btn-primary">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-binoculars" viewBox="0 0 16 16">
      <path d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V2.5zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5h-1zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V4zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5V3zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14z"/>
      </svg>                                                                                                        
   </a>||
   <a href="{{route('employee.edit',$employeedata->id)}}" class="btn btn-dim btn-sm btn-primary">
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
   <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
   <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
   </svg>
   </a>
                                                       
                                                    </div>
                                                   
                                                </td>
                                            </tr><!-- .tb-odr-item -->
                                       @endforeach
                                       
                                     
                                    </tbody>
                                </table>
                                               
                                            </div>
                                        </div><!-- .card-preview -->
              
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="addEmployee">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Add Employee</h5>
                <form action="{{ route('employee.store') }}" class="mt-2" method="POST" enctype="multipart/form-data">
                 @csrf
                    <div class="row g-gs">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_name">Full Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_name">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_father_name">Father's Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_father_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_mother_name">Mother's Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_mother_name">
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Gender</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control" name="emp_gender" data-placeholder="Select">
                                        <option value=""></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="emp_photo">Employee's Photo</label>
                                <div class="form-control-wrap">
                                     <div class="custom-file">
                                        <input type="file" multiple="" class="custom-file-input" id="emp_photo" name="emp_photo" />
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
                                    <input type="text" class="form-control date-picker" name="emp_dob">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Nationality</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control" name="emp_nationality" data-placeholder="Select">
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
                                    <select class="form-select form-control" name="emp_blood_group" data-placeholder="Select">
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
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="emp_permanent_house">Permanent Address</label>
                                
                            </div>
                        </div> -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_permanent_house">Permanent vill/state</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_permanent_house">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_permanent_ps"> police station</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_permanent_ps">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_permanent_po"> post office</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_permanent_po">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_permanent_district">district</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_permanent_district">
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
                                    <input type="text" class="form-control" name="emp_present_house">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_present_ps">Present police station</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_present_ps">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_present_po">Present post office</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_present_po">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="emp_present_district">Present district</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="emp_present_district">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Department</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control" name="emp_department" data-placeholder="Select">
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
                                    <input type="text" class="form-control date-picker" name="emp_joining_date">
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
                                    <input type="number" class="form-control" name="emp_basic">
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
                        
                        
                      <!--  <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control" name="emp_status" data-placeholder="Select">
                                        <option value="">Select</option>
                                        <option value="Active">Active</option>
                                        <option value="InActive">InActive</option>
                                        <option value="Sack">Sack</option>
                                        <option value="Resign">Resign</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->


                       
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- .Add Modal-Content -->
   
@endsection