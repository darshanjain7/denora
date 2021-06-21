  
  <?php $__env->startSection('content'); ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <form action="<?php echo e(action('SendenquiryupdateController@store')); ?>" method="post" enctype="multipart/form-data"   >
 	<?php echo csrf_field(); ?>
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <div class="row">
        <div class="col-md-12">
             <span style=" text-align: center; " > <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></span>
            <h1 style="color:#fff; text-align: center; margin-top:30px;" >Send Enquiry</h1>
             <h4 style="text-align: center; padding:0 0 30px 0">Please fill your information, we will be contact you shortly</h4>  
    	</div>
        <div class="col-md-4"></div>
        <div class="col-md-4" style="background: #f2f2f2; margin-bottom:30px; box-shadow:0px 0 22px #6060604d;">  <br>
            <div class="col-md-12"><input class="form-control" name="name" placeholder="Your Name" type="text" required="" value="<?php echo e(old('name')); ?>">   <br> </div>
            <div class="col-md-12">
            	<input class="form-control" name="email" placeholder="Your Email ID" type="email" value="<?php echo e(old('email')); ?>"  required=""> 	<br>
            </div>
            <div class="col-md-12">
            	<input class="form-control"  name="mobile" placeholder="Your Mobile Number" value="<?php echo e(old('mobile')); ?>"  type="text" required="" >
                <br>
            </div>
               <div class="col-md-12">
            	<input class="form-control"  name="sknumber" placeholder="SK Number" value="<?php echo e($id); ?>" type="text" required="" readonly>
                <br>
            </div>
            <div class="col-md-12">
                <input class="form-control" name="subject" placeholder="Subject" type="text" value="<?php echo e(old('subject')); ?>"  required="">
                <br>
            </div>
            <div class="col-md-12">
                <input class="form-control" name="sitename" placeholder="Site Name" value="<?php echo e(old('sitename')); ?>" type="text" >
                <br>
            </div>
               <div class="col-md-12">
                <input class="form-control" name="upload" placeholder="Upload" type="file"  >
                <br>
            </div>
            <div class="col-md-12">
                <textarea class="form-control" placeholder="Note" name="msg" rows="4"> <?php echo e(old('msg')); ?></textarea>
                <br>
            </div>
                <div class="col-md-12 form-group<?php echo e($errors->has('g-recaptcha-response') ? ' has-error' : ''); ?> row" style="margin-left: auto;">
    <div class=" ">
        <div class="g-recaptcha" data-sitekey="<?php echo e(env('CAPTCHA_KEY')); ?>"></div>
        <?php if($errors->has('g-recaptcha-response')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
            </span>
        <?php endif; ?>
    </div>  </div>
            <div class="col-md-12" style="text-align:center;"> 
                <button type="submit" class="btn btn-primary"  style="background-color:#6cc04a; color:#fff; border:0; width:50%;" >Submit</button>
        	</div><br>
    	</div><br>
</form>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gaschlorinationd/public_html/test/resources/views/welcomepage/sendenqiery.blade.php ENDPATH**/ ?>