<?php
class FormattedPost{
	public $title;
	public $content;


	function startsWith($haystack, $needle){
		return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
	}
	function startsWithNumber($str){
		return preg_match('/^\d/', $str) === 1;
	} 

	function __construct($inputTitle, $inputContent){
		$this->title = $inputTitle;
		$this->content = $inputContent;
	}

	public function parseLine($singleLine){
		if(strlen($singleLine)!==0){
			if($this->startsWith($singleLine, "#"))
				$singleLine = "<h2>".$singleLine."</h2>";
			if($this->startsWithNumber($singleLine) || ctype_alpha($singleLine[0]))
				$singleLine = "<p>".$singleLine."</p>";
			return $singleLine;
		}
		else
			return "";
	}

	public function forPreview(){
		return $this->content;
	}

	public function formattingInputs(){
		$outputArray = array();
		foreach($this->content as &$value){
			array_push($outputArray, $this->parseLine($value));
		}
		return $outputArray;
	}


}

?>