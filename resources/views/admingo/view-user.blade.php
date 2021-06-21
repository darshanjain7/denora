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

									 <h3  class="panel-title" style="   font-size: 24px; color: #2b333e; font-weight: 600;">User Details</h3> 
								</div>
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>User ID</th>
												<th>Name</th>
												<th>Email</th>
												<th>Gender</th>
												<th>Mobile No</th>
												<th>Company Name</th>
												<th>Status</th>
												 
												<th>Edit</th>
											</tr>
										</thead>
										<tbody>
											 @if(count($tbl_content)>0)

                    						 @foreach($tbl_content as $tbl_contents)
											<tr>
												<td>{{$tbl_contents->id}}</td>
												<td>{{$tbl_contents->name}}</td>
												<td>{{$tbl_contents->email}}</td>
												<td>{{$tbl_contents->gender}}</td>
												<td>{{$tbl_contents->mob_no}}</td>
												<td>{{$tbl_contents->comp_name}}</td>

												<td>
												 <input type="hidden" class="cid"   value="{{$tbl_contents->id}}">
										 @if($tbl_contents->user_status==1)
										 <a style="color:white" class="btn btn-danger button-inactive1" >In-active</a>
													@else
													<a style="color:white" class="btn btn-success button-active1"  >Active</a>
													 @endif </td>
												<td> <a style="color:white" class="btn btn-primary" href="../createusr/{{$tbl_contents->id}}/edit"  >Edit</a></td>
												 
											</tr>
											 @endforeach
											 </tbody>
									</table>
											 {{$tbl_content->links()}}

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