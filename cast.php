<?php
    $namePage="cast varibles";
    ?>

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
       $var1="1 abbas";
       echo "<h1> var1  is :". $var1 ."</h1>";
       echo "<h1> var1  is :". gettype($var1) ."</h1>";

    ?>
    <br>
    <?php
       $var1=$var1 +5;
       echo "<h1> var1  is :". $var1 ."</h1>";
       echo "<h1> var1  is :". gettype($var1) ."</h1>";
       
    ?>
    <?php
       $var2=22;
       // casting to string
       $var2=(string)$var2;
       echo "<h1> var1  is :". $var2 ."</h1>";
       echo "<h1> var1  is :". gettype($var2) ."</h1>";
       

       //casting to integer
       $var2=(integer)$var2;
       echo "<h1> var1  is :". $var2 ."</h1>";
       echo "<h1> var1  is :". gettype($var2) ."</h1>";
       
       
    ?>
</body>
</html>