<?php


if (isset($_POST['content']) && isset($_POST['subject']) && isset($_POST['topic'])
&& !empty($_POST['content']) && !empty($_POST['subject']) && !empty($_POST['topic'])) {
    // Insertion en base de donnée
    // Puis redirection
    echo 'traitement du formulaire';
}
else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="content" placeholder="Content">
            <input type="text" name="subject" placeholder="Subject">
            <input type="text" name="topic" placeholder="Topic">
            <input type="submit" value="Send">
        </form>
    </body>
    </html>
    <?php
}

?>
