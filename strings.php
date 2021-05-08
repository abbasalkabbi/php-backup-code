<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strings</title>
</head>
<body>
    <?php
    //php code 
    $name="aBBas Al-kaabi";
    $text="                Baghdad is big city";
    ?>
    <!-- echo name-->
    <h1><?
    echo$name;
    ?></h1>

     <!-- upper case name-->
    <h1>'upper case' <?
    echo strtoupper($name);
    ?></h1>
  <!-- remove empty space-->
    <h3>'remove empty' <?
    echo trim($text);
    ?></h3>
     <!--replace text-->
    <h3>'replace text' <?
    echo str_replace("big","pretty",$text);
    ?></h3>
</body>
</html>