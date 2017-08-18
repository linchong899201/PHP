<?php 
session_start();

echo $_SESSION['username'];

session_destroy();

$_SESSION = array();

print_r($_SESSION);

?>