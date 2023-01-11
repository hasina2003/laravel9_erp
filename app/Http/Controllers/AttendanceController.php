<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\AttendancesInTimeFromFile;
use DB;

use App\Exports\AttendancesExport;
use App\Imports\AttendancesImport;
use App\Imports\AttendanceInTimesImport;
use App\Imports\AttendanceOutTimesImport;
use Maatwebsite\Excel\Facades\Excel;

use PDF;

use Carbon\Carbon;


class AttendanceController extends Controller
{
   
    public function NewAttendance()
    {
        $employee=DB::table('employees')->get();
        return view('new_attendance',compact('employee'));
    }
    public function InsertAttendance(Request $request)
    {
        // $data=array();
        // $data['att_date']=$request->att_date;
        // $data['att_month']=$request->att_month;
        // $data['att_year']=$request->att_year;
        // echo "<pre>";
        // print_r($data);

        //return $request->all();



        $date=$request->att_date;
        $att_date=DB::table('attendances')->where('att_date',$date)->first();
        if($att_date){
           echo "Attendance is already taken!!!"; 
        }
        else
        {
          foreach($request->emp_id as $id){
            $data[]=[
                "emp_id"=>$id,
                "att_year"=>$request->att_year,
                "att_month"=>$request->att_month,
                "att_date"=>$request->att_date,
                "att_status"=>$request->att_status[$id],
                "edit_date"=>date("d_m_y")
            ];
        }
       
     // $attendance=Attendance::insert($data); // Eloquent
      \DB::table('attendances')->insert($data); // Query Builder
      return redirect()->route('new.attendance');
        }

     

    }

    public function AllAttendance(Request $request)
    {

     $all_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->get();
    return view('all_attendance',compact('all_attendance'));
     //return $all_attendance;

    }
      
     public function ViewAttendance($edit_date)
    {
      
        $date=DB::table('attendances')->where('edit_date',$edit_date)->first();
        $data=DB::table('attendances')
        ->join('employees','attendances.emp_id','employees.id')
        ->join('departments', 'employees.dept_id', '=', 'departments.id')
        ->select('employees.emp_name','employees.emp_photo','departments.department_name','attendances.*')
        ->where('edit_date',$edit_date)->get();
    
        return view('view_attendance',compact('data','date'));
    } 

     public function Edit($id)
    {
     $date=DB::table('attendances')->where('id',$id)->first();
       // $data=DB::table('attendances')->join('employees','attendances.emp_id','employees.id')->select('employees.emp_name','employees.emp_photo','attendances.*')->where('attendances.id',$id)->get();
        //return $data;
        // echo "<pre>";
        // print_r($data);
        $data=Attendance::find($id);
        return view('edit',compact('data','date'));
        
    }
     public function UpdateAttendance(Request $request, $id)
    {
        
      $attendance=Attendance::find($id);
      $attendance->att_status=$request->att_status;
      $attendance->save();
      
      return redirect()->route('all.attendance');
        
    }
   
     public function MonthlyAttendance()
    {
       $month=date("F");
       $month_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->where('att_month',$month)->get();
      // $month_attendance =DB::table('attendances')->where('att_month',$month)->first();
      // $ss=$month_attendance->month;
      // return $month_attendance;
       return view('month_wise_attendance',compact('month_attendance','month'));
    }

    public function JanuaryAttendance()
    {
       $month="January";
       $month_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->where('att_month',$month)->get();
       return view('month_wise_attendance',compact('month_attendance','month'));
    }
    public function FebruaryAttendance()
    {
       $month="February";
       $month_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->where('att_month',$month)->get();
       return view('month_wise_attendance',compact('month_attendance','month')); 
    }

    public function MarchAttendance()
    {
       $month="March";
       $month_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->where('att_month',$month)->get();
       return view('month_wise_attendance',compact('month_attendance','month')); 
    }

    public function AprilAttendance()
    {
       $month="April";
       $month_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->where('att_month',$month)->get();
       return view('month_wise_attendance',compact('month_attendance','month')); 
    }

    public function MayAttendance()
    {
       $month="May";
       $month_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->where('att_month',$month)->get();
       return view('month_wise_attendance',compact('month_attendance','month')); 
    }

