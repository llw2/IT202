<!DOCTYPE html>
<html>
<body>
	<?php
	$arr = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", 
		  "Saturday", "Sunday"];
	
	$count = count($arr);
	echo "The array has $count elements <br>\n";
	for ($i = 0; $i < $count; $i++){
	 echo "$arr[$i] <br>\n"; 
	}
	?> 
</body>
</html>
