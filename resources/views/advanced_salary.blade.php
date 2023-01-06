
@extends('layouts.theme')

@section('page_title')
Advanced Salary | DashLite Admin Template

@endsection


@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Advance Salary</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools justify-between g-3">
                                        <li><a href="{{ route('export.attendance_in_pdf') }}" class="btn btn-white btn-outline-light"><em class="icon ni ni-upload-cloud"></em><span>Export .pdf</span></a></li>
                                        <li><a href="{{ route('export.attendance_in_csv') }}" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export .csv</span></a></li>
                                        <li><a href="{{ route('export.attendance') }}" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export .xlsx</span></a></li>
                                        <li><a href="{{route('increment-salary.create')}}" data-toggle="modal" data-target="#addAdvance" class="btn text-white bg-primary"><em class="icon ni ni-plus"></em><span>Add New</span></a></li>
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
                                                <span class="tb-odr-id">Employee ID</span>
                                            </th>
                                            <th class="tb-odr-info">
                                                <span class="tb-odr-id">Advance Date</span>
                                                
                                            </th>
                                           
                                            
                                            <th class="tb-odr-action">Advance Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tb-odr-body">
                                        @foreach ($advancedsalary as $advance)
                                            <tr class="tb-odr-item">
                                                <td class="tb-odr-info">
                                                    {{$advance->emp_id}}
                                                </td>
                                                <td class="tb-odr-info">
                                                    {{$advance->adv_date}}
                                                </td>
                                            
                                                <td class="tb-odr-action">
                                                   {{$advance->adv_amount}}
                                                    
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
<div class="modal fade" id="addAdvance">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Add Advance</h5>
                <form action="{{route('advanced-salary.store')}}" method="POST" class="mt-2">
                    @csrf
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="emp_id">Employee ID</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="emp_id" name="emp_id">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="adv_date" value="{{date('d/m/y')}}">
                        <input type="hidden" name="adv_month" value="{{date('F')}}">
                        <input type="hidden" name="adv_year" value="{{date('Y')}}">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="adv_amount">Advance Amount</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" id="adv_amount" name="adv_amount">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label class="form-label" for="adv_reason">Reason for Advance</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control" id="adv_reason" name="adv_reason"></textarea>
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