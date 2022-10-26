<?php

session_start();

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 'true') {
    header('location: homepage.php');
}

if (
    isset($_POST['email']) && 
    isset($_POST['password']) &&
    $_POST['email'] == 'admin@admin.fr' &&
    $_POST['password'] == 'admin'
) {
    $_SESSION['loggedIn'] = 'true';
    header('location: homepage.php');
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
    <form method="post">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Log in">
    </form>
</body>
</html>