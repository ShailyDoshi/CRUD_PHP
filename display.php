<!DOCTYPE html>
<html>

<head>
    <title>
        Display
    </title>
</head>

<body>
    <a href="UserRegistration.php">Home</a>
    <?php
    include("conn.php");
    $sql1 = "select * from user_registration";
    if ($res1 = mysqli_query($con, $sql1)) {

        if (mysqli_num_rows($res1) > 0) {


            echo "<table border=2>";
            echo "<tr>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Date Of Birth</th>";
            echo "<th>Email</th>";


            echo "<th>Edit</th>";
            echo "<th>Delete</th>";

            echo "</tr>";

            while ($row = mysqli_fetch_assoc($res1)) {
                echo "<tr>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";


                echo "<td><a href='update_form.php?id=" . $row['id'] . "'>Edit</a></td>";
                echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";

                echo "</tr>";

            }
            echo "</table>";

        } else {
            echo "no record found";
        }
    }



    ?>

</body>

</html>