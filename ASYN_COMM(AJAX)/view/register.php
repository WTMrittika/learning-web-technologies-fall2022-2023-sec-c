<?php
    include_once('../controller/registerCheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        form {
            width: 400px;
        }

        fieldset {
            padding: 10px;
        }
    </style>
</head>
<body>
    <form action="" method="post" onsubmit="return validate()">
        <fieldset align="center">
            <label><center><h2>Register</h2></center></label><hr>
            <label for="name">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="name" id="name" required><br><br>
            <label for="phone">Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="phone" id="phone" required><br><br>
            <label for="email">Email ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="email" name="email" id="email" onblur="checkMail()" required><br>
            <p id="emailerror" style="color: red"></p><br>
            <label for="password">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="password" name="password" id="password" required><br><br>
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" name="confirmPassword" id="confirmPassword" required><br><br>
            <!-- <p style="color: red;"> <?php //echo $error_message;?></p> -->
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Reset"><hr>
        </fieldset>
    </form>
    <script src="../assets/JS/register.js"></script>
</body>
</html>
