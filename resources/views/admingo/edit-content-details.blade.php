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
								<div class="panel-heading">
									  <h3  style="    color: #2b333e; font-weight: 600;">Update Content</h3>
								</div>
								<div class="panel-body">
				 <form action="../../admincontent/{{$tbl_content->id}}" method="post"  enctype="multipart/form-data">
  								@csrf
							@method('put')
										 
								 	@if($tbl_content->content_type=='1')
								 		<label class="fancy-radio">
								 <div class="col-md-2">Content Type:</div><div class="col-md-10">
								 	  <input name="ctype" value="1" disabled="" type="radio">
										<span><i></i>PPT</span></div>
									</label>
										<label class="fancy-radio">
								 		
										<div class="col-md-2" ></div><div class="col-md-10">
										<input name="ctype" value="2"   type="radio"  >

										<span><i></i>PDF</span><br></div>
									</label>
								  
								 	@else
								 	<label class="fancy-radio">
								 <div class="col-md-2">Content Type:</div><div class="col-md-10">
								 	  <input name="ctype" value="1" disabled=""  type="radio">
										<span><i></i>PPT</span></div>
									</label>
								 	<label class="fancy-radio">
								 	 
										<div class="col-md-2" ></div><div class="col-md-10">
										<input name="ctype" value="2" checked="checked" type="radio"  >

										<span><i></i>PDF</span><br></div>
									</label>
								 	@endif
										 
									 
								 	<div class="col-md-2">Title:</div><div class="col-md-10"><input type="text" class="form-control" name="conttitle" placeholder="Content Title" required=""value='{{$tbl_content->content_title}}' > 
										<br></div>

										<div class="col-md-2">Upload File:</div><div class="col-md-10"> <input type="file" class=" " name="doc_upload" placeholder="Upload Document"   value='{{$tbl_content->content}}' >{{$tbl_content->content}}
										<br><br></div>
									
									 

							
									<br><br><br>
										<div class="col-md-2">Title:</div><div class="col-md-10"><textarea class="form-control" placeholder="Note" name="note" rows="4">{{$tbl_content->note}}</textarea>
										<br></div>
									 
									
									<br>
									<div class="col-md-5"></div>
									 <button type="submit" class="btn btn-primary">Update</button>
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
  