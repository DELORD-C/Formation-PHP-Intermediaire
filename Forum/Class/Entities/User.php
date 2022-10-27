<?php

namespace Entities;

class User {
    protected $id;
    protected $email;
    protected $password;

    function getId (): String
    {
        return $this->email;
    }

    function getEmail (): String
    {
        return $this->email;
    }

    function getPassword (): String
    {
        return $this->password;
    }
}