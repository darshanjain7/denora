<!DOCTYPE html>
<html lang="en">
<head>
  <title>Denora - our research - your future</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo e(asset('public/css/assets/css/style.css')); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 
  <link rel="icon" type="image/png" href="<?php echo e(asset('public/css/assets/img/favicon.png')); ?>" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
  
<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="/test"><img src="<?php echo e(asset('public/css/assets/img/new-logo-denora.png')); ?>" class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto de-menu">
     
      <li class="nav-item">
        <a class="nav-link customer" href="/test/customer-feedback"><i class="fa fa-commenting" aria-hidden="true"></i> Customer Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link contact" href="/test/contact"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact De Nora</a>
      </li>
     
    </ul>
  </div>
  
  
  
</nav>

   <div id="wrapper">

 <div id="preloaders" class="preloader"><p style="height: 100%;margin-top: 420px;text-align: center;font-size: 23px;font-family: revert;color: green;font-weight: bolder;">…..Please wait we are processing your request.....</p></div>


        <div id="page-wrapper">

            <?php echo $__env->yieldContent('content'); ?>

        </div>



         </div>
		 <?php echo $__env->make('theme.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /#wrapper -->



    <!-- jQuery -->

  </body>



</html><?php /**PATH /home/gaschlorinationd/public_html/test/resources/views/inc/userlayout.blade.php ENDPATH**/ ?>