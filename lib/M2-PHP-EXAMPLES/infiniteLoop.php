<?php
	//this just uses the "true" constant to prevent the loop from ending
	while(true){
	 //runs forever. Can only be stopped by doing a control/c 
	}
	
	//this creates an infinite loop by growing the array during each iteration
	$a = [0];
	for($i = 0; $i < count($a); $i++){
	    array_push($a, 0); 
	 }
	
	//missing components of the for loop will just make it run continuously
	for (;;) {
	    //runs forever
	}
	//there are many other ways we can fall into an infinite loop and most of the
// time they're by accident
?> 
