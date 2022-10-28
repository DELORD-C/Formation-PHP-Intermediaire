<?php

namespace Entities;

class Like {
    protected $id;
    protected $author;
    protected $comment;

    function getAuthor (): Int
    {
        return $this->author;
    }
}