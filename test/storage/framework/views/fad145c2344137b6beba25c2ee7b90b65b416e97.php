 
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
                                     <h3  class="panel-title" style="   font-size: 24px; color: #2b333e; font-weight: 600;">Feedback Details</h3>
                                    
                                </div>
                                <div class="panel-body">
                                    <table id="example" class="table table-bordered">
                                        <thead>
                                            <tr>
                                            <th width="10%">#</th>
                                                <th width="20%">Rating (from star ratings)</th>
                                                <th width="20%" >Recommend De Nora</th>
                                                <th width="20%">Submitted Date</th>
                                             
                                                <th width="20%">View More</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php if(count($value123)>0): ?>
                                             <?php $i=0; ?>
 
                                             <?php $__currentLoopData = $value123; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <td><?php echo e(++$i); ?></td>
                                               
                                                 <td><?php echo e($tbl_contents->rating); ?></td>
                                                <td><?php echo e($tbl_contents->recomand); ?></td>
                                                   <td><?php $date=$tbl_contents->created_date ?>
                                                 <?php  $date1=date('d-m-Y', strtotime($date));
                                                  echo $date1; ?> </td>
                                                  
                                       
                                                <td> <a  href="customersfeedback/<?php echo e($tbl_contents->cust_feed_id); ?>" >view</a></td>
                                            </tr>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             </tbody>
                                    </table>
                                            
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
<?php echo $__env->make('inc.adminlayout1234', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\gaschlorination\resources\views/admingo/customersfeedback.blade.php ENDPATH**/ ?>