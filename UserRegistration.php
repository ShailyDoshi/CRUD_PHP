<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        #container {
            box-shadow: 3px 2px 10px 6px rgb(161, 202, 202);
            margin-top: 150px;
            margin-left: 400px;
            border: solid 1px;
            text-align: center;
            width: 700px;
            height: auto;
            padding-bottom: 20px;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <form method="post" action="insert.php" onsubmit="return validateForm()">
        <div>
            <h1 style="background-color: cadetblue; text-align: center; color: white;">Please Enter Details Here</h1>
        </div>
        <div id="container">
            <div style="margin-top: 5%;">
                <label style="font-size: larger;">First Name:</label>
                <input style="margin-left: 4%; width: 40%; margin-bottom: 4%;" type="text" name="fname" id="fname"
                    required />
                <span class="error" id="fnameError"></span>
            </div>
            <div>
                <label style="font-size: larger;">Last Name:</label>
                <input style="margin-left: 4%; width: 40%; margin-bottom: 4%;" type="text" name="lname" id="lname"
                    required />
                <span class="error" id="lnameError"></span>
            </div>
            <div>
                <label style="font-size: larger;">Date Of Birth:</label>
                <input style="margin-left: 1%; width: 40%; margin-bottom: 4%;" type="date" name="dbdate" id="dbdate"
                    required />
                <span class="error" id="dobError"></span>
            </div>
            <div>
                <label style="font-size: larger;">Email:</label>
                <input style="margin-left: 10%; width: 40%; margin-bottom: 4%;" type="email" name="email" id="email"
                    required />
            </div>
            <div>
                <label style="font-size: larger;">Password:</label>
                <input style="margin-left: 7%; width: 40%; margin-bottom: 4%;" type="password" name="pass" id="pass" />
                <span class="error" id="passwordError"></span>
            </div>
            <div>
                <button style="margin-bottom: 2%; font-size: large;" name="btnsub" id="btnsub">Submit</button>
                <a href="display.php">Display</a>
            </div>
        </div>
    </form>

    <script>
        function validateForm() {
            const fname = document.getElementById('fname').value;
            const lname = document.getElementById('lname').value;
            const password = document.getElementById('pass').value;
            const dob = document.getElementById('dbdate').value;

            const fnameError = document.getElementById('fnameError');
            const lnameError = document.getElementById('lnameError');
            const passwordError = document.getElementById('passwordError');
            const dobError = document.getElementById('dobError');

            let isValid = true;


            fnameError.textContent = '';
            lnameError.textContent = '';
            passwordError.textContent = '';
            dobError.textContent = '';



            if (/\d/.test(fname)) {
                fnameError.textContent = "First Name must not contain numbers.";
                isValid = false;
            }


            if (/\d/.test(lname)) {
                lnameError.textContent = "Last Name must not contain numbers.";
                isValid = false;
            }

            if (!dob) {
                // document.write($dob);

                dobError.textContent = "Date of Birth is required.";
                isValid = false;
            } else {
                // alert(dob)
                const dobDate = new Date(dob);
                const today = new Date();
                if (dobDate > today) {
                    dobError.textContent = "Date of Birth cannot be in the future.";
                    isValid = false;
                }
            }

            if (password.length < 8) {
                passwordError.textContent = "Password must be at least 8 characters long.";
                isValid = false;
            } else if (!/[0-9]/.test(password)) {
                passwordError.textContent = "Password must contain at least one number.";
                isValid = false;
            } else if (!/[\^£$%&*()}{@#~?><>,|=_+¬-]/.test(password)) {
                passwordError.textContent = "Password must contain at least one special character.";
                isValid = false;
            }

            return isValid;
        }
    </script>
</body>

</html>