<?php 
//echo $_SERVER['SERVER_ADDR'];

require '../functions.php';

$registered_users = get_registered_users();

require 'registered_users.tmpl.php'
?>