<?php

class Controller {
    private $renderer;
    private $auth;

    function __construct()
    {
        session_start();
        //On stocke un objet renderer dans l'attribut renderer pour pouvoir y accéder facilement
        $this->renderer = new Renderer();
        $this->auth = new Auth();
    }

    function login (): Void
    {
        if ($this->auth->isLoggedIn()) {
            header('location: homepage.php');
        }
        else if ($this->auth->checkLoginPost()) {
            header('location: homepage.php');
        }
        else {
            $this->renderer->render('login');
        }
    }

    function homepage (): Void
    {
        if ($this->auth->isLoggedIn()) {
            $this->renderer->render('homepage');
        }
        else {
            header('location: index.php');
        }
    }

    function logout (): Void
    {
        session_destroy();
        header('location: index.php');
    }
}