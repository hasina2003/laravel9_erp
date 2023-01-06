<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use DB;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
            'cust_name'=>'required',
            'cust_email'=>'required',
            'cust_phone'=>'required',
            'cust_address'=>'required',
            'shopname'=>'required',
            'cust_photo'=>'required',
            'account_holder'=>'required',
            'account_name'=>'required',
            'bank_name'=>'required',
            'bank_branch'=>'required',
            'city'=>'required',
           ]);

           $customer=new Customer();
           $customer->cust_name=$request->cust_name;
           $customer->cust_email=$request->cust_email;
           $customer->cust_phone=$request->cust_phone;
           $customer->cust_address=$request->cust_address;
           $customer->shopname=$request->shopname;
           $customer->cust_photo=$request->cust_photo;
           $customer->account_holder=$request->account_holder;
           $customer->account_name=$request->account_name;
           $customer->bank_name=$request->bank_name;
           $customer->bank_branch=$request->bank_branch;
           $customer->city=$request->city;
           $customer->save();
           
           return redirect('pos');
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
