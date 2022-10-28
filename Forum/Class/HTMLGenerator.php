<?php

use Entities\Post;

class HTMLGenerator {
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
            $button = 'Like <3';
            foreach ($comment->getLikes() as $like) {            
                if ($like->getAuthor() == $_SESSION['loggedIn']) {
                    $button = 'Dislike';
                }
            }
            $finalString .= '<li>' . $comment->getAuthor()->getEmail() . ' : ' . $comment->getContent() . "
                <span>Likes : " . count($comment->getLikes()) . "</span>
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