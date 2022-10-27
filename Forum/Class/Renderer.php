<?php

class Renderer {
    private $htmlGenerator;
    private $orm;

    function __construct(ORM $orm)
    {
        $this->htmlGenerator = new HTMLGenerator();
        $this->orm = $orm;
    }

    function render (String $templateName): Void
    {
        $template = file_get_contents(__DIR__ . '/../Templates/' . $templateName . '.html');
        switch ($templateName) {
            case 'homepage':
                $topics = $this->orm->getTopics();
                $html = $this->htmlGenerator->topicList($topics);
                $search = '{{TOPICS}}';
                break;

            case 'topic':
                $topic = $this->orm->getTopic($_GET['name']);
                $posts = $this->orm->getPosts($topic);
                $html = $this->htmlGenerator->topic($posts);
                $search = '{{POSTS}}';
                break;
            case 'post':
                $post = $this->orm->getPost($_GET['id']);
                
                $post->setTopic($this->orm->getTopicById($post->getTopic()));
                $post->setAuthor($this->orm->getUserById($post->getAuthor()));
                $html = $this->htmlGenerator->post($post);
                $template = str_replace('{{TOPICNAME}}', $post->getTopic()->getName(), $template);
                $search = '{{POST}}';
                break;
            default:
                $html = '';
                $search = '';
                break;
        }
        echo str_replace($search, $html, $template);
    }
}