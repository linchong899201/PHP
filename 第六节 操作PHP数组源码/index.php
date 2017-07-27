<?php 
$months = array('Jan','Feb','Mar','April','May');

//echo $months[0];

//方法一：添加一个单元到数组的后面
//array_push($months,'June');

//方法二：添加一个单元到数组的后面
//$months[] = 'July';

//删除数组的一个单元array_pop
//array_pop($months);

//输出删除数组的单元值
//$month = array_pop($months);

//删除数组的第一个单元
//array_shift($months);

//添加一个单元到数组的开头
//array_unshift($months,'Jan');

//从数组中取出一段

//array_slice($months,2);

//$output = array_slice($months, 1,2)

?>

<br>
<?php
print_r($months);

$three = array_filter($months,function($item) {
	return strlen($item) == 3;
});

?>
<br>
<?php
print_r($three);
?>
<br> 
<?php
//echo $month;
?>
<br>
<?php
//print_r($output);
?>

<!doctype html>
<html>
<head>
	<title>第六节 操作PHP数组</title>
</head>
<body>
	<h1>第六节 操作PHP数组</h1>
</body>
</html>