 

 <?php $__env->startSection('content'); ?>
<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
		<?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			 	<div class="panel">
								<div class="panel-heading">
									  <h3  style="    color: #2b333e; font-weight: 600;">Create Product Group</h3>
								</div>
								<div class="panel-body">
				 <form action="<?php echo e(action('AdmincontentController@store')); ?>" method="post"  enctype="multipart/form-data">
  								<?php echo csrf_field(); ?>

  								<div class="col-md-2">Group Name:</div><div class="col-md-10"><input type="text" class="form-control" placeholder="Group Name" name="grpname" rows="4"></textarea>
										<br></div>

										<div class="col-md-2">Description:</div><div class="col-md-10"><textarea class="form-control" placeholder="Description" name="grpdesc" rows="4"></textarea>
										<br></div>


									 

											<div class="col-md-2">Image:</div><div class="col-md-10"><input type="file" class="form-control" name="doc_upload" placeholder="Upload Document" required="">
										<br></div>


									<div class="col-md-2">Note:</div><div class="col-md-10"><textarea class="form-control" placeholder="Note" name="note" rows="4"></textarea>
										<br></div>
									 
									
									<br>
									 <div class="col-md-5"></div>
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
 <?php $__env->stopSection(); ?>
  
<?php echo $__env->make('inc.adminlayout123', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\gaschlorination\resources\views/admingo/createcontent.blade.php ENDPATH**/ ?>