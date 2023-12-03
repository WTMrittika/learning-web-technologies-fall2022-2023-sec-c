<?php
    include_once('../controller/loginCheck.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        form {
            width: 400px;
        }
    </style>
</head>

<body>
    <form action="" method="post" onsubmit="return validate()">
        <label><center><h2>Login</h2></center></label><hr>
        Email: <input type="text" name="email" id="email" required>
        <br />
        Password: <input type="password" name="password" id="password" required>
        <br />
        <input type="submit" name="submit" id="submit" value="Login"><br />
        <button>
            <a href="register.php">Go to Register</a></button><br />
        <p id="error" style="color: red;"></p>
    </form>
    <script src="../assets/JS/login.js"></script>
</body>

</html>
