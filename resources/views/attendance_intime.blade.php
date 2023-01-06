
@extends('layouts.theme')
@section('page_title')
Entry Attendance | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <h3 class="text-white bg-primary">Entry Attendance</h3>
            <div class="card card-preview">
              <div class="card-inner">
                <div class="preview-block">
<form role="form"  action="{{ route('import.attendance_intime') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputFile" >
                            Input File(.xls, .xlsx,.csv)
                        </label>
                        <input type="file" id="file" name="file">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
</div> </div> </div> </div> </div> </div> 
@endsection