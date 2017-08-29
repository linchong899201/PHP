<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<h1>电子邮箱列表</h1>
<?php 
	if ($registered_users) {
		foreach ($registered_users as $user) {
			list($name,$email) = $user;
			//array('name' => '小明','email' => '电子邮箱');
			echo "<li>$name:<a href='mailto:$email'>$email</a></li>";
		}
	}else{
		echo "<li>没有注册会员。</li>";
	}
?>
	
</body>
</html>
