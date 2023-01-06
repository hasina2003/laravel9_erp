@extends('layouts.theme')
@section('page_title')
Edit Attendance | DashLite Admin Template
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
                                                <!-- <h4 class="nk-block-title">Employee Attendance</h4> -->
                                                <h3 class="text-success" align="center">Attendance Date :  {{ $date->att_date }}</h3>
                                                <!-- <a href="{{route('new.attendance')}}" class="btn btn-primary">Create</a> -->
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                 <table class="datatable-init nowrap table">
                                                    <thead class="tb-odr-head">
                                                        <tr class="tb-odr-item">
                                                            
                                                            <th class="tb-odr-info">
                                                                <span class="tb-odr-id">Emp Id</span>
                                                                
                                                            </th>
                                                            <th class="tb-odr-info">
                                                                <span class="tb-odr-id">Name</span>
                                                                
                                                            </th>
                                                            <th class="tb-odr-info">
                                                                <span class="tb-odr-id">Photo</span>
                                                            </th>
                                                            <th class="tb-odr-info">
                                                                <span class="tb-odr-id">Department Name</span>
                                                            </th>
                                                            <th class="tb-odr-info">
                                                                <span class="tb-odr-id">Attendance</span>
                                                                
                                                            </th>
                                                            
                                                            <th class="tb-odr-action">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tb-odr-body">
                                                        
                                                            @foreach($data as $employeerow)
                                                            
                                                        <tr>
                                                           
                                                             <td>{{$employeerow->emp_id}}</td>
                                                            <td>{{$employeerow->emp_name}}</td>
                                                            <td><img src="{{asset('uploads/employee/'.$employeerow->emp_photo)}}"  style="height: 40px;width:40px;"alt=""></td>

                                                            <td>
                                                                {{$employeerow->department_name}}
                                                            </td>


                                                            <input type="hidden" name="id[]" value="{{$employeerow->id}}"/>
                                                            <td>
                                                                
                                                                <input type="radio" name="att_status[{{$employeerow->id}}]" value="Present" required 
                                                                <?php 
                                                                  if($employeerow->att_status == 'Present')
                                                                   {
                                                             	     echo "checked";
                                                                   }
                                                                ?> />Present
                                                                <input type="radio" name="att_status[{{$employeerow->id}}]" value="Absent" <?php 
                                                                if($employeerow->att_status == 'Absent'){
                                                             	  echo "checked";
                                                                }
                                                             ?>/>Absent
                                                               
                                                               
                                                              

                                                            </td>
                                                            <td> <a href="{{URL::to('edit/'.$employeerow->id)}}" class="btn btn-dim btn-sm btn-info">Edit</a></td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                       
                                                    </tbody>
                                                    
                                                </table>
                                                <!-- <button type="submit" class="btn btn-success">Update Attendance</button> -->
                                             
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