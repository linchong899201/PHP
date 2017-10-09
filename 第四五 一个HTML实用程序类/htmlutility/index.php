<?php 
require 'class/html.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		//echo $html->anchor('http://www.jiexi-it.com','捷西网络');
		echo HTML::link('about/index.php','关于我们');

		echo "<br/>";
		//echo HTML::items(array('项目1','项目2','项目3','项目4','项目5'));

		echo HTML::image('http://customize.img-cn-shanghai.aliyuncs.com/bs_jiexiit_repository/uploads/%E5%85%B3%E4%BA%8E/logo-blue3.png','捷西网络logo');
	?>
</body>
</html>