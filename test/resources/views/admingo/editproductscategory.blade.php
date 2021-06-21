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
                    @if(Session::has('flash_message'))
   <div class="alert alert-success"  data-expires="5000"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
                               <div class="panel-heading">
                               
                                     <h3  style="    color: #2b333e; font-weight: 600;">Update  Product Category
</h3>
                               </div>
                               <div class="panel-body">
                                
                                 @foreach($tbl_content as $tbl_contents)
                <form action="../../productscategory/{{$tbl_contents->sk_category_id}}" method="post"  enctype="multipart/form-data">
                                 @csrf
                           @method('put')
                                
                           <div class="col-md-2">Product Type:</div><div class="col-md-10">
                           <select class="form-control" name="protypename">
                           @foreach($tbl_content as $tbl_contents)
                                               <option value="{{$vvv=$tbl_contents->product_type_id}} ">{{$tbl_contents->product_type}} </option>
                                                
                                               @endforeach
												  @foreach($value12 as $value123)
												  @if($vvv!=$value123->product_type_id)
												 <option value="{{$value123->product_type_id}} ">{{$value123->product_type}}</option>
												 @endif
												 @endforeach
                                              
                                              
                                             
                                           </select>
                                       <br></div>

                                       <div class="col-md-2">Category Name:</div><div class="col-md-10"><input class="form-control" name="procatname" placeholder="Product Category Name" type="text" required="" value=" {{$tbl_contents->category_name}}">
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
 