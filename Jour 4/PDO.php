<?php

class User {
    protected $id;
    protected $email;
    protected $password;

    function getEmail(): String
    {
        return $this->email;
    }

    function getPassword(): String
    {
        return $this->password;
    }

    function getId(): String
    {
        return $this->id;
    }
}


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

    function getTopic(): Int
    {
        return $this->topic;
    }

    function getSubject(): String
    {
        return $this->subject;
    }

    function getContent(): String
    {
        return $this->content;
    }

    function getAuthor(): Int
    {
        return $this->author;
    }
}

$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');


// RECUPERATION TOUS LES users SOUS FORME DE CLASSE User
// $requete = $pdo->prepare("SELECT * FROM users");
// $requete->execute();
// $results = $requete->fetchAll(PDO::FETCH_CLASS, "User");

// RECUPERATION DE LA LIGNE users AVEC L'ID 3
// $id = 3;
// $requete = $pdo->prepare("SELECT * FROM users WHERE id = :id");
// $requete->bindParam('id', $id);
// $requete->execute();
// $requete->setFetchMode(PDO::FETCH_CLASS, 'User');
// $user = $requete->fetch();

// var_dump($user);



//INSERTION DE PLUSIEURS POSTS
// $posts = [
//     new Post(0, 'Global Warming : Bad News', "This is the post content", 1),
//     new Post(0, 'New Singer Talent', "This is the post content", 1),
//     new Post(1, 'Chocolate Day', "This is the post content", 1)
// ];
// foreach ($posts as $post) {
//     $topic = $post->getTopic();
//     $subject = $post->getsubject();
//     $content = $post->getContent();
//     $author = $post->getAuthor();
//     $requete = $pdo->prepare("INSERT INTO posts (topic, subject, content, author) VALUES (:topic, :subject, :content, :author)");
//     $requete->bindParam('topic', $topic);
//     $requete->bindParam('subject', $subject);
//     $requete->bindParam('content', $content);
//     $requete->bindParam('author', $author);
//     $requete->execute();
// }

// INSERTION DE DONNEE EN UTILISANT BINDPARAM
// $email = 'hacker@hacker.fr';
// $password = 'hacker';
// $requete = $pdo->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
// $requete->bindParam('email', $email);
// $requete->bindParam('password', $password);
// $requete->execute();

// RECUPERATION DE L'ID DE LA DERNIERE DONNEE INSEREE
// $id = $pdo->lastInsertId();

// var_dump($results);

// echo "<ul>";
// foreach ($results as $user) {
//     echo "
//         <li>" . $user->getId() . " | " . $user->getEmail() . " : " . $user->getPassword() . "</li>
//     ";
// }
// echo "</ul>";

//LIKE
// $search = '%singer%';
// $requete = $pdo->prepare("SELECT * FROM posts WHERE subject LIKE :search");
// $requete->bindParam(":search", $search);
// $requete->execute();
// $results = $requete->fetchAll(PDO::FETCH_CLASS, 'Post');
// var_dump($results);

// IN
// $ids = [1, 5, 8, 11, 12];
// $str = '';
// foreach ($ids as $id) {
//     $str .= '?, ';
// }
// $str = substr($str, 0, -2);
// $requete = $pdo->prepare("SELECT * FROM posts WHERE id IN ($str)");
// $requete->execute($ids);
// $results = $requete->fetchAll(PDO::FETCH_CLASS, 'Post');
// var_dump($results);