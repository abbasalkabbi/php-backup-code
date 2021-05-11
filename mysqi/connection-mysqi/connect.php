<?php

$dsn='mysql:host=localhost;dbname=phpmy';//date source name
$uesr='root';//here uesr
$pass='root';//here password

try{

$db= new PDO($dsn,$uesr,$pass);//start a new connection with PDO
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$q="INSERT INTO `log` (`id`, `name`) VALUES (NULL, 'العراق')";
$db->exec($q);
echo 'you are conntected';
}
catch(PDOException $e){
    echo "wrong" .$e->getMessage();//GET WHERE is erro
?>