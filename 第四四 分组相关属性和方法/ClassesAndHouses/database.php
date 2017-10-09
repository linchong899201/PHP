<?php namespace App;

class Database{

	protected $conn;
	protected $table;

	//new thumbnail('image.jpg',50,50);
	//$thumb = new thumbnail('image.jpg');
	//$thumb->generate(100,100,40,200);

	public function __construct()
	{
		//连接到数据库
		//$conn = '成功连接数据库!';
		$this->conn='连接我的数据库！';
	}

	public function insert()
	{
		//echo $conn;
		//echo $this->conn;
		return '成功插入数据到表。';
	}

	public function set_table($table)
	{
		$this->table=$table;
	}

	public function get($limit=10)
	{
		//return '读取posts表的数据';
		//$this->table=$table;
		return '获取'.$this->table.'表数据。';
	}

	public function where($key,$value)
	{
		//return 'key = value';
		return "$key = $value";
	}
}


$db = new database();
//$db->insert();

$posts = $db->get('posts');
$posts = $db->where('id',5);

echo $posts;

$db->set_table('usersaaa');
$rows=$db->get(5);
echo $rows;


?>