<?php

use Entities\Topic;
use Entities\Comment;
use Entities\Post;

class DataGenerator {
    function getTopics (): Array
    {
        return [
            new Topic('News'),
            new Topic('Events'),
            new Topic('Other')
        ];
    }

    function getPosts (): Array
    {
        return [
            new Post('Global Warming : Bad News', "This is the post content", new Topic('News'), 'admin'),
            new Post('New Singer Talent', "This is the post content", new Topic('News'), 'admin'),
            new Post('Chocolate Day', "This is the post content", new Topic('Events'), 'admin')
        ]; 
    }

    function getComments (): Array
    {
        return [
            new Comment('Super !'),
            new Comment('Wow !'),
            new Comment('Incredible !')
        ]; 
    }
}