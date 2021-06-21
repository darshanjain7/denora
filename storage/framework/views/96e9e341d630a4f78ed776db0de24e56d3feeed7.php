 



 <?php $__env->startSection('content'); ?>



 

<div style="background-color: #f8f9fa !important; z-index: 9; position: relative;">

  <div class="grid">

    <div class="">

      <ol class="breadcrumb bef">

        <li style="background-color: #6cc04a;color: #fff;" ><a href="/" style="color:#fff">HOME</a></li>

           <li class="relative drop-container">

       <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
  <a href="../userview/<?php echo e($news_data1->product_group_id); ?>"  style="padding-left:0; padding-right:0;">

              

          <?php echo e($news_data1->group_name); ?>


          </a>



            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            

          </span>

          </li> 

        <li class="relative drop-container">

          <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data11): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <a href="../productmap/<?php echo e($news_data11->product_type_id); ?>" style="padding-left:0; padding-right:0;"> 

             <?php echo e($news_data11->sku); ?> 

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></a>

            

          </span>

          </li> 

          <li class="active "><a href="#" style="padding-left:0;">

          <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

             <?php echo e($news_data1->o_m_name); ?> 

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </a></li>

        </ol>

       

    </div>

  

  </div>

</div>







<div class="bg-light" style="height:100%">

<div class="container"  style="margin-top: 76px;">

    <div class="section">

        <div class="row">

        

          <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="col-md-6">
            <h2 style="position: absolute;"><?php echo e($proname=$news_data1->o_m_name); ?></h2>
            </div>
             <div class="col-md-6">
            <a class="nav-link customer" href="../sendenquiry/<?php echo e($news_data1->sku); ?>" style="color: #1b1717 !important;text-align: end;"><i class="fa fa-commenting" aria-hidden="true"></i> Send Enquiry </a>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 </div>
  <div class="col-md-12">
<?php if($proname=="Microchem")
{?>
            <ul class="nav nav-tabs" role="tablist">

              <li class="nav-item">

                <a class="nav-link active" style="width:555px;" data-toggle="tab" href="#tabs-1" role="tab">O & M Manual</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" data-toggle="tab" style="width:555px;" href="#tabs-2" role="tab">Parts List</a>

              </li>

             
            </ul><!-- Tab panes -->
            
            <?php }
            else
            {?>
                   <ul class="nav nav-tabs" role="tablist">

              <li class="nav-item">

                <a class="nav-link active" style="width:555px;" data-toggle="tab" href="#tabs-1" role="tab">Drawing</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" data-toggle="tab" style="width:555px;" href="#tabs-2" role="tab">Data Sheet</a>

              </li>

             
            </ul><!-- Tab panes -->
            <?php } ?>

            <div class="tab-content">

              <div class="tab-pane active" id="tabs-1" role="tabpanel">

                <div class="row">

                   <div class="col-md-12">
 
                   <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                   <iframe src="/storage/app/public/documents/<?php echo e($news_data->drowing_pdf); ?>" frameborder="0" style="width:100%;min-height:740px;"></iframe>



                 



                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </div>

                  

                </div>

               

                

              </div>

              <div class="tab-pane" id="tabs-2" role="tabpanel">

                <div class="row" id="row1"> 

                   <div class="col-md-12">

                    <div class="mag1">

                    <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                   <iframe src="/storage/app/public/documents/<?php echo e($news_data1->o_m_pdf); ?>" frameborder="0" style="width:100%;min-height:740px;"></iframe>



                 



                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          </div>

                    </div>

                  </div>

                 

                </div>

               

              </div>

              

            </div>

             

         </div>

        </div>



    </div>

</div>

 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('inc.userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gaschlorinationd/public_html/resources/views/welcomepage/productskudetails.blade.php ENDPATH**/ ?>