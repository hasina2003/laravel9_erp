
@extends('layouts.theme')
@section('page_title')
Generate Barcode | DashLite Admin Template
@endsection
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <ul class="nk-block-tools justify-between g-3">
              <li><a href="{{ url('product/create') }}" class="btn text-white bg-primary"><em class="icon ni ni-plus"></em><span>Add New</span></a></li>
            </ul>
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            
                                
                               
                                   
                                
                            
                        </div><!-- .nk-block-head-content -->
                       <div class="row">

                         @forelse ($productsBarcode  as $barcode)
                             <div class="col-lg-4  col-md-4 col-sm-12 mt-3 text-center">
                                <div class="card">
                                    {{-- <div id="print"> --}}
                                        <div class="card-body">
                                            <ul>
                                                {{-- <li>{  !! $barcode->barcode !! }</li> --}}
                                                <li>{!! DNS1D::getBarcodeHTML("$barcode->product_code", 'EAN13') !!} </li>
                                                <li>{{$barcode->product_code}}</li>
                                            </ul>
                                           {{-- {  !! $barcode->barcode !! } --}}
                                           {{-- <img src="{  !! $barcode->barcode !! }" alt="barcode" />--}}
                                           {{-- {!! DNS1D::getBarcodeHTML("$barcode->product_code", 'C128A') !!}  --}}
                                           {{-- <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($barcode->product_code, 'C39+',1,33,array(0,220,150), true)}}" alt="barcode" /><br><br> --}}
                                           {{-- {!! DNS1D::($barcode->product_code, $barcode->barcode) !!} --}}
                                           
                                           {{-- <p class="text-center" style="padding: 1em;margin-top:2em;">{{$barcode->product_code}}</p> --}}
                                        </div>
                                    {{-- </div> --}}
                                </div>
                             </div>
                         @empty
                            <h2 align="center">No data</h2> 
                         @endforelse

                       </div>
                         
   
</div> </div> </div> </div> </div> </div> 
@endsection