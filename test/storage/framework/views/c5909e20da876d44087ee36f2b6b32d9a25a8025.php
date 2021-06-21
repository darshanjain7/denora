 



 <?php $__env->startSection('content'); ?>



 <div class="banner-section" style="background-color:#fff;">

     <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="container-fluid">

		    

			<div class="row">

			 

				<div class="col-md-12" style="padding-left: 0px;">

				<div class="inside-banner">

					<img src="<?php echo e(asset('public/css/assets/img/De-Nora-Solutions-Picture.jpg')); ?>" style="max-width: 101%;padding-top: 0px;">

				</div>

				</div>

			</div>

		</div>

	</div>

	

	

	<div class="our-equipement" style="background-color:#fff; margin-top:-30px;">

	<h1>Our Equipment</h1>

		<div class="container">

		    

			<div class="row">
			<?php if(count($tbl_product_group)>0): ?>
				 <?php $__currentLoopData = $tbl_product_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          

				<div class="col-md-4">

				<a  href="userview/<?php echo e($news_data->product_group_id); ?>"> 	<div class="equipement-block">

						<div class="col-md-12">

							<img src="storage/app/public/documents/<?php echo e($news_data->product_group_image); ?>">

							<p style="color: #000;"><?php echo e($news_data->group_name); ?> <i class="fa fa-arrow-right soli-arr" style="float:right; margin-top:6px;" aria-hidden="true"></i></p>

						</div> 

					</div>

				</a>

				</div>

		 

         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		 <?php else: ?>
                    <?php echo "No record found...!"; ?>
                    <?php endif; ?>

				

			</div>

		</div>

	</div>

	

	<div class="our-solution" style="background-color:#fff; padding:0 !important;">

	<h1 style=" ">Our Solution</h1>

		<div class="container-fluid">

			<div class="row">

				<div class="col-md-12">

					<div class="solution-block">

						<div class="row">

							<div class="col-md-1"></div>

							<div class="col-md-10" style="padding: 100px;">

								<div class="container">

									<p style="color: #fdfdfd; text-align:center;  font-family: gothammedium !important;font-weight: 100 !important;">De Nora is a global provider of sustainable technologies and a partner of choice for industrial electrochemical processes and water and wastewater treatment solutions since 1923. The De Nora gas chlorination equipment line includes custom-engineered Capital Controls® gas feed systems with a full range of vacuum and pressure feeders, cabinets, wall panels, control valves, controllers, ejectors, vaporizers, gas detectors, and scrubbers for chlorine, sulfur dioxide, ammonia and carbon dioxide, with capacities to 10,000 lb/day (200 kg/h). The Capital Controls® original all-vacuum gas feed system was invented in 1960, introducing groundbreaking safety in feeding chlorine gas. With thousands of installations around the world and ongoing product innovation, Capital Controls® gas feed technologies continue to be the unparalleled standard today.</p>

								

								

								</div>

							</div>

							<div class="col-md-1"></div>

						</div>

						

					</div>

				</div>

				

			</div>

		</div>

	</div>

	



 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\gaschlorination\resources\views/welcomepage/home.blade.php ENDPATH**/ ?>