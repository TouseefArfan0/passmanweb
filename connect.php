<?php 


session_start();
$userI = "root";
$pass = "";
$db = "productionproj";

$con = new mysqli ('localhost', $userI, $pass, $db) or die("fail");

?>