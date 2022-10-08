<?php
//ignore this, it's just for output formatting
function newline(){
  //attempt to create newline for command line or browser, can ignore
  echo "\n";
}

//remember an integer can only be between these values 
//-2,147,483,648 and 2,147,483,647 on a 32 bit system
//-9223372036854775808 and 9223372036854775807 on a 64 bit system
$x = 1;
echo $x;
newline();//this would output 1

var_dump($x); //this shows both the data type of the variable and the value
newline();

//Let's see the importance of the bounds mentioned previously
$x = PHP_INT_MAX;//we'll use the magic variable to get the system's max int value since the example would vary
echo "<br>\nCurrent value of x $x";
newline();
var_dump($x);
newline();


$x += 50; //this is shorthand to add 50  same as long form: $x = $x + 50;
echo "<br>\nCurrent value of x $x";
newline();
var_dump($x);
newline();


$x -= 100; //this is shorthand to add 50  same as long form: $x = $x + 50;
echo "<br>\nCurrent value of x $x";
newline();
var_dump($x);
newline();

	
$k = 1; //create an integer
echo "<br>\nCurrent value of k $k";
newline();
var_dump($k);
newline();
$k = $x;
var_dump($k);
newline();


//everything should be good at this point, let's add 1
$x++; //this is shorthand for incremeting by 1 and only works for 1
echo "<br>\nCurrent value of x $x";
newline();
var_dump($x);
newline();
//you should notice something weird, precision does not show anything
?>
