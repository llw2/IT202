<?php
	//ignore this, it's just for output formatting
	function newline(){
	  //attempt to create newline for command line or browser, can ignore
	  echo "<br>\n";
	}
	
	class Person{
	  //var here is a special case for classes, we'll get more into this in another
  // less for now it just defines a member level property so we can name our
	  // person/people
		var $name = "Unnamed";
	  function Person(){
	    //this is a constructor, we can do default initialization here
	  }
	  function getName(){
	    return $this->name;
	  }
	  function setName($name){
	   $this->name = $name; 
	  }
	}
	
	//ok lets create our first person
	$person = new Person();
	echo "Hello, " . $person->getName();
	newline();
	//looks like we forgot to name them, lets give them a name
	$person->setName("Phil");
	echo "Hello, " . $person->getName();
	newline();
	//much better
	//for objects instead of using the . operator to access properties and 
	// functions we need to use the arrow operator ->
	//also notice how we refer to local variable inside of the class. What's great
	// about classess is that you can now make an unlimited amount of objects out 
	// of them
	$person2 = new Person();
	$person2->setName("Bob");
	echo "Hello, " . $person2->getName() . " meet " . $person->getName();
	newline();
	newline();
	//lets dump the variables to see what they look like
	var_dump($person);
	newline();
	var_dump($person2);
	?>
