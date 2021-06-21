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
                                     <h3  style="    color: #2b333e; font-weight: 600;">Update  Product Drawing
</h3>
                               </div>
                               <div class="panel-body">
                                
                                 @foreach($tbl_content as $tbl_contents)
                <form action="../../sknumberdrowing/{{$tbl_contents->product_drowing_id}}" method="post"  enctype="multipart/form-data">
                                 @csrf
                           @method('put')
                                
                            <div class="col-md-2">Product SK Number:</div><div class="col-md-10"><select   class="form-control" name="sknumber">
                                               @foreach($tbl_content as $tbl_contents)
                                               <option value="{{$vvv=$tbl_contents->product_sku_id}} ">{{$tbl_contents->sku}} </option>
                                                @endforeach
                                                 @foreach($value12 as $value123)
                                                 @if($vvv!=$value123->product_sku_id)
                                                <option value="{{$value123->product_sku_id}} ">{{$value123->sku}}</option>
                                                @endif
                                                @endforeach
                                           </select>
                                       <br></div>

                                       <div class="col-md-2">Drawing Name:</div><div class="col-md-10"><input class="form-control" name="drowingname" placeholder="Drawing Name" type="text" required="" value=" {{$tbl_contents->drowing_name}}">
                                       <br></div>
                                        
                                    
                                      <div class="col-md-2"><br>PDF Upload:</div><div class="col-md-10"> 
                                       <br><input type="file" class="form-control" name="upload" placeholder="Upload Document" value="{{$tbl_contents->drowing_pdf}}">
                                </div>
                                    

                                    
                                    
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
 