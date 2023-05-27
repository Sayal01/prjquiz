<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post" name="loginForm" onsubmit="return validateForm()">

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" >
        </div>
        
        <input type="submit" value="Login" name="submit">
    </form>

    <script>
        function validateForm() {
            var email = document.forms["loginForm"]["email"].value;
            var password = document.forms["loginForm"]["password"].value;

            if (email.trim() === "") {
                alert("Please enter an email.");
                return false;
            } else if (!validateEmail(email)) {
                alert("Please enter a valid email address.");
                return false;
            } else if (password.trim() === "") {
                alert("Please enter a password.");
                return false;
            } else if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            }

            return true;
        }

        function validateEmail(email) {
            // Regular expression to validate email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    </script>
</body>
</html>
<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $str = "SELECT email FROM user WHERE (email='$email' AND password='$password') OR (userName='$email'  AND password='$password')";
        $result = mysqli_query($con, $str);

        if (mysqli_num_rows($result) > 0) {
            header('Location: index.php');
            exit();
        } else {
            echo "Incorrect email or password";
        }
    }
}
?>
