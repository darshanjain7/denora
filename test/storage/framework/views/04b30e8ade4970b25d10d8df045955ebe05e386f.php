 

 <?php $__env->startSection('content'); ?>
 				
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
					<?php if(Session::has('flash_message')): ?>
    <div class="alert alert-success"  data-expires="5000"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('flash_message'); ?></em></div>
<?php endif; ?>
						<div class="panel-heading">
							<h3 class="panel-title">Dashboard</h3>
							 
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p><a href="createproductgroup/show">
											<span class="number"><?php echo e($count); ?></span>
											<span class="title">Total Product Groups</span>
											</a>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p><a href="producttype/show">
											<span class="number"><?php echo e($count1); ?></span>
											<span class="title">Total Product Types</span>
										</a></p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p><a href="productscategory/show">
											<span class="number"><?php echo e($count2); ?></span>
											<span class="title">Total Product Category</span>
										</a></p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p><a href="productsknumber/show">
											<span class="number"><?php echo e($count3); ?></span>
											<span class="title">Total SK Numbers</span>
										</a></p>
									</div>
								</div>
								
							</div>
						 
						</div>
					</div>
					<!-- END OVERVIEW -->
		 
	  
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>


    </div>
    <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('inc.adminlayout123', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\gaschlorination\resources\views/admingo/dashboard.blade.php ENDPATH**/ ?>