 

 <?php $__env->startSection('content'); ?>

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
											 <?php if(count($value123)>0): ?>
											 <?php $i=0; ?>

                    						 <?php $__currentLoopData = $value123; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><?php echo e(++$i); ?></td>
												
												<td><?php echo e($tbl_contents->group_name); ?></td>
												<td><?php echo e($tbl_contents->product_type); ?></td>
												 <td><img style="width: 30%;" src="../storage/app/public/documents/<?php echo e($tbl_contents->product_type_image); ?>"></td>
												 <td><?php echo e($tbl_contents->name); ?></td>
												<td width="10%;"> 
										 <?php if($tbl_contents->status==1): ?>
									 	 Active 													<?php else: ?>
													 Inactive 
													 <?php endif; ?> </td>
												 
										 <?php if($tbl_contents->status==1): ?>

										<td>  <input type="hidden" class="pgrpid"   value="<?php echo e($tbl_contents->product_type_id); ?>"><a style="color:white" class="btn btn-danger button-active-type" >Inactive</a> 													<?php else: ?>
													<td><input type="hidden" class="pgrpid"   value="<?php echo e($tbl_contents->product_type_id); ?>"><a style="color:white" class="btn btn-success button-inactive-type"  >Active</a>
													 <?php endif; ?> </td>
												<td> <a style="color:white" class="btn btn-primary" href="../producttype/<?php echo e($tbl_contents->product_type_id); ?>/edit" >Edit</a></td>
											</tr>
											 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											 </tbody>
									</table>
											 <?php echo e($value123->links()); ?>


											 <?php endif; ?>

											 
										 
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
 
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.adminlayout123', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gaschlorinationd/public_html/test/resources/views/admingo/viewproducttype.blade.php ENDPATH**/ ?>