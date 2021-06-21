

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
                                     <h3  style="    color: #2b333e; font-weight: 600;">Create Product SK Numbers</h3>
                               </div>
                               <div class="panel-body">
                <form action="<?php echo e(action('productsknumbercontroller@store')); ?>" method="post"  enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>

                                 

                                           <div class="col-md-2">Product Category:</div><div class="col-md-10"><select class="form-control" name="procat">
                                               <?php $__currentLoopData = $tbl_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <option value="<?php echo e($tbl_contents->sk_category_id); ?> "><?php echo e($tbl_contents->category_name); ?> </option>
                                                
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           </select>
                                       <br></div>

                                       <div class="col-md-2">SK Number:</div><div class="col-md-10"><input type="text" class="form-control" placeholder="SK Number" name="sknumber" rows="4" required="">
                                       <br></div>
                                       
                                        <div class="col-md-2">Send Enquiry:</div><div class="col-md-10"><select class="form-control" name="send-enquiry">
                                              
                                               <option value="0">No</option>
                                               <option value="1">Yes</option>
                                                
                                              
                                           </select>
                                       <br></div>

                                       <div class="col-md-2">Description:</div><div class="col-md-10"><input type="text" class="form-control" placeholder="Description" name="description" rows="4" required="">
                                       <br></div>



                                         
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
 
<?php echo $__env->make('inc.adminlayout123', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gaschlorinationd/public_html/test/resources/views/admingo/createproductsknumber.blade.php ENDPATH**/ ?>