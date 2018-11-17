<?php
session_start();
$_SESSION = array();
session_destroy();
if (isset($_SERVER["HTTP_REFERER"])) {
	header("Location: " . $_SERVER["HTTP_REFERER"]);
}else{
	include "index.php";
}
 ?>
