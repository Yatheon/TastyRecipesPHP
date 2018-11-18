<?php


session_start();
if (!empty($_POST['USERNAME']) and !empty($_POST['PASSWORD'])) {
    $file = "loginData/accounts.txt";
    $accounts = explode("\n", file_get_contents($file));

    foreach ($accounts as $user) {
        $userData = explode("_", $user);
        $userData[1] = preg_replace('/\s+/', '', $userData[1]);
        if ($userData[0] == $_POST['USERNAME'] and $userData[1] == $_POST['PASSWORD']) {
            $_SESSION['USERNAME'] = $_POST['USERNAME'];
            $_SESSION['loggedin'] = true;

            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            } else {
                include "index.php";
            }
        }
    }
    $_SESSION['failedLogin'] = true;
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        include "index.php";
    }
} else {
    include "index.php";
}
