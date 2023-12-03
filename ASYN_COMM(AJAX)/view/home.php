<?php
    include("../controllers/homeControl.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>

<body>
    <h2>Welcome</h2>
    <p>Name: <?= $name ?></p>
    <p>Email: <?= $email ?></p>
    <p>Phone: <?= $phone ?></p>

    <script src="../assets/JS/login.js"></script>
</body>
</html>
