 @extends('inc.adminlayout123')

 @section('content')
 <link rel="stylesheet" href="D:/xampp/htdocs/Denora/jodit-3.3.8/build/jodit.css">
<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
		@include('inc.messages')
			 	<div class="panel">
								<div class="panel-heading">
									  <h3  style="    color: #2b333e; font-weight: 600;">Create Product Type</h3>
								</div>
								<div class="panel-body">
				 <form action="{{ action('AdmincontentController@store')}}" method="post"  enctype="multipart/form-data">
  								@csrf

  								<div class="col-md-2">Group Name:</div><div class="col-md-10"> <div class="form-group">
       
     <div id="box">
	<div id="toolbar-optional-container"></div>
	 <input type="file" id="file" name="f1">
	 
	<input type="text" id="editor" name="editor" required>
		

	
	</div> </div>
	<div id="toolbar"></div>
										<br></div>

											<div class="col-md-2">Group Type:</div><div class="col-md-10"><input type="text" class="form-control" placeholder="Group Name" name="grpname" rows="4">
										<br></div>

										<div class="col-md-2">Description:</div><div class="col-md-10"><textarea class="form-control" placeholder="Description" name="grpdesc" rows="4"></textarea>
										<br></div>


									 

											<div class="col-md-2">Image:</div><div class="col-md-10"><input type="file" class="form-control" name="doc_upload" placeholder="Upload Document" required="">
										<br></div>


									<div class="col-md-2">Note:</div><div class="col-md-10"><textarea class="form-control" placeholder="Note" name="note" rows="4"></textarea>
										<br></div>
									 
									
									<br>
									 <div class="col-md-5"></div>
									 <button type="submit" class="btn btn-primary">Submit</button>
									</form>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- END MAIN CONTENT -->
		</div>


    </div>
    <script src="D:/xampp/htdocs/Denora/jodit-3.3.8/build/jodit.js"></script>
<script>
	const editor = new Jodit('#editor', {
		// toolbarButtonSize: 'large',
		// height: 100,
		// "preset": "inline",
		// toolbar: "#toolbar",
		extraPlugins: ['emoji'],
		extraButtons: ['emoji'],
		limitChars: 5,

		tabIndex: 0,
		// language: 'ru',

		uploader: {
			url: 'https://xdsoft.net/jodit/connector/index.php?action=fileUpload'
		},

		filebrowser: {
			ajax: {
				url: 'https://xdsoft.net/jodit/connector/index.php'
			}
		}
	});

	//editor.value = '12345';
</script>
<style>
	#box {
		padding: 100px;
		margin: 20px;
		position: relative;
	}
</style>
 @endsection
  