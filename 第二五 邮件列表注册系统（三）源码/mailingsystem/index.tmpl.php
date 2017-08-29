<!DOCTYPE html>
<html>
<head>
	<title>第二三 邮件列表注册系统（一）</title>
	<meta charset="utf-8">
	<style type="text/css">
		ul{
			margin:0px;
			padding: 0px;
		}

		ul li{
			list-style: none;
			margin-bottom: 10px;
		}

		.notice{
			color: red;
		}
	</style>
</head>
<body>
<h1>邮件订阅系统</h1>
<form action="" method="post">
<?php if(isset($status)){ ?>
<p class="notice"><?php echo $status;; ?></p>
<?php } ?>
	<ul>
		<li>
			<label for="name">姓名</label>
			<!--<input type="text" name="name" value="<?php //echo isset($_POST['name']) ? $_POST['name']:'';?>">-->
			<input type="text" name="name" value="<?php echo old('name');?>">
		</li>
		<li>
			<label for="email">电子邮箱</label>
			<!--<input type="text" name="email" value="<?php //echo isset($_POST['email']) ? $_POST['email']:'';?>">-->
			<input type="text" name="email" value="<?php echo old('email');?>">
		</li>
		<li>
			<input type="submit" value="提交">
		</li>
	</ul>
</form>
</body>
</html>