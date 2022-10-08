<!DOCTYPE html>
<html>
<body>
	<?php
	//runs at least once
	$a = 0;
	do{
	  echo "a is greater than zero <br>\n";
	}
	while($a > 0);
	exit();
	
	echo "<br>\n<br>\n";
	$a = 10;
	do {
	  echo "a is $a <br>\n";
	  $a--;
	}
	while($a > 0);
	?>
</body>
</html>
