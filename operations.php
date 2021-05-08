<?php
$num1=10;
$num2=5;

echo"num1 :".$num1."<br>";
echo"num2 :".$num2."<br>";
echo "<h1> sum (+)".($num1+$num2)."<h1/>";
echo "<h1> sum (*)".($num1*$num2)."<h1/>";
echo "<h1> sum (/)".($num1/$num2)."<h1/>";
/** (* and /)before (+ and -)  */
echo "<h1> sum (sum operations with 3 num)".($num1+$num2*10)."<h1/>";

/** (()) before anything */
echo "<h1> sum (sum operations with 3 num and ())".(($num1+$num2)*10)."<h1/>";

?>