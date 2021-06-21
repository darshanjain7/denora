@extends('inc.adminlayout123')

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
                                    <h3  class="panel-title" style="   font-size: 24px; color: #2b333e; font-weight: 600;">View Product HTML</h3>
                                   
                               </div>
                               <div class="panel-body">
                                   <table class="table table-bordered">
                                       <thead>
                                           <tr>
                                               <th>ID</th>
                                               <th width="20%">Product type</th>
                                               <th width="20%">Product Name</th>
                                                
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
                                               
                                               <td>{{$tbl_contents->product_type}}</td>
                                               <td>{{$tbl_contents->product_name}}</td>
                                              
                                                 <td>{{$tbl_contents->name}} </td>
                                               <td width="10%;"> 
                                        @if($tbl_contents->status==1)
                                         Active 													@else
                                                    Inactive 
                                                    @endif </td>
                                                
                                        @if($tbl_contents->status==1)

                                       <td>  <input type="hidden" class="pgrpid"   value="{{$tbl_contents->product_master_id}}"><a style="color:white" class="btn btn-danger button-active-type1" >Inactive</a> 													@else
                                                   <td><input type="hidden" class="pgrpid"   value="{{$tbl_contents->product_master_id}}"><a style="color:white" class="btn btn-success button-inactive-type1"  >Active</a>
                                                    @endif </td>
                                               <td> <a style="color:white" class="btn btn-primary" href="../producthtml/{{$tbl_contents->product_master_id}}/edit" >Edit</a></td>
                                           </tr>
                                            @endforeach
                                            </tbody>
                                   </table>
                                            {{$value123->links()}}
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