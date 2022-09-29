<!DOCTYPE html>
<html>
<body>
<?php
	$age = 18;
	/*
	switch($age){
		case 18:
			echo "You are 18 <br>\n ";
		case 21:
			echo "You are 21 <br>\n ";
			break;
	}
	exit();
*/
	echo "<br>\n<br>\n";
	switch($age){
		case 18:
			echo "You are 18 <br>\n ";
			break;
		case 21:
			echo "You are 21 <br>\n ";
			break;
	}
	

	echo "<br>\n<br>\n";
	$age = 17;
	switch($age){
		case 18:
		case 21:
			echo "You are 18 or 21 <br>\n ";
			break;
		default:
			echo "You are not 18 or 21 <br>\n ";
			break;
	}
?>
</body>
</html>
