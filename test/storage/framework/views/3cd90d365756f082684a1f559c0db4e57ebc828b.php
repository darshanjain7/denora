<!DOCTYPE html>

<html lang="en">

<head>

<title>Dashboard | Denora - our research - your future</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
   <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>


<link rel="stylesheet" href="<?php echo e(asset('public/css/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('public/css/assets/vendor/font-awesome/css/font-awesome.min.css')); ?>" >
	<link rel="stylesheet" href="<?php echo e(asset('public/css/assets/vendor/linearicons/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('public/css/assets/vendor/chartist/css/chartist-custom.css')); ?>">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('public/css/assets/css/main.css')); ?>">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo e(asset('public/css/assets/css/demo.css')); ?>">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

<style>
table{
    width:100%;
}
#example_filter{
    float:right;
}
#example_paginate{
    float:right;
}
label {
    display: inline-flex;
    margin-bottom: .5rem;
    margin-top: .5rem;
   
}

</style>
<script>
$(document).ready(function() {
    $('#example').DataTable(
        
         {     

      "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
        "iDisplayLength": 10
       } 
        );
} );


function checkAll(bx) {
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
      cbs[i].checked = bx.checked;
    }
  }
}
</script>

<style type="text/css">
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

            <?php echo $__env->yieldContent('content'); ?>

        </div>



         </div>
	  <!-- /#wrapper -->



    <!-- jQuery -->

 
</body>
 	<script src="<?php echo e(asset('public/css/assets/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/css/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/css/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/css/assets/vendor/chartist/js/chartist.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/css/assets/scripts/klorofil-common.js')); ?>" ></script>

    <script type="text/javascript">
$( document ).ready(function() 
{  
  
      $('.button-active-type1').each(function()
      {  
        $(this).click(function()
        {
            
            var pskid = $(this).prev().val();
               alert(pskid);
            $.ajax({
            type:'POST',
            url:'../producthtmlinactive',
            data: { pgrpid: pgrpid },
            complete:function(data)
            {
                location.reload(true);
                  
            }
            });

          });

      });
      $('.button-inactive-type1').each(function()
      {  
        $(this).click(function()
        {
            var pgrpid = $(this).prev().val();
             // alert(pgrpid);
            $.ajax({
            type:'POST',
            url:'../producthtmlactive',
            data: { pgrpid: pgrpid },
            complete:function(data)
            {
                location.reload(true);
                  
            }
            });

          });

      });
});
</script>

</html><?php /**PATH /home/gaschlorinationd/public_html/test/resources/views/inc/adminlayout1234.blade.php ENDPATH**/ ?>