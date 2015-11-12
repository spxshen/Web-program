<!DOCTYPE html>
<html>
<head>
	<title>Assignment Three</title>
</head>

<body>
	<h1>Upload your file</h1>
	<article id="file_uploader">
		<h2>File Uploader</h2>
		<form id="upload_form" enctype="multipart/form-data" action="parser.php" method="POST">
			<label>Title:
				<input type="text" name="inputTitle"/>
			</label>
			<br/>
			<label>Description:
				<input type="text" name="inputDescription"/>
			</label>
			<br/>
			<label>Upload this file: 
				<input name="text_file" type="file" accept="text/plain"/>
				<input type="submit" value="Upoad File"/>
			</label>
			<br/>
		</form>
	</article>
</body>
</html>