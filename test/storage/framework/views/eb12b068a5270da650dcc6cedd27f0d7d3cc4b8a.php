 



 <?php $__env->startSection('content'); ?>



 





  <div style="background-color: #f8f9fa !important; z-index: 9; position: relative;">

    <div class="grid">

      <div class="">

        <ol class="breadcrumb bef">

          <li style="background-color: #6cc04a;color: #fff;"><a href="/test"style="color:#fff" >HOME</a></li>

      
            

          <li class="relative drop-container">

           <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <a href="../productmap/<?php echo e($news_data1->product_type_id); ?>"  style="padding-left:0; padding-right:0;">

              

          <?php echo e($news_data1->group_name); ?>


          </a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </span>

            </li> 
     
          <li class="relative drop-container">

           <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <a href="#">

          <?php echo e($news_data1->category_name); ?>

          
          </a>

         
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </span>

            </li> 

          </ol>

      </div>

    </div>

  </div>







  <div class="bg-light" style="height: 100% !important;">

    

    

  <div class="container"  style="margin-top: 76px;">

    <div class="section">

      <div class="row">
  <div class="col-md-2"></div>

      <div class="col-md-8" style="padding-left: 47px;">

        <h1 style="color: #6cc04a;">

      

        </h1>

        

        <table class="table table-bordered">

          <thead>

            <tr>

              <th>#</th>

              <th style="width: 25%;">SK Number</th>

              <th>Descriptions</th>

              </tr>

          </thead>

          <tbody>

            <?php $value123=0;   ?>

             <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



            <tr>

              <td><?php echo e(++$value123); ?></td>

              <td><a href="../productskudetails/<?php echo e($news_data->product_sku_id); ?>" style="color: #000;"><?php echo e($news_data->sku); ?></a></td>

              <td><?php echo e($news_data->description); ?></td>

             </tr>

           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </tbody>

        </table>

      </div> 
   
         <div class="col-md-2"></div>
        

    </div>

    </div>

  </div>
 <br><br><br><br> <br><br><br><br>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gaschlorinationd/public_html/test/resources/views/welcomepage/productcategory.blade.php ENDPATH**/ ?>