<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
error_reporting(~0);
include("./settings.php");
if(isset($_POST['inputTitle'])&&isset($_POST['inputContent'])){
	$blogTitle = $_POST['inputTitle'];
	$blogContent = $_POST['inputContent'];
	$entireBlog = "<!DOCTYPE html><html><head><title>".$blogTitle."</title><body><h1>".$blogTitle."</h1>".$blogContent."</body></html>";
	$entireBlog = addslashes($entireBlog);
	$entireOrigin = $_POST['originTitle'].$_POST['originContent'];

	$sql="INSERT INTO blog_table(formatted,original, name) VALUES('$entireBlog','$entireOrigin', '$blogTitle')";
	


	if(mysql_query($sql)){

		?>
		<script>
		alert('successfully uploaded');
        window.location.href='uploader.php?success';
        </script>
		<?php
	}
	else{
		?>
		<script>
		alert('error while uploading');
        window.location.href='uploader.php?fail';
        </script>
		<?php
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>why</h2>
</body>
</html>