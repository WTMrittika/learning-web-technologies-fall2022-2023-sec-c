<?php 
    $email = $_REQUEST['email'];
    //echo $email;
?>
<html>
<head>
    <title>HTML "EMAIL"</title>
</head>
<body>
    <form method="post" action="#" enctype="">
        <fieldset style="width: 300px;">
        <legend>Email</legend>
        email: <input type="email" name="" value="<?php if(isset($email)){echo $email;} ?>" /> <br>
        <input type="button" value="i" title="hint:example@gmail.com">
    </fieldset>
    <input type="submit" name="" value="Submit" />
</form>
</body>
</html>