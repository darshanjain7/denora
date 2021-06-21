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
									  <h3  style="    color: #2b333e; font-weight: 600;">Create User</h3>
								</div>
								<div class="panel-body">
				 <form action="{{ action('AdduserdetailsController@store')}}" method="post"   >
  								@csrf
										  <input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="col-md-2">Name:</div><div class="col-md-10"><input class="form-control" name="username" placeholder="User Name" type="text" required="" value="{{ old('username') }}">
										<br></div>
										<div class="col-md-2">Email ID:</div><div class="col-md-10">
										<input class="form-control" name="emailid" placeholder="User Email ID" type="email" value="{{ old('emailid') }}" required="">
										<br></div>
										<div class="col-md-2">Password:</div><div class="col-md-10">
										<input class="form-control" name="password" placeholder="Password" type="password" required="">
										<br></div>
										<div class="col-md-2">C-Password:</div><div class="col-md-10">
										<input class="form-control" name="password_confirmation" placeholder="Confirm Password" type="password" required="">
										<br>
									</div>
									<div class="col-md-2">Mobile No:</div><div class="col-md-10">
										<input class="form-control" value="{{ old('mobile') }}" name="mobile" placeholder="Mobile Number" type="text" required="">
										<br></div>

										<label class="fancy-radio">
										<div class="col-md-2">Gender:</div><div class="col-md-10">
										 <input name="gender" value="male" type="radio">
										<span><i></i>Male</span></div>
									</label>
									<label class="fancy-radio">
										<div class="col-md-2" ></div><div class="col-md-10">
										<input name="gender" value="female" type="radio" checked="">
										<span><i></i>Female</span><br></div>
									</label><br>
									<div class="col-md-2">Company name:</div><div class="col-md-10">
										<input class="form-control" name="cname" placeholder="Company Name" type="text" value="{{ old('cname') }}" required="">
										<br></div>
										<div class="col-md-2">Note:</div><div class="col-md-10">
 									 <textarea class="form-control" placeholder="Note" name="note" rows="4">{{ old('note') }}</textarea>
									<br></div>
									 
									 
									 
								
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
  