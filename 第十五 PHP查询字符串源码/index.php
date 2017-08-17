<?php
	$name = "peter";
?>
<!DOCTYPE html>
<html>
<head>
	<title>第十五 PHP查询字符串</title>
</head>
<body>
<h1>超级全局</h1>

<a href="about.php?name=peter">关于</a>

<!--html entity 用utf8转译<符号
<p>这是代码的&lt;code>标签</p>
-->

<!--html entity 用htmlspecialchars
<p>这是代码的<?php echo htmlspecialchars('<code>');?>标签</p>
-->



<?php //echo $name; ?>
<?php //echo $_GET['job'];?>

<!--改进-->
<?php
//用isset判断超级全局是否存在

 //if(isset($_GET['job'])){
 //	echo $_GET['job'];
 //} else {
 //	echo "没有设置";
 //}

 //isset判断是否id存在

 //if(isset($_GET['id'])){
 //	echo $_GET['id'];
 //} else {
 //	echo "重定向";
 //}
?>

<?php 
	 //if(isset ($_GET['id'])){
	 //	echo htmlspecialchars($_GET['id']);
	 //} else {
	 //	echo '重定向';
	 //}
?>



<h2>超级全局副标题</h2>

<?php 
//var_dump($_GET);
?>

<?php echo htmlspecialchars($_GET['name']);?>



</body>
</html>