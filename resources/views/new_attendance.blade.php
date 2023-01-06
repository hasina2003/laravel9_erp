
@extends('layouts.theme')

@section('page_title')
Employee's New Attendance | DashLite Admin Template
@endsection

@section('content')

              
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                   
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Employee's New Attendance</h4>
                                                <h3 class="text-success" align="center">Today  {{date("d/m/y")}}</h3>
                                                <!-- <a href="{{route('new.attendance')}}" class="btn btn-primary">Create</a> -->
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <form action="{{route('insert.attendance')}}" method="POST">
                                                         @csrf
                                                <table class="datatable-init nowrap table">
                                                    <thead>
                                                        <tr>
                                                            <th class="tb-odr-info">
                                                                <span class="tb-odr-id">SN.</span>
                                                            </th>
                                                            <th class="tb-odr-info">
                                                                <span class="tb-odr-id">Emp ID</span>
                                                            </th>
                                                            <th class="tb-odr-info">
                                                                <span class="tb-odr-id">Photo</span>
                                                                
                                                            </th>
                                                            <th class="tb-odr-info">
                                                                <span class="tb-odr-id">Attendance</span>
                                                            </th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                            @foreach($employee as $key=>$employeerow)
                                                        <tr>
                                                            <td>{{$key+1}}</td>
                                                            <td>{{$employeerow->emp_name}}</td>
                                                            <td><img src="{{asset('uploads/employee/'.$employeerow->emp_photo)}}"  style="height: 40px;width:40px;"alt=""></td>
                                                            <input type="hidden" name="emp_id[]" value="{{$employeerow->id}}"/>
                                                            <td>
                                                                
                                                                <input type="radio" name="att_status[{{$employeerow->id}}]" value="Present" required />Present
                                                                <input type="radio" name="att_status[{{$employeerow->id}}]" value="Absent" />Absent
                                                               
                                                              <!-- <a href="" class="btn btn-sm btn-info">Edit</a>
                                                              <a href="" class="btn btn-sm btn-danger">Delete</a> 
                                                              <a href="" class="btn btn-sm btn-primary">View</a>  -->

                                                            </td>
                                                             <input type="hidden" name="att_date" value="{{date('d/m/y')}}">
                                                            <input type="hidden" name="att_month" value="{{date('F')}}">
                                                            <input type="hidden" name="att_year" value="{{date('Y')}}">
                                                        </tr>
                                                        @endforeach
                                                       
                                                    </tbody>
                                                    
                                                </table>
                                                <button type="submit" class="btn btn-success">Save</button>
                                              </form>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->
                                    
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
               

@endsection