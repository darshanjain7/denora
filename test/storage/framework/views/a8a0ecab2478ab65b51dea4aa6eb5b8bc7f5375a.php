<?php $__env->startSection('content'); ?>
<div class="main">
           <div class="main-content">
               <div class="container-fluid">
                   
                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
       <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="panel">
                        <?php if(Session::has('flash_message')): ?>
   <div class="alert alert-success"  data-expires="5000"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('flash_message'); ?></em></div>
<?php endif; ?>
                               <div class="panel-heading">
                                     <h3  style="    color: #2b333e; font-weight: 600;">Create Product Category</h3>
                               </div>
                               <div class="panel-body">
                <form action="<?php echo e(action('ProductscategoryController@store')); ?>" method="post"  enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>

                                 

                                           <div class="col-md-2">Product Type:</div><div class="col-md-10"><select class="form-control" name="protypename">
                                               <?php $__currentLoopData = $tbl_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <option value="<?php echo e($tbl_contents->product_type_id); ?> "><?php echo e($tbl_contents->product_type); ?> </option>
                                                
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           </select>
                                       <br></div>

                                       <div class="col-md-2">Category Name:</div><div class="col-md-10"><input type="text" class="form-control" placeholder="Category Name" name="catname" rows="4" required="">
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
 
<?php echo $__env->make('inc.adminlayout123', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\gaschlorination\resources\views/admingo/productscategory.blade.php ENDPATH**/ ?>