<?php

namespace Entities;

class Comment {
    protected $content;

    function __construct(String $content)
    {
        $this->content = $content;
    }
}