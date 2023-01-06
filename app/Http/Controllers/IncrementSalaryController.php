<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncrementSalary;

class IncrementSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incrementsalary=IncrementSalary::all();
        return view('increment_salary',compact('incrementsalary'));
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
            'incre_amount'=>'required',
            'incre_reason'=>'required',
           ]);

           $incrementsalary=new IncrementSalary();
           $incrementsalary->emp_id=$request->emp_id;
           $incrementsalary->incre_year=$request->incre_year;
           $incrementsalary->incre_month=$request->incre_month;
           $incrementsalary->incre_date=$request->incre_date;
           $incrementsalary->incre_amount=$request->incre_amount;
           $incrementsalary->incre_reason=$request->incre_reason;
           //dd($incrementsalary);
           $incrementsalary->save();
           
           return redirect()->route('increment-salary.index');
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
