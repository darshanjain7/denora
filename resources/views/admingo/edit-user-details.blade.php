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
									  <h3  style="    color: #2b333e; font-weight: 600;">Update User Details</h3>
								</div>
								<div class="panel-body">
								 
				 <form action="../../createusr/{{$users->id}}" method="post"  enctype="multipart/form-data">
  								@csrf
							@method('put')
								 
							 
										<div class="col-md-2">Name:</div><div class="col-md-10"><input class="form-control" name="username" placeholder="User Name" type="text" required="" value="{{$users->name}}">
										<br></div>
										<div class="col-md-2">Email ID:</div><div class="col-md-10">
										<input class="form-control" name="emailid" placeholder="User Email ID" type="email" value="{{$users->email}}" required="">
										<br></div>
									  
									<div class="col-md-2">Mobile No:</div><div class="col-md-10">
										<input class="form-control" value="{{$users->mob_no}}" name="mobile" placeholder="Mobile Number" type="text" required="">
										<br></div>
										<?php 
										  $gen=$users->gender;
										 if($gen==="male")
										{?>
										<label class="fancy-radio">
										<div class="col-md-2">Gender:</div><div class="col-md-10">
										 <input name="gender" value="male" type="radio" checked="checked">
										<span><i></i>Male</span></div>
									</label>
									<label class="fancy-radio">
										<div class="col-md-2" ></div><div class="col-md-10">
										<input name="gender" value="female" type="radio"  >
										<span><i></i>Female</span><br></div>
									</label>
									<?php } else { ?>
										<label class="fancy-radio">
										<div class="col-md-2">Gender:</div><div class="col-md-10">
										 <input name="gender" value="male" type="radio" >
										<span><i></i>Male</span></div>
									</label>
									<label class="fancy-radio">
										<div class="col-md-2" ></div><div class="col-md-10">
										<input name="gender" value="female" type="radio" checked="checked">
										<span><i></i>Female</span><br></div>
									</label>
								<?php } ?>
										<br>
									<div class="col-md-2">Company name:</div><div class="col-md-10">
										<input class="form-control" name="cname" placeholder="Company Name" type="text" value="{{$users->comp_name}}" required="">
										<br></div>
										<div class="col-md-2">Note:</div><div class="col-md-10">
 									 <textarea class="form-control" placeholder="Note" name="note" rows="4">{{$users->note}}</textarea>
									<br></div>
									 
									 
									 
									 
								
									<button type="submit" class="btn btn-primary">Update</button>
									</form>	
									<center> <a   onclick="pop()">Change Password</a>
										<div style="text-align:left;"></center>

	 
	  <div class="popup">
	  	 <form action="../../updatepassword/{{$users->id}}" method="post"   >
  								@csrf
							@method('get')
	    <span class="popuptext" id="myPopup" style="
	    position: inherit;
	    width: auto;text-align: left;
	">
	      Enter New Password: <input type="password" style="color: black;" name="password" required="" /><br><br>
	       Confirm Password: <input type="text" name="password_confirmation" style="color: black;" required="" /><br><br>
	       <button type="submit" class="btn btn-primary">Update</button>
	    </span>
	</form>
	  </div>
	</div>
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
  