<?php $namePage="function-array";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $namePage;?></title>
</head>
<body>
    <?php 
       $array1=array(1,50,60,20,32,2,3,6,8,9,100);
     ?>
     <!--print  array function -->
     <h3>print  array function: <?php echo print_r($array1);?></h3>
     <!--max item of array function -->
     <h3>max item of array function: <?php echo max($array1);?></h3>
     <!--min item of array function -->
     <h3>max item of array function: <?php echo min($array1);?></h3>
     <!--count item in array function -->
     <h3>max item of array function: <?php echo count($array1);?></h3>
     <!--order sort item in array function -->
     <h3>sort  item of array function: <?php  sort($array1); echo print_r($array1) ?></h3>
     <!--rever sort item in array function -->
     <h3>rsort  item of array function: <?php  rsort($array1); echo print_r($array1) ?></h3>
      <!--is this  item in array function -->
      <h3>is this  item of array function: <?php echo in_array(100,$array1) ?></h3>
</body>
</html>