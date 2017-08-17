<?php
//===//第一个知识点认识php函数

//function say_hello($name){
//	return "你好！$name";
//}

//=====//第二个知识点设置函数的默认值
//function say_hello($name = '朋友'){
//	return "你好！$name";
//}

//输出函数的方法
//echo say_hello();

//存在变量中
//$greeting = say_hello();

//echo $greeting;

//对一个人说你好，某某人

//$greeting = say_hello('林大');

//echo $greeting;

//echo say_hello('林大');


//========================================//


//=====//第一个重复使用的函数
//$arr = array('name' => '林大', 'age' =>32,'occupation'=>'总经理');
//echo "<pre>";
//print_r($arr);
//echo "</pre>";

//第一个重复使用的函数
//function pp($value){
//	echo "<pre>";
//	print_r($value);
//	echo "</pre>";
//}

//pp($arr);

//另外一个例子:提取数组信息
//function array_pluck($toPluck, $arr){
//	$ret = array();

//	foreach($arr as $item) {
//		$ret[] = $item[$toPluck];
//	}

	//print_r($ret);
//	return $ret;
//}

//$people = array(
//	array('name' => '林大','age' => '30','occupation' => '总经理'),
//	array('name' => '林二','age' => '25','occupation' => '营销总监'),
//	array('name' => '林三','age' => '60','occupation' => '董事长'),
//);

//$plucked = array_pluck('occupation',$people);

//print_r($plucked)

//========================================//


//array_map方法

//function array_pluck($toPluck, $arr){
	
	//echo $toPluck;die();

	//return array_map(function($item) use($toPluck){
		//print_r($item);
		//---------------//
		//return '林大';
		//---------------//
		//$item['name']='修改';
		//return $item;
		//----------------//
		//return $item[$toPluck];
	//}, $arr);
//}

//$people = array(
//	array('name' => '林大','age' => '30','occupation' => '总经理'),
//	array('name' => '林二','age' => '25','occupation' => '营销总监'),
//	array('name' => '林三','age' => '60','occupation' => '董事长'),
//);

//$plucked = array_pluck('name',$people);

//print_r($plucked)


//====================================//
//重构array_map方法代码

function array_pluck($toPluck, $arr){
	return array_map(function($item) use($toPluck){
		return $item[$toPluck];
	}, $arr);
}

$people = array(
	array('name' => '林大','age' => '30','occupation' => '总经理'),
	array('name' => '林二','age' => '25','occupation' => '营销总监'),
	array('name' => '林三','age' => '60','occupation' => '董事长'),
);

$names = array_pluck('name',$people);

foreach ($names as $name) {
	echo $name;
}
?>