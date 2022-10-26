<?php

namespace Entities;

class Topic {
    protected $name;
    function __construct(String $name)
    {
        $this->name = $name;
    }

    function getName(): String
    {
        return $this->name;
    }
}