<?php

class Renderer {
    private $htmlGenerator;
    private $dataGenerator;

    function __construct()
    {
        $this->htmlGenerator = new HTMLGenerator();
        $this->dataGenerator = new DataGenerator();
    }

    function render (String $templateName): Void
    {
        $template = file_get_contents(__DIR__ . '/../Templates/' . $templateName . '.html');
        $topics = $this->dataGenerator->getTopics();
        $topicList = $this->htmlGenerator->topicList($topics);
        echo str_replace('{{TOPICS}}', $topicList, $template);
    }
}