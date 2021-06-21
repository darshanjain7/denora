  @extends('inc.userlayout')
  @section('content')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <form action="{{ action('ContactController@store')}}" method="post" enctype="multipart/form-data"   >
 	@csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
       
        <div class="col-md-12">
             <span style=" text-align: center; " > @include('inc.messages')</span>
            
            <h1 style="color:#fff; text-align: center; margin-top:30px;" >Contact Us</h1>
             <h4 style="text-align: center; padding:0 0 30px 0">Please fill your information, we will be contact you shortly</h4>
    	</div>
        <div class="col-md-4"></div>
        <div class="col-md-4" style="background: #f2f2f2; margin-bottom:30px; box-shadow:0px 0 22px #6060604d;">  <br>
            <div class="col-md-12"><input class="form-control" name="name" placeholder="Your Name" type="text" required="" value="{{ old('name') }}">   <br> </div>
            <div class="col-md-12">
            	<input class="form-control" name="email" placeholder="Your Email ID" type="email"  required="" value="{{ old('email') }}"> 	<br>
            </div>
            <div class="col-md-12">
            	<input class="form-control"  name="mobile" placeholder="Your Mobile Number" type="text" required="" value="{{ old('mobile') }}">
                <br>
            </div>
            <div class="col-md-12">
                <input class="form-control" name="subject" placeholder="Subject" type="text"   required=""  value="{{ old('subject') }}">
                <br>
            </div>
            <div class="col-md-12">
                <input class="form-control" name="sitename" placeholder="Site Name" type="text" value="{{ old('sitename') }}">
                <br>
            </div>
            <div class="col-md-12">
                <input class="form-control" name="partslno" placeholder="Part Serial Number (if known)" type="text" value="{{ old('partslno') }}" >
                <br>
            </div>
             <div class="col-md-12">
                <input class="form-control" name="upload" placeholder="Upload" type="file"  >
                <br>
            </div>
            <div class="col-md-12">
                <textarea class="form-control" placeholder="Note" name="msg" rows="4"> {{ old('msg') }} </textarea>
                <br>
            </div>
             <div class="col-md-12 form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }} row" style="margin-left: auto;">
    <div class=" ">
        <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
        @if ($errors->has('g-recaptcha-response'))
            <span class="help-block">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
        @endif
    </div>
</div>
            <div class="col-md-12" style="text-align:center;"> 
                <button type="submit" class="btn btn-primary"  style="background-color:#6cc04a; color:#fff; border:0; width:50%;" >Submit</button>
        	</div><br>
    	</div><br>
</form>
 @endsection