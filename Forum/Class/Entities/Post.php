<?php

namespace Entities;

class Post {
    protected $subject;
    protected $content;
    protected $topic;
    protected $author;

    function __construct(String $subject, String $content, Topic $topic, String $author)
    {
        $this->subject = $subject;
        $this->content = $content;
        $this->topic = $topic;
        $this->author = $author;
    }
}