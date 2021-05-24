<?php


session_start();
$userI = "root";
$pass = "my-secret-pw";
$db = "productionproj";
$hostname="127.0.0.1";
$port=3306;

$con = new mysqli ($hostname, $userI, $pass, $db, $port);
echo $con->host_info . "\n";

if ($con->connect_error) {
    echo "Not connected, error: " . $con->connect_error;
}
else {
    echo "Connected.";
}

?>
