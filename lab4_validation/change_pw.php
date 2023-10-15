<?php
if (isset($_POST['submit'])) {
    $error_messages = [];

    $cpassword = $_POST['cpassword'];
    $npass= $_POST['npass'];
    $repass = $_POST['repass'];

    // Validation rules
    if ($npass=== $cpassword) {
        $error_messages[] = "New Password should not be the same as the Current Password.";
    }

    if ($npass!== $repass) {
        $error_messages[] = "Retyped Password should be same as the New password.";
    }

    if (empty($error_messages)) {
        echo "Password changed successfully!";
    } else {
        // Display error messages in black color
        foreach ($error_messages as $error_message) {
            echo '<font color="black">' . $error_message . '</font><br>';
        }
    }
}
?>

<html lang="en">
<head>
    <title>CHANGE PASSWORD</title>
</head>
<body>
    <table align="center" style="border-collapse: collapse;" width="50%">
        <tr>
            <td colspan="2">
                <form method="post" action="#">
                <fieldset>
                    <legend>CHANGE PASSWORD</legend>
                    <table align="left" style="border-collapse: collapse; height: 50%;" width="50%">
                        <tr>
                            <td>Current Password</td>
                            <td>: <input type="password" id="cpassword" name="cpassword" required></td>
                        </tr>
                        <tr>
                            <td><font color="green">New Password:</font></td>
                            <td>: <input type="password" id="npass" name="npass" required></td>
                        </tr>
                        <tr>
                            <td><font color="red">Retype New Password:</font></td>
                            <td>: <input type="password" id="repass" name="repass" required></td>
                        </tr>
                    </table>
                </fieldset>
                <input type="submit" value="Submit" name="submit">
                </form>
                <?php
                if (isset($error_message)) {
                    echo "<p>$error_message</p>";
                }
                ?>
            </td>
        </tr>
        <tr>
        </tr>
    </table>
</body>
</html>
