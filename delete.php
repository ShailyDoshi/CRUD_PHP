<?php
include("conn.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "DELETE FROM user_registration WHERE id = $id";
    if (mysqli_query($con, $sql)) {
        header("Location: display.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}
?>