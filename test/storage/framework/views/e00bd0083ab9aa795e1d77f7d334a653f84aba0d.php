

<?php $__env->startSection('content'); ?>

       <!-- /#page-wrapper -->
<div class="main">
           <div class="main-content">
               <div class="container-fluid">
                   
                   <div class="row">
                       <div class="col-md-12">
                           <!-- BORDERED TABLE -->
                           <div class="panel">
                               <div class="panel-heading">
                               <?php if(Session::has('flash_message')): ?>
    <div class="alert alert-success"  data-expires="5000"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('flash_message'); ?></em></div>
<?php endif; ?> 
                                    <h3  class="panel-title" style="   font-size: 24px; color: #2b333e; font-weight: 600;">Uploaded Contents</h3>
                                   
                               </div>
                               <div class="panel-body">
                                   <table class="table table-bordered">
                                       <thead>
                                           <tr>
                                               <th>ID</th>
                                               <th width="20%">Product type</th>
                                               <th width="20%">Product Name</th>
                                                
                                               <th width="15%">Created By</th>
                                                <th>Status</th>
                                                <th>Change</th>
                                               <th>Edit</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                            <?php if(count($value123)>0): ?>
                                            <?php $i=0; ?>

                                            <?php $__currentLoopData = $value123; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <tr>
                                               <td><?php echo e(++$i); ?></td>
                                               
                                               <td><?php echo e($tbl_contents->product_type); ?></td>
                                               <td><?php echo e($tbl_contents->category_name); ?></td>
                                              
                                                 <td><?php echo e($tbl_contents->name); ?> </td>
                                               <td width="10%;"> 
                                        <?php if($tbl_contents->status==1): ?>
                                         Active 													<?php else: ?>
                                                    Inactive 
                                                    <?php endif; ?> </td>
                                                
                                        <?php if($tbl_contents->status==1): ?>

                                       <td>  <input type="hidden" class="pcatid"   value="<?php echo e($tbl_contents->sk_category_id); ?>"><a style="color:white" class="btn btn-danger " href="../inactivatecate/<?php echo e($tbl_contents->sk_category_id); ?>">Inactive</a> 													<?php else: ?>
                                                   <td><input type="hidden" class="pcatid"   value="<?php echo e($tbl_contents->sk_category_id); ?>"><a style="color:white" class="btn btn-success" href="../activatecate/<?php echo e($tbl_contents->sk_category_id); ?>" >Active</a>
                                                    <?php endif; ?> </td>
                                               <td> <a style="color:white" class="btn btn-primary" href="../productscategory/<?php echo e($tbl_contents->sk_category_id); ?>/edit" >Edit</a></td>
                                           </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                   </table>
                                            <?php echo e($value123->links()); ?>

                                            <?php else: ?>
                                            <span>No data found</span>
                                            <?php endif; ?>
                                           

                                            
                                        
                               </div>
                           </div>
                           <!-- END BORDERED TABLE -->
                       </div>
                    
                   </div>
               </div>
           </div>

           <!-- END MAIN CONTENT -->
       </div>

      
   </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.adminlayout123', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gaschlorinationd/public_html/test/resources/views/admingo/viewproductscategory.blade.php ENDPATH**/ ?>