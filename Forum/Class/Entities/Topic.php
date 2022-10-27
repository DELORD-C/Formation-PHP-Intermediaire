<?php

namespace Entities;

class Topic {
    protected $id;
    protected $name;

    function getId(): String
    {
        return $this->id;
    }

    function getName(): String
    {
        return $this->name;
    }
}