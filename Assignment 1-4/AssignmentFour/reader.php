<?php
include_once 'settings.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="uploader.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>Title</td>
    <td>View</td>
    </tr>
    <?php
	$sql="SELECT * FROM blog_table";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
        /* <td><a href="uploads/<?php echo $row['name'] ?>" target="_blank">view file</a></td>*/
		?>
        <tr>
        <td><?php echo $row['name'] ?></td>
        <td><a href="download.php?id=<?php echo $row['id'];?>">view</a> </td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>