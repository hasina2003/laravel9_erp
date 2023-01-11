<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use Carbon\Carbon;
use PDF;
use DB;
class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leave=Leave::all();
        return view('leave_list',compact('leave'));
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
        // $request->validate([
        //     'emp_id' => 'required|unique:leaves',
        //     'leave_type_id'=>'required',
        //     'leave_from'=>'required',
        //     'leave_to'=>'required',
            
        // ]);
            
        // Employee::insert([
        //     'emp_id'=>$request->emp_id,
        //     'leave_type_id'=>$request->leave_type_id,
        //     'leave_from'=>$request->leave_from,
        //     'leave_to'=>$request->leave_to,

        // ]);
        
        // return redirect()->route('leave_list')->with('message','Leave Information Saved Successfully!');

        $this->validate(request(),[
            'emp_id'=>'required',
            'leave_type_id'=>'required',
            'leave_from'=>'required',
            'leave_to'=>'required',
      
           ]);

           $leave_from = Carbon::createFromFormat('m/d/Y', $request->leave_from)->format('Y-m-d');
           $leave_to = Carbon::createFromFormat('m/d/Y', $request->leave_to)->format('Y-m-d');

           
           $diff=date_diff(date_create($leave_from),date_create($leave_to));
        
           
      
            $leave=new Leave();
            $leave->emp_id=$request->emp_id;
            $leave->leave_type_id=$request->leave_type_id;
            $leave->leave_from=$leave_from;
            $leave->leave_to=$leave_to;
            $leave->leave_total_day=$diff->d + 1;
            $leave->leave_status="Paid";
            $leave->save();
            // dd("success");
            return redirect('/leave');

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

    public function CheckAvailability()
    {
       // $chk_total_leave=DB::table('leaves')->sum('leave_total_day')->where('att_date','edit_date')->get();
        $chk_leave=DB::table('leaves')
        ->join('leavetypes','leaves.leave_type_id','leavetypes.id')
       ->select('leavetypes.leave_type','leavetypes.leave_day','leaves.*')->get();
        // ->where('edit_date',$edit_date)->get();
    
        // $chk_leave = Leave::all();
        $pdf = PDF::loadView('pdf.leave_check_availability',compact('chk_leave'));
        return $pdf->download('leave_check_availability.pdf');
    }
    
   


}
