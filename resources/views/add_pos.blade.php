
@extends('layouts.theme')
@section('page_title')
POS | DashLite Admin Template
@endsection
@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                
              
                <div class="nk-block">

                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h5 class="title">POS(Point of Sale)</h5>
                                    </div>
                                    <div class="card-tools mr-n1">
                                        <ol class="float right">
                                            <li><strong>Date: </strong>{{ date('d/m/y') }}</li>
                                         </ol>
                                    </div><!-- card-tools -->
                                </div>
                            </div>

                           
                            <div class="card-inner">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        @foreach ($category as $row)
                                         <a href="#" data-filter="*" class="btn btn-sm btn-primary">{{ $row->cat_name }}</a>
                                        @endforeach  
                                    </div>       
                                </div>   
                               <br/>
                               
                                <div class="row">
                               
                                <div class="col-lg-6">
                                    
                                    <br/>
                                    <div class="pricing-title">
                                         <ul>
                                             
                                             <table class="table"> 
                                                <thead class="bg-info">
                                                    <tr>
                                                        <th class="text-white">Name</th>
                                                        <th class="text-white">Quantity</th>
                                                        <th class="text-white">price</th>
                                                        <th class="text-white">Sub Total</th>
                                                        <th class="text-white">Action</th>
                                                    </tr>
                                                </thead>
                                                @php
                                                   $cart_product=Cart::content();
                                                @endphp
                                                
                                                <tbody>
                                                    
                                                   @foreach ($cart_product as $prod) 
                                                       
                                                  
                                                 <tr>
                                                    <td>{{$prod->name}}</td>
                                                    <td>
            <form action="{{route('cartupdate',$prod->rowId)}}" method="POST">
               @csrf

               <input type="number" name="qty" style="width:40px;" value="{{$prod->qty}}">
               <button type="submit" name="submit" class="btn btn-sm btn-success" style="margin-top: -2px;"><em class="icon ni ni-check"></em></button>
           </form>
                                                    </td>
                                                    <td>{{ $prod->price }}</td>
                                                    <td>{{ $prod->price * $prod->qty }}</td>
                                                    <td><a href="{{route('cartremove',$prod->rowId)}}"><em class="icon ni ni-trash"></em></a></td>
                                                 </tr>
                                                 @endforeach 
                                                </tbody>
                                             </table>
                                             
                                         </ul>   
                                         <ul class="text-center text-white bg-primary">
                                            <li style="font-size: 20px;">Quantity : {{Cart::count()}}</li>
                                             <li style="font-size: 20x;">Sub Total : {{Cart::subtotal()}}</li> 
                                            <li style="font-size: 20px;">Vat : {{Cart::tax()}}</li>
                                            <hr/>
                                            <li><h4 class="text-dark">Total :</h4> <h5>{{Cart::total()}}</h5></li>
                                         </ul>  
                                    </div>
     <form action=" {{route('create.invoice')}}" method="POST">
          @csrf
                                    <div class="panel">
                                    <div class="nk-block-head">
                                        <div class="nk-block-between g-3">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title text-info">Customer
                                                <a href="#" data-toggle="modal" data-target="#addLeave" class="btn text-white bg-primary"><em class="icon ni ni-plus"></em><span>Add Customer</span></a>
                                                </h3>

                                                 @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                 <select name="cust_id" id="cust_id" class="form-control">
                                                    <option disabled="" selected="">select customer</option>
                                                    @foreach ($customer as $custrow)
                                                       <option value="{{$custrow->id}}">{{ $custrow->cust_name }}</option>
                                                    @endforeach
                                        
                                               </select>
                                            </div><!-- .nk-block-head-content -->
                                            
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .nk-block-head -->
                                   
                                    </div> <!-- .panel -->
         
           </br>
          <button class="btn btn-success">  Invoice  </button>
         </form>
       </div>

                                <div class="col-lg-6">
                                   
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                               
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Category</th>
                                                    <th>Product Code</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               @foreach ($product as $row)
                                                 <tr>
                                                  <form action="{{route('add.cart')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $row->id }}">
                                                    <input type="hidden" name="name" value="{{  $row->product_name}}">
                                                    <input type="hidden" name="qty" value="1">
                                                    <input type="hidden" name="price" value="{{  $row->price}}">
                                                   <td>
                                                     
                                                    <img src="{{asset('uploads/product/'.$row->product_image)}}"  style="height: 40px;width:40px;"alt=""></
                                                </td>
                                                </td> 
                                                   <td>{{$row->product_name}}</td> 
                                                   <td>{{$row->cat_name}}</td> 
                                                   <td>{{$row->product_code}}</td> 
                                                   <td><button type="submit" class="btn btn-info btn-sm"><i class="icon ni ni-plus"></i></button></td>
                                                 </form>
                                                </tr>  
                                               @endforeach
                                            </tbody>
                                        </table>
                                   
                                </div>
                               </div>
                            </div><!-- .card-inner -->

                        </div>
                  </div>       
                  
                </div><!-- .nk-block -->


            </div>
        </div>
    </div>
</div>






  <div class="modal fade" id="addCustomer">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Add Customer</h5>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  

                <form action="{{ route('customer.store') }}" class="mt-2" method="POST"  enctype="multipart/form-data">
                 @csrf
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="cust_name">Full Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="cust_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="cust_email">Email</label>
                                <div class="form-control-wrap">
                                    <input type="email" class="form-control" name="cust_email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="cust_phone">Phone</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" name="cust_phone" required>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="cust_photo">Customer's Photo</label>
                                <div class="form-control-wrap">
                                    <div class="custom-file">
                                        <input type="file" multiple class="custom-file-input" name="cust_photo" required>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="cust_address">Address</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="cust_address" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="shopname">Shop Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="shopname" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="account_holder">Account Holder</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="account_holder" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="account_name">Account Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="account_name" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="bank_name">Bank Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="bank_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="bank_branch">Bank Branch</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="bank_branch" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="city">City</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="city" required>
                                </div>
                            </div>
                        </div>
                        
                      
                        

                       
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div><!-- .Add Modal-Content -->
</form>

@endsection
