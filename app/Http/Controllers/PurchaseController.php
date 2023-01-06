<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('all_purchase');
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
    
    public function AddSupplier()
    {
       return view('add_supplier'); 
    }
   
    public function PurchaseRequisition()
    {
       return view('purchase_requisition'); 
    }
    public function ViewRequisition()
    {
       return view('view_requisition'); 
    }
    public function EditRequisition()
    {
       return view('edit_requisition'); 
    }
   
    public function AllSupplier()
    {
       return view('all_supplier');  
    }
    public function ViewSupplier()
    {
       return view('view_supplier'); 
    }
   
    public function EditSupplier()
    {
       return view('edit_supplier');  
    }
    
    

     public function ViewPurchase()
    {
       return view('view_purchase');  
    }
     public function EditPurchase()
    {
       return view('edit_purchase');  
    }

    
    public function SupplierList()
    {
       return view('pdf.supplier_list');  
    }
    public function PurchaseList()
    {
       return view('pdf.purchase_list');  
    }
   


}
