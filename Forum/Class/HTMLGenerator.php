<?php

class HTMLGenerator {
    function topicList (Array $topics): String
    {
        $finalString = '';
        foreach ($topics as $topic) {
            $finalString .= "<li><a href='topic.php?name=" . $topic->getName() . "'>" . $topic->getName() . "</a></li>";
        }
        return $finalString;
    }
}