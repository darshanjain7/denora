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
                                     <h3  style="    color: #2b333e; font-weight: 600;">Upload SK Number's Drawing</h3>
                               </div>
                               <div class="panel-body">
                <form action="{{ action('DrowingController@store')}}" method="post"  enctype="multipart/form-data">
                                 @csrf

                                 

                                           <div class="col-md-2">Product SK Number:</div><div class="col-md-10"><select class="form-control" name="prosk">
                                               @foreach($cards as $tbl_contents)
                                               <option value="{{$tbl_contents->product_sku_id}} ">{{$tbl_contents->sku}} </option>
                                                
                                               @endforeach
                                           </select>
                                       <br></div>

                                       <div class="col-md-2">Drawing Name:</div><div class="col-md-10"><input type="text" class="form-control" placeholder="Drawing Name" name="dname" rows="4" required="">
                                       <br></div>

                                       <div class="col-md-2">PDF:</div><div class="col-md-10"><input type="file" class="form-control" name="upload" placeholder="Upload PDF"  required="">
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
 