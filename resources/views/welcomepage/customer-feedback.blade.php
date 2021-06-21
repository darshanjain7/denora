 

 @extends('inc.userlayout')



 @section('content')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

 

 <form action="{{ action('CustomerfeedbackController@store')}}" method="post"   >

  								@csrf

										  <input type="hidden" name="_token" value="{{ csrf_token() }}">

			 

                                             <div class="row" style="padding:80px;">
                                              
 											<div class="col-md-2"></div>
										  	  <div class="col-md-8" style="background: #f2f2f2; text-align: center; border-radius: 35px; padding:30px; box-shadow:0px 0 22px #6060604d;">
   <span style=" text-align: center; " > @include('inc.messages')</span>
 												<div class="col-md-12">  <h2>Customer Feedback Form</h2></div>
												<div class="row"><div class="col-md-7"><p style="margin-top:15px; font-size: 16px;font-weight: 500; text-align:left;"><i class="fa fa-caret-right" style="margin-right:7px;"></i>Please rate your previous experience with De Nora</p></div>
 												<div class="col-md-4" style="padding-left:0;">
													 <fieldset class="rating star" style="margin:0 auto !important;">
													 <input type="radio" id="field6_star5" name="rating2" value="5" /><label class = "full" for="field6_star5"></label>
													 <input type="radio" id="field6_star4" name="rating2" value="4" /><label class = "full" for="field6_star4"></label>
													 <input type="radio" id="field6_star3" name="rating2" value="3" /><label class = "full" for="field6_star3"></label>
													 <input type="radio" id="field6_star2" name="rating2" value="2" /><label class = "full" for="field6_star2"></label>
													 <input type="radio" id="field6_star1" name="rating2" value="1" /><label class = "full" for="field6_star1"></label>
													</fieldset>
												 </div>
												 </div>
												 <div class="row" style="margin:3px 0 15px 0;"> 
												 <div class="col-md-7" style=" text-align:left; padding-left:0;">
												 <span style="font-size: 16px;font-weight: 500;"><i class="fa fa-caret-right" style="margin-right:7px;"></i>Would you recommend  De Nora ?</span>
												 </div>
 												<div class="col-md-4" style="text-align:left; margin-right:10px;">
												 <input type="radio" id="" name="like" value="Like" style="margin-right:5px;" >Yes
												 <input type="radio" id="" name="like" value="Dislike"  style="margin-right:5px;margin-left:15px;"/>No
												 </div></div>
												 <div class="row"> 
												
												 <div class="col-md-12">
									 <p style="font-size: 16px;font-weight: 500; text-align:left;"><i class="fa fa-caret-right" style="margin-right:7px;"></i>Please list any areas where we can improve our services</p>
										 <textarea type="text" name="msg"  rows="6" style="width:100%;" ></textarea>
										</div>
										   <div class="col-md-12 form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }} row" style="margin-left: auto;">
    <div class=" ">
        <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
        @if ($errors->has('g-recaptcha-response'))
            <span class="help-block">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
        @endif
    </div>  </div>
										<div class="col-md-12">
										<button type="submit" class="btn btn-primary" style="background-color:#6cc04a; color:#fff; border:0; margin-top:15px;">Submit to De Nora</button>
										</div>
										<div class="col-md-2"></div>
										</div>
 										</form>

										@endsection