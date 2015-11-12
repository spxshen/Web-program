<!DOCTYPE html>
<html>
<head>
	<title>Assignment Three</title>
</head>

<body>
	<h1>Assignment Three Parse Result</h1>

	<article>
		<?php
		function startsWith($haystack, $needle) {
        	return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
        }
        function startsWithNumber($str) {
             return preg_match('/^\d/', $str) === 1;
         } 



		if(!isset($_FILES['text_file'])||$_FILES['text_file']['type']!="text/plain"){
			echo "<h2>Invalid File Selected</h2>";
		}elseif(!isset($_POST['inputTitle'])){
			echo "<h2>Please input a title</h2>";
		}elseif(!isset($_POST['inputDescription'])){
			echo "<h2>Please input a description</h2>";
		}
		else{
			
			$text_file = $_FILES['text_file'];
            $uploaddir = "./uploads/";
            $uploadfile = $uploaddir . basename($text_file["name"],"txt")."html";
			
			$outputArray = array();
			array_push($outputArray, "<!DOCTYPE html>");
			array_push($outputArray, "<html>");
			array_push($outputArray, "<head>");
			array_push($outputArray, "<title>OutputFile</title>");
			array_push($outputArray, "</head>");
			array_push($outputArray, "<body>");
			array_push($outputArray, "<h1>".$_POST['inputTitle']."</h1>");
			array_push($outputArray, "<p>".$_POST['inputDescription']."</p>");

			$fileArray = file($text_file["tmp_name"]);
			foreach ($fileArray as &$value) {
				$value = strip_tags($value);
				$value = trim($value);
				if(strlen($value)!==0){
					if(startsWith($value, "#"))
						$value = "<h2>".$value."</h2>";
					if(startsWithNumber($value)||ctype_alpha($value[0]))
						$value = "<p>".$value."</p>";
					array_push($outputArray, $value);
				}
			}
			array_push($outputArray, "</body>");
			array_push($outputArray, "</html>");
			file_put_contents($uploadfile, $outputArray);
			echo "<p>Upload Done.</p>";
			echo "</article>";
	        echo "<article id=\"File_Reader\">";
		    echo "<h2>File Reader</h2>";
		    echo "<form method=\"POST\" action=\"reader.php\" name=\"show_parse_result\">";
            echo "<label>FileName:";
            echo "<input type=\"text\" value=\"".$uploadfile."\" name=\"file_name\"/>";
            echo "<input type=\"submit\" name=\"submit_form\"/>";
        	echo "</form>";
		}
		?>
	</article>
</body>
</html>