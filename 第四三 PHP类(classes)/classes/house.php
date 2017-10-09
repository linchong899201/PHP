<?php 
/*class Database{

}

new Database();*/

class House{
	public $home_color = '白色';
	public $rooms = 3;
	public $for_sale=true;

	public function __construct($home_color=null)
	{
		//echo $home_color;
		if ($home_color) {
			$this->home_color = $home_color;
		}
	}

	public function add_room()
	{
		$this->rooms++;
	}

	public function sell()
	{
		$this->for_sale = false;
	}
}

$house = new House('红色');
$house->add_room();
$house->add_room();

echo "这座{$house->home_color}房子有{$house->rooms}个房间。";
echo ($house->for_sale)
?"这房子是买的。"
:"不买的。";

echo "<br/>";

$house = new House();
$house->add_room();
$house->add_room();
$house->add_room();
$house->add_room();
$house->add_room();
$house->add_room();

echo "这座{$house->home_color}房子有{$house->rooms}个房间。";
/*if ($house->for_sale) {
	echo "这房子是要买的";
}else{
	echo "不买的";
}*/

//判断运算符
echo ($house->for_sale)
?"这房子是买的。"
:"不买的。"

?>