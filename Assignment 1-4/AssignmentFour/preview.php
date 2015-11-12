<!DOCTYPE html>
<html>
<head>
	<title>Assignment Four</title>
</head>
<script>
	function validateForm() {
		var x = document.forms["previewForm"]["inputTitle"].value;
		var y = document.forms["previewForm"]["inputContent"].value;
		if (x == null || x == "" || y == null || y == "") {
			alert("Title and Content must be filled out both!");
			return false;
		}
	}
	</script>
<?php
ini_set('display_errors', 1);
error_reporting(~0);
echo "hello";
error_reporting(E_ALL);

include_once("./FormattedPost.php");
?>

<body>
<?php
if(!isset($_POST['inputTitle'])|| !isset($_POST['inputContent'])){
	echo "<h2>Fail</h2>";
}
else{
	$content = explode("\n", $_POST['inputContent']);
	$previewContent = new FormattedPost(trim(strip_tags(($_POST['inputTitle']))), $content);
	//echo $previewContent->test();
	$outputString = implode("\n",$previewContent->formattingInputs());
}
?>
	<h1>Preview Your Blog</h1>
	<article id="blog_preview">
		<h2>My Blog</h2>
		<form  name = "previewForm" id="preview" enctype="multipart/form-data" action="upload.php" onsubmit="return validateForm()" method="POST">
			<label>Title:
				<input type="text" style="height:20px;width:150px" name="inputTitle" align="middle" value = "<?php echo $previewContent->title; ?>"/>
			</label>
			<br/>
			<label>
				<textarea name="inputContent" align="middle" maxlength="1000" cols="40" rows="20" ><?php echo $outputString ?></textarea>
			</label>
			<br/>
			<label> 
				<input type="submit" value="Submit" />
				<input type="hidden" name = "originTitle" value ="<?php echo $_POST['inputTitle'];?>" />
				<input type="hidden" name = "originContent" value = "<?php echo $_POST['inputContent'];?>" />

			</label>
			<br/>
		</form>
	</article>
</body>
</html>