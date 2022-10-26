<?php

class Auth {
    function isLoggedIn(): Bool
    {
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 'true') {
            return true;
        }
        return false;
    }

    function checkLoginPost(): Bool
    {
        if (
            isset($_POST['email']) && 
            isset($_POST['password']) &&
            $_POST['email'] == 'admin@admin.fr' &&
            $_POST['password'] == 'admin'
        ) {
            $_SESSION['loggedIn'] = 'true';
            return true;
        }
        return false;
    }
}