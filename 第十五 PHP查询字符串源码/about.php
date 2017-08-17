<!DOCTYPE html>
<html>
<head>
	<title>第十五 PHP查询字符串</title>
</head>
<body>
<h1>关于我们</h1>

<a href="about.php?name="peter"">关于</a>
<?php //echo $name; ?>
<?php echo htmlspecialchars($_GET['name']);?>
</body>
</html>