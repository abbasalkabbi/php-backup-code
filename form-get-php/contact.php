<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
    <h1>this is contact page</h1>
    <?php
    
echo "<h1>your name  :{$_GET['name']}</h1>";
echo "<h1> your Age :{$_GET['age']}</h1>";
echo "<h1>your Email  :{$_GET['email']}</h1>";
echo "<h1> your PassWord :{$_GET['password']}</h1>";
echo "<h1>you are   :{$_GET['gender']}</h1>";

    ?>
</body>
</html>