<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    echo"condation php"
    ?></title>
</head>
<body>
<!--if condation single -->
<h1>
if condation single
</h1>
<h1>
<?php
       $var1=5;
       $var2=9;
                if($var1>$var2)
                {
                                echo"var1 is :".$var1." bugger from var2 is :".$var2;
                }
                else
                {
                          echo"var2 is :".$var2." bugger from var1 is :".$var1;
                }
  
   ?> 
</h1>
<!--if condation multes -->  
<h1>
if condation multes
</h1>
<h2>

<?php
$minv=1;
$maxv=10;
$input=3;


//if condation 
// && means and
if(  ($input>=$minv)&&($input<=$maxv)         ){
    echo"input is in the range";
}
?>
</h2>

<h2>

<?php
$v1=5;
//if condation 
// || means or
if(  ($v1==1)||($v1==5) ){
    echo"one of condation is true";
}
?>
</h2>
</body>
</html>