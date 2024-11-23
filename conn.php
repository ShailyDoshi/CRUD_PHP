<?php
$host = "localhost";
$username = "root";
$password = "root";
$db = "user_info";

$con = mysqli_connect($host, $username, $password, $db);
if (!$con) {
    die("Not connected" . mysqli_connect_error());
}
// echo "Successfully";
?>