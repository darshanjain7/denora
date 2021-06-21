

@extends('inc.adminlayout1234')
 
@section('content')

       <!-- /#page-wrapper -->
<div class="main">
           <div class="main-content">
               <div class="container-fluid">
                   
                   <div class="row">
                       <div class="col-md-12">
                           <!-- BORDERED TABLE -->
                           <div class="panel">
                               <div class="panel-heading">
                               @if(Session::has('flash_message'))
    <div class="alert alert-success"  data-expires="5000"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif 
                                    <h3  class="panel-title" style="   font-size: 24px; color: #2b333e; font-weight: 600;">Product SK Numbers</h3>
                                   
                               </div>
                               <div class="panel-body">
                                   <table id="example" class="table table-bordered">
                                       <thead>
                                           <tr>
                                           <th >#</th>
                                               <th width="20%">Product Category</th>
                                               <th width="10%" >SK Number</th>
                                               <th  width="20%">Description</th>
                                               <th width="15%">Created By</th>
                                                <th>Status</th>
                                                <th>Change</th>
                                               <th>Edit</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                            @if(count($value123)>0)
                                            <?php $i=0; ?>

                                            @foreach($value123 as $tbl_contents)
                                           <tr>
                                           <td>{{++$i}}</td>
                                              
                                                <td>{{$tbl_contents->category_name}}</td>
                                               <td>{{$tbl_contents->sku}}</td>
                                               <td>{{$tbl_contents->description}}</td>
                                              
                                                 <td>{{$tbl_contents->name}} </td>
                                               <td width="10%;"> 
                                        @if($tbl_contents->status==1)
                                         Active 													@else
                                                    Inactive 
                                                    @endif </td>
                                                
                                        @if($tbl_contents->status==1)

                                       <td>  <input type="hidden" class="pskid"   value="{{$tbl_contents->product_sku_id}}"><a style="color:white" href="../inactivate/{{$tbl_contents->product_sku_id}}" class="btn btn-danger" >Inactive</a> 													@else
                                                   <td><input type="hidden" class="pcatid"   value="{{$tbl_contents->product_sku_id}}"><a href="../activate/{{$tbl_contents->product_sku_id}}" style="color:white" class="btn btn-success"  >Active</a>
                                                    @endif </td>
                                               <td> <a style="color:white" class="btn btn-primary" href="../productsknumber/{{$tbl_contents->product_sku_id}}/edit" >Edit</a></td>
                                           </tr>
                                            @endforeach
                                            </tbody>
                                   </table>
                                           
                                            @else
                                            <span>No data found</span>
                                            @endif
                                           

                                            
                                        
                               </div>
                           </div>
                           <!-- END BORDERED TABLE -->
                       </div>
                    
                   </div>
               </div>
           </div>

           <!-- END MAIN CONTENT -->
       </div>

 
   </div>


@endsection