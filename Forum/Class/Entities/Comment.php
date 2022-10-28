<?php

namespace Entities;

class Comment {
    protected $id;
    protected $content;
    protected $author;
    protected $post;

    function getId() {
        return $this->id;
    }

    function getContent() {
        return $this->content;
    }

    function getAuthor() {
        return $this->author;
    }

    function getPost() {
        return $this->post;
    }

    function setAuthor ($author) {
        $this->author = $author;
    }
}