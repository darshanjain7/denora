<!DOCTYPE html>

<html lang="en">

<head>

   <title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->

	<link rel="stylesheet" href="{{ asset('public/css/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/assets/vendor/font-awesome/css/font-awesome.min.css') }}" >
	<link rel="stylesheet" href="{{ asset('public/css/assets/vendor/linearicons/style.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/assets/vendor/chartist/css/chartist-custom.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('public/css/assets/css/main.css') }}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('public/css/assets/css/demo.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

<style type="text/css">
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

            @yield('content')

        </div>



         </div>
		 @include('theme.footer')
    <!-- /#wrapper -->



    <!-- jQuery -->

  <script src="{{ asset('public/css/assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('public/css/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/css/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('public/css/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('public/css/assets/vendor/chartist/js/chartist.min.js') }}"></script>
	<script src="{{ asset('public/css/assets/scripts/klorofil-common.js') }}" ></script>

 <script>
$( document ).ready(function() {
    
    $('.button-active').each(function(){	
        
        $(this).click(function(){
            var cid = $(this).prev().val();
           // alert(cid);
            $.ajax({
  method: "POST",
  url: "../processajax",
  data: { cid: cid }
})
 
  .done(function( msg ) {
    //alert( "Data Saved: " + msg ).val();
     location.reload(true);
 //$('#unapp').show(); 
  }) 
  .fail(function(xhr, status, error) {
    alert( error );
  });
        });

    });

 ///////////////////un approve////////////////
     $('.button-inactive').each(function(){
        
        $(this).click(function(){
            var cid = $(this).prev().val();
              //alert(cid);
            $.ajax({
  method: "POST",
  url: "../processajaxunapprove",
  data: { cid: cid }
})
 
  .done(function( msg ) {
    //alert( "Data Saved: " + msg ).val();
     location.reload(true);
 //$('#unapp').show(); 
  }) 
  .fail(function(xhr, status, error) {
    alert( error );
  });
        });

    });

});


//////////////users//////////////////

$( document ).ready(function() {
    
    $('.button-active1').each(function(){  
        
        $(this).click(function(){
            var cid = $(this).prev().val();
          // alert(cid);
            $.ajax({
  method: "POST",
  url: "../processajax1",
  data: { cid: cid }
})
 
  .done(function( msg ) {
    //alert( "Data Saved: " + msg ).val();
     location.reload(true);
 //$('#unapp').show(); 
  }) 
  .fail(function(xhr, status, error) {
    alert( error );
  });
        });

    });

 ///////////////////un approve user////////////////
     $('.button-inactive1').each(function(){
        
        $(this).click(function(){
            var cid = $(this).prev().val();
              // alert(cid);
            $.ajax({
  method: "POST",
  url: "../processajaxunapprove1",
  data: { cid: cid }
})
 
  .done(function( msg ) {
    //alert( "Data Saved: " + msg ).val();
     location.reload(true);
 //$('#unapp').show(); 
  }) 
  .fail(function(xhr, status, error) {
    alert( error );
  });
        });

    });


///////////////////deactive user contents////////////////
     $('.button-inactive-assign').each(function(){
        
        $(this).click(function(){
            var caid = $(this).prev().val();
             // alert(caid);
            $.ajax({
  method: "POST",
  url: "../processajaxinactiveassign",
  data: { caid: caid }
})
 
  .done(function( msg ) {
    //alert( "Data Saved: " + msg ).val();
     location.reload(true);
 //$('#unapp').show(); 
  }) 
  .fail(function(xhr, status, error) {
    alert( error );
  });
        });

    });

     ///////////////////active user contents////////////////
     $('.button-active-assign').each(function(){
        
        $(this).click(function(){
            var caid = $(this).prev().val();
             // alert(caid);
            $.ajax({
  method: "POST",
  url: "../processajaxactiveassign",
  data: { caid: caid }
})
 
  .done(function( msg ) {
    //alert( "Data Saved: " + msg ).val();
     location.reload(true);
 //$('#unapp').show(); 
  }) 
  .fail(function(xhr, status, error) {
    alert( error );
  });
        });

    });


});
//////////////////////////////////////////////////////


$( document ).ready(function() {

  $('#cpdf').each(function(){
        
        $(this).click(function(){
            var cid = "2";
             // alert(cid);
            $.ajax({
  method: "POST",
  url: "showcpfd",
  data: { cid: cid },
       dataType: "json",
              success: function(res){ 
                  var len = Object.keys(res.data[0]).length;
                 
                  var txt = '';
                  
                  var div = "";
                  div += "  <label class='fancy-radio'><div class='col-md-2' style='padding-left:0px'>Select PDF:</div><div class='col-md-10' style='padding: 0px;    padding-left: 5px;'>";

                  div += "<select  class='form-control' name='selectedpdf' required=''>";   
                    div += "<option value=''>Select PDF</option>";
                  $.each(res, function(key,valueObj){
                    //alert( $.type(valueObj) );  
                    var valueObj = $.parseJSON(valueObj);
                    
                    $.each(valueObj, function(key, val){
                     
                    div += "<option value="+val.id+">"+val.content_title+"</option>";
                    });
                    
                
                  });
                   div += "</select>";
                 
                  $('.ascontent').html(div);

                 
              },
              error: function(jqXHR, textStatus, errorThrown){
                  alert('error: ' + textStatus + ': ' + errorThrown);
              }
        
     //alert( "Data Saved: " + msg ).val();
    // location.reload(true);
 //$('#unapp').show(); 
  }) 
  
        });

    });


});

  
 function pop() {
    var popup = document.getElementById('myPopup');
    popup.classList.toggle('show');
}

 </script>
</body>



</html>