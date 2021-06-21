@extends('inc.adminlayout123')

@section('content')
<div class="main">
           <div class="main-content">
               <div class="container-fluid">
                   
                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
       @include('inc.messages')
                <div class="panel">
                        @if(Session::has('flash_message'))
   <div class="alert alert-success"  data-expires="5000"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
                               <div class="panel-heading">
                                     <h3  style="    color: #2b333e; font-weight: 600;">Create Product SK Numbers</h3>
                               </div>
                               <div class="panel-body">
                <form action="{{ action('productsknumbercontroller@store')}}" method="post"  enctype="multipart/form-data">
                                 @csrf

                                 

                                           <div class="col-md-2">Product Category:</div><div class="col-md-10"><select class="form-control" name="procat">
                                               @foreach($tbl_content as $tbl_contents)
                                               <option value="{{$tbl_contents->sk_category_id}} ">{{$tbl_contents->category_name}} </option>
                                                
                                               @endforeach
                                           </select>
                                       <br></div>

                                       <div class="col-md-2">SK Number:</div><div class="col-md-10"><input type="text" class="form-control" placeholder="SK Number" name="sknumber" rows="4" required="">
                                       <br></div>
                                       
                                        <div class="col-md-2">Send Enquiry:</div><div class="col-md-10"><select class="form-control" name="send-enquiry">
                                              
                                               <option value="0">No</option>
                                               <option value="1">Yes</option>
                                                
                                              
                                           </select>
                                       <br></div>

                                       <div class="col-md-2">Description:</div><div class="col-md-10"><input type="text" class="form-control" placeholder="Description" name="description" rows="4" required="">
                                       <br></div>



                                         
                                    <div class="col-md-5"></div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                   </form>	
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
 