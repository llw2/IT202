<!DOCTYPE html>
<html>
<body>
<?php
	//ignore this, it's just for output formatting
	function newline(){
	  //attempt to create newline for command line or browser, can ignore
	  echo "<br>\n";
	}
	
	//don't do this
	newline();
    echo "Begin code block I need to duplicate<br>\n ";
	$name = "John";
	echo "Hello, $name <br>\n ";
	echo "End code block I need to duplicate<br>\n ";
	
	echo "Begin code block I need to duplicate<br>\n ";
	$name = "John";
	echo "Hello, $name <br>\n ";
	echo "End code block I need to duplicate<br>\n ";
	
	echo "Begin code block I need to duplicate<br>\n ";
	$name = "John";
	echo "Hello, $name <br>\n ";
	echo "End code block I need to duplicate<br>\n ";
?>
</body>
</html>
