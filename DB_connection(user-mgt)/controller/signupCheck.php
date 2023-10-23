<?php
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];

    if($username == "" || $password == "" || $email == "" ){
        echo "null username/password/email!";
    }else{
        $user = [
                    'username'=> $username, 
                    'password'=>$password, 
                    'email'=>$email
                ];
        $con = mysqli_connect('127.0.0.1', 'root', '', 'check');
        $sql = "insert into reg_table (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($con, $sql);
        //$count = mysqli_num_rows($result);

        $_SESSION['user'] = $user;
        header('location: ../view/login.php');
    }
?>