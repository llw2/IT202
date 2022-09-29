<!DOCTYPE html>
<html>
<body>
	<?php
	$arr = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", 
		  "Saturday", "Sunday"];
	foreach($arr as $day){
	  echo "$day <br>\n";
	}
//	exit();
	
	echo "<br>\n<br>\n";
	//can do the same thing with a for loop
	$count = count($arr);
	echo "The array has $count elements <br>\n";
	for ($i = 0; $i < $count; $i++){
	 	echo "$arr[$i] <br>\n"; 
	}
	

	echo "<br>\n<br>\n";
	//we can also return the key/value separately for associative arrays
	foreach($arr as $index=>$value){
	  echo "$index => $value<br>\n";
	}

	?>
</body>
</html>
