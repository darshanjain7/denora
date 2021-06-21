 

 <?php $__env->startSection('content'); ?>

       
       
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
											 <?php if(count($value123)>0): ?>

                    						 <?php $__currentLoopData = $value123; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><?php echo e($tbl_contents->product_group_id); ?></td>
												<td><?php echo e($tbl_contents->group_name); ?></td>
												 <td><img style="width: 30%;" src="../storage/app/public/documents/<?php echo e($tbl_contents->product_group_image); ?>"></td>
												<td><?php echo e($tbl_contents->name); ?></td>
												
												<td width="10%;"> 
										 <?php if($tbl_contents->status==1): ?>
									 	 Active 													<?php else: ?>
													 Inactive 
													 <?php endif; ?> </td>
												 
										 <?php if($tbl_contents->status==1): ?>

										<td>  <input type="hidden" class="cid"   value="<?php echo e($tbl_contents->product_group_id); ?>"><a style="color:white" class="btn btn-danger button-active-grp" >Inactive</a> 													<?php else: ?>

													<td><input type="hidden" class="cid"   value="<?php echo e($tbl_contents->product_group_id); ?>"><a style="color:white" class="btn btn-success button-inactive-grp"  >Active</a>
													 <?php endif; ?> </td>
												<td> <a style="color:white" class="btn btn-primary" href="../createproductgroup/<?php echo e($tbl_contents->product_group_id); ?>/edit" >Edit</a></td>
											</tr>
											 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											 </tbody>
									</table>
											 <?php echo e($value123->links()); ?>


											 <?php endif; ?>

											 
										 
								</div>
							</div>
					 
						</div>
					 
					</div>
				</div>
			</div>

		 
		</div>


    </div>
 
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.adminlayout123', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gaschlorinationd/public_html/test/resources/views/admingo/viewproductgroup.blade.php ENDPATH**/ ?>