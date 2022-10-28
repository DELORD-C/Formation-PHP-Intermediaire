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

    function newPost (String $content, String $subject, String $topicName) {
        $author = $_SESSION['loggedIn'];
        $topic = $this->getTopic($topicName);
        if ($topic) {
            $topicId = $topic->getId();
        }
        else {
            $topicId = $this->newTopic($topicName);
        }
        $query = $this->pdo->prepare("INSERT INTO posts (topic, subject, content, author) VALUES (:topic, :subject, :content, :author)");
        $query->bindParam('topic', $topicId);
        $query->bindParam('subject', $subject);
        $query->bindParam('content', $content);
        $query->bindParam('author', $author);
        $query->execute();
    }

    function newTopic (String $topicName): Int
    {
        $query = $this->pdo->prepare("INSERT INTO topics (name) VALUES (:name)");
        $query->bindParam('name', $topicName);
        $query->execute();
        return $this->pdo->lastInsertId();
    }

    function newComment (String $content, $author, $post): Int
    {
        $query = $this->pdo->prepare("INSERT INTO comments (content, author, post) VALUES (:content, :author, :post)");
        $query->bindParam('content', $content);
        $query->bindParam('author', $author);
        $query->bindParam('post', $post);
        $query->execute();
        return $this->pdo->lastInsertId();
    }

    function getComments (?Post $post)
    {
        if ($post) {
            $query = $this->pdo->prepare("SELECT * FROM comments WHERE post = :post");
            $idPost = $post->getId();
            $query->bindParam('post', $idPost);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_CLASS, 'Entities\Comment');
            if ($results) {
                foreach ($results as $comment) {
                    $comment->setAuthor($this->getUserById($comment->getAuthor()));
                    $comment->setNbLikes(count($this->getLikes($comment)));
                }
            }
            return $results;
        }
        else {
            $query = $this->pdo->prepare("SELECT * FROM comments");
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_CLASS, 'Entities\Comment');
            if ($results) {
                foreach ($results as $comment) {
                    $comment->setAuthor($this->getUserById($comment->getAuthor()));
                }
            }
            return $results;
        }
    }

    function getLikes(Comment $comment) {
        $idComment = $comment->getId();
        $query = $this->pdo->prepare("SELECT * FROM likes WHERE comment = :comment");
        $query->bindParam('comment', $idComment);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Entities\Like');
    }

    function newLike($comment, $author) {
        $query = $this->pdo->prepare("SELECT id FROM likes WHERE comment = :comment AND author = :author");
        $query->bindParam('comment', $comment);
        $query->bindParam('author', $author);
        $query->execute();
        $test = $query->fetch();

        if (!$test) {
            $query = $this->pdo->prepare("INSERT INTO likes (author, comment) VALUES (:author, :comment)");
            $query->bindParam('comment', $comment);
            $query->bindParam('author', $author);
            $query->execute();
        }
        else {
            $query = $this->pdo->prepare("DELETE FROM likes WHERE author = :author AND comment = :comment)");
            $query->bindParam('comment', $comment);
            $query->bindParam('author', $author);
            $query->execute();
        }
    }

    function getLikeByAuthorAndComment(Int $author, Int $comment) {
        $query = $this->pdo->prepare("SELECT * FROM likes WHERE author = :author AND comment = :comment");
        $query->bindParam('comment', $comment);
        $query->bindParam('author', $author);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, 'Entities\User');
        return $query->fetch();
    }
}