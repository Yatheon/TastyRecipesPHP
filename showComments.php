<?php
require_once 'Comment.php';
function comments($receipeID)
{

    if ($receipeID == 0) {
        $commentFile = "commentData/commentsPancakes.txt";
    } else if ($receipeID == 1) {
        $commentFile = "commentData/commentsMeatballs.txt";
    }

    $comments = explode(";\n", file_get_contents($commentFile));
    $x = 0;
    for ($i = 0; $i <= count($comments); $i++) {

        $comment = unserialize($comments[$i]);
        if ($comment instanceof Comment and !$comment->isDeleted()) {

            if ($x % 2 == 0) {
                echo('<div class="message-container">');
            } else {
                echo('<div class="message-container darker">');
            }
            $x++;
            echo('<p class="name">' . $comment->getUsername() . '</p>');
            if ($comment->getUsername() === $_SESSION['USERNAME']) {
                echo("<form action='deleteComment.php?" . $receipeID . "' method='post'>");
                echo("<input type='hidden' name='timestamp' value='" .
                    $comment->getTime() . "'/>");
                echo("<input class='delbutton 'type='submit' value='X'/>");
                echo("</form>");
            }

            echo('<p class="comment">' . $comment->getComment() . '</p>');
            echo('<p class="time">' . $comment->getCreated() . '</p>');


            echo('</div>');
        }
    }
}

