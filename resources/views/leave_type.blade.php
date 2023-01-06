
@extends('layouts.theme')

@section('page_title')
Employee Leave Type| DashLite Admin Template

@endsection


@section('content')


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Leave Type Information</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total 937 Leave Type Information.</p>
                            </div>
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
                                        <li><a href="#" data-toggle="modal" data-target="#addLeaveType" class="btn text-white bg-primary"><em class="icon ni ni-plus"></em><span>Add New</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="card-title-group">
                                   <!--  <div class="card-title">
                                        <h5 class="title">All Leave Type</h5>
                                    </div> -->
                                   
                                 
                                </div><!-- .card-title-group -->
                            </div><!-- .card-inner -->
                            <div class="card-inner p-0">
                                 <table class="datatable-init nowrap table">
                                    <thead class="tb-odr-head">
                                        <tr class="tb-odr-item">
                                           
                                            <th class="tb-odr-amount">
                                                <span class="tb-odr-total">Leave type</span>
                                                <span class="tb-odr-status d-none d-md-inline-block">Total Days</span>
                                            </th>
                                            
                                            <th class="tb-odr-action">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tb-odr-body">
                                        @foreach ($leavetype as $leavetypedata)
                                            <tr class="tb-odr-item">
                                               
                                                <td class="tb-odr-amount">
                                                    <span class="tb-odr-total">
                                                        <span class="amount">{{$leavetypedata->leave_type}}</span>
                                                    </span>
                                                    <span class="tb-odr-status">
                                                    <span class="amount">{{$leavetypedata->leave_day}}</span>
                                                    </span>
                                                </td>
                                            
                                                <td class="tb-odr-action">
                                                    <div class="tb-odr-btns d-none d-sm-inline">
                                                        
                                                        {{-- <a href="html/crm/invoice-details.html" class="btn btn-dim btn-sm btn-primary">View</a> --}}
                                                        <a href="html/crm/invoice-details.html" class="btn btn-dim btn-sm btn-primary">Edit</a>
                                                        <a href="html/crm/invoice-details.html" class="btn btn-dim btn-sm btn-primary">Delete</a>
                                                    </div>
                                                    <a href="html/crm/invoice-details.html" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                                                </td>
                                            </tr><!-- .tb-odr-item -->
                                        
                                        @endforeach
                                                                   
                                        
                                    </tbody>
                                </table>
                            </div><!-- .card-inner -->
                         
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="addLeaveType">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Add Leave Type Information</h5>
                <form action="{{route('leave-type.store')}}" class="mt-2" method="POST" >
                    
                    @csrf
                   
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Leave Type</label>
                                <div class="form-control-wrap">
                                    <select class="form-select form-control" name="leave_type" data-placeholder="Select">
                                        <option value=""></option>
                                        <option value="Casual Leave">Casual Leave</option>
                                        <option value="Sick Leave">Sick Leave</option>
                                        <option value="Special Leave">Special Leave</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        </br>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="leave_day">Total Days</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="leave_day">
                                </div>
                            </div>
                        </div>
                        
                      
                       
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