@extends('inc.adminlayout123')

@section('content')
<div class="main">
           <div class="main-content">
               <div class="container-fluid">
                   


                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
       
                <div class="panel">
                    @include('inc.messages')
                               <div class="panel-heading">
                                     <h3  style="    color: #2b333e; font-weight: 600;">Update  Product SK Numbers
</h3>
                               </div>
                               <div class="panel-body">
                                
                                 @foreach($value123 as $tbl_contents)
                <form action="../../productsknumber/{{$tbl_contents->product_sku_id}}" method="post"  enctype="multipart/form-data">
                                 @csrf
                           @method('put')
                                
                            <div class="col-md-2">Product Category:</div><div class="col-md-10"><select class="form-control" name="pcat">
                                               @foreach($value123 as $tbl_contents)
                                               <option value="{{$vvv=$tbl_contents->product_category_id}} ">{{$tbl_contents->category_name}} </option>
                                                @endforeach
                                                 @foreach($value12 as $value1234)
                                                 @if($vvv!=$value1234->sk_category_id)
                                                <option value="{{$value1234->sk_category_id}} ">{{$value1234->category_name}}</option>
                                                @endif
                                                @endforeach
                                           </select>
                                       <br></div>

                                       <div class="col-md-2">SK Number:</div><div class="col-md-10"><input class="form-control" name="sknumber" placeholder="SK Number" type="text" required="" value=" {{$tbl_contents->sku}}">
                                       <br></div>
                                             <div class="col-md-2">Send Enquiry:</div>
                                        <div class="col-md-10">
                                            <select class="form-control" name="send-enquiry">
                                                <?php $spar=$tbl_contents->sk_spare; ?>
                                                <option value="0" <?php if($spar=='0'){ ?>selected<?php } ?>>No</option>
                                                  <option value="1" <?php if($spar=='1'){ ?>selected<?php } ?>>Yes</option>
                                             </select>
                                       <br></div>
                                       <div class="col-md-2">Description:</div><div class="col-md-10"><input class="form-control" name="description" placeholder="Description" type="text" required="" value=" {{$tbl_contents->description}}">
                                       <br></div>
                                        
                                    
                                      
                                                 
                                <div class="col-md-5"></div>
                                    <button type="submit" style="  margin-top: 19px; " class="btn btn-primary">Update</button>
                                   </form>	
                                     @endforeach
     
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>


           <!-- END MAIN CONTENT -->
       </div>


   </div>
@endsection
 