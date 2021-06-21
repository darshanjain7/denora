<!DOCTYPE html>
<?php 
include ('../connection.php');


if(isset($_POST['submit']))	
{
	 
	  
	 $upload112=$_FILES['f1']['name'];
	
	 $content=htmlentities($_POST['editor']);
	 
	  $upload112=$_FILES['f1']['name'];
 
	  move_uploaded_file($_FILES["f1"]["tmp_name"], "upload/" . $upload112);
	
	//echo $htmlcode = $_POST['editor'];
	 $sql = "INSERT INTO `insert_image_mapp`(`image_url`, `design`) VALUES('$upload112','$content')";
 

	$result = mysqli_query($conn,$sql); 
	echo "<script>alert('Inserted');</script>";
}
	?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Jodit Test Document</title>
	<link rel="stylesheet" href="./build/jodit.css">
</head>
<body>
<a href="fetch.php">fetch</a>
 <form method="post" enctype="multipart/form-data">
<div id="box">
	<div id="toolbar-optional-container"></div>
	 <input type="file" id="file" name="f1">
	 
	<input type="text" id="editor" name="editor" required>
		

	
	</div>
</div>
<input type="submit" name="submit" value="submit">
</form>


<div id="toolbar"></div>
<script src="./build/jodit.js"></script>
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
</body>
</html>
