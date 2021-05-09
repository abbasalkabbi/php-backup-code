<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>front end</title>
</head>
<body>
    <style>
    *{
        text-align: center;
    }
    </style>
    <form action="front.php" method="get">
    <h1>Number1<input type="number" name="num1"></h1>
    <h1>Number2<input type="number" name="num2"></h1>
    <h1><input type="radio" name="op" value="+">+
        <input type="radio" name="op" value="-">-
        <input type="radio" name="op" value="/">/
        <input type="radio" name="op" value="*">*
        </h1>
    <input type="submit" value="submit">
    </form>
<?php
require_once("./op.php");

$num1=$_GET['num1'];
$num2=$_GET['num2'];
$operation=$_GET['op'];
if($operation=="+"){
    sum($num1,$num2);
}elseif($operation=="-"){
    sub($num1,$num2);
}elseif($operation=="/"){
    div($num1,$num2);
}elseif($operation=="*"){
    mul($num1,$num2);
}

?>
    
</body>
</html>