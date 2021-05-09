<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    echo"loops php";
    ?></title>
</head>
<body>
<select >



<?php
//<option value="">$i </option>
for($i=0;$i<=100;$i++){
    echo"<option value='{$i}' >$i</option>";
}

?>
</select>

</body>
</html>