<?php 
	//print_r($_POST);

	//第一个方法
	//if ( !empty($_POST)) {
	//	print_r($_POST);
	//}

	//第二个方法
	//echo $_SERVER['REQUEST_METHOD'];

	//if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
	//	print_r($_POST);
	//}

	//发送表单信息到邮箱
	$headers =  'MIME-Version: 1.0' . "\r\n"; 
	$headers .= 'From: 你的姓名 <info@jiexi-it.com>' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//mail('office@jiexi-it.com', '网站信息', $_POST['message'],$headers);
		if (mail('office@jiexi-it.com', '网站信息', htmlspecialchars($_POST['message']),$headers)) {
			$status = "谢谢你的邮件！";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>第十六 PHP $_POST</title>
	<style type="text/css">
		form ul{
			padding: 0px;
			margin: 0px;
		}
		form li{
			margin-bottom: 10px;
			list-style: none;
		}
	</style>
</head>
<body>
<h1>联系我们</h1>
<form method="post" action="">
	<ul>
		<li>
			<label for="name">姓名</label>
			<input type="text" name="name" id="name">
		</li>
		<li>
			<label for="email">邮箱</label>
			<input type="text" name="email" id="email">
		</li>
		<li>
			<label for="message">内容</label>
			<textarea name="message" id="message"></textarea>
		</li>
		<li>
			<input type="submit" name="提交">
		</li>
	</ul>
	
</form>

<?php if (isset($status)) echo $status; ?>

</body>
</html>