<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use \Milon\Barcode\DNS1D;
use Picqer;
use DB;
use Carbon\Carbon;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $d = new DNS1D();
        //$d->setStorPath(__DIR__.'/cache/');
        // $product=new Product();
        //  $product_code=$request->product_code;
        // $d->getBarcodeHTML($request->product_code, 'EAN13');
        // echo $d;
        // dd($product_code);

        // echo $d->getBarcodeHTML('1', 'EAN13');
        // echo "1";
        // echo $d->getBarcodeHTML('2', 'EAN13');
        // echo "2";
        // echo $product_code;
        // echo $d->getBarcodeHTML('3', 'EAN13');
        // echo "3";
        // echo $d->getBarcodeHTML('4', 'EAN13');
        // echo "4";

        // echo $d->getBarcodeHTML('5', 'EAN13');
        // echo "5";
        // echo $d->getBarcodeHTML('6', 'EAN13');
        // echo "6";
        // echo $d->getBarcodeHTML('7', 'EAN13');
        // echo "7";
        // echo $d->getBarcodeHTML('8', 'EAN13');
        // echo "8";
        // echo $d->getBarcodeHTML('4000', 'EAN13');
        // echo "4000";
        // echo $d->getBarcodeHTML('1000', 'EAN13');
        // echo "1000";

        $productsBarcode = Product::select('barcode','product_code')->get();
        return view('all_product',compact('productsBarcode'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$category=DB::table('categories')->get();
       // return view('generate_barcode',compact('category'));
        return view('generate_barcode');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $product = new Product;

        // $number = $request->sku;
        // $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        // $barcode = '< img src="data:image/png;base64,' . base64_encode($generator->getBarcode($number, $generator::TYPE_CODE_128)) . '" >';
        // Product::create($request->all());
        $products=new Product;
        $products->product_name=$request->product_name;
        $products->product_code=$request->product_code;
        $d = new DNS1D();
        $barcode=$d->getBarcodeHTML($request->product_code, 'EAN13');
        //dd($barcode);
        // dd($request->product_code);
        // $product->barcode = $barcode;
        // $product->save(); 

        // return $request->all();
        //product code section

        //  $product_code=rand(106890122,100000000);
        // $redcolor='255,0,0';
        // $generator=new Picqer\Barcode\BarcodeGeneratorHTML();
        // $barcodes=$generator->getBarcode($product_code,$generator::TYPE_CODE_128);   

        // $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        // $barcode = '< img src="data:image/png;base64,' . base64_encode($generator->getBarcode($product_code, $generator::TYPE_CODE_128)) . '" >';

      

      
    //    dd($products->product_code);
       
    //    $d->setStorPath(__DIR__.'/cache/');
    //    echo $d->getBarcodeHTML($request->product_code, 'EAN13');
    //    echo $request->product_code;


       $image=$request->file('product_image');
       $slug=str_slug($request->product_name);
       if(isset($image))
              {
                $currentDate=Carbon::now()->toDateString();
                $imagename=$slug.'-'.$currentDate.'.'.$image->getClientOriginalExtension();
                if(!file_exists('uploads/product'))
                {
                    mkdir('uploads/product',077,true);
                } 
                $image->move('uploads/product',$imagename);
              }
              else
              {
                $imagename='default.png';
              }


       $products->quantity=$request->quantity;
       $products->price=$request->price;
       $products->brand=$request->brand;
       $products->alert_stock=$request->alert_stock;
       $products->description=$request->description;
       $products->barcode=$barcode;
       $products->cat_id=$request->cat_id;
       //$products->cat_id=1;
       $products->product_image=$imagename;
       //dd($products);
       $products->save();
 
       return redirect('/product');

    //    return redirect()->back()->with('success','Product Added Successfully');
    
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

    public function GetProductBarcodes()
    {
        $productsBarcode = Product::select('barcode','product_code')->get();
        return view('all_product',compact('productsBarcode'));
    }
}