    public function JuneAttendance()
    {
       $month="June";
       $month_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->where('att_month',$month)->get();
       return view('month_wise_attendance',compact('month_attendance','month')); 
    }

    public function JulyAttendance()
    {
       $month="July";
       $month_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->where('att_month',$month)->get();
       return view('month_wise_attendance',compact('month_attendance','month')); 
    }

    public function AugustAttendance()
    {
       $month="August";
       $month_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->where('att_month',$month)->get();
       return view('month_wise_attendance',compact('month_attendance','month')); 
    }

    public function SeptemberAttendance()
    {
       $month="September";
       $month_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->where('att_month',$month)->get();
       return view('month_wise_attendance',compact('month_attendance','month')); 
    }

    public function OctoberAttendance()
    {
       $month="October";
       $month_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->where('att_month',$month)->get();
       return view('month_wise_attendance',compact('month_attendance','month')); 
    }

    public function NovemberAttendance()
    {
       $month="November";
       $month_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->where('att_month',$month)->get();
       return view('month_wise_attendance',compact('month_attendance','month')); 
    }
    
     public function DecemberAttendance()
    {
       $month="December";
       $month_attendance=DB::table('attendances')->select('att_date','edit_date')->groupBy('att_date','edit_date')->where('att_month',$month)->get();
       return view('month_wise_attendance',compact('month_attendance','month')); 
    }


   public function ImportAttendance(Request $request) 
    {
        // Excel::import(new AttendancesImport,request()->file('file'));
        // return back();


      $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx,csv'
        ]);

        if ($request->hasFile('file')) {
            //UPLOAD FILE
            // $file = $request->file('file'); //GET FILE
            // Excel::import(new AttendancesImport, $file); //IMPORT FILE
            // return redirect()->back()->with(['success' => 'Upload file data sales !']);
         Excel::import(new AttendancesImport,request()->file('file'));
         return redirect()->back()->with('Upload file data attendances !');
        }

        return redirect()->back()->with('Please choose file before!');
    }

   


   public function ImportAttendanceInTime(Request $request) 
    {
        
      $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx,csv'
        ]);

        if ($request->hasFile('file')) {
         Excel::import(new AttendanceInTimesImport,request()->file('file'));
         
         return redirect()->back()->with('Upload file data attendances !');


       // $data = DB::table('tablename')->where('condition',"2023-01-05")->first();
       // $newtime = strtotime($data->created_at);
        //$data->time = date('M d, Y',$newtime);

         // $a=DB::table('attendances_in_time_from_files')->select('created_at')->groupBy('created_at')->where('created_at',"1/5/2023")->first();
         // $newtime = explode(' ',$a);
         // dd($newtime);

        }

        return redirect()->back()->with('Please choose file before!');
    }
   

   
   public function ImportAttendanceOutTime(Request $request) 
    {
       
      $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx,csv'
        ]);

        if ($request->hasFile('file')) {
            
         Excel::import(new AttendanceOutTimesImport,request()->file('file'));
         return redirect()->back()->with('Upload file data attendances !');
        }

        return redirect()->back()->with('Please choose file before!');
    }

    



    public function ExportAttendance() 
    {
        return Excel::download(new AttendancesExport, 'exported_attendance_data.xlsx');
    }

   public function ExportAttendanceInCsv() 
    {
        return Excel::download(new AttendancesExport, 'exported_attendance_data.csv');
    }

   public function ExportAttendanceInPdf()
    {
        $attendances = Attendance::all();
        $pdf = PDF::loadView('pdf.attendance',compact('attendances'));
        return $pdf->download('attendances.pdf');
    }


    
    public function AttendanceIntime() 
    {
        return view('attendance_intime'); 
    
    }
    public function AttendanceOuttime() 
    {
        return view('attendance_outtime'); 
     }


    public function AttendanceOvertime() 
    {
       $attendanceovertime=Attendance::all()->where('att_overtime_hour','>','0');
       
      
      // $start  = new Carbon('2018-10-04 15:00:03');
      // $end    = new Carbon('2018-10-05 17:00:09');
      // $totaltime=$end->diffInHours($start);
      // echo "<pre>";
      // print_r($totaltime);
       
       return view('attendance_overtime',compact('attendanceovertime')); 
    }


    
    
}
