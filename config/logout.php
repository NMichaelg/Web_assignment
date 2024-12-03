<?php
require_once 'session_cookie.php';
session_start();
$_SESSION = [];

session_destroy();
$redirectUrl = $_SERVER['HTTP_REFERER'] ?? '/Web_assignment/index.php';
header("Location: $redirectUrl");

exit();

?>