 



 <?php $__env->startSection('content'); ?>

<div style="background-color: #f8f9fa !important; z-index: 9; position: relative;">

  <div class="grid">

    <div class="">

      <ol class="breadcrumb bef"  style="    margin-top: -87px;">

        <li style="background-color: #6cc04a;color: #fff;"><a href="/" style="color:#fff">HOME</a></li>

        

        <li class="active relative drop-container">

          <a href="#" style="padding-left:0;"><?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php echo e($news_data1->group_name); ?>




            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



          </a>

          </span>

          </li> 

        </ol>

    </div>

  </div>

</div>



<div class="container" style="margin-top: 76px;">

    <div class="section">

        <div class="row" style="margin:70px 0; margin-top: 16px;">

          

        	 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-md-4">

                <a href="../productmap/<?php echo e($news_data->product_type_id); ?>">

                    <div class="imgbg3">

                    <img src="/storage/app/public/documents/<?php echo e($news_data->product_type_image); ?>"  class="img3"/>

                </div>

                  <button class="box3but"><?php echo e($news_data->product_type); ?>  <i class="fa fa-arrow-right soli-arr" style="float:right; margin-top:6px; margin-right:8px;" aria-hidden="true"></i></button> </a>

               </div>

               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>

</div>

 	

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gaschlorinationd/public_html/resources/views/welcomepage/producttypeview.blade.php ENDPATH**/ ?>