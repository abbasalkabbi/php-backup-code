<?php

require('ClassCar.inc');

$mycar1=new car();
    $mycar1->Color="red";
    $mycar1->Models="kia";
    $mycar1->Year=2010;
    echo " <h1>model :$mycar1->Models </h1>";
    echo " <h1>color is :$mycar1->Color  </h1>";
    echo " <h1>year :$mycar1->Year  </h1>";
    echo print_r($mycar1->GetOwners());

?>
<?php



$mycar2=new car();
    $mycar2->Color="blue";
    $mycar2->Models="motor";
    $mycar2->Year=2022;
    echo " <h1>model :$mycar2->Models </h1>";
    echo " <h1>color is :$mycar2->Color  </h1>";
    echo " <h1>year :$mycar2->Year  </h1>";
    echo print_r($mycar2->GetOwners());

?>