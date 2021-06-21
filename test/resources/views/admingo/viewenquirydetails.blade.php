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
                                     <h3  style="    color: #2b333e; font-weight: 600;">Product Enquiry Details
</h3>
                               </div>
                               <div class="panel-body">
                                
                                 @foreach($tbl_content as $tbl_contents)
                <form action="}" method="post"  enctype="multipart/form-data">
                                 @csrf
                           @method('put')
                            <table class="table-bordered" width="100%">
                            <tr>  <th style="padding: 13px;">Name:</th><td style="padding-left: 13px;" >{{$tbl_contents->name}}</td></tr>
                            <tr>  <th style="padding: 13px;">Email ID:</th><td style="padding-left: 13px;" >{{$tbl_contents->email}}</td></tr>
                            <tr>  <th style="padding: 13px;">Mobile:</th><td style="padding-left: 13px;" >{{$tbl_contents->mobile}}</td></tr>
                            <tr>  <th style="width: 45%;padding: 13px;">SK Number:</th><td style="padding-left: 13px;" >{{$tbl_contents->sk_number}}</td></tr>
                            <tr>  <th style="width: 45%;padding: 13px;">Subject:</th><td style="padding-left: 13px;" >{{$tbl_contents->subject}}</td></tr>
                            <tr>  <th style="width: 45%;padding: 13px;">Site Name:</th><td style="padding-left: 13px;" >{{$tbl_contents->site_name}}</td></tr>
                            <tr>  <th style="width: 45%;padding: 13px;">Note:</th><td style="padding-left: 13px;" >{{$tbl_contents->note}}</td></tr>
                            <tr>  <th style="width: 45%;padding: 13px;">Uploaded File:</th><td style="padding-left: 13px;" ><img src="../../storage/app/public/documents/upload/{{$tbl_contents->doc_upload}}" id="profile-img-tag" width="200px" /><br><a href="../../storage/app/public/documents/upload/{{$tbl_contents->doc_upload}}" download id="">Download</a></td></tr>
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
 