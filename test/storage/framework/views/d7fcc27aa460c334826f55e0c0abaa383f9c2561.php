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
                                     <h3  style="    color: #2b333e; font-weight: 600;">Update  Product SK Numbers
</h3>
                               </div>
                               <div class="panel-body">
                                
                                 <?php $__currentLoopData = $value123; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="../../productsknumber/<?php echo e($tbl_contents->product_sku_id); ?>" method="post"  enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>
                           <?php echo method_field('put'); ?>
                                
                            <div class="col-md-2">Product Category:</div><div class="col-md-10"><select class="form-control" name="pcat">
                                               <?php $__currentLoopData = $value123; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <option value="<?php echo e($vvv=$tbl_contents->product_category_id); ?> "><?php echo e($tbl_contents->category_name); ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 <?php $__currentLoopData = $value12; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value1234): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <?php if($vvv!=$value1234->sk_category_id): ?>
                                                <option value="<?php echo e($value1234->sk_category_id); ?> "><?php echo e($value1234->category_name); ?></option>
                                                <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           </select>
                                       <br></div>

                                       <div class="col-md-2">SK Number:</div><div class="col-md-10"><input class="form-control" name="sknumber" placeholder="SK Number" type="text" required="" value=" <?php echo e($tbl_contents->sku); ?>">
                                       <br></div>
                                        
                                       <div class="col-md-2">Description:</div><div class="col-md-10"><input class="form-control" name="description" placeholder="Description" type="text" required="" value=" <?php echo e($tbl_contents->description); ?>">
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
 
<?php echo $__env->make('inc.adminlayout123', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\gaschlorination\resources\views/admingo/updatesknumber.blade.php ENDPATH**/ ?>