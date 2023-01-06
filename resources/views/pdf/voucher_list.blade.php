
@extends('layouts.theme')

@section('page_title')
Invoice | DashLite Admin Template
@endsection

@section('content')
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <!-- <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div> -->
                            <div class="nk-header-brand d-xl-none">
                                <!-- <a href="html/index.html" class="logo-link"> -->
                                    <img src="./images/logo.jpg" alt="" style="width: 20px;">
                                <!-- </a> -->
                            </div><!-- .nk-header-brand -->
                            
                           
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title"> Prepared By <strong class="text-primary small">Mr. X</strong></h3>
                                            <div class="nk-block-des text-soft">
                                                <ul class="list-inline">
                                                    <li>Created At: <span class="text-base">18 Dec, 2019 01:02 PM</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="{{route('pos.index')}}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                            <a href="html/invoice-list.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="invoice">
                                        <div class="invoice-action">
                                            <a class="btn btn-icon btn-lg btn-white btn-dim btn-outline-primary" href="" onclick="window.print()" target="_blank"><em class="icon ni ni-printer-fill"></em></a>
                                        </div><!-- .invoice-actions -->
                                        <div class="invoice-wrap">
                                            <div class="invoice-brand text-center">
                                                <img src="./images/logo.jpg" alt="" style="width: 80px;">
                                            </div>
                                            <div class="invoice-head">
                                                <div class="invoice-contact">
                                                    <span class="overline-title">Contact Person: </span>Mr. K
                                                    <div class="invoice-contact-info">
                                                        <h4 class="title"></h4>
                                                        <ul class="list-plain">
                                                            <li><em class="icon ni ni-map-pin-fill"></em><span>AB Center-5th floor,Panthopath,Dhaka</span></li>
                                                            <li><em class="icon ni ni-call-fill"></em><span>+02-00000</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="invoice-desc">
                                                    <h3 class="title">Customer-1</h3>
                                                    <ul class="list-plain">
<li class="invoice-id"><span>Order No.</span>:<span>0000001</span></li>
<li class="invoice-id"><span>Total Amount</span>:<span>5000</span></li>
<li class="invoice-id"><span>Rest Amount</span>:<span>1000</span></li>
                                                        <li class="invoice-date"><span>Date</span>:<span>03 Jan, 2023</span></li>
                                                    </ul>
                                                </div>
                                            </div><!-- .invoice-head -->
                                            <div class="invoice-bills">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="w-150px">Voucher No</th>
                                                                 <th class="w-150px">Voucher Type</th>
                                                                <th class="w-60">Transaction Date</th>
                                                                <th>Amount</th>
                                                               <!--  <th>Price</th>
                                                                <th>Total</th> -->
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                         
                                                            <tr>
                                                                <td>000001</td>
                                                                <td>Credit</td>
                                                                <td>5th May,2022</td>
                                                                <td>3000</td>
                                                                <!-- <td>10</td>
                                                                <td>5000</td> -->
                                                            </tr>
                                                              <tr>
                                                                <td>000002</td>
                                                                <td>Credit</td>
                                                                <td>15th Dec,2022</td>
                                                                <td>1000</td>
                                                                <!-- <td>10</td>
                                                                <td>5000</td> -->
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>Total: 4000</td>
                                                            </tr>
                                                           <!--  <tr>
                                                                <td colspan="2"></td>
                                                                <td colspan="2">Grand Total</td>
                                                                <td>9000</td>
                                                            </tr> -->
                                                        </tfoot>
                                                    </table>
                                                </br></br></br></br>
                                                    <div > 
                                                       
                                                       
                                                    </div>
                                                   
                                                </div>
                                            </div><!-- .invoice-bills -->
                                        </div><!-- .invoice-wrap -->
                                    </div><!-- .invoice -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                
            </div>
            <!-- wrap @e -->
       @endsection