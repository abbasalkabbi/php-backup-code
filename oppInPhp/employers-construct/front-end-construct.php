<?php
require 'employers-construct.inc';
/*$emp1= new employer();
$emp1->Name='abbas';
$emp1->Age=18;
$emp1->DateBirth=2003;
echo "<h1>Name: {$emp1->Name}</h1>";
echo "<h1>Age: {$emp1->Age}</h1>";
echo "<h1>DateBirth: {$emp1->DateBirth}</h1>";
*/

$emp2= new employer('hussin',18,'2003-8-31');

echo "<h1>Name: {$emp2->Name}</h1>";
echo "<h1>Age: {$emp2->Age}</h1>";
echo "<h1>DateBirth: {$emp2->DateBirth}</h1>";
?>