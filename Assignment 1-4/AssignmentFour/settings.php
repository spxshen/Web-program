<?php
$dbhost = "localhost";
$dbuser = "notadish";
$dbpass = "notadish";
$dbname = "assignment_try";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
?>