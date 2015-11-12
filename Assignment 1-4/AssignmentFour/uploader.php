<!DOCTYPE html>
<html>
<head>
	<title>Assignment Four</title>
	<script>
	function validateForm() {
		var x = document.forms["myBlog"]["inputTitle"].value;
		var y = document.forms["myBlog"]["inputContent"].value;
		if (x == null || x == "" || y == null || y == "") {
			alert("Title and Content must be filled out both!");
			return false;
		}
	}
	</script>
</head>

<body>
	<h1>Write Your Blog</h1>
	<article id="bologer_uploader">
		<h2>My Blog</h2>
		<form  name = "myBlog" enctype="multipart/form-data" action="preview.php" onsubmit="return validateForm()" method="POST">
			<label>Title:
				<input type="text" style="height:20px;width:150px" name="inputTitle" align="middle" />
			</label>
			<br/>
			<label>
				<textarea name="inputContent" align="middle" maxlength="1000" cols="40" rows="20"></textarea>
			</label>
			<br/>
			<label> 
				<input type="submit" value="Save" />
			</label>
			<br/>
		</form>
		 <?php
		 if(isset($_GET['success']))
		 {
		 	?>
		 	<label>Uploaded Successfully...  <a href="reader.php">click here to view file.</a></label>
		 	<?php
		 }
		 else if(isset($_GET['fail']))
		 {
		 	?>
		 	<label>Problem While Uploading !</label>
		 	 <?php
		 	}
		 	else
		 	{
		 		?>
		 		<label>Assignment Four</label>
		 		<?php
		 	}
		 	?>
	</article>
</body>
</html>