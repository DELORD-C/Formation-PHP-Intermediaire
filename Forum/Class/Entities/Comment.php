<?php

namespace Entities;

class Comment {
    protected $id;
    protected $content;
    protected $author;
    protected $post;
    protected $likes;

    function getLikes(): Array
    {
        return $this->likes;
    }

    function setLikes(?Array $likes) {
        $this->likes = $likes;
    }

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