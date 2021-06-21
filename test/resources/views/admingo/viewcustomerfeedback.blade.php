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
                                     <h3  style="    color: #2b333e; font-weight: 600;">Feedback Details
</h3>
                               </div>
                               <div class="panel-body">
                                
                                 @foreach($tbl_content as $tbl_contents)
                <form action="}" method="post"  enctype="multipart/form-data">
                                 @csrf
                           @method('put')
                            <table class="table-bordered" width="100%">
                            <tr>  <th style="width: 45%;padding: 13px;">Rating (from star rating):</th><td style="padding-left: 13px;" >{{$tbl_contents->rating}}</td></tr>
                            <tr>  <th style="width: 45%;padding: 13px;">Recommend De Nora:</th><td style="padding-left: 13px;" >{{$tbl_contents->recomand}}</td></tr>
                             <tr>  <th style="width: 45%;padding: 13px;">Message:</th><td style="padding-left: 13px;" >{{$tbl_contents->message}}</td></tr>
                             <tr>  <th style="width: 45%;padding: 13px;">IP Address:</th><td style="padding-left: 13px;" > 
                            <?php $IPaddress= $tbl_contents->created_ip; $res = file_get_contents('https://www.iplocate.io/api/lookup/'.$IPaddress.'');
                            $res = json_decode($res);
                            echo $va=$res->country; ?></td></tr>
                            <tr>  <th style="width: 45%;padding: 13px;">Browser, Version & Platform:</th><td style="padding-left: 13px;" >{{$tbl_contents->system_details}}</td></tr>
                            
                            
                            
                            </table>

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
 