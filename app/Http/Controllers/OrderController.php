<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('all_order');
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
        //
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

    public function DeliveryOrder()
    {
        return view('delivery_order');
    }

    public function ViewOrder()
    {
        return view('view_order');
    }
   
    public function EditOrder()
    {
        return view('edit-order');
    }
    public function OrderList()
    {
        return view('pdf.order_list');
    }
    public function WorkOrder()
    {
        return view('pdf.work-order');
    }
    public function AllCustomer()
    {
        return view('all_customer');
    }
     public function ADDCustomer()
    {
        return view('add_customer');
    }
    public function EditCustomer()
    {
        return view('edit_customer');
    }
    public function ViewCustomer()
    {
        return view('view_customer');
    }
 public function CustomerList()
    {
        return view('pdf.CustomerList');
    }

    public function DeliveryProduct()
    {
        return view('pdf.delivery-product');
    }


     public function CompletedOrder()
    {
        return view('pdf.completed-order');
    }

     public function ProcessingOrder()
    {
        return view('pdf.processing-order');
    }

 public function WaitingOrder()
    {
        return view('pdf.waiting-order');
    }


    
}
