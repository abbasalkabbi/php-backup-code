<?php
header('Content-Type: application/txt');// code for type fille
header('Content-Disposition: attachment; filename="file.txt"');//code for Disposition
readfile('file.txt');//code for where is file
?>