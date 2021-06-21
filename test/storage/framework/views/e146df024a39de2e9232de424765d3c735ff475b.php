 

 <?php $__env->startSection('content'); ?>
<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					


					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
		
			 	<div class="panel">
			 		<?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<div class="panel-heading">
									  <h3  style="    color: #2b333e; font-weight: 600;">Update  Product Group
</h3>
								</div>
								<div class="panel-body">
								  <?php $__currentLoopData = $tbl_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				 <form action="../../createproductgroup/<?php echo e($tbl_contents->product_group_id); ?>" method="post"  enctype="multipart/form-data">
  								<?php echo csrf_field(); ?>
							<?php echo method_field('put'); ?>
								 
							 
										<div class="col-md-2">Product Group Name:</div><div class="col-md-10"><input class="form-control" name="progrupname" placeholder="Product Group Name" type="text" required="" value=" <?php echo e($tbl_contents->group_name); ?>">
										<br></div>
										 
									 
								  	 <div class="col-md-2"><br>Image:</div><div class="col-md-10"> 
										<br><input type="file" class="form-control" name="upload" placeholder="Upload Document" value="<?php echo e($tbl_contents->product_group_image); ?>"  id="profile-img">
								 </div>
								 <div class="col-md-2"><br> </div><div class="col-md-10"> 
								 <br><img src="../../storage/app/public/documents/<?php echo e($tbl_contents->product_group_image); ?>" id="profile-img-tag" width="200px" /></div>
									 
									 

									 
									 
								 <div class="col-md-5"></div>
									 <button type="submit" style="  margin-top: 19px; " class="btn btn-primary">Update</button>
									</form>	
									  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  
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
  
<?php echo $__env->make('inc.adminlayout123', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gaschlorinationd/public_html/test/resources/views/admingo/editproductgroup.blade.php ENDPATH**/ ?>