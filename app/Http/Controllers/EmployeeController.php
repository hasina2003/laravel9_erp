<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;

use Carbon\Carbon;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $employee=Employee::all();
       $departments=Department::all();
       $designations=Designation::all();
       return view('all_employee',compact('employee','departments','designations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(),[
        
            'emp_name'=>'required',
            'emp_father_name'=>'required',
            'emp_mother_name'=>'required',
            'emp_dob'=>'required',
            'emp_gender'=>'required',
            'emp_nationality'=>'required',
            'emp_permanent_house'=>'required',
            'emp_permanent_po'=>'required',
            'emp_permanent_ps'=>'required',
            'emp_permanent_district'=>'required',
            'emp_present_house'=>'required',
            'emp_present_po'=>'required',
            'emp_present_ps'=>'required',
            'emp_present_district'=>'required',
            'emp_photo'=>'required|mimes:png,jpg,jpeg',
            'emp_department'=>'required',
            'emp_designation'=>'required',
            'emp_joining_date'=>'required',
            'emp_basic'=>'required',
            // 'emp_house_rent'=>'required',
            // 'emp_medical_allowance'=>'required',
            // 'emp_overtime_allowance'=>'required',
            // 'emp_holiday_allowance'=>'required',
            // 'emp_offday_allowance'=>'required',
            // 'emp_leave_allowance'=>'required',
            // 'emp_special_allowance'=>'required',
            'emp_blood_group'=>'required',
            ]);


            $image=$request->file('emp_photo');
            // dd($request->file('emp_photo'));
           
           $slug=str_slug($request->emp_name);
           if(isset($image))
              {
                $currentDate=Carbon::now()->toDateString();
                $imagename=$slug.'-'.$currentDate.'.'.$image->getClientOriginalExtension();
                if(!file_exists('uploads/employee'))
                {
                    mkdir('uploads/employee',077,true);
                } 
                $image->move('uploads/employee',$imagename);
              }
              else
              {
                $imagename='default.png';
              }

           $emp_dob = Carbon::createFromFormat('m/d/Y', $request->emp_dob)->format('Y-m-d');
           $emp_joining_date = Carbon::createFromFormat('m/d/Y', $request->emp_joining_date)->format('Y-m-d');

            $houserent=($request->emp_basic *20)/100;
            $medical=($request->emp_basic *5)/100;
            



            $employee=new Employee();
            $employee->emp_code=0;
            $employee->emp_name=$request->emp_name;
            $employee->emp_father_name=$request->emp_father_name;
            $employee->emp_mother_name=$request->emp_mother_name;

            $employee->emp_dob=$emp_dob;
            $employee->emp_gender=$request->emp_gender;
            $employee->emp_nationality=$request->emp_nationality;
            $employee->emp_permanent_house=$request->emp_permanent_house;
            $employee->emp_permanent_po=$request->emp_permanent_po;
            $employee->emp_permanent_ps=$request->emp_permanent_ps;
            $employee->emp_permanent_district=$request->emp_permanent_district;
            $employee->emp_present_house=$request->emp_present_house;
            $employee->emp_present_po=$request->emp_present_po;
            $employee->emp_present_ps=$request->emp_present_ps;
            $employee->emp_present_district=$request->emp_present_district;
            $employee->emp_photo=$imagename;
            // $employee->emp_photo=$request->emp_photo;
            $employee->dept_id=$request->emp_department;
            $employee->desig_id=$request->emp_designation;

            $employee->emp_joining_date=$emp_joining_date;
            $employee->emp_basic=$request->emp_basic;
            // $employee->emp_house_rent=$request->emp_house_rent;
            $employee->emp_house_rent=$houserent;
            // $employee->emp_medical_allowance=$request->emp_medical_allowance;
            $employee->emp_medical_allowance=$medical;
            // $employee->emp_overtime_allowance=$request->emp_overtime_allowance;
            // $employee->emp_holiday_allowance=$request->emp_holiday_allowance;
            // $employee->emp_offday_allowance=$request->emp_offday_allowance;
            // $employee->emp_leave_allowance=$request->emp_leave_allowance;
            //$employee->emp_special_allowance=$request->emp_special_allowance;
            $employee->emp_gross=$request->emp_basic + $houserent + $medical;
            $employee->emp_blood_group=$request->emp_blood_group;
            $employee->emp_status="Active";
            

            $employee->save();
            // dd($employee);
            // return redirect('/employee');
            return redirect()->route('employee.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $departments=Department::all();
       $designations=Designation::all();
       $employeeedit=Employee::find($id);
       return view('view_employee',compact('employeeedit','departments','designations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $departments=Department::all();
       $designations=Designation::all();
       $employeeedit=Employee::find($id);
       return view('edit_employee',compact('employeeedit','departments','designations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           $this->validate(request(),[
        
            'emp_name'=>'required',
            'emp_father_name'=>'required',
            'emp_mother_name'=>'required',
            'emp_dob'=>'required',
            // 'emp_gender'=>'required',
            // 'emp_nationality'=>'required',
            'emp_permanent_house'=>'required',
            'emp_permanent_po'=>'required',
            'emp_permanent_ps'=>'required',
            'emp_permanent_district'=>'required',
            'emp_present_house'=>'required',
            'emp_present_po'=>'required',
            'emp_present_ps'=>'required',
            'emp_present_district'=>'required',
            // 'emp_photo'=>'required|mimes:png,jpg,jpeg',
            'emp_department'=>'required',
            'emp_designation'=>'required',
            'emp_joining_date'=>'required',
            'emp_basic'=>'required',
            // 'emp_house_rent'=>'required',
            // 'emp_medical_allowance'=>'required',
            // 'emp_overtime_allowance'=>'required',
            // 'emp_holiday_allowance'=>'required',
            // 'emp_offday_allowance'=>'required',
            // 'emp_leave_allowance'=>'required',
            // 'emp_special_allowance'=>'required',
            // 'emp_blood_group'=>'required',
            ]);

           $image=$request->file('emp_photo');
           $slug=str_slug($request->emp_name);
           $employee=Employee::find($id);
           if(isset($image))
           {
            $currentDate=Carbon::now()->toDateString();
            $imagename=$slug.'-'.$currentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/employee'))
             {
              mkdir('uploads/employee',077,true);
              } 
            $image->move('uploads/employee',$imagename);
           }
           else{
            $imagename=$employee->emp_photo;
            }




           // $emp_dob = Carbon::createFromFormat('m/d/Y', $request->emp_dob)->format('Y-m-d');
           // $emp_joining_date = Carbon::createFromFormat('m/d/Y', $request->emp_joining_date)->format('Y-m-d');

            $houserent=($request->emp_basic *20)/100;
            $medical=($request->emp_basic *5)/100;
            


            
            
            $employee->emp_code=0;
            $employee->emp_name=$request->emp_name;
            $employee->emp_father_name=$request->emp_father_name;
            $employee->emp_mother_name=$request->emp_mother_name;

            $employee->emp_dob=$request->emp_dob;
            // $employee->emp_gender=$request->emp_gender;
            // $employee->emp_nationality=$request->emp_nationality;
            $employee->emp_permanent_house=$request->emp_permanent_house;
            $employee->emp_permanent_po=$request->emp_permanent_po;
            $employee->emp_permanent_ps=$request->emp_permanent_ps;
            $employee->emp_permanent_district=$request->emp_permanent_district;
            $employee->emp_present_house=$request->emp_present_house;
            $employee->emp_present_po=$request->emp_present_po;
            $employee->emp_present_ps=$request->emp_present_ps;
            $employee->emp_present_district=$request->emp_present_district;
            $employee->emp_photo=$imagename;
            // $employee->emp_photo=$request->emp_photo;
            $employee->dept_id=$request->emp_department;
            $employee->desig_id=$request->emp_designation;

            $employee->emp_joining_date=$request->emp_joining_date;
            $employee->emp_basic=$request->emp_basic;
            // $employee->emp_house_rent=$request->emp_house_rent;
            $employee->emp_house_rent=$houserent;
            // $employee->emp_medical_allowance=$request->emp_medical_allowance;
            $employee->emp_medical_allowance=$medical;
            // $employee->emp_overtime_allowance=$request->emp_overtime_allowance;
            // $employee->emp_holiday_allowance=$request->emp_holiday_allowance;
            // $employee->emp_offday_allowance=$request->emp_offday_allowance;
            // $employee->emp_leave_allowance=$request->emp_leave_allowance;
            //$employee->emp_special_allowance=$request->emp_special_allowance;
            $employee->emp_gross=$request->emp_basic + $houserent + $medical;
            // $employee->emp_blood_group=$request->emp_blood_group;
            $employee->emp_status=$request->emp_status;
            
            //   dd($employee);
            $employee->save();
            
            return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    public function DesignationAll()
    {
        $designation=Designation::all();
        return view('all_designation',compact('designation'));
    }
    public function DesignationStore(Request $request)
    {
        $this->validate(request(),[
            'designation_name'=>'required',
           ]);
        $designationstore=new Designation();
        $designationstore->designation_name=$request->designation_name;
        $designationstore->save();
        //toastr()->success('Data has been Saved successfully!');
       // notify()->success('Welcome to Laravel Notify ⚡️');
        return redirect()->route('employee.designation');
    }
    public function DesignationEdit($id)
    {
        $designationedt=Designation::find($id);
        //toastr()->success('Data has been Updated successfully!');
       
        return view('edit_designation',compact('designationedt'));
    }
     public function DesignationUpdate(Request $request,$id)
    {
        $this->validate(request(),[
            'designation_name'=>'required',
           ]);
        $designationstore=Designation::find($id);
        $designationstore->designation_name=$request->designation_name;
        $designationstore->save();
        //notify()->success('Data has been Updated successfully!⚡️');
        return redirect()->route('employee.designation');
    }
     public function DesignationDelete($id)
    {
      Designation::findOrFail($id)->delete();
     // notify()->success('Data has been Deleted successfully! ⚡️');
      //toastr()->warning('Data has been Deleted successfully!');
      return redirect()->route('employee.designation');
      // return redirect()->route('employee.designation')->with('message','Designation Deleted Successfully!');
    
    }
}
