
@extends('layouts.theme')

@section('page_title')
All Department | DashLite Admin Template

@endsection


@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">All Department </h3>
                            <div class="nk-block-des text-soft">
                                <!-- <p>You have total 937 Department Information.</p> -->
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools justify-between g-3">
                                       <!--  <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-upload-cloud"></em><span>PDF</span></a></li>
                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>CSV</span></a></li>
                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li> -->
                                        <li><a href="#" data-toggle="modal" data-target="#addDepartment" class="btn text-white bg-primary"><em class="icon ni ni-plus"></em><span>Add New</span></a></li>
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
            <th class="tb-odr-amount">
              <span class="tb-odr-total">Department</span>
            </th>
                                            
            <th class="tb-odr-action">&nbsp;</th>
           </tr>
        </thead>
        <tbody class="tb-odr-body">
          @foreach ($department_all as $departmentdata)
          <tr class="tb-odr-item">
                                                
           <td class="tb-odr-amount">
             <span class="tb-odr-total">
                <span class="amount">{{ $departmentdata-> department_name}}</span>
                 </span>
              </td>
                                            
            <td class="tb-odr-action">
            <div class="tb-odr-btns d-none d-sm-inline">
                                                        
             <a href="{{route('department.edit',$departmentdata->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
               </svg>
             </a>||


             <form id="delete-form-{{$departmentdata->id}}" action="{{route('department.destroy',$departmentdata->id)}}" method="POST" style="display:none;">
                 @csrf
                 @method('DELETE')   
             </form>  
             <a type="test" 
                onclick="if(confirm('Are you sure to delete this?'))
                {
                 event.preventDefault();
                 document.getElementById('delete-form-{{$departmentdata->id}}').submit();
                } else
                {
                event.preventDefault();
                }">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg>
            </a>  

          </div>
           
        </td>
      </tr><!-- .tb-odr-item -->
    @endforeach
                                       
                                     
  </tbody>
  </table>
     </div><!-- .card-inner -->
                           
   </div><!-- .card-inner-group -->
</div><!-- .card -->
               


<div class="modal fade" id="addDepartment">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Add Department Information</h5>
                <form action="{{route('department.store')}}" class="mt-2" method="POST" >
                    @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="department_name">Department Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="department_name" >
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