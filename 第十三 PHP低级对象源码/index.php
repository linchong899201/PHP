<?php 
//$person = array(
//	'name'=>'林大',
//	'job'=>'开发者',
//);

//var_dump($person);

//class Person{
//	public $name;
//	public $job;

//	public function __construct($name, $job)
//	{
//		$this->name = $name;
//		$this->job =  $job;
//	}

//	public function communicate($style = '说话声音很大')
//	{
//		return 'communicating with' . $style;
//	}
//}

//$p = new Person('林大','开发');

//echo $p->communicate('粗粗咧咧');

//var_dump($p);


//stdClass(通用的一个对象)

//$person = new stdClass;
//$person->name="林大";
//$person->job="开发";


//数组转化成对象

$person = array(
	'name'=>'林大',
	'job'=>'开发者',
);

var_dump($person);

echo $person['name'];

$o = (object)$person;

echo $o->name;

//var_dump((object)$person);

//echo (int)'6';

//echo gettype('6');

//echo $person->name . ' '. $person->job;

?>

