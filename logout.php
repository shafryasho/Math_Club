<?php
include 'login.php';
session_start();
session_unset();
session_destroy();
$_SESSION["logged_in"]=false;
header("Location: index.php"); // Redirecting To Home Page

?>