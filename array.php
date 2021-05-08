<?php
$namePage="array in php";

?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?echo$namePage;?></title>
</head>
<body>
   <?php 
   //code php array
    $array1=array(1,2,4,7,"ann",);
    ?>
    <!--print array full-->
    <h2>"print array full"<?echo print_r($array1);?></h2>
     

    <!--print item of array -->
    <h3>"print item[1] of array"<?
        echo $array1[1]?></h3>
    <h3>"print item[0] of array"<?
        echo $array1[0]?></h3>
    <h3>"print item[3] of array"<?
        echo $array1[3]?></h3>
    
    <!--change item of array-->
    <?php
    //change item of array
    $array1[1]="change yes"
    ?>
    <!--print array full-->
    <h2>"print array full"<?echo print_r($array1);?></h2>
    <p>"change item[1] of array"
    <?php echo $array1[1]?>
    </p>
    <!--array in array-->
    <?php
    $array1[]=array("abbas","hussin","alkabbi")
    
    ?>
    <!--print array full-->
    <h2>"print array full"<?echo print_r($array1);?></h2>
    <!--praint array of  array-->
    <p>"praint array of  array"<?php echo print_r($array1[5])?></p>
</body>
</html>
