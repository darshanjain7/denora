 @extends('inc.adminlayout123')

 @section('content')
 <script type='text/javascript' src='http://code.jquery.com/jquery-1.11.0.js'></script>
  <script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
		@include('inc.messages')
			 	<div class="panel">
								<div class="panel-heading">
									  <h3  style="    color: #2b333e; font-weight: 600;">Assign Content</h3>
								</div>
								<div class="panel-body">
				 <form action="{{ action('AssigncontentController@store')}}" method="post"  enctype="multipart/form-data">
  								@csrf
						<?php  
						 $users = DB::table('users')->select('*')->where('user_role',2)->where('user_status',1)->get();
						?>
						<label class="fancy-radio">
										<div class="col-md-2">Select User:</div><div class="col-md-10">
								     <select  class="form-control" name="user" required="">
								 <option value="">Select User</option>
								 @foreach($users->all() as $val)
								  <option value="{{$val->id}}">{{$val->name}}</option>
								 @endforeach
								</select>  
								</div>
							  			<br><br><br>
							  			<label class="fancy-radio">
										<div class="col-md-2">Content Type:</div><div class="col-md-2">
										 <input name="content_type" value="1" type="radio" disabled="">
										<span><i></i>PPT</span>
									</label>
								</div>
								<div class="col-md-2">
									<label class="fancy-radio">
										<div class="col-md-2" ></div><div class="col-md-10">
							 <input name="content_type" id="cpdf" value="2" type="radio" onclick="showdata1()" required="required" >
										<span><i></i>PDF</span><br></div>
									</label>
								 </div><br><br> 
								 <div class="col-md-12">
								 <div class="ascontent"></div>
								</div>
								<br><br><br>
								<label class="fancy-radio">
										<div class="col-md-2">Time Limit:</div><div class="col-md-10">
											<input  class="form-control" name="viewtime" id="currIN" placeholder="HH:MM:SS" required="">
										</div>
									</label>
									<br><br>
									<label class="fancy-radio">
										<div class="col-md-2">Note:</div><div class="col-md-10">
 									<textarea class="form-control" placeholder="Note" name="note" rows="4"></textarea>
								</div>
									<br>
									 
									<div class="col-md-5" ></div>
									
								<div class="col-md-4" >
									 <br><br><button type="submit" class="btn btn-primary">Submit</button>
								</div>
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

<iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQeqTsOgXIfCAhq3ZSxlVXcazK9gU3mwl8_V8d9FlMeQe4pGv5zY3jAyDKkjHL2E2NUrUqbRvcjf5kf/embed?start=true&loop=true&delayms=3000" frameborder="0" width="960" height="749" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

<script type="text/javascript">
	$("#currIN").inputmask("99:99:99");
	
</script>     
 @endsection
  