<?php
$newline = "<br>";  //use \n if display to the console

//lossely typed lets us change the type of the container 
//holding our data by pusing in a new data type
$var = 1;       //int
var_dump($var);
echo $newline;

$var = 1.0;       //float
var_dump($var);
echo $newline;

$var = [1];       //array
var_dump($var);
echo $newline;

$var = true;       //boolean
var_dump($var);
echo $newline;
?>