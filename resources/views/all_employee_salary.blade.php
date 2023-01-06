
@extends('layouts.theme')

@section('page_title')
All Employee Salary | DashLite Admin Template

@endsection


@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Salary</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools justify-between g-3">
                                        <li><a href="{{ route('export.attendance_in_pdf') }}" class="btn btn-white btn-outline-light"><em class="icon ni ni-upload-cloud"></em><span>Export .pdf</span></a></li>
                                        <li><a href="{{ route('export.attendance_in_csv') }}" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export .csv</span></a></li>
                                        <li><a href="{{ route('export.attendance') }}" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export .xlsx</span></a></li>
                                        <li><a href="{{route('increment-salary.create')}}" data-toggle="modal" data-target="#addSalary" class="btn text-white bg-primary"><em class="icon ni ni-plus"></em><span>Generate Salary</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
               
               <div class="card-inner-group">
                   <div class="card-inner p-0">
                                <table class="datatable-init nowrap table">
                                    <thead class="tb-odr-head">
                                        <tr class="tb-odr-item">
                                            <th class="tb-odr-info">
                                                <span class="tb-odr-id">SN.</span>
                                            </th>
                                            <th class="tb-odr-info">
                                                <span class="tb-odr-id">Month</span>
                                                
                                            </th>
                                            <th class="tb-odr-action">Year</th>
                                            <th class="tb-odr-action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tb-odr-body">
                                        @foreach ($salary as $key=>$salarydata)
                                            <tr class="tb-odr-item">
                                                <td class="tb-odr-info">
                                                    {{$key+1}}
                                                </td>
                                                <td class="tb-odr-info">
                                                    {{$salarydata->salary_month}}
                                                </td>
                                            
                                                <td class="tb-odr-action">
                                                   {{$salarydata->salary_year}}
                                                </td>
 <td class="tb-odr-action">
  <div class="tb-odr-btns d-none d-sm-inline">
   <a href="{{route('all.salary',['salary_month'=>$salarydata->salary_month,'salary_year'=>$salarydata->salary_year])}}" class="btn btn-dim btn-sm btn-info">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
  <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z"/>
</svg>
   All Employee Salary
</a>
   <a href="{{route('indivisual.salary',['salary_month'=>$salarydata->salary_month,'salary_year'=>$salarydata->salary_year])}}" class="btn btn-dim btn-sm btn-info">
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-stacked" viewBox="0 0 16 16">
   <path d="M3 0h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3zm0 8h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3z"/>
</svg>
   Indivisual Employee's Salary
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
<div class="modal fade" id="addSalary">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Generate Salary</h5>
                <form action="{{route('all-employee-salary.store')}}" method="POST" class="mt-2">
                    @csrf
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="salary_year">Salary Year</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="salary_year" name="salary_year">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="salary_month">Salary Month</label>
                                <div class="form-control-wrap">
                                 <select name="salary_month" id="salary_month" class="form-control">
                                    <option disabled="" selected="">select Month</option>
                                                   
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>  
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>  
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>     
                                 </select>
                                </div>
                            </div>
                        </div>
                       
                      
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- .Add Modal-Content -->

 

@endsection