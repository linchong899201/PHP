<?php 
	//$month = '1月';
	//echo $month;
	//$january = "1月";
	//$februry = "2月";
	//$march = "3月";
//$months = array('1月','2月','3月','4月','5月','6月','7月','8月');
//var_dump($months);
//echo $months[2];

//$jiexi_sites = array('播谷鸟在线客服系统', '捷西网络在线选座', '维灯建站');
//print_r($jiexi_sites);

//要注意php版本
//$jiexi_sites = array['播谷鸟在线客服系统', '捷西网络在线选座', '维灯建站'];

//关联数组
$jiexi_sites = array(
	'livechat' => 'http://prokf.com', 
	'seatarrange' => 'http://cinema.jiexi-it.com', 
	'websitebuilder' => 'http://www.videer.com',
);
?>
<!doctype html>
<html>
<head>
	<title>数组</title>
</head>
<body>
	<h1>捷西网络产品</h1>
	<ul>
	<?php 
	//foreach ($jiexi_sites as $name => $url) {
		//echo "<li><a href='$url'>" . ucwords($name) . "</a></li>";
	//}

	//php速记语法
	foreach ($jiexi_sites as $name => $url) : ?>
		<li><a href='<?= $url; ?>'> <?= ucwords($name); ?></a></li>
	<?php endforeach ?>


	</ul>
</body>
</html>