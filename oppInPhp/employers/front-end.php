<?php
require 'employers.inc';
$emp1= new employer();
$emp1->Name='abbas';
$emp1->Age=18;
$emp1->DateBirth=2003;
echo "<h1>Name: {$emp1->Name}</h1>";
echo "<h1>Age: {$emp1->Age}</h1>";
echo "<h1>DateBirth: {$emp1->DateBirth}</h1>";
?>
