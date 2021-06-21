<!DOCTYPE html>

<html lang="en">

<head>
<link rel="stylesheet" href="<?php echo e(asset('public/css/assets/css/main.css')); ?>">
  	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  
	<link rel="stylesheet" href="<?php echo e(asset('public/css/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('public/css/assets/vendor/font-awesome/css/font-awesome.min.css')); ?>" >
	<link rel="stylesheet" href="<?php echo e(asset('public/css/assets/vendor/linearicons/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('public/css/assets/vendor/chartist/css/chartist-custom.css')); ?>">
	<!-- MAIN CSS -->

	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo e(asset('public/css/assets/css/demo.css')); ?>">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
 

  <style type="text/css">
  .btn-group-sm>.btn, .btn-sm {
    padding: 5px 10px !important;
	background: white !important;
	font-size: 14px;
  }
  .note-editable {
    height: 200px;
    padding: 10px;
}
  
	.navbar-default .brand {
    float: left;
    padding: 24px 23px !important;
    font-size: 23px !important;
    background-color: #fff;
}

.popup {
    display: inline-block;
}
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #b1b1b1;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 20px;
    position:relative;
    top:50px;
    right:150px;
}
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}
</style>  
</head>

<body>
  


   <div id="wrapper">



        <!-- Navigation -->

       <nav class="navbar navbar-default navbar-fixed-top">

          
	   <?php echo $__env->make('theme.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('theme.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         


        </nav>



        <div id="page-wrapper">

	
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php if(Session::has('flash_message')): ?>
						<div class="alert alert-success"  data-expires="5000"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('flash_message'); ?></em></div>
					<?php endif; ?>
			 		<div class="panel">
						<div class="panel-heading">
							<h3  style="    color: #2b333e; font-weight: 600;">Create Product HTML</h3>
						</div>
						<div class="panel-body">
				 			<form action="<?php echo e(action('ProducthtmlController@store')); ?>" method="post"  enctype="multipart/form-data">
  							<?php echo csrf_field(); ?>
							<div class="col-md-3">Select Product Type:</div>
							<div class="col-md-9"> 
								<div class="form-group">
								<select class="form-control" name="grpname">
												<?php $__currentLoopData = $tbl_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($tbl_contents->product_type_id); ?> "><?php echo e($tbl_contents->product_type); ?> </option>
												 
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
								</div>
							</div>
							<div class="col-md-3">Product Name:</div>
							<div class="col-md-9"> 
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Product Name" name="progname" >
								</div>
							</div>
							<div class="col-md-3">Product HTML:</div>
							<div class="col-md-9"> 
								<div class="form-group">
									<textarea id="summernote" name="editordata" required></textarea>
								</div>
							</div>
							<div class="col-md-3"> </div>
							<div class="col-md-9"> 
								<div class="form-group">
									<a   download  href="https://gaschlorination.denora.com/sample_code.txt"  >Sample code</a>
								</div>
							</div>
        
		 					 <div class="col-md-5"></div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 
   <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
  

        </div>



         </div>
	 	<script src="<?php echo e(asset('public/css/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/css/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/css/assets/vendor/chartist/js/chartist.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/css/assets/scripts/klorofil-common.js')); ?>" ></script>
   <?php /**PATH D:\xampp\htdocs\gaschlorination\resources\views/admingo/producthtml.blade.php ENDPATH**/ ?>