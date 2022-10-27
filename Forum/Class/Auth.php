<?php

class Auth {
    protected $orm;
    function __construct(ORM $orm)
    {
        $this->orm = $orm;    
    }

    function isLoggedIn(): Bool
    {
        if (isset($_SESSION['loggedIn'])) {
            return true;
        }
        return false;
    }

    function redirectUnlessLoggedIn()
    {
        if (isset($_SESSION['loggedIn'])) {
            return true;
        }
        header('location: index.php');
    }

    function checkLoginPost(): Bool
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $id = $this->orm->getUserByEmailAndPassword($_POST['email'], $_POST['password']);
            if ($id) {
                $_SESSION['loggedIn'] = $id['id'];
                return true;
            }
        }
        return false;
    }
}