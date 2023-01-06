<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        // echo "$request";
        $data=array();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['qty']=$request->qty;
        $data['price']=$request->price;
        $data['weight'] = 550;
        //dd($data);
        $add=Cart::add($data);
       //  if($customer){
       //      $notification=array(
       //          'message'=>'Product Added',
       //          'alert-type'=>'success'
       //      );
       //      return Redirect()->back()->with($notification);

       //  }  
       //  else{
       //      $notification=array(
       //          'message'=>'error',
       //          'alert-type'=>'success'
       //      );
       //     return Redirect()->back()->with($notification);

       // }  
         return Redirect()->back();
        // Cart::add('192ao12', 'Product 1', 1, 9.99);
        // Cart::add('1239ad0', 'Product 2', 2, 5.95, ['size' => 'large']);


    }

    public function CartUpdate(Request $request,$rowId)
    {
      
        $qty=$request->qty;
        $update=Cart::update($rowId, $qty); 
        if($update){
            $notification=array(
                'message'=>'Update Successfully',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

        }  
        else{
            $notification=array(
                'message'=>'error',
                'alert-type'=>'success'
            );
           return Redirect()->back()->with($notification);

       }  
    }



 public function CartRemove($rowId)
    {
       $remove=Cart::remove($rowId); 
        if($remove){
            $notification=array(
                'message'=>'Product Remove Successfully',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

        }  
        else{
            $notification=array(
                'message'=>'error',
                'alert-type'=>'success'
            );
           return Redirect()->back()->with($notification);

       }  
    }



public function CreateInvoice(Request $request)
    {
        // $contents=Cart::content();
        // $cust_id=$request->cust_id;
        // echo "<pre>";
        // print_r($contents);
        // echo "<br>";
        // print_r($cust_id);
        $this->validate(request(),[
            'cust_id'=>'required',],
            ['cust_id.required'=>'At first select a customer !',]
      
           );
        $cust_id=$request->cust_id;
       // echo $cust_id;
       // exit();
       $customer=DB::table('customers')->where('id',$cust_id)->first();
       $contents=Cart::content();

        return view('invoice',compact('customer','contents'));

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
    //     $data=array();
    //     $data['id']=$request->id;
    //     $data['name']=$request->name;
    //     $data['qty']=$request->qty;
    //     $data['price']=$request->price;
        
    //     $add=Cart::add($data);
    //     if($customer){
    //         $notification=array(
    //             'message'=>'Product Added',
    //             'alert-type'=>'success'
    //         );
    //         return Redirect()->back()->with($notification);

    //     }  
    //     else{
    //         $notification=array(
    //             'message'=>'error',
    //             'alert-type'=>'success'
    //         );
    //         return Redirect()->back()->with($notification);
    // }
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
