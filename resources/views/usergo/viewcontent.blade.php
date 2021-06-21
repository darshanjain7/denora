<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  #the-canvas {
  border:1px solid black;
     padding-top: 10px;
}
  </style>
</head>
<body>
<script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
 <div class="row"> 
  @if(count($data)>0)
 
@foreach($data as $ids)
<div class="col-md-2" style="
    position: fixed;
    background: red;
    text-align: left;
    color: white;
    text-align: center;
    padding: 6px;
" id="hms">{{$ids->time_limit}}</div>
 
 
<div class="col-md-12" style="
    position: fixed;
    text-align: center;
">
  <button id="prev">Previous</button>
  <button id="next">Next</button>
  &nbsp; &nbsp;
  <span>Page: <span id="page_num"></span> / <span id="page_count"></span></span><br>
 
<input type="hidden" name="val1" id="val1" value="../../public/storage/documents/{{$ids->content}}">
</div>

{{$ids->user_content_id}}
 <h1 id="test" style="padding-top: 45px;"></h1>
 

<!--$img="<a href="../../public/storage/documents/{{$ids->content}}">Download </a> "; -->
 <canvas class="col-md-2"></canvas>
<canvas   id="the-canvas"></canvas>
</div>
</div>

 @endforeach

 @endif

<script>

function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
$(document).on("keydown", disableF5);
 


function doSomething(){
    
    var startTime = document.getElementById('hms').innerHTML;
    alert(startTime);
    document.getElementById("test").innerHTML=startTime;
}
function showADialog(e){
    var confirmationMessage = 'Your message here';
    //some of the older browsers require you to set the return value of the event
    (e || window.event).returnValue = confirmationMessage;     // Gecko and Trident
    return confirmationMessage;                                // Gecko and WebKit
}
window.addEventListener("beforeunload", function (e) {
    // to do something (Remember, redirects or alerts are blocked here by most browsers):
    doSomething();    
    // to show a dialog (uncomment to test):
    return showADialog(e);  
});

	 function fundemo()
	 {
	alert("fsdfs");
	 	var startTime = document.getElementById('hms').innerHTML;
	 	alert(startTime);
	 }

// If absolute URL from the remote server is provided, configure the CORS
// header on that server.
document.addEventListener('contextmenu', event => event.preventDefault());
var url = document.getElementById("val1").value;
 //alert(url);

// Loaded via <script> tag, create shortcut to access PDF.js exports.
var pdfjsLib = window['pdfjs-dist/build/pdf'];

// The workerSrc property shall be specified.
pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';

var pdfDoc = null,
    pageNum = 1,
    pageRendering = false,
    pageNumPending = null,
    scale = 0.8,
    canvas = document.getElementById('the-canvas'),
    ctx = canvas.getContext('2d');
     scale = 1.5;

/**
 * Get page info from document, resize canvas accordingly, and render page.
 * @param num Page number.
 */
function renderPage(num) {
  pageRendering = true;
  // Using promise to fetch the page
  pdfDoc.getPage(num).then(function(page) {
    var viewport = page.getViewport({scale: scale});
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    // Render PDF page into canvas context
    var renderContext = {
      canvasContext: ctx,
      viewport: viewport
    };
    var renderTask = page.render(renderContext);

    // Wait for rendering to finish
    renderTask.promise.then(function() {
      pageRendering = false;
      if (pageNumPending !== null) {
        // New page rendering is pending
        renderPage(pageNumPending);
        pageNumPending = null;
      }
    });
  });

  // Update page counters
  document.getElementById('page_num').textContent = num;
}

/**
 * If another page rendering in progress, waits until the rendering is
 * finised. Otherwise, executes rendering immediately.
 */
function queueRenderPage(num) {
  if (pageRendering) {
    pageNumPending = num;
  } else {
    renderPage(num);
  }
}

/**
 * Displays previous page.
 */
function onPrevPage() {
  if (pageNum <= 1) {
    return;
  }
  pageNum--;
  queueRenderPage(pageNum);
}
document.getElementById('prev').addEventListener('click', onPrevPage);

/**
 * Displays next page.
 */
function onNextPage() {
  if (pageNum >= pdfDoc.numPages) {
    return;
  }
  pageNum++;
  queueRenderPage(pageNum);
}
document.getElementById('next').addEventListener('click', onNextPage);

/**
 * Asynchronously downloads PDF.
 */
pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
  pdfDoc = pdfDoc_;
  document.getElementById('page_count').textContent = pdfDoc.numPages;

  // Initial/first page rendering
  renderPage(pageNum);
});
function copyToClipboard() {

  var aux = document.createElement("input");
  aux.setAttribute("value", "print screen disabled!");      
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  // Remove it from the body
  document.body.removeChild(aux);
  alert("Print screen disabled!");
}

$(window).keyup(function(e){
  if(e.keyCode == 44){
    copyToClipboard();
  }
});


    var timeoutHandle;
  function count() {
var startTime = document.getElementById('hms').innerHTML;
var pieces = startTime.split(":");
var time = new Date(); time.setHours(pieces[0]);
time.setMinutes(pieces[1]);
time.setSeconds(pieces[2]);
var timedif = new Date(time.valueOf() - 1000);
var newtime = timedif.toTimeString().split(" ")[0];
document.getElementById('hms').innerHTML=newtime;
if(newtime!=='00:00:00'){
setTimeout(count, 1000);
}else
{
	alert("Time Up..!")
document.getElementById('hms').innerHTML='Ended';
}

}
count();




</script>
</body>
</html>
