 

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

									 <h3  class="panel-title" style="   font-size: 24px; color: #2b333e; font-weight: 600;">Uploaded Contents</h3> 
								</div>
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>ID</th>
												<th>Content Type</th>
												<th>Content Title</th>
												<th>Uploaded Document</th>
												<th>Created By</th>
												<th>Status</th>
												<th>Edit</th>
											</tr>
										</thead>
										<tbody>
											 <?php if(count($tbl_content)>0): ?>

                    						 <?php $__currentLoopData = $tbl_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><?php echo e($tbl_contents->id); ?></td>
												<td> <?php if($tbl_contents->content_type==1): ?>
													PPT
													<?php else: ?>
													PDF <?php endif; ?></td>
														<td><?php echo e($tbl_contents->content_title); ?></td>
												<td><?php echo e($tbl_contents->content); ?></td>

												<td><?php echo e($tbl_contents->name); ?></td>
												<td>
												 <input type="hidden" class="cid"   value="<?php echo e($tbl_contents->id); ?>">
										 <?php if($tbl_contents->status==1): ?>
										 <a style="color:white" class="btn btn-danger button-inactive" >In-active</a>
													<?php else: ?>
													<a style="color:white" class="btn btn-success button-active"  >Active</a>
													 <?php endif; ?> </td>
												<td> <a style="color:white" class="btn btn-primary" href="../admincontent/<?php echo e($tbl_contents->id); ?>/edit"  >Edit</a></td>
												 
											</tr>
											 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											 </tbody>
									</table>
											 <?php echo e($tbl_content->links()); ?>


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
<?php echo $__env->make('inc.adminlayout123', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\gaschlorination\resources\views/admingo/view-content.blade.php ENDPATH**/ ?>