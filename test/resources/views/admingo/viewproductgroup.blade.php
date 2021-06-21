 @extends('inc.adminlayout123')

 @section('content')

       
       
<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-12">
							 
							<div class="panel">
								<div class="panel-heading">

									 <h3  class="panel-title" style="   font-size: 24px; color: #2b333e; font-weight: 600;">View Product Group</h3> 
								</div>
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>ID</th>
												<th width="20%">Product Group Name</th>
												<th>Image</th>
												<th width="15%">Created By</th>
												 <th>Status</th>
												 <th>Change</th>
												<th>Edit</th>
											</tr>
										</thead>
										<tbody>
											 @if(count($value123)>0)

                    						 @foreach($value123 as $tbl_contents)
											<tr>
												<td>{{$tbl_contents->product_group_id}}</td>
												<td>{{$tbl_contents->group_name}}</td>
												 <td><img style="width: 30%;" src="../storage/app/public/documents/{{$tbl_contents->product_group_image}}"></td>
												<td>{{$tbl_contents->name}}</td>
												
												<td width="10%;"> 
										 @if($tbl_contents->status==1)
									 	 Active 													@else
													 Inactive 
													 @endif </td>
												 
										 @if($tbl_contents->status==1)

										<td>  <input type="hidden" class="cid"   value="{{$tbl_contents->product_group_id}}"><a style="color:white" class="btn btn-danger button-active-grp" >Inactive</a> 													@else

													<td><input type="hidden" class="cid"   value="{{$tbl_contents->product_group_id}}"><a style="color:white" class="btn btn-success button-inactive-grp"  >Active</a>
													 @endif </td>
												<td> <a style="color:white" class="btn btn-primary" href="../createproductgroup/{{$tbl_contents->product_group_id}}/edit" >Edit</a></td>
											</tr>
											 @endforeach
											 </tbody>
									</table>
											 {{$value123->links()}}

											 @endif

											 
										 
								</div>
							</div>
					 
						</div>
					 
					</div>
				</div>
			</div>

		 
		</div>


    </div>
 
 
@endsection