<!DOCTYPE html>

<html lang="en">

<head>
<link rel="stylesheet" href="{{ asset('public/css/assets/css/main.css') }}">
  	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  
	<link rel="stylesheet" href="{{ asset('public/css/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/assets/vendor/font-awesome/css/font-awesome.min.css') }}" >
	<link rel="stylesheet" href="{{ asset('public/css/assets/vendor/linearicons/style.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/assets/vendor/chartist/css/chartist-custom.css') }}">
	<!-- MAIN CSS -->

	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('public/css/assets/css/demo.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
 

  <style type="text/css">
  .btn-group-sm>.btn, .btn-sm {
    padding: 5px 10px !important;
	background: white !important;
	font-size: 14px;
  }
  .note-editable {
    height: 200px;
    padding: 10px;
}
  
	.navbar-default .brand {
    float: left;
    padding: 24px 23px !important;
    font-size: 23px !important;
    background-color: #fff;
}

.popup {
    display: inline-block;
}
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #b1b1b1;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 20px;
    position:relative;
    top:50px;
    right:150px;
}
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}
</style>  
</head>

<body>
  


   <div id="wrapper">



        <!-- Navigation -->

       <nav class="navbar navbar-default navbar-fixed-top">

          
	   @include('theme.header')

@include('theme.menu')

         


        </nav>



        <div id="page-wrapper">

<div class="main">
           <div class="main-content">
               <div class="container-fluid">
                   


                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
       
                <div class="panel">
                    @include('inc.messages')
                               <div class="panel-heading">
                                     <h3  style="    color: #2b333e; font-weight: 600;">Update  Product HTML
</h3>
                               </div>
                               <div class="panel-body">
                                
                                 @foreach($tbl_content as $tbl_contents)
                <form action="../../producthtml/{{$tbl_contents->product_master_id}}" method="post"  enctype="multipart/form-data">
                                 @csrf
                           @method('put')
                                
                            <div class="col-md-3">Product Type:</div><div class="col-md-9">
                            <select class="form-control" name="typname">
                                               @foreach($tbl_content as $tbl_contents)
                                               <option value="{{$vvv=$tbl_contents->product_type_id}} ">{{$tbl_contents->product_type}} </option>
                                                @endforeach
                                                 @foreach($value12 as $value123)
                                                 @if($vvv!=$value123->product_type_id)
                                                <option value="{{$value123->product_type_id}} ">{{$value123->product_type}}</option>
                                                @endif
                                                @endforeach
                                           </select>
                                       <br></div>
                                       <div class="col-md-3">Product Name:</div>
							<div class="col-md-9"> 
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Product Name" name="progname" value="{{$tbl_contents->product_name}}" required>
								</div>
							</div>
                            <div class="col-md-3">Product HTML:</div>
							<div class="col-md-9"> 
								<div class="form-group">
									<textarea id="summernote" name="editordata" required>{!!html_entity_decode($tbl_contents->product_master_image_html_code)!!} 
</textarea>
								</div>
							</div>
                                <div class="col-md-5"></div>
                                    <button type="submit" style="  margin-top: 19px; " class="btn btn-primary">Update</button>
                                   </form>	
                                     @endforeach
     
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>


           <!-- END MAIN CONTENT -->
       </div>


   </div>

   <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
  

        </div>



         </div>
	 	<script src="{{ asset('public/css/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('public/css/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('public/css/assets/vendor/chartist/js/chartist.min.js') }}"></script>
	<script src="{{ asset('public/css/assets/scripts/klorofil-common.js') }}" ></script>
   
 