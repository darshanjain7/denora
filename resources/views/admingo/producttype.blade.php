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
									  <h3  style="    color: #2b333e; font-weight: 600;">Create Product Type</h3>
								</div>
								<div class="panel-body">
				 <form action="{{ action('AdmincontentController@store')}}" method="post"  enctype="multipart/form-data">
  								@csrf

  								<div class="col-md-2">Group Name:</div><div class="col-md-10"><input type="text" class="form-control" placeholder="Group Name" name="grpname" rows="4">
										<br></div>

											<div class="col-md-2">Group Type:</div><div class="col-md-10"><input type="text" class="form-control" placeholder="Group Name" name="grpname" rows="4">
										<br></div>

										<div class="col-md-2">Description:</div><div class="col-md-10"><textarea class="form-control" placeholder="Description" name="grpdesc" rows="4"></textarea>
										<br></div>


									 

											<div class="col-md-2">Image:</div><div class="col-md-10"><input type="file" class="form-control" name="doc_upload" placeholder="Upload Document" required="">
										<br></div>


									<div class="col-md-2">Note:</div><div class="col-md-10"><textarea class="form-control" placeholder="Note" name="note" rows="4"></textarea>
										<br></div>
									 
									
									<br>
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
  