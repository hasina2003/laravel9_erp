<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Salary;
use App\Models\AdvancedSalary;
use DB;
class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salary=Salary::select('salary_month', 'salary_year')->distinct()->get();
        return view('all_employee_salary',compact('salary'));
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
       
      

      $employees = Employee::all();
     
      foreach ($employees as $employee) 
        {
          Salary::create([
            'emp_id' => $employee->id,
            'salary_month' => $request->salary_month, 
            'salary_year' => $request->salary_year,
            'emp_basic' => $employee->emp_basic,
            'emp_house_rent' => $employee->emp_house_rent,
            'emp_medical_allowance' => $employee->emp_medical_allowance,
            'emp_overtime_allowance' => $employee->emp_overtime_allowance,
            'emp_holiday_allowance' => $employee->emp_holiday_allowance,
            'emp_offday_allowance' => $employee->emp_offday_allowance,
            'emp_leave_allowance' => $employee->emp_leave_allowance,
            'emp_special_allowance' => $employee->emp_special_allowance,
            'emp_gross'=>$employee->emp_gross,
            'emp_advance_amount'=>$employee->emp_advance_amount,
            //'emp_net_amount'=>$employee->emp_net_amount,
             ]);
         }

       /*  ---   start delete advance amount from employee  --- */
       
        $a=0;
        $m='no';
        $y=0;
        $results = Employee::where('emp_advance_amount','>',0)
                         ->get();
        foreach($results as $result){
            $result->emp_advance_amount = $a;
            $result->emp_advance_amount_month = $m;
            $result->emp_advance_amount_year = $y;
            $result->save();
        }
      
      /*  ---   end delete advance amount from employee  --- */

        return redirect()->route('all-employee-salary.index');
    }

   

   public function AllSalary($salary_month,$salary_year)
    {
       $all_salary = Salary::where('salary_month','=',$salary_month)
                         ->where('salary_year','=',$salary_year)
                         ->get();
      // dd($all_salary);  
      return view('all_salary',compact('all_salary'));                
    }

    public function IndivisualSalary($salary_month,$salary_year)
    {
       $indivisual_salary = Salary::where('salary_month','=',$salary_month)
                         ->where('salary_year','=',$salary_year)
                         ->get();
      return view('indivisual_salary',compact('indivisual_salary'));                
    }
    public function PaySlip($emp_id,$salary_month,$salary_year)
    {
       $pay_slip = Salary::where('emp_id','=',$emp_id)
                         ->where('salary_month','=',$salary_month)
                         ->where('salary_year','=',$salary_year)
                         ->get();
      return view('pay_slip',compact('pay_slip'));                
    }
   
   public function ViewPaySlip($emp_id,$salary_month,$salary_year)
    {
       $viewpay = Salary::where('emp_id','=',$emp_id)
                         ->where('salary_month','=',$salary_month)
                         ->where('salary_year','=',$salary_year)
                         ->get();
      // dd($viewpay_slip);                  
      return view('viewpay_slip',compact('viewpay'));                
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

   
    
}
