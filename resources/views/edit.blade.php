@extends('layouts.theme')
@section('page_title')
Edit Attendance | DashLite Admin Template
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
                   <form action="{{route('update',$data->id)}}" method="POST">
                      @csrf
                                                
                      <table class="table">
                        <thead>
                            <tr>
                              <th>Attendance</th>
                            </tr>
                        </thead>
                         <tr>
                                                           
                          <td>
                                                                
                           <input type="radio" name="att_status" value="Present" required 
                            <?php 
                              if($data->att_status == 'Present')
                                {
                                  echo "checked";
                                }
                             ?> />Present
                            <input type="radio" name="att_status" value="Absent" <?php 
                              if($data->att_status == 'Absent')
                              {
                                echo "checked";
                              }
                              ?>/>Absent
                             </td>
                          </tr>
                        </tbody>
                       </table>
                       <button type="submit" class="btn btn-success">Update</button>
                       <a href="{{route('all.attendance')}}" class="btn btn-md btn-danger">Back</a>
                     </form>

   </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
        
@endsection