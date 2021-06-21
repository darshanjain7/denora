

<?php $__env->startSection('content'); ?>
<div class="main">
           <div class="main-content">
               <div class="container-fluid">
                   


                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
       
                <div class="panel">
                    <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if(Session::has('flash_message')): ?>
   <div class="alert alert-success"  data-expires="5000"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('flash_message'); ?></em></div>
<?php endif; ?>
                               <div class="panel-heading">
                               
                                     <h3  style="    color: #2b333e; font-weight: 600;">Update  Product Category
</h3>
                               </div>
                               <div class="panel-body">
                                
                                 <?php $__currentLoopData = $tbl_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="../../productscategory/<?php echo e($tbl_contents->sk_category_id); ?>" method="post"  enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>
                           <?php echo method_field('put'); ?>
                                
                           <div class="col-md-2">Product Type:</div><div class="col-md-10">
                           <select class="form-control" name="protypename">
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

                                       <div class="col-md-2">Category Name:</div><div class="col-md-10"><input class="form-control" name="procatname" placeholder="Product Category Name" type="text" required="" value=" <?php echo e($tbl_contents->category_name); ?>">
                                       <br></div>
                                        
                             

                                    
                                    
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
 
<?php echo $__env->make('inc.adminlayout123', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gaschlorinationd/public_html/test/resources/views/admingo/editproductscategory.blade.php ENDPATH**/ ?>