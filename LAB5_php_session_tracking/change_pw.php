<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){
    $cookie_name = $_COOKIE['name'];
    $cookie_password = $_COOKIE['password'];
    
}else{
    header('location: login.php');
}


if(isset($_REQUEST['submit'])){

    $error_message = '';

    $current_password = $_REQUEST['current_password'];
    $new_password = $_REQUEST['new_password'];
    $retype_password = $_REQUEST['retype_password'];

    if($current_password == ''){
        $error_message .= "Your must enter Current Password! <br>";
    }
    if($new_password == ''){
        $error_message .= "Your must fill New Password! <br>";
    }
    if($retype_password == ''){
        $error_message .= "Your must fill Retype Password! <br>";
    }


    if ($current_password !== '' && $new_password !== '' && $retype_password !== '' && $current_password == $cookie_password) {

        setcookie('password', $new_password, time() + (86400 * 30), "/");

        header("location: logout.php");
    }else{
        echo "Wrong Current Password!";
    }
 }

?>

<html lang="en">
<head>
    <title>Change Password</title>
</head>
<body>
    <table align="center" border="1" style="border-collapse: collapse;" width="50%">
        <tr>
            <td><h2>&nbsp;X Company</h2></td>
            <td align="right">
                <a href="view_profile.php">"username"</a> | <a href="login.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td valign="top" height="300px" width="300">
                <h3>Account</h3>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="view_profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="profile_picture.php">Change Profile Picture</a></li>
                    <li><a href="change_pw.php">Change password</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </td>
            <td colspan="2">
                <fieldset>
                    <legend>CHANGE PASSWORD</legend>
                    <table align="left" style="border-collapse: collapse; height: 50%;" width="50%">
                        <tr>
                            <td>Current Password:</td>
                            <td><input type="text" id="cpassword" name="cpassword" required></td>
                        </tr>
                        <tr>
                            <td><font color="green">New Password:</font></td>
                            <td><input type="password" id="npass" name="npass" required></td>
                        </tr>
                        <tr>
                            <td><font color="red">Retype New Password:</font></td>
                            <td><input type="password" id="repass" name="repass" required></td>
                        </tr>
                    </table>
                </fieldset>
                <input type="submit" value="Submit">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">Copyright © 2023</td>
        </tr>
    </table>
</body>
</html>
