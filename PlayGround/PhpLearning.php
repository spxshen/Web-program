<!DOCTYPE html>
<html>

<head>
    <title>Assignment 2: Pig Latin</title>
</head>

<body>
    <h1>Assignment Two</h1>
    <?php
    	function isVowel($char){
    		if($char=="a"||$char=="e"||$char=="i"||$char=="o"||$char=="u")return true;
    		else
    		return false;
    	}


        function make_pig_latin ($string)
        {
            $string=strtolower($string);
            $arrayChar=str_split($string);
            if(isVowel($arrayChar[0])) return ucfirst($string."yay");
            $singleChar=array_shift($arrayChar);

            while(!isVowel($singleChar)){
                $arrayChar[]=$singleChar;
                $singleChar=array_shift($arrayChar);

            }
            array_push($arrayChar, "ay");
            return ucfirst(implode($arrayChar));
        }
        $outputArray=array("Banana", "Cranberry", "Pistachio", "Marshmallow", "Almond", "Mozzarella", "Gouda", "Avocado");
 

        /*
         * Create an array from the following strings:
         *   Banana, Cranberry, Pistachio, Marshmallow, Almond, Mozzarella, Gouda, Avocado
         * Iterate through the array and print a table that has the index of the element in the first column,
         * the original word in the second column, and the Pig Latin translation in the third column.
         */
    ?>

    <!-- print your results here! -->
    <table>
    <?php
    	foreach ($outputArray as $key => $a){
    		echo "<tr><td>".$key."</td><td>".$a."</td><td>".make_pig_latin($a)."</td></tr>";
    	}

    ?>
    </table>

</body>

</html>

