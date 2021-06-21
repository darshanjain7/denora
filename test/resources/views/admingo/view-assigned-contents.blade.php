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

									 <h3  class="panel-title" style="   font-size: 24px; color: #2b333e; font-weight: 600;">Assigned Contents</h3> 
								</div>
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>ID</th>
												<th>User Name</th>
												<th>Content Type</th>
												<th>Content</th>
												<th>Time Limit</th>
											  	 <th>Status</th>
												 
											</tr>
										</thead>
										<tbody>
											 @if(count($user_contents)>0)

                    						 @foreach($user_contents as $user_content)
											<tr>
												<td>{{$user_content->user_content_id}}</td>
												<td>{{$user_content->name}}</td>
												<td> @if($user_content->content_type==1)
													PPT
													@else
													PDF @endif</td>
												<td>{{$user_content->content}}</td>
												<td>{{$user_content->time_limit}}</td>
												<td>
												 <input type="hidden" class="caid"   value="{{$user_content->user_content_id}}">
										 @if($user_content->content_status==1)
										 <a style="color:white" class="btn btn-danger button-inactive-assign" >In-active</a>
													@else
													<a style="color:white" class="btn btn-success button-active-assign"  >Active</a>
													 @endif </td>
											
												 
											</tr>
											 @endforeach
											 </tbody>
									</table>
											 {{$user_contents->links()}}

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