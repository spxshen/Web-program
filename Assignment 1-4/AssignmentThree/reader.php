<?php
if(!isset($_POST['file_name'])||$_POST['file_name']==""){
	echo "<!DOCTYPE html><html>
	<head>
		<title>No File Name</title>
	</head>
	<body>
	<h1>Please Input a File Name</h1>
	</body>
	</html>";
}
elseif (!file_exists($_POST['file_name'])) {
	echo "<!DOCTYPE html><html>
	<head>
		<title>No Such File</title>
	</head>
	<body>
	<h1>File Not Found</h1>
	</body>
	</html>";
	}
	else{
		header("Location:".$_POST['file_name']);
	}
?>