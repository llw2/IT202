<?php
//ignore this, it's just for output formatting
function newline(){
  //attempt to create newline for command line or browser, can ignore
  echo "<br>\n";
}

$a = 1.0;
$b = 0.0;
echo "a: ".$a."b: ".$b;
newline();

//this is a for loop, it iterates the code between the braces N number of
// times we'll cover it in more detail in another section
for($i = 0; $i < 10; $i++){
$b += 0.1; //shorthand to add 0.1 to the variable;
//echo var_exprot($b, true) . newline();
}
echo "a and b are equal: " . var_export($a == $b,true);
//the result should be false
newline();


//lets check out variables (note this is a bit of a gotacha)
echo '$a =';
var_dump($a);
newline();
echo '$b = ';
var_dump($b);
//here's a better view since var_dump may give a summary of the data instead of
// the precise value
newline();

echo '$a = ' . var_export($a, true);
newline();
echo '$b = ' . var_export($b, true);//this shows the true value
//notice they're not equal even though mentally the math works. Due to
// floating point precision it's unlikely you'll get the expected output.
?>
