<?php

class Renderer {
    private $htmlGenerator;
    private $orm;

    function __construct(ORM $orm)
    {
        $this->orm = $orm;
        $this->htmlGenerator = new HTMLGenerator($orm);
    }

    function render (String $templateName): Void
    {
        $template = file_get_contents(__DIR__ . '/../Templates/' . $templateName . '.html');
        switch ($templateName) {
            case 'homepage':
                $topics = $this->orm->getTopics();
                $html = $this->htmlGenerator->topicList($topics);
                $template = str_replace('{{TOPICS}}', $html, $template);
                break;

            case 'topic':
                $topic = $this->orm->getTopic($_GET['name']);
                $posts = $this->orm->getPosts($topic);
                $html = $this->htmlGenerator->topic($posts);
                $template = str_replace('{{POSTS}}', $html, $template);
                break;
            case 'post':
                //Récupération du post
                $post = $this->orm->getPost($_GET['id']);
                $html = $this->htmlGenerator->post($post);
                $template = str_replace('{{TOPICNAME}}', $post->getTopic()->getName(), $template);
                $template = str_replace('{{POST}}', $html, $template);

                //Récupération des commentaires
                $comments = $this->orm->getComments($post);
                $html = $this->htmlGenerator->comments($comments);
                $template = str_replace('{{COMMENTS}}', $html, $template);
                break;
            default:
                break;
        }
        echo $template;
    }
}