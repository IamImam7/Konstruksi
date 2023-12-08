<?php

$hostname = "localhost";
$user = "root";
$password = "";
$db_name = "db_pi";

$conn = mysqli_connect($hostname , $user, $password, $db_name);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}


?>