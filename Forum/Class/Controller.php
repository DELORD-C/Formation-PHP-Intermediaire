<?php

class Controller {
    private $renderer;
    private $auth;
    private $orm;

    function __construct()
    {
        session_start();
        //On stocke un objet renderer dans l'attribut renderer pour pouvoir y accéder facilement
        $this->orm = new ORM();
        $this->renderer = new Renderer($this->orm);
        $this->auth = new Auth($this->orm);
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
        $this->auth->redirectUnlessLoggedIn();
        $this->renderer->render('homepage');
    }

    function topic (): Void
    {
        $this->auth->redirectUnlessLoggedIn();
        $this->renderer->render('topic');
    }

    function post (): Void
    {
        $this->auth->redirectUnlessLoggedIn();
        $this->renderer->render('post');
    }

    function logout (): Void
    {
        session_destroy();
        header('location: index.php');
    }
}