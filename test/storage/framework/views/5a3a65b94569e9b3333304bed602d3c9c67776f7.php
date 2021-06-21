  
 <?php $__env->startSection('content'); ?>
  <div style="background-color: #f8f9fa !important; z-index: 9; position: relative;">

    <div class="grid">

      <div class="">

        <ol class="breadcrumb bef">

          <li style="background-color: #6cc04a;color: #fff;"><a href="/"style="color:#fff" >HOME</a></li>

          

          <li class="relative drop-container">

             <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <a href="../userview/<?php echo e($news_data1->product_group_id); ?>"  style="padding-left:0; padding-right:0;">

              

          <?php echo e($news_data1->group_name); ?>


          </a>

           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <div class="drop">

                <ul class="list">
                    
                       <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li><a href="../productcategory/<?php echo e($news_data2->sk_category_id); ?>"> <?php echo e($news_data2->category_name); ?></a> </li>

           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  

                </ul>

              </div>

            </span>

            </li> 

            <li class="active "><a href="#"  style="padding-left:0;">

                 <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <?php echo e($news_data1->product_type); ?>


           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </a></li>

          </ol>

      </div>

    </div>

  </div>
 <div class="bg-light" style="height:100% !important;">
  <div class="container"  style="margin-top: 40px;">

    <div class="section">

      <div class="row">
<?php if(count($data1)>0): ?>
      	 <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <div class="col-md-6" style="  margin-top: 56px; "> 

        	<?php echo html_entity_decode($news_data1->product_master_image_html_code); ?> 

        

        </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
      <?php echo "No record found...!"; ?>
                    <?php endif; ?>

      <div class="col-md-6 smlrestab" style="padding-left: 47px;" >

        <h1 style="color: #6cc04a;">
<?php if(count($data1)>0): ?>
          <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <?php echo e($news_data1->product_type); ?>


           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           <?php else: ?>
           <?php endif; ?>

        </h1>

        

        <table class="table table-bordered">

          <thead>

            <tr>

              <th>#</th>

              <th style="width: 35%; text-align:center;">SK Number</th>

              <th>Descriptions</th>

              </tr>

          </thead>

          <tbody>

            <?php $value123=0;   ?>
            <?php if(count($data1)>0): ?>
             <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



            <tr>

              <td style="padding-top:21px;"><?php echo e(++$value123); ?></td>

              <td style="text-align:center;">
                  
                  <?php 
                  if($news_data->sk_spare=="1")
                  {?>
                  <a href="../sendenquiry/<?php echo e($news_data->sku); ?>" style="color: #00000080; font-weight:700;" class="hovgrn"><?php echo e($news_data->sku); ?></a></td>
                  <?php 
                  }
                  else
                  {?>
                  <a href="../productskudetails/<?php echo e($news_data->product_sku_id); ?>" style="color: #00000080; font-weight:700;" class="hovgrn"><?php echo e($news_data->sku); ?></a></td>
                 
                  <?php } ?>

              <td style="font-size: 13px;"><?php echo e($news_data->description); ?></td>

             </tr>

           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           <?php else: ?>
       
                    <?php endif; ?>
    

          </tbody>

        </table>

      </div> 
 
    </div>

    </div>

  </div>

  </div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\gaschlorination\resources\views/welcomepage/productmap.blade.php ENDPATH**/ ?>