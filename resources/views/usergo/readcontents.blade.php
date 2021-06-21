 @extends('inc.userlayout')

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

									 <h3  class="panel-title" style="   font-size: 24px; color: #2b333e; font-weight: 600;">Read/Viewed Contents</h3> 
								</div>
								<div class="panel-body">
									 @if(count($tbl_content)>0)
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>ID</th>
												<th>Content Type</th>
												<th>Content Title</th>
												<th>Time Limit</th>
												<th>Status</th>
												 
											 
											</tr>
										</thead>
										<tbody>
											

                    						 @foreach($tbl_content as $tbl_contents)
											<tr>
												<td>{{$tbl_contents->user_content_id}}</td>
											<td> @if($tbl_contents->content_type==1)
													PPT
													@else
													PDF @endif</td> 
													 <td>{{$tbl_contents->content_title}}</td>
													 <td>{{$tbl_contents->time_limit}} Min</td>
													  <td>Viewed</td>

												 
											 
												 
											</tr>
											 @endforeach
											 </tbody>
									</table>
											 {{$tbl_content->links()}}

											  @else
											 <span>oops..No result found</span>

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