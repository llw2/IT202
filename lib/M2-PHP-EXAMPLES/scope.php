<?php
$newline = "<br>";
$message = "hello world".$newline; //global scope

//this section defines a function
/*
function test1(){
  echo "test1() echos global message variable: $message" ;
  echo $newline;
}
test1(); //generates an error because $message is not defined

function test2(){  //this is a local scope variable
  $message = "Hello world from inside test2()<br>";
  echo "test2()local message: $message";
}
test2(); //output should be "Hello world from inside test2(); but

// we don't have access to the local variable will result in just "hello world"

echo "Global message after test2(): $message";


//However if we do the following, both should output the same text
function test3(){
  global $message;
  echo "<br>\ntest3() global message: $message";
  $message = "Hello world overridden from local<br>\n";
  echo "test3() local message: $message";
}
test3();
echo "Global message after test3(): $message";


//You can pass information via global variable but a usually safer way is
//to pass parameters
function test4($message){
  echo "<br>\nMy parameter variable inside test4(): $message";
  $message = "Hello world overridden from parameter<br>\n";
  echo "My parameter variable inside test4(): $message";
}
test4($message);
echo "My global variable outside after test4(): $message <br>\n";

*/
//finally lets count with static
function increment1(){
  static $count = 0;
  echo "Next from increment1() using static count: $count<br>\n";
  $count++;
}
Increment1();
Increment1();
Increment1();
Increment1();


//echo "Attempt access of static outside its scope: $count<br>\n<br>\n ";
Increment1();
Increment1();

 

$count = 0;
function increment3(){
  global $count;
  echo "Next from Increment3() using global count: $count<br>\n";
  $count++;
}
Increment3();
Increment3();
Increment1();
Increment1();
Increment3();
Increment3();
