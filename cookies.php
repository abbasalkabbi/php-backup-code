<?php
$name="uesrid";
$value="123456";
$exp=time()+(60*60);
$id="id";
$cid="12";

setcookie($name,$value,$exp);
setcookie($id,$cid,$exp);
if(isset($_COOKIE['userid'])){
echo print_r($_COOKIE);
}
?>