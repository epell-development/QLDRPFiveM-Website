<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$file = file_get_contents('http://join.qldrp.com:30120/dynamic.json');
echo $file;
?>
