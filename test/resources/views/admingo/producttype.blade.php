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
									  <h3  style="    color: #2b333e; font-weight: 600;">Create Product Type</h3>
								</div>
								<div class="panel-body">
				 <form action="{{ action('ProducttypeController@store')}}" method="post"  enctype="multipart/form-data">
  								@csrf

  								

											<div class="col-md-2">Group Name:</div><div class="col-md-10"><select class="form-control" name="grpname">
												@foreach($tbl_content as $tbl_contents)
												<option value="{{$tbl_contents->product_group_id}} ">{{$tbl_contents->group_name}} </option>
												 
												@endforeach
											</select>
										<br></div>

										<div class="col-md-2">Product Type:</div><div class="col-md-10"><input type="text" class="form-control" placeholder="Group Name" name="protype" rows="4" required="">
										<br></div>

									  	<div class="col-md-2">Image:</div><div class="col-md-10"><input type="file" class="form-control" name="upload" placeholder="Upload Document" id="profile-img" required="">
										<br></div>
										 <div class="col-md-2"><br> </div><div class="col-md-10"> 
								 <br><img src="" id="profile-img-tag" width="200px" /></div>
									 

 
									
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
  