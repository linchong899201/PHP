<?php
include 'functions.php';
session_start();
if (!is_logged_in()) {
	header('location: login.php');
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>你好，<?php echo $_SESSION['username'];?></h1>
<a href="logout.php">登出</a>
</body>
</html>