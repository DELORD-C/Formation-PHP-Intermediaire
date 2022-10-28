<?php

use Entities\Post;

class HTMLGenerator {
    protected $orm;

    function __construct(ORM $orm)
    {
        $this->orm = $orm;
    }

    function topicList (Array $topics): String
    {
        $finalString = '';
        foreach ($topics as $topic) {
            $finalString .= "<li><a href='topic.php?name=" . $topic->getName() . "'>" . $topic->getName() . "</a></li>";
        }
        return $finalString;
    }

    function topic (Array $posts): String
    {
        $finalString = '';
        foreach ($posts as $post) {
            $finalString .= "<li><a href='post.php?id=" . $post->getId() . "'>" . $post->getSubject() . "</a></li>";
        }
        return $finalString;
    }

    function post (Post $post): String
    {
        return '
        <tr>
            <td>' . $post->getId() . '</td>
            <td>' . $post->getTopic()->getName() . '</td>
            <td>' . $post->getSubject() . '</td>
            <td>' . $post->getContent() . '</td>
            <td>' . $post->getAuthor()->getEmail() . '</td>
        </tr>
        ';
    }

    function comments (Array $comments): String
    {
        $finalString = '<ul>';
        foreach ($comments as $comment) {
            if ($this->orm->getLikeByAuthorAndComment($_SESSION['loggedIn'], $comment->getId())) {
                $button = 'Dislike';
            }
            else {
                $button = 'Like <3';
            }
            $finalString .= '<li>' . $comment->getAuthor()->getEmail() . ' : ' . $comment->getContent() . "
                <span>Likes : " . $comment->getNbLikes() . "</span>
                <form method='post'>
                    <input type='hidden' name='likeComment' value='" . $comment->getId() . "'>
                    <input type='submit' value='$button'>
                </form>
            </li>";
        }
        $finalString .= '</ul>';
        return $finalString;
    }
}