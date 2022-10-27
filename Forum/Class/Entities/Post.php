<?php

namespace Entities;

class Post {
    protected $id;
    protected $subject;
    protected $content;
    protected $topic;
    protected $author;

    function getId(): Int
    {
        return $this->id;
    }

    function getTopic()
    {
        return $this->topic;
    }

    function setTopic(Topic $topic): Void
    {
        $this->topic = $topic;
    }

    function getSubject(): String
    {
        return $this->subject;
    }

    function getContent(): String
    {
        return $this->content;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function setAuthor(User $user): Void
    {
        $this->author = $user;
    }
}