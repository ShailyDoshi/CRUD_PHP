<?php
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $id = $_POST['id'];
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $dbdate = trim($_POST['dbdate']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);

    $errors = [];


   
    if (empty($errors)) {
        $sql = "UPDATE  user_registration  SET
                fname = '$fname', 
                lname = '$lname', 
                dob = '$dbdate', 
                email = '$email', 
                password = '$pass' 
                WHERE id = $id";

        if (mysqli_query($con, $sql)) {
            echo "<p style='color:green;'>Record updated successfully.</p>";
            header("Location:display.php");
        } else {
            echo "<p style='color:red;'>Error updating record: " . mysqli_error($con) . "</p>";
        }
    } else {
      
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>