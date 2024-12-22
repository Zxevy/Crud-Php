<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "Tester";

$connect = mysqli_connect($host,$user,$password,$db);
if (!$connect) {
    die("Connection Error :".mysqli_connect_error());
}
?>
