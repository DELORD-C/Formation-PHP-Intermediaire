<?php

use Entities\Topic;
use Entities\Post;
use Entities\Comment;
use Entities\User;

class ORM {
    protected $pdo;

    function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

    function getTopics (): Array
    {
        $query = $this->pdo->prepare('SELECT * FROM topics');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Entities\Topic');
    }

    function getTopic (String $name)
    {
        $query = $this->pdo->prepare("SELECT * FROM topics WHERE name = :name");
        $query->bindParam('name', $name);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, 'Entities\Topic');
        return $query->fetch();
    }

    function getTopicById (Int $id)
    {
        $query = $this->pdo->prepare("SELECT * FROM topics WHERE id = :id");
        $query->bindParam('id', $id);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, 'Entities\Topic');
        return $query->fetch();
    }

    function getPosts (?Topic $topic)
    {
        if ($topic) {
            $query = $this->pdo->prepare("SELECT * FROM posts WHERE topic = :idTopic");
            $idTopic = $topic->getId();
            $query->bindParam('idTopic', $idTopic);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_CLASS, 'Entities\Post');
        }
        else {
            $query = $this->pdo->prepare("SELECT * FROM posts");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_CLASS, 'Entities\Post');
        }
    }

    function getPost ($id)
    {
        $query = $this->pdo->prepare("SELECT * FROM posts WHERE id = :id");
        $query->bindParam('id', $id);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, 'Entities\Post');
        return $query->fetch();
    }

    function getComments (): Array
    {
        return $this->comments; 
    }

    function getUserByEmailAndPassword(String $email, String $password)
    {
        $query = $this->pdo->prepare("SELECT id FROM users WHERE email = :email AND password = :password");
        $query->bindParam('email', $email);
        $query->bindParam('password', $password);
        $query->execute();
        return $query->fetch();
    }

    function getUserById(Int $id)
    {
        $query = $this->pdo->prepare("SELECT email FROM users WHERE id = :id");
        $query->bindParam('id', $id);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, 'Entities\User');
        return $query->fetch();
    }
}