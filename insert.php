<?php
include("conn.php");
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$dbdate = $_POST["dbdate"];
$email = $_POST["email"];
$pass = $_POST["pass"];


$qry = "INSERT INTO user_registration (fname,lname,dob,email,password) VALUES ('$fname','$lname','$dbdate','$email','$pass')";
$result = mysqli_query($con, $qry);
if ($result == true) {
    // echo "<script>alert('Record Inserted');</script>";
    header("Location:display.php");
} else

    die("Error" . mysqli_error($con));


