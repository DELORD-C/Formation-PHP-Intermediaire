<?php

class Auth {
    protected $orm;
    function __construct(ORM $orm)
    {
        $this->orm = $orm;    
    }

    function isLoggedIn(): Bool
    {
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 'true') {
            return true;
        }
        return false;
    }

    function redirectUnlessLoggedIn()
    {
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 'true') {
            return true;
        }
        header('location: index.php');
    }

    function checkLoginPost(): Bool
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            if ($this->orm->getUserByEmailAndPassword($_POST['email'], $_POST['password'])) {
                $_SESSION['loggedIn'] = 'true';
                return true;
            }
        }
        return false;
    }
}