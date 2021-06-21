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
									  <h3  style="    color: #2b333e; font-weight: 600;">Update  Product Type
</h3>
								</div>
								<div class="panel-body">
								 
								  @foreach($tbl_content as $tbl_contents)
				 <form action="../../producttype/{{$tbl_contents->product_type_id}}" method="post"  enctype="multipart/form-data">
  								@csrf
							@method('put')
								 
							 <div class="col-md-2">Product Group Name:</div><div class="col-md-10"><select class="form-control" name="grpname">
												@foreach($tbl_content as $tbl_contents)
												<option value="{{$vvv=$tbl_contents->product_group_id}} ">{{$tbl_contents->group_name}} </option>
												 @endforeach
												  @foreach($value12 as $value123)
												  @if($vvv!=$value123->product_group_id)
												 <option value="{{$value123->product_group_id}} ">{{$value123->group_name}}</option>
												 @endif
												 @endforeach
											</select>
										<br></div>

										<div class="col-md-2">Product Type Name:</div><div class="col-md-10"><input class="form-control" name="protypename" placeholder="Product Group Name" type="text" required="" value=" {{$tbl_contents->product_type}}">
										<br></div>
										 
									 
								  	 <div class="col-md-2"><br>Image:</div><div class="col-md-10"> 
										<br><input type="file" class="form-control" name="upload" placeholder="Upload Document" value="{{$tbl_contents->product_type_image}}"  id="profile-img">
								 </div>
								 <div class="col-md-2"><br> </div><div class="col-md-10"> 
								 <br><img src="../../storage/app/public/documents/{{$tbl_contents->product_type_image}}" id="profile-img-tag" width="200px" /></div>
									 
									 

									 
									 
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
  