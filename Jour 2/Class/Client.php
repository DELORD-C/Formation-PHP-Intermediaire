<?php

class Client {
    protected $nom;
    protected $email;
    protected $pass;

    use Politesse;

    function __construct(String $nom, String $email, String $pass)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->pass = $pass;
    }
}