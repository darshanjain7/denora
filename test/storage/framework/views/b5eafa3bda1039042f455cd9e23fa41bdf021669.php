

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
                                     <h3  style="    color: #2b333e; font-weight: 600;">Feedback Details
</h3>
                               </div>
                               <div class="panel-body">
                                
                                 <?php $__currentLoopData = $tbl_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="}" method="post"  enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>
                           <?php echo method_field('put'); ?>
                            <table class="table-bordered" width="100%">
                            <tr>  <th style="width: 45%;padding: 13px;">Rating (from star rating):</th><td style="padding-left: 13px;" ><?php echo e($tbl_contents->rating); ?></td></tr>
                            <tr>  <th style="width: 45%;padding: 13px;">Recommend De Nora:</th><td style="padding-left: 13px;" ><?php echo e($tbl_contents->recomand); ?></td></tr>
                             <tr>  <th style="width: 45%;padding: 13px;">Message:</th><td style="padding-left: 13px;" ><?php echo e($tbl_contents->message); ?></td></tr>
                             <tr>  <th style="width: 45%;padding: 13px;">IP Address:</th><td style="padding-left: 13px;" > 
                            <?php $IPaddress= $tbl_contents->created_ip; $res = file_get_contents('https://www.iplocate.io/api/lookup/'.$IPaddress.'');
                            $res = json_decode($res);
                            echo $va=$res->country; ?></td></tr>
                            <tr>  <th style="width: 45%;padding: 13px;">Browser, Version & Platform:</th><td style="padding-left: 13px;" ><?php echo e($tbl_contents->system_details); ?></td></tr>
                            
                            
                            
                            </table>

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
 
<?php echo $__env->make('inc.adminlayout123', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gaschlorinationd/public_html/test/resources/views/admingo/viewcustomerfeedback.blade.php ENDPATH**/ ?>