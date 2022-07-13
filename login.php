<?php
session_start();
if( isset($_POST["admin"]) ){
    header("Location: indexi.php");
    exit;
}
if( isset($_POST["submit"]) ){
    if($_POST["username"]=="admin"){
        echo "admin";
        if($_POST["password"]=="admin"){
            echo "pass";
            $_SESSION["admin"] == true;
            header("Location: admin.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Login Admin</h1>

    <?php if(isset($error)) : ?>

    <p>username / password salah</p>

    <?php endif; ?>
    <form action="" method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username" placeholder="Username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="submit" value="Login">

    </form>
</body>
</html>