<?php
$newline = "<br>";      //use \n if printing to console
$message = "Hello World";   /* assigns a variable to a string value */
echo $newline;
$Message = "Goodbye";

echo $message;      //don't put spaces in your variable names!
echo $newline;      //does not do an automatic linefeed
echo $Message;
echo $newline;
echo"var_dump() output: ";
var_dump($message);
echo $newline;
echo"var_export() output: ";
var_export($message);
echo $newline;


echo "In Double Quotes the message: $message";   
echo $newline;
echo 'In Single Quotes the message: $message';   
echo $newline;



echo "Using concat to connect strings, the message: ".$message;
echo $newline;
echo "Concat string with string: ";
echo $message . $Message;
echo $newline;

$num = 5;
$Num = 10;
echo "num: $num";
echo $newline;
echo "Concat num with string: ";
echo $num . $message;
echo $newline;
echo "Add two num variables: ";
echo $num + $Num;
echo $newline;
echo "Concat two num variables: ";
echo $num . $Num;
echo $newline;

echo "Add constant(number) with string: ";
//echo 1 + $message;
echo $newline;
echo "Add num variable with string variable: ";
echo $num + $message;
echo $newline;

?>