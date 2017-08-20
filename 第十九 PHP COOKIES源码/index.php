<?php 
	//setcookie('fontSize',25,time() + 60*30,'/admin');
	//echo $_COOKIE['fontSize'];

	setcookie('prefs[fontSize]',25);
	setcookie('prefs[favoriteCategory]',25);
	setcookie('prefs[screenWidth]',25);

	foreach ($_COOKIE['prefs'] as $key => $val) {
		echo '<li>'. htmlspecialchars($key) . ':' . htmlspecialchars($val).'</li>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			font-size: <?php echo $_COOKIE['fontSize'] .'px;'; ?>
		}
	</style>
</head>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>