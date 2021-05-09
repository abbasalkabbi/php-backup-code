<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    echo"function php"
    ?></title>
</head>
<body>
    <?php
    // function normal
    function sum($num1,$num2)
    {
      $sum=$num1+$num2;
      echo"sum:{$sum}</br>";
    }
     sum(10,22);
     sum(1033,333333333);
     sum(410,242);




     //fucntion 
     function f2($var1)
     {
        $r=($var1/2)*($var1+1);
       return $r;
     }
     $results=f2(4);
     echo"results:{$results}</br>";
    ?>
</body>
</html>