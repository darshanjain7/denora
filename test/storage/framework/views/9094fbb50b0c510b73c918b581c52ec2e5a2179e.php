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
       
                <div class="panel">
                    <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                               <div class="panel-heading">
                                     <h3  style="    color: #2b333e; font-weight: 600;">Update  Product HTML
</h3>
                               </div>
                               <div class="panel-body">
                                
                                 <?php $__currentLoopData = $tbl_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="../../producthtml/<?php echo e($tbl_contents->product_master_id); ?>" method="post"  enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>
                           <?php echo method_field('put'); ?>
                                
                            <div class="col-md-3">Product Type:</div><div class="col-md-9">
                            <select class="form-control" name="typname">
                                               <?php $__currentLoopData = $tbl_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <option value="<?php echo e($vvv=$tbl_contents->product_type_id); ?> "><?php echo e($tbl_contents->product_type); ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 <?php $__currentLoopData = $value12; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value123): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <?php if($vvv!=$value123->product_type_id): ?>
                                                <option value="<?php echo e($value123->product_type_id); ?> "><?php echo e($value123->product_type); ?></option>
                                                <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           </select>
                                       <br></div>
                                       <div class="col-md-3">Product Name:</div>
							<div class="col-md-9"> 
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Product Name" name="progname" value="<?php echo e($tbl_contents->product_name); ?>" required>
								</div>
							</div>
                            <div class="col-md-3">Product HTML:</div>
							<div class="col-md-9"> 
								<div class="form-group">
									<textarea id="summernote" name="editordata" required><?php echo html_entity_decode($tbl_contents->product_master_image_html_code); ?> 
</textarea>
								</div>
							</div>
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
   
 <?php /**PATH /home/gaschlorinationd/public_html/test/resources/views/admingo/editproducthtml.blade.php ENDPATH**/ ?>