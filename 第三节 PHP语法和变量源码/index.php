<html>

<head>
	<title>我的网站</title>
</head>

<body>
	<h1>我的网站</h1>
	<p><?php echo 'hello world!'; ?></p>

	<p><?php //print 'hello world!'; ?></p>

	<?php 
		//$name = "lin";
	?>
	<p><?php 
		//echo '你好，' . $name;
	?></p>
	<p><?php //echo '你好1，' . $name;
	?></p>

	<?php 
		//$name = "lin";
		$name = $_GET ['name'] ;
		echo "<p>你好 $name ，$name 吃饭了吗? </p>";
	?>
</body>

</html>