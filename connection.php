<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "indonesia";

$con = mysqli_connect($host, $user, $password, $db);
if (!$con) {
    die("Connection Failed :" . mysqli_connect_error());
}
?>