<?php

require_once 'Comment.php';

if (!empty($_POST['comment'])) {

    if ($_SERVER['QUERY_STRING'] == 0) {
        $commentFile = "commentData/commentsPancakes.txt";
    } else if ($_SERVER['QUERY_STRING'] == 1) {
        $commentFile = "commentData/commentsMeatballs.txt";
    }
    session_start();
    $comment = new Comment($_SESSION['USERNAME'], $_POST['comment']);
    file_put_contents($commentFile, serialize($comment) . ";\n", FILE_APPEND);

    header("Location:" . $_POST['redirect']);
}	

