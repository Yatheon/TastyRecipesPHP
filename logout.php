<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location:" . $_POST['redirect']);
