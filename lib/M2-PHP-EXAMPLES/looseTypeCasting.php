<?php
	//ignore this, it's just for output formatting
	function newline(){
	  //attempt to create newline for command line or browser, can ignore
	  echo "<br>\n";
	}
	//Loosely typed lets us change the type of the container holding our data by 
	// pushing in a new data type
	//int
	$var = 1;
	var_dump($var);
	newline();
	//float
	$var = 1.0;
	var_dump($var);
	newline();
	//array
	$var = [1];
	var_dump($var);
	newline();
	//boolean
	$var = true;
	var_dump($var);
	?>
