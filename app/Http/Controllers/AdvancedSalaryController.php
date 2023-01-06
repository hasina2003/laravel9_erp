<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdvancedSalary;
use App\Models\Employee;
use DB;
class AdvancedSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
           
        
        $advancedsalary=AdvancedSalary::all();
        return view('advanced_salary',compact('advancedsalary'));
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
            'emp_id'=>'required',
            'adv_amount'=>'required',
            'adv_reason'=>'required',
           ]);

           $advancedsalary=new AdvancedSalary();
           $advancedsalary->emp_id=$request->emp_id;
           $advancedsalary->adv_year=$request->adv_year;
           $advancedsalary->adv_month=$request->adv_month;
           $advancedsalary->adv_date=$request->adv_date;
           $advancedsalary->adv_amount=$request->adv_amount;
           $advancedsalary->adv_reason=$request->adv_reason;
          // dd($advancedsalary);
           $advancedsalary->save();

          

           $employee=Employee::find($request->emp_id);

           $employee->emp_advance_amount=$request->adv_amount;
           $employee->emp_advance_amount_month=$request->adv_month;
           $employee->emp_advance_amount_year=$request->adv_year;
           $employee->save();
           
           return redirect()->route('advanced-salary.index');
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
