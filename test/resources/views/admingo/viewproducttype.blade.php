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

									 <h3  class="panel-title" style="   font-size: 24px; color: #2b333e; font-weight: 600;">View Product Type</h3> 
								</div>
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>ID</th>
												<th width="20%">Group Name</th>
												<th width="20%">Prod Type Name</th>
												<th width="30%">Image</th>
												<th width="15%">Created By</th>
												 <th>Status</th>
												 <th>Change</th>
												<th>Edit</th>
											</tr>
										</thead>
										<tbody>
											 @if(count($value123)>0)
											 <?php $i=0; ?>

                    						 @foreach($value123 as $tbl_contents)
											<tr>
												<td>{{++$i}}</td>
												
												<td>{{$tbl_contents->group_name}}</td>
												<td>{{$tbl_contents->product_type}}</td>
												 <td><img style="width: 30%;" src="../storage/app/public/documents/{{$tbl_contents->product_type_image}}"></td>
												 <td>{{$tbl_contents->name}}</td>
												<td width="10%;"> 
										 @if($tbl_contents->status==1)
									 	 Active 													@else
													 Inactive 
													 @endif </td>
												 
										 @if($tbl_contents->status==1)

										<td>  <input type="hidden" class="pgrpid"   value="{{$tbl_contents->product_type_id}}"><a style="color:white" class="btn btn-danger button-active-type" >Inactive</a> 													@else
													<td><input type="hidden" class="pgrpid"   value="{{$tbl_contents->product_type_id}}"><a style="color:white" class="btn btn-success button-inactive-type"  >Active</a>
													 @endif </td>
												<td> <a style="color:white" class="btn btn-primary" href="../producttype/{{$tbl_contents->product_type_id}}/edit" >Edit</a></td>
											</tr>
											 @endforeach
											 </tbody>
									</table>
											 {{$value123->links()}}

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