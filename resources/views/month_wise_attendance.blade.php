
@extends('layouts.theme')
@section('page_title')
All Attendance | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">

                <div class="nk-block-head">
                	 <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Year: {{date("Y")}}</h3>
                            <h3>Monthly Employee Attendance</h3>

                        </div><!-- .nk-block-head-content -->
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                   
                                    <a href="{{ route('january.attendance')}}" class="btn btn-sm btn-outline-light">January</a>
                                    <a href="{{ route('february.attendance')}}" class="btn btn-sm btn-outline-light">February</a>
                                    <a href="{{ route('march.attendance')}}" class="btn btn-sm btn-outline-light">March</a>
                                    <a href="{{ route('april.attendance')}}" class="btn btn-sm btn-outline-light">April</a>
                                    <a href="{{ route('may.attendance')}}" class="btn btn-sm btn-outline-light">May</a>
                                    <a href="{{ route('june.attendance')}}" class="btn btn-sm btn-outline-light">June</a>
                                    <a href="{{ route('july.attendance')}}" class="btn btn-sm btn-outline-light">July</a>
                                    <a href="{{ route('august.attendance')}}" class="btn btn-sm btn-outline-light">August</a>
                                    <a href="{{ route('september.attendance')}}" class="btn btn-sm btn-outline-light">September</a>
                                    <a href="{{ route('october.attendance')}}" class="btn btn-sm btn-outline-light">October</a>
                                    <a href="{{ route('november.attendance')}}" class="btn btn-sm btn-outline-light">November</a>
                                    <a href="{{ route('december.attendance')}}" class="btn btn-sm btn-outline-light">December</a>
                                </div>
                                <h3 class="text-success" align="center">Month of  {{$month}}</h3>
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
                                                <span class="tb-odr-id">SN.</span>
                                            </th>
                                            <th class="tb-odr-info">
                                                <span class="tb-odr-id">Date</span>
                                                
                                            </th>
                                           
                                            
                                            <th class="tb-odr-action">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tb-odr-body">
                                       @foreach ($month_attendance as $key=>$all_attendancedata)
                                            <tr class="tb-odr-item">
                                                <td class="tb-odr-info">
                                                    {{ $key+1}}
                                                </td>
                                                <td class="tb-odr-info">
                                                    {{ $all_attendancedata->att_date}}
                                                </td>
                                            
                                                <td class="tb-odr-action">
                                                    <div class="tb-odr-btns d-none d-sm-inline">
                                                        
                                                        <a href="{{URL::to('view-attendance/'.$all_attendancedata->edit_date)}}" class="btn btn-dim btn-sm btn-info">View</a>
                                                        
                                                        
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
@endsection
