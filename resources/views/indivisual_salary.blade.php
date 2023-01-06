@extends('layouts.theme')
@section('page_title')
Indivisual Salary | DashLite Admin Template
@endsection
@section('content')
 <!-- content @s -->
    <!-- <div class="nk-block"> -->
       
  <div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">                
                   
                                                
                      <table class="datatable-init nowrap table">
                                    <thead class="tb-odr-head">
                                        <tr class="tb-odr-item">
                                            <th class="tb-odr-info">
                                                <span class="tb-odr-id">Emp ID</span>
                                            </th>
                                            <th class="tb-odr-info">
                                                <span class="tb-odr-id">Emp Name</span>
                                                
                                            </th>
                                            <th class="tb-odr-action">Department</th>
                                            <th class="tb-odr-action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tb-odr-body">
                                        @foreach ($indivisual_salary as $salarydata)
                                            <tr class="tb-odr-item">
                                                <td class="tb-odr-info">
                                                    {{$salarydata->emp_id}}
                                                </td>
                                                <td class="tb-odr-info">
                                                    {{$salarydata->employee->emp_name}}
                                                </td>
                                            
                                                <td class="tb-odr-action">
                                                   {{$salarydata->employee->department_name}}
                                                </td>
 <td class="tb-odr-action">
  <div class="tb-odr-btns d-none d-sm-inline">
   <a href="{{route('viewpay.slip',['emp_id'=>$salarydata->emp_id,'salary_month'=>$salarydata->salary_month,'salary_year'=>$salarydata->salary_year])}}" class="btn btn-dim btn-sm btn-info">Pay Slip</a>
   </div>
  </td>
                                            </tr><!-- .tb-odr-item -->
                                       @endforeach
                                       
                                     
                                    </tbody>
                                </table>
                       
                       <a href="{{route('all-employee-salary.index')}}" class="btn btn-md btn-danger">Back</a>
                     

   </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
        
@endsection