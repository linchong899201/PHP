<?php
$arr = array('peter', 'Jason', 'Jeff', 'Lily');
//$arr = array(
//	'ceo' => 'Peter',
//	'manger' => 'Jason',
//	'instructor' => 'Jeff',
//	'producer' => 'Lily'
//);


//foreach语句

//foreach ($arr as $title => $name){
//	echo "<li><strong>$title</strong> - $name </li>";
//}

//for循环语句

//for($i=0; $i < 10; $i++){
//	echo "<li>$i</li>";
//}

//使用count
//echo count($arr);

//for($i=0; $i < count($arr); $i++){
//	echo "<li>$arr[$i]</li>";
//}

//while语句
//$<10

$i = 0;
while ($i < count($arr)) {
	echo "<li>$arr[$i]</li>";
	$i++;
}

?>

<!doctype>
<html>
<head>
	<title>第八节 PHP循环语句</title>
</head>
<body>
	<h1>第八节 PHP循环语句</h1>
</body>
</html>