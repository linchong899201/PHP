<?php 

	define('USERNAME', 'peter');
	define('PASSWORD', '123456');

	//第一种方法
	if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
		//第一步：输入信息
		//echo "POSTED";
		$username = $_POST['username'];
		//echo $username;
		$password = $_POST['password'];

		//第二步：验证输入信息
		if($username === USERNAME && $password === PASSWORD){
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header("Location:admin.php");
		}else {
			$status = "输入登录信息不正确";
		}
	}
	
	//第二种方法
	//if( isset($_POST['loginForm'])){
	//	echo "POSTED";
	//}
?>

<!DOCTYPE html>
<html>
<head>
	<title>简单的会员登陆系统</title>
	<style type="text/css">
		form ul	{
			padding: 0px;
			margin:0px;
		}
		form ul	li{
			list-style: none;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
<h1>登陆</h1>
<form method="post" action="login.php">
	<ul>
		<li>
			<label for="username">用户名</label>
			<input type="text" name="username">
		</li>
		<li>
			<label for="password">密码</label>
			<input type="password" name="password">
		</li>
		<li>
			<input type="submit" name="loginForm" value="提交">
		</li>
	</ul>
	<?php if ( isset($status) ){ ?>
	<p><?php echo $status; ?></p>
	<?php } ?>
</form>

</body>
</html>