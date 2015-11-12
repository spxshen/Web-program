<?php
include_once 'settings.php';
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database
$id    = $_GET['id'];
$query = "SELECT * ".
         "FROM blog_table WHERE id = '$id'";

$result = mysql_query($query) or die('Error, query failed');
list($id, $formatted, $original, $name) =  mysql_fetch_array($result);

//header("Content-type: html");
echo $formatted;
}

?>